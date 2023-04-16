<?php

namespace InTradeSys\eBay\trading;


class EbatNs_Client extends EbatNs_AbstractClient
{
    protected $selectorModels = [];
    protected $activeSelectorModel = null;

    /**
    * @param string $method
    * @param AbstractRequestType|AbstractRequestType[] $request
    * @return EbatNs_ResponseError|AbstractResponseType|array
    */
    public function call($method, $request)
    {
        $responses = [];

        foreach ($this->callEach($method, $request) as $response) {
            $responses[] = $response->getObject();
        }

        return is_array($request) ? $responses : $responses[0];
    }

    /**
     * @param string $method
     * @param AbstractRequestType $request
     * @return EbatNs_Curler
     */
    protected function prepareCall($method, $request)
    {
        $this->reportApiCall($method);

        if ($method === 'UploadSiteHostedPictures') {
            return $this->prepareUploadSiteHostedPicturesCall($method, $request);
        }

        $selectorModel = $this->activeSelectorModel;
        if ($selectorModel && $this->selectorModels[$selectorModel][$method]) {
            $request->setOutputSelector($this->selectorModels[$selectorModel][$method]->getSelectorArray());
        }

        $session = $this->getSession();
        $soapHeader = $session->getSoapHeader();

        return $this->curlRequestType($request, $method)
            ->withSoapAction()
            ->withSoapEnvelope($soapHeader)
            ->withQueryString('callname=' . $method)
            ->withQueryString('siteid=' . $session->getSiteId())
            ->withQueryString('appid=' . $session->getAppId())
            ->withQueryString('version=' . $this->getWsdlVersion())
            ->withQueryString('routing=default')
            ->request();
    }

    /**
     * @param string $method
     * @param UploadSiteHostedPicturesRequestType $request
     * @return EbatNs_Curler
    */
    public function prepareUploadSiteHostedPicturesCall($method, $request)
    {
        $session = $this->getSession();

        if ($session->getTokenMode() === $session::OAUTH_TOKENMODE_DISABLED) {
            $request->setRequesterCredentials($session->getCredentialType());
        }

        $isProduction = $session->getAppMode() === 0;
        $credentialHeaders = $session->getXmlCredentialHeaders();
        $credentialHeaders = preg_grep('/^X-EBAY-API-APP-ID/', $credentialHeaders, PREG_GREP_INVERT);
        $apiUrl = $isProduction ? 'https://api.ebay.com/ws/api.dll' : 'https://api.sandbox.ebay.com/ws/api.dll';
        $curler = $this->curlRequestType($request, $method)
            ->withHeaders($credentialHeaders)
            ->withApiUrl($apiUrl);

        $contentType = null; // JPG, GIF, PNG, BMP or TIF
        $pictureData = $request->getPictureData();
        $pictureDataValue = $pictureData;
        $request->setPictureData(null);

        if (is_object($pictureData)) {
            $pictureDataValue = $pictureData->getTypeValue();
            $attributes = $pictureData->listTagAttributes() + ['contentType' => null];
            $contentType = $attributes['contentType'];
        }

        $curler
            ->withMultipartOctetStream($pictureDataValue, 'dummy', 'dummy', $contentType ? "image/$contentType" : null)
            ->request();

        $request->setPictureData($pictureData);

        return $curler;
    }

    public function addSelectorModel($callName, $selectorModel, $active)
    {
        $this->selectorModels[$selectorModel->getName()][$callName] = $selectorModel;

        if ($active) {
            $this->setActiveSelectorModel($selectorModel->getName());
        }
    }

    public function setActiveSelectorModel($selectorName)
    {
        $this->activeSelectorModel = $selectorName;

        foreach ($this->selectorModels as $selectorModel) {
            foreach ($selectorModel as $selectorModelCall) {
                $selectorModelCall->setActive($selectorModelCall->getName() === $selectorName);
            }
        }
    }
    public function _buildNotificationMessage($response, $simulatedMessageName, $tns, $addData = null)
    {
        if ($addData) {
            foreach ($addData as $key => $value) {
                $response->_setProperty($key, $value);
            }
        }

        $response->assignTagAttribute('xmlns', $tns);
        $msgBody = $response->serialize($simulatedMessageName, $response, isset($response->attributeValues) ? $response->attributeValues : null, true, null, $this->_dataConverter);

        $soap = '<?xml version="1.0" encoding="utf-8"?>';
        $soap .= '<soapenv:Envelope';
        $soap .= ' xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/"';
        $soap .= ' xmlns:xsd="http://www.w3.org/2001/XMLSchema"';
        $soap .= ' xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
        $soap .= '>';
        $soap .= '<soapenv:Header>';
        $soap .= '<ebl:RequesterCredentials soapenv:mustUnderstand="0" xmlns:ns="urn:ebay:apis:eBLBaseComponents" xmlns:ebl="urn:ebay:apis:eBLBaseComponents">';
        $soap .= '<ebl:NotificationSignature xmlns:ebl="urn:ebay:apis:eBLBaseComponents">invalid_simulation</ebl:NotificationSignature>';
        $soap .= '</ebl:RequesterCredentials>';
        $soap .= '</soapenv:Header>';
        $soap .= '<soapenv:Body>';
        $soap .= $msgBody;
        $soap .= '</soapenv:Body>';
        $soap .= '</soapenv:Envelope>';

        return $soap;
    }
}

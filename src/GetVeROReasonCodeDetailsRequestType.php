<?php

namespace InTradeSys\eBay\trading;

/*
 * This class was generated from a WSDL file from March 29, 2023, 11:17 am.
 * Executed by globalsync.
 * Provided and maintained by:
 *
 *  InTradeSys GmbH
 *  Dillenburger Str. 75
 *  D-51105 Cologne
 *  ---
 *  https://www.intradesys.com
 *
 *
 * For paid support options ranging from on-demand,
 * best effort to 24/7 SLAs, please contact us anytime:
 *  ebay.api@InTradeSys.com
 *
 * For more information, visit:
 *  https://sdk.intradesys.com
 */


/**
 * Retrieves details for VeRO reason codes and their descriptions. You can specify a
 * reason code ID to get details for a specific reason on the site specified in the
 * request header. If <strong>ReasonCodeID</strong> is not passed in the request, all reason codes are
 * returned. Set <strong>ReturnAllSites</strong> to <code>true</code> to retrieve reason codes for all sites.
 * You must be a member of the Verified Rights Owner (VeRO) Program to use this call.
 **/
class GetVeROReasonCodeDetailsRequestType extends AbstractRequestType
{
    const TAG = 'GetVeROReasonCodeDetailsRequest';
    const NAME = 'GetVeROReasonCodeDetailsRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'GetVeROReasonCodeDetails';

    /**
     * @var int|null
     */
    protected $ReasonCodeID = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $ReturnAllSites = null;


    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getReasonCodeID()
    {
        return $this->_dc($this->ReasonCodeID, 'ReasonCodeID');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setReasonCodeID($value)
    {
        $this->ReasonCodeID = self::_int($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getReturnAllSites()
    {
        return $this->_dc($this->ReturnAllSites === 'true', 'ReturnAllSites');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setReturnAllSites($value)
    {
        $this->ReturnAllSites = self::_bool($value);
    }

    /**
     * @return GetVeROReasonCodeDetailsResponseType|EbatNs_ResponseError
     * @param EbatNs_Client
     **/
    function call($client)
    {
        return $client->call(self::REQUEST, $this);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'ReasonCodeID' => ['type' => 'int'],
            'ReturnAllSites' => ['type' => 'bool']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

GetVeROReasonCodeDetailsRequestType::_register();

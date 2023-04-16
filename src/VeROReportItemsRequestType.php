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
 * Reports items that allegedly infringe your copyright, trademark, or other
 * intellectual property rights. You can report one or more items at a time with this
 * call. You must be a member of the Verified Rights Owner (VeRO) Program to use this
 * call.
 **/
class VeROReportItemsRequestType extends AbstractRequestType
{
    const TAG = 'VeROReportItemsRequest';
    const NAME = 'VeROReportItemsRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'VeROReportItems';

    /**
     * @var UserIDType|null
     */
    protected $RightsOwnerID = null;

    /**
     * @var VeROReportItemsType|null
     */
    protected $ReportItems = null;


    /**
     * @return UserIDType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getRightsOwnerID()
    {
        return $this->_dc($this->RightsOwnerID, 'RightsOwnerID');
    }

    /**
     * @param UserIDType|null $value
     * @return void
     */
    public function setRightsOwnerID($value)
    {
        $this->RightsOwnerID = $value;
    }

    /**
     * @return VeROReportItemsType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getReportItems()
    {
        return $this->_dc($this->ReportItems, 'ReportItems');
    }

    /**
     * @param VeROReportItemsType|null $value
     * @return void
     */
    public function setReportItems($value)
    {
        $this->ReportItems = $value;
    }

    /**
     * @return VeROReportItemsResponseType|EbatNs_ResponseError
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
            'RightsOwnerID' => ['type' => 'UserIDType', 'xmlns' => self::XMLNS],
            'ReportItems' => ['type' => 'VeROReportItemsType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

VeROReportItemsRequestType::_register();

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
 * Retrieves status information about VeRO reported items you have submitted. You
 * can receive the status of individual items you have reported or, by specifying
 * <strong>VeROReportPacketID</strong>, you can retrieve status for all items reported with a given
 * <strong>VeROReportItems</strong> request. You can also retrieve items that were reported during a
 * given time period. If no input parameters are specified, status is returned on all
 * items you have reported in the last two years.
 * You must be a member of the Verified Rights Owner (VeRO) Program to use this
 * call.
 **/
class GetVeROReportStatusRequestType extends AbstractRequestType
{
    const TAG = 'GetVeROReportStatusRequest';
    const NAME = 'GetVeROReportStatusRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'GetVeROReportStatus';

    /**
     * @var int|null
     */
    protected $VeROReportPacketID = null;

    /**
     * @var ItemIDType|null
     */
    protected $ItemID = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $IncludeReportedItemDetails = null;

    /**
     * @var string|null
     */
    protected $TimeFrom = null;

    /**
     * @var string|null
     */
    protected $TimeTo = null;

    /**
     * @var PaginationType|null
     */
    protected $Pagination = null;


    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getVeROReportPacketID()
    {
        return $this->_dc($this->VeROReportPacketID, 'VeROReportPacketID');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setVeROReportPacketID($value)
    {
        $this->VeROReportPacketID = self::_int($value);
    }

    /**
     * @return ItemIDType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getItemID()
    {
        return $this->_dc($this->ItemID, 'ItemID');
    }

    /**
     * @param ItemIDType|null $value
     * @return void
     */
    public function setItemID($value)
    {
        $this->ItemID = $value;
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getIncludeReportedItemDetails()
    {
        return $this->_dc($this->IncludeReportedItemDetails === 'true', 'IncludeReportedItemDetails');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setIncludeReportedItemDetails($value)
    {
        $this->IncludeReportedItemDetails = self::_bool($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTimeFrom()
    {
        return $this->_dc($this->TimeFrom, 'TimeFrom');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setTimeFrom($value)
    {
        $this->TimeFrom = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTimeTo()
    {
        return $this->_dc($this->TimeTo, 'TimeTo');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setTimeTo($value)
    {
        $this->TimeTo = self::_string($value);
    }

    /**
     * @return PaginationType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPagination()
    {
        return $this->_dc($this->Pagination, 'Pagination');
    }

    /**
     * @param PaginationType|null $value
     * @return void
     */
    public function setPagination($value)
    {
        $this->Pagination = $value;
    }

    /**
     * @return GetVeROReportStatusResponseType|EbatNs_ResponseError
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
            'VeROReportPacketID' => ['type' => 'int'],
            'ItemID' => ['type' => 'ItemIDType', 'xmlns' => self::XMLNS],
            'IncludeReportedItemDetails' => ['type' => 'bool'],
            'TimeFrom' => [],
            'TimeTo' => [],
            'Pagination' => ['type' => 'PaginationType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

GetVeROReportStatusRequestType::_register();

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
 * Base response of the <strong>GetVeROReportStatus</strong> call. This response contains status information for
 * items reported by the VeRO Program member.
 **/
class GetVeROReportStatusResponseType extends EbatNs_Response
{
    const TAG = 'GetVeROReportStatusResponseType';
    const NAME = 'GetVeROReportStatusResponseType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var PaginationResultType|null
     */
    protected $PaginationResult = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $HasMoreItems = null;

    /**
     * @var int|null
     */
    protected $ItemsPerPage = null;

    /**
     * @var int|null
     */
    protected $PageNumber = null;

    /**
     * @var int|null
     */
    protected $VeROReportPacketID = null;

    /**
     * @var VeROReportPacketStatusCodeType|null
     */
    protected $VeROReportPacketStatus = null;

    /**
     * @var VeROReportedItemDetailsType|null
     */
    protected $ReportedItemDetails = null;


    /**
     * @return PaginationResultType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPaginationResult()
    {
        return $this->_dc($this->PaginationResult, 'PaginationResult');
    }

    /**
     * @param PaginationResultType|null $value
     * @return void
     */
    public function setPaginationResult($value)
    {
        $this->PaginationResult = $value;
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getHasMoreItems()
    {
        return $this->_dc($this->HasMoreItems === 'true', 'HasMoreItems');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setHasMoreItems($value)
    {
        $this->HasMoreItems = self::_bool($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getItemsPerPage()
    {
        return $this->_dc($this->ItemsPerPage, 'ItemsPerPage');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setItemsPerPage($value)
    {
        $this->ItemsPerPage = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPageNumber()
    {
        return $this->_dc($this->PageNumber, 'PageNumber');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setPageNumber($value)
    {
        $this->PageNumber = self::_int($value);
    }

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
     * @return VeROReportPacketStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getVeROReportPacketStatus()
    {
        return $this->_dc($this->VeROReportPacketStatus);
    }

    /**
     * @param VeROReportPacketStatusCodeType|null $value
     * @return void
     */
    public function setVeROReportPacketStatus($value)
    {
        $this->VeROReportPacketStatus = $this->_enum($value, VeROReportPacketStatusCodeType::class);
    }

    /**
     * @return VeROReportedItemDetailsType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getReportedItemDetails()
    {
        return $this->_dc($this->ReportedItemDetails, 'ReportedItemDetails');
    }

    /**
     * @param VeROReportedItemDetailsType|null $value
     * @return void
     */
    public function setReportedItemDetails($value)
    {
        $this->ReportedItemDetails = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'PaginationResult' => ['type' => 'PaginationResultType', 'xmlns' => self::XMLNS],
            'HasMoreItems' => ['type' => 'bool'],
            'ItemsPerPage' => ['type' => 'int'],
            'PageNumber' => ['type' => 'int'],
            'VeROReportPacketID' => ['type' => 'int'],
            'VeROReportPacketStatus' => ['type' => 'VeROReportPacketStatusCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'ReportedItemDetails' => ['type' => 'VeROReportedItemDetailsType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

GetVeROReportStatusResponseType::_register();

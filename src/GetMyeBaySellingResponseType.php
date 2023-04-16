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
 * Returns summary and detail information about items the user is selling,
 * items scheduled to sell, currently listed, sold, and closed but not sold.
 **/
class GetMyeBaySellingResponseType extends EbatNs_Response
{
    const TAG = 'GetMyeBaySellingResponseType';
    const NAME = 'GetMyeBaySellingResponseType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var SellingSummaryType|null
     */
    protected $SellingSummary = null;

    /**
     * @var PaginatedItemArrayType|null
     */
    protected $ScheduledList = null;

    /**
     * @var PaginatedItemArrayType|null
     */
    protected $ActiveList = null;

    /**
     * @var PaginatedOrderTransactionArrayType|null
     */
    protected $SoldList = null;

    /**
     * @var PaginatedItemArrayType|null
     */
    protected $UnsoldList = null;

    /**
     * @var MyeBaySellingSummaryType|null
     */
    protected $Summary = null;

    /**
     * @var PaginatedItemArrayType|null
     */
    protected $BidList = null;

    /**
     * @var PaginatedOrderTransactionArrayType|null
     */
    protected $DeletedFromSoldList = null;

    /**
     * @var PaginatedItemArrayType|null
     */
    protected $DeletedFromUnsoldList = null;


    /**
     * @return SellingSummaryType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSellingSummary()
    {
        return $this->_dc($this->SellingSummary, 'SellingSummary');
    }

    /**
     * @param SellingSummaryType|null $value
     * @return void
     */
    public function setSellingSummary($value)
    {
        $this->SellingSummary = $value;
    }

    /**
     * @return PaginatedItemArrayType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getScheduledList()
    {
        return $this->_dc($this->ScheduledList, 'ScheduledList');
    }

    /**
     * @param PaginatedItemArrayType|null $value
     * @return void
     */
    public function setScheduledList($value)
    {
        $this->ScheduledList = $value;
    }

    /**
     * @return PaginatedItemArrayType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getActiveList()
    {
        return $this->_dc($this->ActiveList, 'ActiveList');
    }

    /**
     * @param PaginatedItemArrayType|null $value
     * @return void
     */
    public function setActiveList($value)
    {
        $this->ActiveList = $value;
    }

    /**
     * @return PaginatedOrderTransactionArrayType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSoldList()
    {
        return $this->_dc($this->SoldList, 'SoldList');
    }

    /**
     * @param PaginatedOrderTransactionArrayType|null $value
     * @return void
     */
    public function setSoldList($value)
    {
        $this->SoldList = $value;
    }

    /**
     * @return PaginatedItemArrayType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getUnsoldList()
    {
        return $this->_dc($this->UnsoldList, 'UnsoldList');
    }

    /**
     * @param PaginatedItemArrayType|null $value
     * @return void
     */
    public function setUnsoldList($value)
    {
        $this->UnsoldList = $value;
    }

    /**
     * @return MyeBaySellingSummaryType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSummary()
    {
        return $this->_dc($this->Summary, 'Summary');
    }

    /**
     * @param MyeBaySellingSummaryType|null $value
     * @return void
     */
    public function setSummary($value)
    {
        $this->Summary = $value;
    }

    /**
     * @return PaginatedItemArrayType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBidList()
    {
        return $this->_dc($this->BidList, 'BidList');
    }

    /**
     * @param PaginatedItemArrayType|null $value
     * @return void
     */
    public function setBidList($value)
    {
        $this->BidList = $value;
    }

    /**
     * @return PaginatedOrderTransactionArrayType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDeletedFromSoldList()
    {
        return $this->_dc($this->DeletedFromSoldList, 'DeletedFromSoldList');
    }

    /**
     * @param PaginatedOrderTransactionArrayType|null $value
     * @return void
     */
    public function setDeletedFromSoldList($value)
    {
        $this->DeletedFromSoldList = $value;
    }

    /**
     * @return PaginatedItemArrayType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDeletedFromUnsoldList()
    {
        return $this->_dc($this->DeletedFromUnsoldList, 'DeletedFromUnsoldList');
    }

    /**
     * @param PaginatedItemArrayType|null $value
     * @return void
     */
    public function setDeletedFromUnsoldList($value)
    {
        $this->DeletedFromUnsoldList = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'SellingSummary' => ['type' => 'SellingSummaryType', 'xmlns' => self::XMLNS],
            'ScheduledList' => ['type' => 'PaginatedItemArrayType', 'xmlns' => self::XMLNS],
            'ActiveList' => ['type' => 'PaginatedItemArrayType', 'xmlns' => self::XMLNS],
            'SoldList' => ['type' => 'PaginatedOrderTransactionArrayType', 'xmlns' => self::XMLNS],
            'UnsoldList' => ['type' => 'PaginatedItemArrayType', 'xmlns' => self::XMLNS],
            'Summary' => ['type' => 'MyeBaySellingSummaryType', 'xmlns' => self::XMLNS],
            'BidList' => ['type' => 'PaginatedItemArrayType', 'xmlns' => self::XMLNS],
            'DeletedFromSoldList' => ['type' => 'PaginatedOrderTransactionArrayType', 'xmlns' => self::XMLNS],
            'DeletedFromUnsoldList' => ['type' => 'PaginatedItemArrayType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

GetMyeBaySellingResponseType::_register();

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
 * Returns a seller's invoice data for their eBay account, including the account's
 * summary data.
 **/
class GetAccountRequestType extends AbstractRequestType
{
    const TAG = 'GetAccountRequest';
    const NAME = 'GetAccountRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'GetAccount';

    /**
     * @var AccountHistorySelectionCodeType|null
     */
    protected $AccountHistorySelection = null;

    /**
     * @var string|null
     */
    protected $InvoiceDate = null;

    /**
     * @var string|null
     */
    protected $BeginDate = null;

    /**
     * @var string|null
     */
    protected $EndDate = null;

    /**
     * @var PaginationType|null
     */
    protected $Pagination = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $ExcludeBalance = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $ExcludeSummary = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $IncludeConversionRate = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $IncludeNettedEntries = null;

    /**
     * @var AccountEntrySortTypeCodeType|null
     */
    protected $AccountEntrySortType = null;

    /**
     * @var CurrencyCodeType|null
     */
    protected $Currency = null;

    /**
     * @var ItemIDType|null
     */
    protected $ItemID = null;

    /**
     * @var string|null
     */
    protected $OrderID = null;


    /**
     * @return AccountHistorySelectionCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getAccountHistorySelection()
    {
        return $this->_dc($this->AccountHistorySelection);
    }

    /**
     * @param AccountHistorySelectionCodeType|null $value
     * @return void
     */
    public function setAccountHistorySelection($value)
    {
        $this->AccountHistorySelection = $this->_enum($value, AccountHistorySelectionCodeType::class);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getInvoiceDate()
    {
        return $this->_dc($this->InvoiceDate, 'InvoiceDate');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setInvoiceDate($value)
    {
        $this->InvoiceDate = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBeginDate()
    {
        return $this->_dc($this->BeginDate, 'BeginDate');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setBeginDate($value)
    {
        $this->BeginDate = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEndDate()
    {
        return $this->_dc($this->EndDate, 'EndDate');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setEndDate($value)
    {
        $this->EndDate = self::_string($value);
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
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getExcludeBalance()
    {
        return $this->_dc($this->ExcludeBalance === 'true', 'ExcludeBalance');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setExcludeBalance($value)
    {
        $this->ExcludeBalance = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getExcludeSummary()
    {
        return $this->_dc($this->ExcludeSummary === 'true', 'ExcludeSummary');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setExcludeSummary($value)
    {
        $this->ExcludeSummary = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getIncludeConversionRate()
    {
        return $this->_dc($this->IncludeConversionRate === 'true', 'IncludeConversionRate');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setIncludeConversionRate($value)
    {
        $this->IncludeConversionRate = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getIncludeNettedEntries()
    {
        return $this->_dc($this->IncludeNettedEntries === 'true', 'IncludeNettedEntries');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setIncludeNettedEntries($value)
    {
        $this->IncludeNettedEntries = self::_bool($value);
    }

    /**
     * @return AccountEntrySortTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getAccountEntrySortType()
    {
        return $this->_dc($this->AccountEntrySortType);
    }

    /**
     * @param AccountEntrySortTypeCodeType|null $value
     * @return void
     */
    public function setAccountEntrySortType($value)
    {
        $this->AccountEntrySortType = $this->_enum($value, AccountEntrySortTypeCodeType::class);
    }

    /**
     * @return CurrencyCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCurrency()
    {
        return $this->_dc($this->Currency);
    }

    /**
     * @param CurrencyCodeType|null $value
     * @return void
     */
    public function setCurrency($value)
    {
        $this->Currency = $this->_enum($value, CurrencyCodeType::class);
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
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getOrderID()
    {
        return $this->_dc($this->OrderID, 'OrderID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setOrderID($value)
    {
        $this->OrderID = self::_string($value);
    }

    /**
     * @return GetAccountResponseType|EbatNs_ResponseError
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
            'AccountHistorySelection' => ['type' => 'AccountHistorySelectionCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'InvoiceDate' => [],
            'BeginDate' => [],
            'EndDate' => [],
            'Pagination' => ['type' => 'PaginationType', 'xmlns' => self::XMLNS],
            'ExcludeBalance' => ['type' => 'bool'],
            'ExcludeSummary' => ['type' => 'bool'],
            'IncludeConversionRate' => ['type' => 'bool'],
            'IncludeNettedEntries' => ['type' => 'bool'],
            'AccountEntrySortType' => ['type' => 'AccountEntrySortTypeCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'Currency' => ['type' => 'CurrencyCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'ItemID' => ['type' => 'ItemIDType', 'xmlns' => self::XMLNS],
            'OrderID' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

GetAccountRequestType::_register();

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
 * Returns information about an eBay seller's own account.
 **/
class GetAccountResponseType extends EbatNs_Response
{
    const TAG = 'GetAccountResponseType';
    const NAME = 'GetAccountResponseType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $AccountID = null;

    /**
     * @var FeenettingStatusCodeType|null
     */
    protected $FeeNettingStatus = null;

    /**
     * @var AccountSummaryType|null
     */
    protected $AccountSummary = null;

    /**
     * @var CurrencyCodeType|null
     */
    protected $Currency = null;

    /**
     * @var AccountEntriesType|null
     */
    protected $AccountEntries = null;

    /**
     * @var PaginationResultType|null
     */
    protected $PaginationResult = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $HasMoreEntries = null;

    /**
     * @var int|null
     */
    protected $EntriesPerPage = null;

    /**
     * @var int|null
     */
    protected $PageNumber = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getAccountID()
    {
        return $this->_dc($this->AccountID, 'AccountID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setAccountID($value)
    {
        $this->AccountID = self::_string($value);
    }

    /**
     * @return FeenettingStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getFeeNettingStatus()
    {
        return $this->_dc($this->FeeNettingStatus);
    }

    /**
     * @param FeenettingStatusCodeType|null $value
     * @return void
     */
    public function setFeeNettingStatus($value)
    {
        $this->FeeNettingStatus = $this->_enum($value, FeenettingStatusCodeType::class);
    }

    /**
     * @return AccountSummaryType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getAccountSummary()
    {
        return $this->_dc($this->AccountSummary, 'AccountSummary');
    }

    /**
     * @param AccountSummaryType|null $value
     * @return void
     */
    public function setAccountSummary($value)
    {
        $this->AccountSummary = $value;
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
     * @return AccountEntriesType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getAccountEntries()
    {
        return $this->_dc($this->AccountEntries, 'AccountEntries');
    }

    /**
     * @param AccountEntriesType|null $value
     * @return void
     */
    public function setAccountEntries($value)
    {
        $this->AccountEntries = $value;
    }

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
    public function getHasMoreEntries()
    {
        return $this->_dc($this->HasMoreEntries === 'true', 'HasMoreEntries');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setHasMoreEntries($value)
    {
        $this->HasMoreEntries = self::_bool($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEntriesPerPage()
    {
        return $this->_dc($this->EntriesPerPage, 'EntriesPerPage');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setEntriesPerPage($value)
    {
        $this->EntriesPerPage = self::_int($value);
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
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'AccountID' => [],
            'FeeNettingStatus' => ['type' => 'FeenettingStatusCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'AccountSummary' => ['type' => 'AccountSummaryType', 'xmlns' => self::XMLNS],
            'Currency' => ['type' => 'CurrencyCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'AccountEntries' => ['type' => 'AccountEntriesType', 'xmlns' => self::XMLNS],
            'PaginationResult' => ['type' => 'PaginationResultType', 'xmlns' => self::XMLNS],
            'HasMoreEntries' => ['type' => 'bool'],
            'EntriesPerPage' => ['type' => 'int'],
            'PageNumber' => ['type' => 'int']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

GetAccountResponseType::_register();

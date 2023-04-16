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
 * Retrieves a seller's order line item information. To retrieve order line items for another seller, the
 * GetItemTransactions
 * ) call should be used. This call cannot retrieve sales older than 90 days old.
 * 
 * If one or more
 * SKU
 * values or the date range filters (
 * ModTimeFrom
 * /
 * ModTimeTo
 * or
 * NumberOfDays
 * ) are not used, the
 * GetItemTransactions
 * ) call will retrieve order line items created (or modified) within the last 30 days.
 **/
class GetSellerTransactionsRequestType extends AbstractRequestType
{
    const TAG = 'GetSellerTransactionsRequest';
    const NAME = 'GetSellerTransactionsRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'GetSellerTransactions';

    /**
     * @var string|null
     */
    protected $ModTimeFrom = null;

    /**
     * @var string|null
     */
    protected $ModTimeTo = null;

    /**
     * @var PaginationType|null
     */
    protected $Pagination = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $IncludeFinalValueFee = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $IncludeContainingOrder = null;

    /**
     * @var SKUArrayType|null
     */
    protected $SKUArray = null;

    /**
     * @var TransactionPlatformCodeType|null
     */
    protected $Platform = null;

    /**
     * @var int|null
     */
    protected $NumberOfDays = null;

    /**
     * @var InventoryTrackingMethodCodeType|null
     */
    protected $InventoryTrackingMethod = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $IncludeCodiceFiscale = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getModTimeFrom()
    {
        return $this->_dc($this->ModTimeFrom, 'ModTimeFrom');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setModTimeFrom($value)
    {
        $this->ModTimeFrom = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getModTimeTo()
    {
        return $this->_dc($this->ModTimeTo, 'ModTimeTo');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setModTimeTo($value)
    {
        $this->ModTimeTo = self::_string($value);
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
    public function getIncludeFinalValueFee()
    {
        return $this->_dc($this->IncludeFinalValueFee === 'true', 'IncludeFinalValueFee');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setIncludeFinalValueFee($value)
    {
        $this->IncludeFinalValueFee = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getIncludeContainingOrder()
    {
        return $this->_dc($this->IncludeContainingOrder === 'true', 'IncludeContainingOrder');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setIncludeContainingOrder($value)
    {
        $this->IncludeContainingOrder = self::_bool($value);
    }

    /**
     * @return SKUArrayType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSKUArray()
    {
        return $this->_dc($this->SKUArray, 'SKUArray');
    }

    /**
     * @param SKUArrayType|null $value
     * @return void
     */
    public function setSKUArray($value)
    {
        $this->SKUArray = $value;
    }

    /**
     * @return TransactionPlatformCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPlatform()
    {
        return $this->_dc($this->Platform);
    }

    /**
     * @param TransactionPlatformCodeType|null $value
     * @return void
     */
    public function setPlatform($value)
    {
        $this->Platform = $this->_enum($value, TransactionPlatformCodeType::class);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getNumberOfDays()
    {
        return $this->_dc($this->NumberOfDays, 'NumberOfDays');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setNumberOfDays($value)
    {
        $this->NumberOfDays = self::_int($value);
    }

    /**
     * @return InventoryTrackingMethodCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getInventoryTrackingMethod()
    {
        return $this->_dc($this->InventoryTrackingMethod);
    }

    /**
     * @param InventoryTrackingMethodCodeType|null $value
     * @return void
     */
    public function setInventoryTrackingMethod($value)
    {
        $this->InventoryTrackingMethod = $this->_enum($value, InventoryTrackingMethodCodeType::class);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getIncludeCodiceFiscale()
    {
        return $this->_dc($this->IncludeCodiceFiscale === 'true', 'IncludeCodiceFiscale');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setIncludeCodiceFiscale($value)
    {
        $this->IncludeCodiceFiscale = self::_bool($value);
    }

    /**
     * @return GetSellerTransactionsResponseType|EbatNs_ResponseError
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
            'ModTimeFrom' => [],
            'ModTimeTo' => [],
            'Pagination' => ['type' => 'PaginationType', 'xmlns' => self::XMLNS],
            'IncludeFinalValueFee' => ['type' => 'bool'],
            'IncludeContainingOrder' => ['type' => 'bool'],
            'SKUArray' => ['type' => 'SKUArrayType', 'xmlns' => self::XMLNS],
            'Platform' => ['type' => 'TransactionPlatformCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'NumberOfDays' => ['type' => 'int'],
            'InventoryTrackingMethod' => ['type' => 'InventoryTrackingMethodCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'IncludeCodiceFiscale' => ['type' => 'bool']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

GetSellerTransactionsRequestType::_register();

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
 * This  call retrieves details on one or more order line items for a specified eBay listing. Auctions and
 * single-quantity, fixed-price listings can only have one order line item, but a multiple-quantity and/or
 * multiple-variation, fixed-priced listing can have numerous order line items.
 * 
 * To find one or more order line items for an eBay listing, an
 * ItemID
 * value can be passed in. If a user wanted to retrieve a specific order line item, an
 * ItemID
 * value and a an
 * TransactionID
 * value can be passed in, or an
 * OrderLineItemID
 * value can be passed in instead of an
 * ItemID
 * /
 * TransactionID
 * pair.
 * 
 * The
 * NumberOfDays
 * or the
 * ModTimeFrom
 * and
 * ModTimeTo
 * date range filters can be used to retrieve order line items generated (or last modified) within a specific range
 * of time. The maximum date range that can be set is 30 days, and the
 * ModTimeFrom
 * date value cannot be set any further back than 90 days in the past. If no date range filters are used, all order
 * line items (associated with the specified listing) generated (or last  modified) in the last 30 days are
 * retrieved. Date ranges are generally only used for multiple-quantity or multiple-variation, fixed-price listings
 * that can have multiple order line items.
 * 
 * There are also pagination filters available that allow the user to control how many and which order line
 * items are returned on each page of a results set.
 **/
class GetItemTransactionsRequestType extends AbstractRequestType
{
    const TAG = 'GetItemTransactionsRequest';
    const NAME = 'GetItemTransactionsRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'GetItemTransactions';

    /**
     * @var ItemIDType|null
     */
    protected $ItemID = null;

    /**
     * @var string|null
     */
    protected $ModTimeFrom = null;

    /**
     * @var string|null
     */
    protected $ModTimeTo = null;

    /**
     * @var string|null
     */
    protected $TransactionID = null;

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
     * @var TransactionPlatformCodeType|null
     */
    protected $Platform = null;

    /**
     * @var int|null
     */
    protected $NumberOfDays = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $IncludeVariations = null;

    /**
     * @var string|null
     */
    protected $OrderLineItemID = null;


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
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTransactionID()
    {
        return $this->_dc($this->TransactionID, 'TransactionID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setTransactionID($value)
    {
        $this->TransactionID = self::_string($value);
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
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getIncludeVariations()
    {
        return $this->_dc($this->IncludeVariations === 'true', 'IncludeVariations');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setIncludeVariations($value)
    {
        $this->IncludeVariations = self::_bool($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getOrderLineItemID()
    {
        return $this->_dc($this->OrderLineItemID, 'OrderLineItemID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setOrderLineItemID($value)
    {
        $this->OrderLineItemID = self::_string($value);
    }

    /**
     * @return GetItemTransactionsResponseType|EbatNs_ResponseError
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
            'ItemID' => ['type' => 'ItemIDType', 'xmlns' => self::XMLNS],
            'ModTimeFrom' => [],
            'ModTimeTo' => [],
            'TransactionID' => [],
            'Pagination' => ['type' => 'PaginationType', 'xmlns' => self::XMLNS],
            'IncludeFinalValueFee' => ['type' => 'bool'],
            'IncludeContainingOrder' => ['type' => 'bool'],
            'Platform' => ['type' => 'TransactionPlatformCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'NumberOfDays' => ['type' => 'int'],
            'IncludeVariations' => ['type' => 'bool'],
            'OrderLineItemID' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

GetItemTransactionsRequestType::_register();

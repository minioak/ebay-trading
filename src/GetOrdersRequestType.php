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
 * Retrieves the orders for which the authenticated user is a participant, either as the buyer or the seller. The
 * call returns all the orders that meet the request criteria. Orders older than 90 days old will not be returned.
 **/
class GetOrdersRequestType extends AbstractRequestType
{
    const TAG = 'GetOrdersRequest';
    const NAME = 'GetOrdersRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'GetOrders';

    /**
     * @var OrderIDArrayType|null
     */
    protected $OrderIDArray = null;

    /**
     * @var string|null
     */
    protected $CreateTimeFrom = null;

    /**
     * @var string|null
     */
    protected $CreateTimeTo = null;

    /**
     * @var TradingRoleCodeType|null
     */
    protected $OrderRole = null;

    /**
     * @var OrderStatusCodeType|null
     */
    protected $OrderStatus = null;

    /**
     * @var ListingTypeCodeType|null
     */
    protected $ListingType = null;

    /**
     * @var PaginationType|null
     */
    protected $Pagination = null;

    /**
     * @var string|null
     */
    protected $ModTimeFrom = null;

    /**
     * @var string|null
     */
    protected $ModTimeTo = null;

    /**
     * @var int|null
     */
    protected $NumberOfDays = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $IncludeFinalValueFee = null;

    /**
     * @var SortOrderCodeType|null
     */
    protected $SortingOrder = null;


    /**
     * @return OrderIDArrayType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getOrderIDArray()
    {
        return $this->_dc($this->OrderIDArray, 'OrderIDArray');
    }

    /**
     * @param OrderIDArrayType|null $value
     * @return void
     */
    public function setOrderIDArray($value)
    {
        $this->OrderIDArray = $value;
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCreateTimeFrom()
    {
        return $this->_dc($this->CreateTimeFrom, 'CreateTimeFrom');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setCreateTimeFrom($value)
    {
        $this->CreateTimeFrom = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCreateTimeTo()
    {
        return $this->_dc($this->CreateTimeTo, 'CreateTimeTo');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setCreateTimeTo($value)
    {
        $this->CreateTimeTo = self::_string($value);
    }

    /**
     * @return TradingRoleCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getOrderRole()
    {
        return $this->_dc($this->OrderRole);
    }

    /**
     * @param TradingRoleCodeType|null $value
     * @return void
     */
    public function setOrderRole($value)
    {
        $this->OrderRole = $this->_enum($value, TradingRoleCodeType::class);
    }

    /**
     * @return OrderStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getOrderStatus()
    {
        return $this->_dc($this->OrderStatus);
    }

    /**
     * @param OrderStatusCodeType|null $value
     * @return void
     */
    public function setOrderStatus($value)
    {
        $this->OrderStatus = $this->_enum($value, OrderStatusCodeType::class);
    }

    /**
     * @return ListingTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getListingType()
    {
        return $this->_dc($this->ListingType);
    }

    /**
     * @param ListingTypeCodeType|null $value
     * @return void
     */
    public function setListingType($value)
    {
        $this->ListingType = $this->_enum($value, ListingTypeCodeType::class);
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
     * @return SortOrderCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSortingOrder()
    {
        return $this->_dc($this->SortingOrder);
    }

    /**
     * @param SortOrderCodeType|null $value
     * @return void
     */
    public function setSortingOrder($value)
    {
        $this->SortingOrder = $this->_enum($value, SortOrderCodeType::class);
    }

    /**
     * @return GetOrdersResponseType|EbatNs_ResponseError
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
            'OrderIDArray' => ['type' => 'OrderIDArrayType', 'xmlns' => self::XMLNS],
            'CreateTimeFrom' => [],
            'CreateTimeTo' => [],
            'OrderRole' => ['type' => 'TradingRoleCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'OrderStatus' => ['type' => 'OrderStatusCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'ListingType' => ['type' => 'ListingTypeCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'Pagination' => ['type' => 'PaginationType', 'xmlns' => self::XMLNS],
            'ModTimeFrom' => [],
            'ModTimeTo' => [],
            'NumberOfDays' => ['type' => 'int'],
            'IncludeFinalValueFee' => ['type' => 'bool'],
            'SortingOrder' => ['type' => 'SortOrderCodeType', 'enum' => true, 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

GetOrdersRequestType::_register();

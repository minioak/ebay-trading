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
 * Returns the set of orders that match the order IDs or filter criteria specified.
 **/
class GetOrdersResponseType extends EbatNs_Response
{
    const TAG = 'GetOrdersResponseType';
    const NAME = 'GetOrdersResponseType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var PaginationResultType|null
     */
    protected $PaginationResult = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $HasMoreOrders = null;

    /**
     * @var OrderArrayType|null
     */
    protected $OrderArray = null;

    /**
     * @var int|null
     */
    protected $OrdersPerPage = null;

    /**
     * @var int|null
     */
    protected $PageNumber = null;

    /**
     * @var int|null
     */
    protected $ReturnedOrderCountActual = null;


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
    public function getHasMoreOrders()
    {
        return $this->_dc($this->HasMoreOrders === 'true', 'HasMoreOrders');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setHasMoreOrders($value)
    {
        $this->HasMoreOrders = self::_bool($value);
    }

    /**
     * @return OrderArrayType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getOrderArray()
    {
        return $this->_dc($this->OrderArray, 'OrderArray');
    }

    /**
     * @param OrderArrayType|null $value
     * @return void
     */
    public function setOrderArray($value)
    {
        $this->OrderArray = $value;
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getOrdersPerPage()
    {
        return $this->_dc($this->OrdersPerPage, 'OrdersPerPage');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setOrdersPerPage($value)
    {
        $this->OrdersPerPage = self::_int($value);
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
    public function getReturnedOrderCountActual()
    {
        return $this->_dc($this->ReturnedOrderCountActual, 'ReturnedOrderCountActual');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setReturnedOrderCountActual($value)
    {
        $this->ReturnedOrderCountActual = self::_int($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'PaginationResult' => ['type' => 'PaginationResultType', 'xmlns' => self::XMLNS],
            'HasMoreOrders' => ['type' => 'bool'],
            'OrderArray' => ['type' => 'OrderArrayType', 'xmlns' => self::XMLNS],
            'OrdersPerPage' => ['type' => 'int'],
            'PageNumber' => ['type' => 'int'],
            'ReturnedOrderCountActual' => ['type' => 'int']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

GetOrdersResponseType::_register();

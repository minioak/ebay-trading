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
 * This type defines the response of an
 * AddOrder
 * call. If the multiple line items are successfully combined into a single order, this response includes the
 * unique identifier of this 'Combined Invoice' order (automatically generated by eBay), and a timestamp indicating
 * when the new order was created.
 **/
class AddOrderResponseType extends EbatNs_Response
{
    const TAG = 'AddOrderResponseType';
    const NAME = 'AddOrderResponseType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var OrderIDType|null
     */
    protected $OrderID = null;

    /**
     * @var string|null
     */
    protected $CreatedTime = null;


    /**
     * @return OrderIDType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getOrderID()
    {
        return $this->_dc($this->OrderID, 'OrderID');
    }

    /**
     * @param OrderIDType|null $value
     * @return void
     */
    public function setOrderID($value)
    {
        $this->OrderID = $value;
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCreatedTime()
    {
        return $this->_dc($this->CreatedTime, 'CreatedTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setCreatedTime($value)
    {
        $this->CreatedTime = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'OrderID' => ['type' => 'OrderIDType', 'xmlns' => self::XMLNS],
            'CreatedTime' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

AddOrderResponseType::_register();

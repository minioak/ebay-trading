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
 * The
 * AddOrder
 * call can be used by a seller to combine two or more unpaid, single line item orders from the same buyer into one
 * 'Combined Invoice' order with multiple line items. Once multiple line items are combined into one order, the
 * buyer can make one single payment for multiple line item order. If possible and agreed to, the seller can then
 * ship multiple line items in the same shipping package, saving on shipping costs, and possibly passing that
 * savings down to the buyer through Combined Shipping Discount rules set up in My eBay.
 **/
class AddOrderRequestType extends AbstractRequestType
{
    const TAG = 'AddOrderRequest';
    const NAME = 'AddOrderRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'AddOrder';

    /**
     * @var OrderType|null
     */
    protected $Order = null;


    /**
     * @return OrderType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getOrder()
    {
        return $this->_dc($this->Order, 'Order');
    }

    /**
     * @param OrderType|null $value
     * @return void
     */
    public function setOrder($value)
    {
        $this->Order = $value;
    }

    /**
     * @return AddOrderResponseType|EbatNs_ResponseError
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
        self::assignElements(['Order' => ['type' => 'OrderType', 'xmlns' => self::XMLNS]], parent::NAME);
        self::assignAttributes([]);
    }

}

AddOrderRequestType::_register();

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
 * The base response type for the
 * GetOrderTransactions
 * call. This call retrieves detailed information about one or more eBay.com orders. An
 * OrderArray.Order
 * container is returned for each order that matches the input criteria in the call request.
 * 
 * <span class="tablenote"><strong>Note:</strong>
 * This call is deprecated and will be decommissioned on January 31, 2024. No further updates are planned for
 * this API during the deprecation period. Developers have the option of migrating to the <a
 * href="/Devzone/XML/docs/Reference/eBay/GetOrders.html" target="_blank">GetOrders</a> call in the
 * Trading API
 * , or the <a href="/api-docs/sell/fulfillment/resources/order/methods/getOrders" target="_blank">getOrders</a>
 * method of the <a href="/api-docs/sell/fulfillment/overview.html" target="_blank">Fulfillment API</a>. Please note
 * that the <a href="/api-docs/sell/fulfillment/overview.html" target="_blank">Fulfillment API</a> only returns paid
 * orders, so if your use case calls for retrieving both paid and unpaid orders, we recommend migrating to the <a
 * href="/Devzone/XML/docs/Reference/eBay/GetOrders.html" target="_blank">GetOrders</a> call in the
 * Trading API
 * .
 * </span>
 **/
class GetOrderTransactionsResponseType extends EbatNs_Response
{
    const TAG = 'GetOrderTransactionsResponseType';
    const NAME = 'GetOrderTransactionsResponseType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var OrderArrayType|null
     */
    protected $OrderArray = null;


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
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['OrderArray' => ['type' => 'OrderArrayType', 'xmlns' => self::XMLNS]], parent::NAME);
        self::assignAttributes([]);
    }

}

GetOrderTransactionsResponseType::_register();

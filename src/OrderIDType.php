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
 * Type that represents the unique identifier for an eBay order.
 * 
 * <span class="tablenote">
 * Note:
 * As of June 2019, eBay has changed the format of order identifier values. The new format is a non-parsable
 * string, globally unique across all eBay marketplaces, and consistent for both single line item and multiple line
 * item orders. Unlike in the past, instead of just being known and exposed to the seller, these unique order
 * identifiers will also be known and used/referenced by the buyer and eBay customer support.
 * 
 * For developers and sellers who are already integrated with the Trading API's order management calls, this
 * change shouldn't impact your integration unless you parse the existing order identifiers (e.g.,
 * OrderID
 * or
 * OrderLineItemID
 * ), or otherwise infer meaning from the format (e.g., differentiating between a single line item order versus a
 * multiple line item order). Because we realize that some integrations may have logic that is dependent upon the
 * old identifier format, eBay is rolling out this Trading API change with version control to support a transition
 * period of approximately 9 months before applications must switch to the new format completely.
 * 
 * During the transition period, for developers/sellers using a Trading WSDL older than Version 1113, they can
 * use the
 * X-EBAY-API-COMPATIBILITY-LEVEL
 * HTTP header in API calls to control whether the new or old
 * OrderID
 * format is returned in call response payloads. To get the new
 * OrderID
 * format, the value of the
 * X-EBAY-API-COMPATIBILITY-LEVEL
 * HTTP header must be set to <code>1113</code>. During the transition period and even after, the new and old
 * OrderID
 * formats will still be supported/accepted in all Trading API call request payloads. After the transition period
 * (which will be announced), only the new
 * OrderID
 * format will be returned in all Trading API call response payloads, regardless of the Trading WSDL version used
 * or specified compatibility level.
 * </span>
 * 
 * <span class="tablenote">
 * Note:
 * For sellers integrated with the new order ID format, please note that the identifier for an order will change as
 * it goes from unpaid to paid status. Sellers can check to see if an order has been paid by looking for a value of
 * 'Complete' in the
 * CheckoutStatus.Status
 * field in the response of
 * GetOrders
 * or
 * GetOrderTransactions
 * call, or in the
 * Status.CompleteStatus
 * field in the response of
 * GetItemTransactions
 * or
 * GetSellerTransactions
 * call. When using a
 * GetOrders
 * or
 * GetOrderTransactions
 * call to retrieve specific order(s), either of these order IDs (paid or unpaid status) can be used to retrieve an
 * order.
 * </span>
 **/
class OrderIDType extends EbatNs_SimpleType
{
    const TAG = 'OrderIDType';
    const NAME = 'OrderIDType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $_value = null;


    /**
     * @param string|null $value
     */
    public function __construct($value = null)
    {
        $this->setTypeValue($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value, '_value');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $this->_value = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([], parent::NAME);
        self::assignAttributes([]);
    }

}

OrderIDType::_register();

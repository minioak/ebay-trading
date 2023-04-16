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
 * Enumerated type that defines the possible values for order states. Some of these values can be used as
 * OrderStatus
 * filters in the
 * GetOrders
 * request payload, and some of these values may be returned in any of the order management calls under the
 * OrderStatus
 * field. See the individual value descriptions for more information on how they are used and/or when they are
 * returned.
 **/
class OrderStatusCodeType extends EbatNs_EnumType
{
    const TAG = 'OrderStatusCodeType';
    const NAME = 'OrderStatusCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This value indicates that the order is not yet complete. An order in the <code>Active</code> state means that the
     * buyer has not initiated payment for the order. While an order is in this state, it can be combined into a <a
     * href="https://developer.ebay.com/DevZone/guides/features-guide/default.html#development/Listing-AnItem.html#CombinedInvoice">Combined
     * Invoice</a>, a buyer can request a cancellation, and/or a seller can update payment details (including a change
     * in order price) or shipping details (including shipping cost and shipping service).
     * 
     * This value can be used a filter value in the
     * OrderStatus
     * field of the
     * GetOrders
     * request payload, and it can also be returned in any of the order management calls.
     **/
    const CodeType_Active = 'Active';

    /**
     * This value can be used a filter value in the
     * OrderStatus
     * field, and if used, all inactive orders will be returned.
     **/
    const CodeType_Inactive = 'Inactive';

    /**
     * This value indicates that the order is paid for and complete. An order in the <code>Completed</code> state means
     * that no other changes to the order can be made.
     * 
     * This value can be used a filter value in the
     * OrderStatus
     * field of the
     * GetOrders
     * request payload, and it can also be returned in any of the order management calls.
     **/
    const CodeType_Completed = 'Completed';

    /**
     * This value indicates that the order has been cancelled. Depending on whether payment was made or not, the seller
     * may also need to refund the buyer after an order is cancelled.
     * 
     * This value can be used a filter value in the
     * OrderStatus
     * field of the
     * GetOrders
     * request payload, and it can also be returned in any of the order management calls.
     **/
    const CodeType_Cancelled = 'Cancelled';

    /**
     * This enumeration value was only used for the deprecated Half.com site, so is no longer applicable and should not
     * be used as an
     * OrderStatus
     * value in the
     * GetOrders
     * request payload.
     **/
    const CodeType_Shipped = 'Shipped';

    /**
     * This value is not used.
     **/
    const CodeType_Default = 'Default';

    /**
     * This enumeration value is no longer applicable and should not be used as an
     * OrderStatus
     * value in the
     * GetOrders
     * request payload.
     **/
    const CodeType_Authenticated = 'Authenticated';

    /**
     * This enumeration value indicates that the order is currently in the state of being processed, but is not yet
     * complete.
     * 
     * This value is not supported by the
     * OrderStatus
     * field of the
     * GetOrders
     * request payload, but it can be returned in any of the order management calls.
     **/
    const CodeType_InProcess = 'InProcess';

    /**
     * This enumeration value is no longer applicable and should not be used as an
     * OrderStatus
     * value in the
     * GetOrders
     * request payload.
     **/
    const CodeType_Invalid = 'Invalid';

    /**
     * Reserved for internal or future use.
     **/
    const CodeType_CustomCode = 'CustomCode';

    /**
     * This enumeration value is passed into the
     * OrderStatus
     * of
     * GetOrders
     * to retrieve orders in all states. This is the default value. This value is not applicable to the response
     * payloads of the order management calls.
     **/
    const CodeType_All = 'All';

    /**
     * This value indicates that a buyer has initiated a cancellation request on the order. If a seller sees an order in
     * this state, that seller must either approve or reject the cancellation request through My eBay Web flows or
     * through the Post-Order API cancellation calls.
     * 
     * This enumeration value cannot be used as an
     * OrderStatus
     * value in the
     * GetOrders
     * request payload.
     **/
    const CodeType_CancelPending = 'CancelPending';
    
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
     * @return OrderStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param OrderStatusCodeType|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $const = 'self::CodeType_' . $value;
        $this->_value = $value !== null && defined($const) ? constant($const) : null;
    }

    /**
     * @return bool
     */
    public function isActive()
    {
        return $this->_value === self::CodeType_Active;
    }

    /**
     * @return bool
     */
    public function isInactive()
    {
        return $this->_value === self::CodeType_Inactive;
    }

    /**
     * @return bool
     */
    public function isCompleted()
    {
        return $this->_value === self::CodeType_Completed;
    }

    /**
     * @return bool
     */
    public function isCancelled()
    {
        return $this->_value === self::CodeType_Cancelled;
    }

    /**
     * @return bool
     */
    public function isShipped()
    {
        return $this->_value === self::CodeType_Shipped;
    }

    /**
     * @return bool
     */
    public function isDefault()
    {
        return $this->_value === self::CodeType_Default;
    }

    /**
     * @return bool
     */
    public function isAuthenticated()
    {
        return $this->_value === self::CodeType_Authenticated;
    }

    /**
     * @return bool
     */
    public function isInProcess()
    {
        return $this->_value === self::CodeType_InProcess;
    }

    /**
     * @return bool
     */
    public function isInvalid()
    {
        return $this->_value === self::CodeType_Invalid;
    }

    /**
     * @return bool
     */
    public function isCustomCode()
    {
        return $this->_value === self::CodeType_CustomCode;
    }

    /**
     * @return bool
     */
    public function isAll()
    {
        return $this->_value === self::CodeType_All;
    }

    /**
     * @return bool
     */
    public function isCancelPending()
    {
        return $this->_value === self::CodeType_CancelPending;
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

OrderStatusCodeType::_register();

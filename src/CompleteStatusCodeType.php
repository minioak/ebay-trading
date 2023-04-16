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
 * Enumerated type that contains values which indicate whether an order or order line item is complete, incomplete,
 * or pending.
 **/
class CompleteStatusCodeType extends EbatNs_EnumType
{
    const TAG = 'CompleteStatusCodeType';
    const NAME = 'CompleteStatusCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This value indicates that the order or order line item is in the incomplete state. Generally speaking, an order
     * or order line item is considered incomplete when payment from the buyer has yet to be initiated.
     **/
    const CodeType_Incomplete = 'Incomplete';

    /**
     * This value indicates that the order or order line item is complete. Generally speaking, an order or order line
     * item is complete when payment from the buyer has been initiated and has been processed.
     * 
     * <span class="tablenote">
     * Note:
     * If the
     * PaymentMethodUsed
     * is <code>CashOnPickup</code>,
     * the
     * CheckoutStatus.Status
     * value in
     * GetOrders
     * will be
     * <code>Complete</code> at checkout time, even though the seller may not have been officially paid
     * yet. The
     * CheckoutStatus.Status
     * value in
     * GetOrders
     * will
     * remain as <code>Complete</code> even if the seller
     * changes the checkout status to Pending. However, the
     * eBayPaymentStatus
     * value in
     * GetOrders
     * will change from <code>NoPaymentFailure</code> to
     * <code>PaymentInProcess</code>.
     * </span>
     **/
    const CodeType_Complete = 'Complete';

    /**
     * This value indicates that the order or order line item is in the pending state. Generally speaking, an order is
     * considered pending when payment
     * from the buyer has been initiated but has yet to be fully processed.
     * 
     * <span class="tablenote">
     * Note:
     * If the payment method is <code>CashOnPickup</code>, the
     * 
     * CheckoutStatus.Status
     * value in
     * GetOrders
     * will read <code>Complete</code> at checkout time,
     * even though the seller may not have been officially paid yet. The
     * 
     * CheckoutStatus.Status
     * value in
     * GetOrders
     * will remain as <code>Complete</code> even if the
     * seller changes the checkout status to Pending.
     * However, the
     * eBayPaymentStatus
     * value in
     * GetOrders
     * will change from
     * <code>NoPaymentFailure</code> to <code>PaymentInProcess</code>.
     * </span>
     **/
    const CodeType_Pending = 'Pending';

    /**
     * Reserved for internal or future use
     **/
    const CodeType_CustomCode = 'CustomCode';
    
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
     * @return CompleteStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param CompleteStatusCodeType|null $value
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
    public function isIncomplete()
    {
        return $this->_value === self::CodeType_Incomplete;
    }

    /**
     * @return bool
     */
    public function isComplete()
    {
        return $this->_value === self::CodeType_Complete;
    }

    /**
     * @return bool
     */
    public function isPending()
    {
        return $this->_value === self::CodeType_Pending;
    }

    /**
     * @return bool
     */
    public function isCustomCode()
    {
        return $this->_value === self::CodeType_CustomCode;
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

CompleteStatusCodeType::_register();

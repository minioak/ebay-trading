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
 * Enumerated type that lists the possible states of buyer payment for an order.
 **/
class PaidStatusCodeType extends EbatNs_EnumType
{
    const TAG = 'PaidStatusCodeType';
    const NAME = 'PaidStatusCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This enumeration value is returned if the buyer has completed checkout, but eBay cannot confirm whether or not
     * the buyer has paid for the order. It is possible that the buyer has paid with an 'offline' payment method, but
     * the order has not been marked as paid.
     **/
    const CodeType_NotPaid = 'NotPaid';

    /**
     * This enumeration value is returned if the buyer has not completed the checkout process and so has not made
     * payment.
     **/
    const CodeType_BuyerHasNotCompletedCheckout = 'BuyerHasNotCompletedCheckout';

    /**
     * This value is deprecated and should no longer be returned.
     **/
    const CodeType_PaymentPendingWithPayPal = 'PaymentPendingWithPayPal';

    /**
     * This value is deprecated and should no longer be returned.
     **/
    const CodeType_PaidWithPayPal = 'PaidWithPayPal';

    /**
     * This enumeration value is returned if the order was marked as paid by eBay or the seller.
     **/
    const CodeType_MarkedAsPaid = 'MarkedAsPaid';

    /**
     * No longer an applicable value.
     **/
    const CodeType_PaymentPendingWithEscrow = 'PaymentPendingWithEscrow';

    /**
     * No longer an applicable value.
     **/
    const CodeType_PaidWithEscrow = 'PaidWithEscrow';

    /**
     * No longer an applicable value.
     **/
    const CodeType_EscrowPaymentCancelled = 'EscrowPaymentCancelled';

    /**
     * PaisaPay is a deprecated payment method, so this value is no longer applicable.
     **/
    const CodeType_PaymentPendingWithPaisaPay = 'PaymentPendingWithPaisaPay';

    /**
     * PaisaPay is a deprecated payment method, so this value is no longer applicable.
     **/
    const CodeType_PaidWithPaisaPay = 'PaidWithPaisaPay';

    /**
     * This enumeration value is returned if the buyer's payment is in process, but not yet complete.
     **/
    const CodeType_PaymentPending = 'PaymentPending';

    /**
     * PaisaPay is a deprecated payment method, so this value is no longer applicable.
     **/
    const CodeType_PaymentPendingWithPaisaPayEscrow = 'PaymentPendingWithPaisaPayEscrow';

    /**
     * PaisaPay is a deprecated payment method, so this value is no longer applicable.
     **/
    const CodeType_PaidWithPaisaPayEscrow = 'PaidWithPaisaPayEscrow';

    /**
     * PaisaPay is a deprecated payment method, so this value is no longer applicable.
     **/
    const CodeType_PaisaPayNotPaid = 'PaisaPayNotPaid';

    /**
     * This enumeration value is returned if the buyer's payment was refunded.
     **/
    const CodeType_Refunded = 'Refunded';

    /**
     * The selected payment method is COD and the buyer will make the payment upon delivery.
     **/
    const CodeType_WaitingForCODPayment = 'WaitingForCODPayment';

    /**
     * The buyer has paid for the order with the COD payment method.
     **/
    const CodeType_PaidCOD = 'PaidCOD';

    /**
     * Reserved for future use.
     **/
    const CodeType_CustomCode = 'CustomCode';

    /**
     * This enumeration value is returned if the buyer has paid for the order.
     **/
    const CodeType_Paid = 'Paid';

    /**
     * This enumeration value is returned if the buyer was offered the 'Pay Upon Invoice' option. The 'Pay Upon Invoice'
     * option is only available to eligible German buyers as part of Progressive Checkout on the German site. If a
     * German buyer is offered the 'Pay Upon Invoice' option, that buyer is not required to pay for the order until
     * after receiving an order invoice from the seller.
     **/
    const CodeType_PayUponInvoice = 'PayUponInvoice';
    
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
     * @return PaidStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param PaidStatusCodeType|null $value
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
    public function isNotPaid()
    {
        return $this->_value === self::CodeType_NotPaid;
    }

    /**
     * @return bool
     */
    public function isBuyerHasNotCompletedCheckout()
    {
        return $this->_value === self::CodeType_BuyerHasNotCompletedCheckout;
    }

    /**
     * @return bool
     */
    public function isPaymentPendingWithPayPal()
    {
        return $this->_value === self::CodeType_PaymentPendingWithPayPal;
    }

    /**
     * @return bool
     */
    public function isPaidWithPayPal()
    {
        return $this->_value === self::CodeType_PaidWithPayPal;
    }

    /**
     * @return bool
     */
    public function isMarkedAsPaid()
    {
        return $this->_value === self::CodeType_MarkedAsPaid;
    }

    /**
     * @return bool
     */
    public function isPaymentPendingWithEscrow()
    {
        return $this->_value === self::CodeType_PaymentPendingWithEscrow;
    }

    /**
     * @return bool
     */
    public function isPaidWithEscrow()
    {
        return $this->_value === self::CodeType_PaidWithEscrow;
    }

    /**
     * @return bool
     */
    public function isEscrowPaymentCancelled()
    {
        return $this->_value === self::CodeType_EscrowPaymentCancelled;
    }

    /**
     * @return bool
     */
    public function isPaymentPendingWithPaisaPay()
    {
        return $this->_value === self::CodeType_PaymentPendingWithPaisaPay;
    }

    /**
     * @return bool
     */
    public function isPaidWithPaisaPay()
    {
        return $this->_value === self::CodeType_PaidWithPaisaPay;
    }

    /**
     * @return bool
     */
    public function isPaymentPending()
    {
        return $this->_value === self::CodeType_PaymentPending;
    }

    /**
     * @return bool
     */
    public function isPaymentPendingWithPaisaPayEscrow()
    {
        return $this->_value === self::CodeType_PaymentPendingWithPaisaPayEscrow;
    }

    /**
     * @return bool
     */
    public function isPaidWithPaisaPayEscrow()
    {
        return $this->_value === self::CodeType_PaidWithPaisaPayEscrow;
    }

    /**
     * @return bool
     */
    public function isPaisaPayNotPaid()
    {
        return $this->_value === self::CodeType_PaisaPayNotPaid;
    }

    /**
     * @return bool
     */
    public function isRefunded()
    {
        return $this->_value === self::CodeType_Refunded;
    }

    /**
     * @return bool
     */
    public function isWaitingForCODPayment()
    {
        return $this->_value === self::CodeType_WaitingForCODPayment;
    }

    /**
     * @return bool
     */
    public function isPaidCOD()
    {
        return $this->_value === self::CodeType_PaidCOD;
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
    public function isPaid()
    {
        return $this->_value === self::CodeType_Paid;
    }

    /**
     * @return bool
     */
    public function isPayUponInvoice()
    {
        return $this->_value === self::CodeType_PayUponInvoice;
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

PaidStatusCodeType::_register();

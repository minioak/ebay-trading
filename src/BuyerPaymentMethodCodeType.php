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
 * This enumerated type defines different payment methods that can be used by buyers to pay sellers for purchases.
 * Supported payment methods vary by eBay marketplace, by eBay Category, and even by listing format. If a seller is
 * listing, revising, or relisting an item with a Trading API call, the seller should use one of the following
 * metadata calls to see which payment methods are supported at the site and category level:
 * <ul>
 * <li>
 * GeteBayDetails
 * : through
 * PaymentOptionDetails
 * containers in the response, this call will show the seller all of the payment methods that are available for the
 * specified marketplace. To retrieve this metadata, the seller should include the
 * DetailName
 * field in the request, and set its value to <code>PaymentOptionDetails</code></li>
 * <li>
 * GetCategoryFeatures
 * : through
 * PaymentMethod
 * fields that are returned under the
 * SiteDefaults
 * container or under one or more
 * Category
 * containers in the response, this call will show the seller all of the payment methods that are available for the
 * specified marketplace, including any category exceptions. To retrieve this metadata, the seller should include
 * the
 * FeatureID
 * field in the request, and set its value to <code>PaymentMethods</code>. Note that
 * Category
 * containers will only be returned for categories that differ from Site Defaults as far as supported payment
 * methods are concerned. </li>
 * </ul>
 * 
 * <span class="tablenote">
 * Note:
 * As eBay now controls all of the online payment methods available to buyers, sellers will only specify
 * offline payment methods for listings that require/support offline payment.
 * </span>
 **/
class BuyerPaymentMethodCodeType extends EbatNs_EnumType
{
    const TAG = 'BuyerPaymentMethodCodeType';
    const NAME = 'BuyerPaymentMethodCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This enumeration value indicates that no payment method has been specified for the listing. This may be the case
     * for a classified ad listing, since payment happens outside of the eBay platform.
     **/
    const CodeType_None = 'None';

    /**
     * This enumeration value indicates that a money order or cashiers check is accepted for payment. This value is only
     * applicable for offline payments.
     **/
    const CodeType_MOCC = 'MOCC';

    /**
     * This enumeration value indicates that American Express is accepted for payment.
     **/
    const CodeType_AmEx = 'AmEx';

    /**
     * This enumeration value indicates that buyers should check the listing description for more details on payment.
     * This may be the case for a classified ad listing, since payment happens outside of the eBay platform.
     **/
    const CodeType_PaymentSeeDescription = 'PaymentSeeDescription';

    /**
     * This enumeration value indicates that credit cards are accepted for payment.
     * 
     * <span class="tablenote">
     * Note:
     * This enumeration value is returned in the response of order management calls if the buyer used an eBay
     * gift card to pay the full or partial balance of the order.
     * </span>
     **/
    const CodeType_CCAccepted = 'CCAccepted';

    /**
     * This enumeration value indicates that a personal check is accepted for payment. This value is only applicable for
     * offline payments.
     **/
    const CodeType_PersonalCheck = 'PersonalCheck';

    /**
     * This enumeration value indicates that cash on delivery of item is accepted for payment. This value is only
     * applicable for offline payments.
     **/
    const CodeType_COD = 'COD';

    /**
     * This enumeration value indicates that Visa or MasterCard are accepted for payment.
     **/
    const CodeType_VisaMC = 'VisaMC';

    /**
     * This payment method is deprecated.
     **/
    const CodeType_PaisaPayAccepted = 'PaisaPayAccepted';

    /**
     * This enumeration value may be returned if the payment method is unknown.
     **/
    const CodeType_Other = 'Other';

    /**
     * This enumeration value indicates that PayPal is accepted as a payment method.
     **/
    const CodeType_PayPal = 'PayPal';

    /**
     * This enumeration value indicates that Discover Card is accepted for payment.
     **/
    const CodeType_Discover = 'Discover';

    /**
     * This enumeration value indicates that cash on pickup is accepted for payment. This value is only applicable for
     * offline payments.
     **/
    const CodeType_CashOnPickup = 'CashOnPickup';

    /**
     * This enumeration value indicates that a direct transfer of money is accepted for payment.
     **/
    const CodeType_MoneyXferAccepted = 'MoneyXferAccepted';

    /**
     * This enumeration value indicates that a direct transfer of money during checkout is accepted for payment.
     **/
    const CodeType_MoneyXferAcceptedInCheckout = 'MoneyXferAcceptedInCheckout';

    /**
     * This enumeration value may be returned if the payment method is unknown.
     **/
    const CodeType_OtherOnlinePayments = 'OtherOnlinePayments';

    /**
     * Reserved for future use.
     **/
    const CodeType_Escrow = 'Escrow';

    /**
     * Reserved for future use.
     **/
    const CodeType_PrePayDelivery = 'PrePayDelivery';

    /**
     * Reserved for future use.
     **/
    const CodeType_CODPrePayDelivery = 'CODPrePayDelivery';

    /**
     * Reserved for future use.
     **/
    const CodeType_PostalTransfer = 'PostalTransfer';

    /**
     * Reserved for internal or future use.
     **/
    const CodeType_CustomCode = 'CustomCode';

    /**
     * This payment method is deprecated.
     **/
    const CodeType_LoanCheck = 'LoanCheck';

    /**
     * This payment method is deprecated. 'CashOnPickup' is now the only available offline cash option.
     **/
    const CodeType_CashInPerson = 'CashInPerson';

    /**
     * Elektronisches Lastschriftverfahren (direct debit).
     * Only applicable to the Express Germany site, which has been shut down.
     **/
    const CodeType_ELV = 'ELV';

    /**
     * This payment type is no longer applicable since eBay India is no longer a functioning site.
     **/
    const CodeType_PaisaPayEscrow = 'PaisaPayEscrow';

    /**
     * This payment type is no longer applicable since eBay India is no longer a functioning site.
     **/
    const CodeType_PaisaPayEscrowEMI = 'PaisaPayEscrowEMI';

    /**
     * This payment method is deprecated.
     **/
    const CodeType_IntegratedMerchantCreditCard = 'IntegratedMerchantCreditCard';

    /**
     * This payment method is deprecated.
     **/
    const CodeType_Moneybookers = 'Moneybookers';

    /**
     * This payment method is deprecated.
     **/
    const CodeType_Paymate = 'Paymate';

    /**
     * This payment method is deprecated.
     **/
    const CodeType_ProPay = 'ProPay';

    /**
     * This payment method is deprecated. 'CashOnPickup' is now the only available offline cash option.
     **/
    const CodeType_PayOnPickup = 'PayOnPickup';

    /**
     * This enumeration value indicates that the Diners Club credit card is accepted for payment.
     **/
    const CodeType_Diners = 'Diners';

    /**
     * This value is no longer used.
     **/
    const CodeType_StandardPayment = 'StandardPayment';

    /**
     * This payment method is deprecated.
     **/
    const CodeType_DirectDebit = 'DirectDebit';

    /**
     * This enumeration value is returned in the response of order management calls if eBay collects the online payment
     * from the buyer, and the buyer has paid for the order with any accepted payment method except for an eBay gift
     * card. If the buyer used an eBay gift card to pay the full or partial balance of the order, the
     * <code>CCAccepted</code> value will be returned instead.
     **/
    const CodeType_CreditCard = 'CreditCard';

    /**
     * This buyer payment method is only applicable for the Germany site and is associated with the rollout of
     * Progressive Checkout and the Pay Upon Invoice feature. 'PayUponInvoice' is not a payment method that is offered
     * to the buyer, but instead, eBay makes the determination (based on several factors) during checkout whether the
     * buyer is eligible for 'Pay Upon Invoice'. If the buyer is offered the 'Pay Upon Invoice' option, that buyer is
     * not required to pay for the order until an order invoice is sent by the seller.
     * 
     * Only select categories on the Germany site will support the 'Pay Upon Invoice' option, and orders going
     * above the two-thousand dollar EURO mark will not be eligible for 'Pay Upon Invoice'.
     * 
     * Since the seller can not specify 'Pay Upon Invoice' as a payment method, this enumeration value cannot be
     * passed into a
     * Item.PaymentMethods
     * field in an Add/Revise/Relist call.
     **/
    const CodeType_PayUponInvoice = 'PayUponInvoice';

    /**
     * This payment method is deprecated.
     **/
    const CodeType_QIWI = 'QIWI';

    /**
     * This payment method is deprecated.
     **/
    const CodeType_PayPalCredit = 'PayPalCredit';
    
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
     * @return BuyerPaymentMethodCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param BuyerPaymentMethodCodeType|null $value
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
    public function isNone()
    {
        return $this->_value === self::CodeType_None;
    }

    /**
     * @return bool
     */
    public function isMOCC()
    {
        return $this->_value === self::CodeType_MOCC;
    }

    /**
     * @return bool
     */
    public function isAmEx()
    {
        return $this->_value === self::CodeType_AmEx;
    }

    /**
     * @return bool
     */
    public function isPaymentSeeDescription()
    {
        return $this->_value === self::CodeType_PaymentSeeDescription;
    }

    /**
     * @return bool
     */
    public function isCCAccepted()
    {
        return $this->_value === self::CodeType_CCAccepted;
    }

    /**
     * @return bool
     */
    public function isPersonalCheck()
    {
        return $this->_value === self::CodeType_PersonalCheck;
    }

    /**
     * @return bool
     */
    public function isCOD()
    {
        return $this->_value === self::CodeType_COD;
    }

    /**
     * @return bool
     */
    public function isVisaMC()
    {
        return $this->_value === self::CodeType_VisaMC;
    }

    /**
     * @return bool
     */
    public function isPaisaPayAccepted()
    {
        return $this->_value === self::CodeType_PaisaPayAccepted;
    }

    /**
     * @return bool
     */
    public function isOther()
    {
        return $this->_value === self::CodeType_Other;
    }

    /**
     * @return bool
     */
    public function isPayPal()
    {
        return $this->_value === self::CodeType_PayPal;
    }

    /**
     * @return bool
     */
    public function isDiscover()
    {
        return $this->_value === self::CodeType_Discover;
    }

    /**
     * @return bool
     */
    public function isCashOnPickup()
    {
        return $this->_value === self::CodeType_CashOnPickup;
    }

    /**
     * @return bool
     */
    public function isMoneyXferAccepted()
    {
        return $this->_value === self::CodeType_MoneyXferAccepted;
    }

    /**
     * @return bool
     */
    public function isMoneyXferAcceptedInCheckout()
    {
        return $this->_value === self::CodeType_MoneyXferAcceptedInCheckout;
    }

    /**
     * @return bool
     */
    public function isOtherOnlinePayments()
    {
        return $this->_value === self::CodeType_OtherOnlinePayments;
    }

    /**
     * @return bool
     */
    public function isEscrow()
    {
        return $this->_value === self::CodeType_Escrow;
    }

    /**
     * @return bool
     */
    public function isPrePayDelivery()
    {
        return $this->_value === self::CodeType_PrePayDelivery;
    }

    /**
     * @return bool
     */
    public function isCODPrePayDelivery()
    {
        return $this->_value === self::CodeType_CODPrePayDelivery;
    }

    /**
     * @return bool
     */
    public function isPostalTransfer()
    {
        return $this->_value === self::CodeType_PostalTransfer;
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
    public function isLoanCheck()
    {
        return $this->_value === self::CodeType_LoanCheck;
    }

    /**
     * @return bool
     */
    public function isCashInPerson()
    {
        return $this->_value === self::CodeType_CashInPerson;
    }

    /**
     * @return bool
     */
    public function isELV()
    {
        return $this->_value === self::CodeType_ELV;
    }

    /**
     * @return bool
     */
    public function isPaisaPayEscrow()
    {
        return $this->_value === self::CodeType_PaisaPayEscrow;
    }

    /**
     * @return bool
     */
    public function isPaisaPayEscrowEMI()
    {
        return $this->_value === self::CodeType_PaisaPayEscrowEMI;
    }

    /**
     * @return bool
     */
    public function isIntegratedMerchantCreditCard()
    {
        return $this->_value === self::CodeType_IntegratedMerchantCreditCard;
    }

    /**
     * @return bool
     */
    public function isMoneybookers()
    {
        return $this->_value === self::CodeType_Moneybookers;
    }

    /**
     * @return bool
     */
    public function isPaymate()
    {
        return $this->_value === self::CodeType_Paymate;
    }

    /**
     * @return bool
     */
    public function isProPay()
    {
        return $this->_value === self::CodeType_ProPay;
    }

    /**
     * @return bool
     */
    public function isPayOnPickup()
    {
        return $this->_value === self::CodeType_PayOnPickup;
    }

    /**
     * @return bool
     */
    public function isDiners()
    {
        return $this->_value === self::CodeType_Diners;
    }

    /**
     * @return bool
     */
    public function isStandardPayment()
    {
        return $this->_value === self::CodeType_StandardPayment;
    }

    /**
     * @return bool
     */
    public function isDirectDebit()
    {
        return $this->_value === self::CodeType_DirectDebit;
    }

    /**
     * @return bool
     */
    public function isCreditCard()
    {
        return $this->_value === self::CodeType_CreditCard;
    }

    /**
     * @return bool
     */
    public function isPayUponInvoice()
    {
        return $this->_value === self::CodeType_PayUponInvoice;
    }

    /**
     * @return bool
     */
    public function isQIWI()
    {
        return $this->_value === self::CodeType_QIWI;
    }

    /**
     * @return bool
     */
    public function isPayPalCredit()
    {
        return $this->_value === self::CodeType_PayPalCredit;
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

BuyerPaymentMethodCodeType::_register();

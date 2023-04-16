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
 * This enumerated type identifies all of the payment methods supported for the 'Pay Upon Invoice' feature. The 'Pay
 * Upon Invoice' feature is only available through the eBay Germany marketplace.
 **/
class BuyerPaymentInstrumentCodeType extends EbatNs_EnumType
{
    const TAG = 'BuyerPaymentInstrumentCodeType';
    const NAME = 'BuyerPaymentInstrumentCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This enumeration value indicates that no payment method was specified by the seller.
     **/
    const CodeType_None = 'None';

    /**
     * This enumeration value indicates that a credit card was used to pay for the order.
     **/
    const CodeType_CreditCard = 'CreditCard';

    /**
     * This enumeration value indicates that a bank debit card was used to pay for the order.
     **/
    const CodeType_BankDirectDebit = 'BankDirectDebit';

    /**
     * This enumeration value indicates that PayPal was used to pay for the order.
     **/
    const CodeType_PayPal = 'PayPal';

    /**
     * This enumeration value indicates that Elektronisches Lastschriftverfahren (direct debit) was used to pay for the
     * order.
     **/
    const CodeType_ELV = 'ELV';

    /**
     * This enumeration value indicates that an unknown credit card was used to pay for the order.
     **/
    const CodeType_LocalPaymentCreditCardOther = 'LocalPaymentCreditCardOther';

    /**
     * This enumeration value indicates that Elektronisches Lastschriftverfahren (direct debit) was used locally to pay
     * for the order.
     **/
    const CodeType_LocalPaymentELV = 'LocalPaymentELV';

    /**
     * This enumeration value indicates that a Master Card credit card was used to pay for the order.
     **/
    const CodeType_LocalPaymentMasterCard = 'LocalPaymentMasterCard';

    /**
     * This enumeration value indicates that an American Express credit card was used to pay for the order.
     **/
    const CodeType_LocalPaymentAMEX = 'LocalPaymentAMEX';

    /**
     * This enumeration value indicates that a Visa credit card was used to pay for the order.
     **/
    const CodeType_LocalPaymentVISA = 'LocalPaymentVISA';

    /**
     * This enumeration value indicates that a Discover credit card was used to pay for the order.
     **/
    const CodeType_LocalPaymentDiscover = 'LocalPaymentDiscover';

    /**
     * This enumeration value indicates that a Diners Club credit card was used to pay for the order.
     **/
    const CodeType_LocalPaymentDinersclub = 'LocalPaymentDinersclub';

    /**
     * This enumeration value indicates that a JCB credit card was used to pay for the order.
     **/
    const CodeType_LocalPaymentJCB = 'LocalPaymentJCB';

    /**
     * This enumeration value indicates that a Switch debit card was used to pay for the order.
     **/
    const CodeType_LocalPaymentSWITCH = 'LocalPaymentSWITCH';

    /**
     * This enumeration value indicates that a Solo debit card was used to pay for the order.
     **/
    const CodeType_LocalPaymentSOLO = 'LocalPaymentSOLO';

    /**
     * This enumeration value indicates that Giropay was used to pay for the order.
     **/
    const CodeType_GIROPAY = 'GIROPAY';

    /**
     * This enumeration value indicates that BML was used to pay for the order.
     **/
    const CodeType_BML = 'BML';

    /**
     * This enumeration value indicates that the 'Pay Upon Invoice' option was offered to the buyer on the Germany site.
     **/
    const CodeType_PayUponInvoice = 'PayUponInvoice';

    /**
     * Reserved for internal or future use.
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
     * @return BuyerPaymentInstrumentCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param BuyerPaymentInstrumentCodeType|null $value
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
    public function isCreditCard()
    {
        return $this->_value === self::CodeType_CreditCard;
    }

    /**
     * @return bool
     */
    public function isBankDirectDebit()
    {
        return $this->_value === self::CodeType_BankDirectDebit;
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
    public function isELV()
    {
        return $this->_value === self::CodeType_ELV;
    }

    /**
     * @return bool
     */
    public function isLocalPaymentCreditCardOther()
    {
        return $this->_value === self::CodeType_LocalPaymentCreditCardOther;
    }

    /**
     * @return bool
     */
    public function isLocalPaymentELV()
    {
        return $this->_value === self::CodeType_LocalPaymentELV;
    }

    /**
     * @return bool
     */
    public function isLocalPaymentMasterCard()
    {
        return $this->_value === self::CodeType_LocalPaymentMasterCard;
    }

    /**
     * @return bool
     */
    public function isLocalPaymentAMEX()
    {
        return $this->_value === self::CodeType_LocalPaymentAMEX;
    }

    /**
     * @return bool
     */
    public function isLocalPaymentVISA()
    {
        return $this->_value === self::CodeType_LocalPaymentVISA;
    }

    /**
     * @return bool
     */
    public function isLocalPaymentDiscover()
    {
        return $this->_value === self::CodeType_LocalPaymentDiscover;
    }

    /**
     * @return bool
     */
    public function isLocalPaymentDinersclub()
    {
        return $this->_value === self::CodeType_LocalPaymentDinersclub;
    }

    /**
     * @return bool
     */
    public function isLocalPaymentJCB()
    {
        return $this->_value === self::CodeType_LocalPaymentJCB;
    }

    /**
     * @return bool
     */
    public function isLocalPaymentSWITCH()
    {
        return $this->_value === self::CodeType_LocalPaymentSWITCH;
    }

    /**
     * @return bool
     */
    public function isLocalPaymentSOLO()
    {
        return $this->_value === self::CodeType_LocalPaymentSOLO;
    }

    /**
     * @return bool
     */
    public function isGIROPAY()
    {
        return $this->_value === self::CodeType_GIROPAY;
    }

    /**
     * @return bool
     */
    public function isBML()
    {
        return $this->_value === self::CodeType_BML;
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

BuyerPaymentInstrumentCodeType::_register();

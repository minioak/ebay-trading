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
 * This enumerated type defines the payment methods that an eBay user can use to pay fees on monthly eBay invoice.
 **/
class SellerPaymentMethodCodeType extends EbatNs_EnumType
{
    const TAG = 'SellerPaymentMethodCodeType';
    const NAME = 'SellerPaymentMethodCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This enumeration value indicates that eBay does not currently have a payment method on file for the eBay user.
     **/
    const CodeType_NothingOnFile = 'NothingOnFile';

    /**
     * This enumeration value indicates that eBay will use the credit card on file to process the eBay user's monthly
     * invoice.
     **/
    const CodeType_CreditCard = 'CreditCard';

    /**
     * This enumeration value is deprecated.
     **/
    const CodeType_PayPal = 'PayPal';

    /**
     * This enumeration value indicates that eBay will debit the bank account on file to process the eBay user's monthly
     * invoice.
     **/
    const CodeType_DirectDebit = 'DirectDebit';

    /**
     * This enumeration value indicates that eBay will debit the bank account on file to process the eBay user's monthly
     * invoice. A signature will be needed from the eBay user before a payment can be processed.
     **/
    const CodeType_DirectDebitPendingSignatureMandate = 'DirectDebitPendingSignatureMandate';

    /**
     * This enumeration value indicates that the eBay user will use eBay Direct Pay to pay the monthly invoice.
     **/
    const CodeType_eBayDirectPay = 'eBayDirectPay';

    /**
     * (out) Reserved for internal or future use
     **/
    const CodeType_CustomCode = 'CustomCode';

    /**
     * This enumeration value indicates that eBay will debit the bank account on file to process the eBay user's monthly
     * invoice. However, the bank account information must be verified before a payment can be processed.
     **/
    const CodeType_DirectDebitPendingVerification = 'DirectDebitPendingVerification';
    
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
     * @return SellerPaymentMethodCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param SellerPaymentMethodCodeType|null $value
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
    public function isNothingOnFile()
    {
        return $this->_value === self::CodeType_NothingOnFile;
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
    public function isPayPal()
    {
        return $this->_value === self::CodeType_PayPal;
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
    public function isDirectDebitPendingSignatureMandate()
    {
        return $this->_value === self::CodeType_DirectDebitPendingSignatureMandate;
    }

    /**
     * @return bool
     */
    public function isEBayDirectPay()
    {
        return $this->_value === self::CodeType_eBayDirectPay;
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
    public function isDirectDebitPendingVerification()
    {
        return $this->_value === self::CodeType_DirectDebitPendingVerification;
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

SellerPaymentMethodCodeType::_register();

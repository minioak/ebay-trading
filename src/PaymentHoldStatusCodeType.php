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
 * Enumerated type that contains the list of possible values that can be returned
 * in the
 * PaymentHoldStatus
 * container.
 **/
class PaymentHoldStatusCodeType extends EbatNs_EnumType
{
    const TAG = 'PaymentHoldStatusCodeType';
    const NAME = 'PaymentHoldStatusCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This value indicates a possible issue with the buyer that needs to be reviewed by eBay.
     **/
    const CodeType_PaymentReview = 'PaymentReview';

    /**
     * This value indicates a possible issue with the seller that needs to be reviewed by eBay.
     **/
    const CodeType_MerchantHold = 'MerchantHold';

    /**
     * This value indicates that a payment hold on the order has been released.
     **/
    const CodeType_Released = 'Released';

    /**
     * This value indicates that there is no payment hold on the order.
     **/
    const CodeType_None = 'None';

    /**
     * This value indicates that there is a "new seller hold" on the order. eBay
     * may hold payments to a new seller for up to 21 days.
     **/
    const CodeType_NewSellerHold = 'NewSellerHold';

    /**
     * This value indicates that there is a payment hold on the order.
     **/
    const CodeType_PaymentHold = 'PaymentHold';

    /**
     * This value indicates that the process for the release of funds for the
     * order has been initiated.
     **/
    const CodeType_ReleasePending = 'ReleasePending';

    /**
     * This value indicates that the funds are available in the seller's account.
     **/
    const CodeType_ReleaseConfirmed = 'ReleaseConfirmed';

    /**
     * This value is no longer used.
     **/
    const CodeType_ReleaseFailed = 'ReleaseFailed';

    /**
     * This value is reserved for internal or future use.
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
     * @return PaymentHoldStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param PaymentHoldStatusCodeType|null $value
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
    public function isPaymentReview()
    {
        return $this->_value === self::CodeType_PaymentReview;
    }

    /**
     * @return bool
     */
    public function isMerchantHold()
    {
        return $this->_value === self::CodeType_MerchantHold;
    }

    /**
     * @return bool
     */
    public function isReleased()
    {
        return $this->_value === self::CodeType_Released;
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
    public function isNewSellerHold()
    {
        return $this->_value === self::CodeType_NewSellerHold;
    }

    /**
     * @return bool
     */
    public function isPaymentHold()
    {
        return $this->_value === self::CodeType_PaymentHold;
    }

    /**
     * @return bool
     */
    public function isReleasePending()
    {
        return $this->_value === self::CodeType_ReleasePending;
    }

    /**
     * @return bool
     */
    public function isReleaseConfirmed()
    {
        return $this->_value === self::CodeType_ReleaseConfirmed;
    }

    /**
     * @return bool
     */
    public function isReleaseFailed()
    {
        return $this->_value === self::CodeType_ReleaseFailed;
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

PaymentHoldStatusCodeType::_register();

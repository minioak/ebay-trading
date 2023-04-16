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
 * Type defining the values that can be returned in the
 * eBayPaymentStatus
 * 
 * field of order management calls. These values indicate the current status of the buyer's
 * payment for an order.
 **/
class PaymentStatusCodeType extends EbatNs_EnumType
{
    const TAG = 'PaymentStatusCodeType';
    const NAME = 'PaymentStatusCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This value indicates that the buyer's payment for the order has cleared. A
     * 
     * CheckoutStatus.eBayPaymentStatus
     * value of 'NoPaymentFailure'
     * and a
     * CheckoutStatus.Status
     * value of 'Complete' indicates that
     * checkout is complete.
     **/
    const CodeType_NoPaymentFailure = 'NoPaymentFailure';

    /**
     * This value should no longer be returned as electronic checks are no longer a valid buyer payment method on any
     * eBay marketplace.
     **/
    const CodeType_BuyerECheckBounced = 'BuyerECheckBounced';

    /**
     * This value should no longer be returned as the buyer's form of electronic payment is no longer exposed to the
     * seller since eBay now receives payment from the buyer.
     **/
    const CodeType_BuyerCreditCardFailed = 'BuyerCreditCardFailed';

    /**
     * This value indicates that the seller reported the buyer's offline payment as failed. This enumeration value would
     * only be applicable for a sales transaction that occurred off of eBay's platform.
     **/
    const CodeType_BuyerFailedPaymentReportedBySeller = 'BuyerFailedPaymentReportedBySeller';

    /**
     * This value should no longer be returned as the buyer's form of electronic payment is no longer exposed to the
     * seller since eBay now receives payment from the buyer.
     **/
    const CodeType_PayPalPaymentInProcess = 'PayPalPaymentInProcess';

    /**
     * This value indicates that the buyer's payment is in process, but has not yet cleared.
     * 
     * 
     * <span class="tablenote">
     * Note:
     * This value may also get returned for a sales transaction that occurred off of eBay's platform, and the
     * payment status may stay in this state unless the seller marks the order as paid.</span>
     **/
    const CodeType_PaymentInProcess = 'PaymentInProcess';

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
     * @return PaymentStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param PaymentStatusCodeType|null $value
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
    public function isNoPaymentFailure()
    {
        return $this->_value === self::CodeType_NoPaymentFailure;
    }

    /**
     * @return bool
     */
    public function isBuyerECheckBounced()
    {
        return $this->_value === self::CodeType_BuyerECheckBounced;
    }

    /**
     * @return bool
     */
    public function isBuyerCreditCardFailed()
    {
        return $this->_value === self::CodeType_BuyerCreditCardFailed;
    }

    /**
     * @return bool
     */
    public function isBuyerFailedPaymentReportedBySeller()
    {
        return $this->_value === self::CodeType_BuyerFailedPaymentReportedBySeller;
    }

    /**
     * @return bool
     */
    public function isPayPalPaymentInProcess()
    {
        return $this->_value === self::CodeType_PayPalPaymentInProcess;
    }

    /**
     * @return bool
     */
    public function isPaymentInProcess()
    {
        return $this->_value === self::CodeType_PaymentInProcess;
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

PaymentStatusCodeType::_register();

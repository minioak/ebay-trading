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
 * Enumerated type that defines the seller's preference for allowing
 * <a
 * href="https://developer.ebay.com/DevZone/guides/features-guide/default.html#development/Listing-AnItem.html#CombinedInvoice">Combined
 * Invoice</a>
 * orders that pass on a shipping discounts to the buyer.
 **/
class CombinedPaymentOptionCodeType extends EbatNs_EnumType
{
    const TAG = 'CombinedPaymentOptionCodeType';
    const NAME = 'CombinedPaymentOptionCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This value indicates that the seller does not allow Combined Invoice orders. In
     * other words, the buyer must pay for each order line item separately, and cannot
     * combine multiple single line item orders into one Combined Invoice order and make
     * one payment for that order.
     **/
    const CodeType_NoCombinedPayment = 'NoCombinedPayment';

    /**
     * This value indicates that the seller allows Combined Invoice orders, and that the
     * seller has one or more shipping discount rules (Flat, Calculated, or Promotional)
     * that can be applied at the listing level.
     **/
    const CodeType_DiscountSpecified = 'DiscountSpecified';

    /**
     * This value indicates that the seller allows Combined Invoice orders, and that the
     * seller will apply any shipping discounts after the creation of the Combined Invoice
     * order.
     **/
    const CodeType_SpecifyDiscountLater = 'SpecifyDiscountLater';

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
     * @return CombinedPaymentOptionCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param CombinedPaymentOptionCodeType|null $value
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
    public function isNoCombinedPayment()
    {
        return $this->_value === self::CodeType_NoCombinedPayment;
    }

    /**
     * @return bool
     */
    public function isDiscountSpecified()
    {
        return $this->_value === self::CodeType_DiscountSpecified;
    }

    /**
     * @return bool
     */
    public function isSpecifyDiscountLater()
    {
        return $this->_value === self::CodeType_SpecifyDiscountLater;
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

CombinedPaymentOptionCodeType::_register();

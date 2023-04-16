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
 * This enumerated type contains the list of values that can be used by the seller to set
 * the number of days after item purchase that an unpaid order can be combined with one
 * or more other mutual (same buyer and same seller) unpaid orders into one
 * <a
 * href="https://developer.ebay.com/DevZone/guides/features-guide/default.html#development/Listing-AnItem.html#CombinedInvoice">Combined
 * Invoice</a>
 * order. Either the buyer or the seller can initiate the Combined Invoice
 * process. Sellers can offer buyers shipping discounts through Combined Invoice orders,
 * and buyers only have to make one payment for multiple orders as opposed to a payment
 * for each order.
 **/
class CombinedPaymentPeriodCodeType extends EbatNs_EnumType
{
    const TAG = 'CombinedPaymentPeriodCodeType';
    const NAME = 'CombinedPaymentPeriodCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This value indicates that an unpaid order can be combined into a Combined Invoice
     * order within three days after purchase (creation of order).
     **/
    const CodeType_Days_3 = 'Days_3';

    /**
     * This value indicates that an unpaid order can be combined into a Combined Invoice
     * order within five days after purchase (creation of order).
     **/
    const CodeType_Days_5 = 'Days_5';

    /**
     * This value indicates that an unpaid order can be combined into a Combined Invoice
     * order within seven days after purchase (creation of order).
     **/
    const CodeType_Days_7 = 'Days_7';

    /**
     * This value indicates that an unpaid order can be combined into a Combined Invoice
     * order within 14 days after purchase (creation of order).
     **/
    const CodeType_Days_14 = 'Days_14';

    /**
     * This value indicates that an unpaid order can be combined into a Combined Invoice
     * order within 30 days after purchase (creation of order).
     **/
    const CodeType_Days_30 = 'Days_30';

    /**
     * This value indicates that an order is not eligible to be combined into a Combined
     * Payment order.
     **/
    const CodeType_Ineligible = 'Ineligible';

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
     * @return CombinedPaymentPeriodCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param CombinedPaymentPeriodCodeType|null $value
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
    public function isDays_3()
    {
        return $this->_value === self::CodeType_Days_3;
    }

    /**
     * @return bool
     */
    public function isDays_5()
    {
        return $this->_value === self::CodeType_Days_5;
    }

    /**
     * @return bool
     */
    public function isDays_7()
    {
        return $this->_value === self::CodeType_Days_7;
    }

    /**
     * @return bool
     */
    public function isDays_14()
    {
        return $this->_value === self::CodeType_Days_14;
    }

    /**
     * @return bool
     */
    public function isDays_30()
    {
        return $this->_value === self::CodeType_Days_30;
    }

    /**
     * @return bool
     */
    public function isIneligible()
    {
        return $this->_value === self::CodeType_Ineligible;
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

CombinedPaymentPeriodCodeType::_register();

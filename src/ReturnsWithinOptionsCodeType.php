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
 * This enumerated type contains the list of values that can be used by the seller in an Add/Revise/Relist call to
 * set the number of days (after the purchase date) that a buyer has to return an item (if the return policy states
 * that items can be returned) for a refund or an exchange. These same values are also returned in the
 * GeteBayDetails
 * call.
 * 
 * <span class="tablenote">
 * Note:
 * The
 * GeteBayDetails
 * call returns site-default Return Policy settings. For most categories within a given eBay site, the supported
 * Return Policy options/values are the same, but there a few exceptions. To discover what return durations that a
 * particular category supports, call
 * GetCategoryFeatures
 * and include <code>DomesticReturnsDurationValues</code> and/or <code>InternationalReturnsDurationValues</code> as
 * FeatureID
 * values to see the return durations available for domestic and international returns, respectively.
 * </span>
 **/
class ReturnsWithinOptionsCodeType extends EbatNs_EnumType
{
    const TAG = 'ReturnsWithinOptionsCodeType';
    const NAME = 'ReturnsWithinOptionsCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This value is deprecated. Listings created or revised with this value will be
     * blocked.
     **/
    const CodeType_Days_3 = 'Days_3';

    /**
     * This value is deprecated. Listings created or revised with this value will be
     * blocked.
     **/
    const CodeType_Days_7 = 'Days_7';

    /**
     * This value is deprecated. Listings created or revised with this value will be
     * blocked.
     **/
    const CodeType_Days_10 = 'Days_10';

    /**
     * The seller specifies this value to enable a 14-day return policy. A buyer must
     * return an item within 14 days after purchase in order to receive a refund or
     * an exchange/replacement item.
     **/
    const CodeType_Days_14 = 'Days_14';

    /**
     * The seller specifies this value to enable a 30-day return policy. A buyer must
     * return an item within 30 days after purchase in order to receive a refund or
     * an exchange/replacement item.
     * 
     * <span class="tablenote">
     * Note:
     * To qualify as a Top-Rated Plus listing, a 30-day (or longer) return period must be set.
     * </span>
     **/
    const CodeType_Days_30 = 'Days_30';

    /**
     * The seller specifies this value to enable a 60-day return policy. A buyer must
     * return an item within 60 days after purchase in order to receive a refund or
     * an exchange/replacement item.
     **/
    const CodeType_Days_60 = 'Days_60';

    /**
     * The seller specifies this value to enable a one-month return policy. A buyer must return an item within one month
     * after purchase in order to receive a refund or an exchange.
     * 
     * <span class="tablenote">
     * Note:
     * This value, historically only supported on the DE and AT sites, is scheduled to be deprecated, and DE and AT
     * sellers may be blocked if they do use this value. Use <code>Days_30</code> instead.
     * </span>
     **/
    const CodeType_Months_1 = 'Months_1';

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
     * @return ReturnsWithinOptionsCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param ReturnsWithinOptionsCodeType|null $value
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
    public function isDays_7()
    {
        return $this->_value === self::CodeType_Days_7;
    }

    /**
     * @return bool
     */
    public function isDays_10()
    {
        return $this->_value === self::CodeType_Days_10;
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
    public function isDays_60()
    {
        return $this->_value === self::CodeType_Days_60;
    }

    /**
     * @return bool
     */
    public function isMonths_1()
    {
        return $this->_value === self::CodeType_Months_1;
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

ReturnsWithinOptionsCodeType::_register();

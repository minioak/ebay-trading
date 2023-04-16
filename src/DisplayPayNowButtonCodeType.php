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
 * This enumerated type is used to control how the "Buy It Now" button is displayed on a listing.
 * 
 * <span class="tablenote">
 * Note:
 * Although the
 * DisplayPayNowButton
 * value can still be set in
 * SetUserPreferences
 * and is returned in
 * GetUserPreferences
 * , this setting will not have any affect on any current or future listings.
 * </span>
 **/
class DisplayPayNowButtonCodeType extends EbatNs_EnumType
{
    const TAG = 'DisplayPayNowButtonCodeType';
    const NAME = 'DisplayPayNowButtonCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This enumeration value was formerly used to display the "Pay Now" button regardless of the buyer's  payment
     * method.
     **/
    const CodeType_ShowPayNowButtonForAllPaymentMethods = 'ShowPayNowButtonForAllPaymentMethods';

    /**
     * This enumeration value is deprecated.
     **/
    const CodeType_ShowPayNowButtonForPayPalOnly = 'ShowPayNowButtonForPayPalOnly';

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
     * @return DisplayPayNowButtonCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param DisplayPayNowButtonCodeType|null $value
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
    public function isShowPayNowButtonForAllPaymentMethods()
    {
        return $this->_value === self::CodeType_ShowPayNowButtonForAllPaymentMethods;
    }

    /**
     * @return bool
     */
    public function isShowPayNowButtonForPayPalOnly()
    {
        return $this->_value === self::CodeType_ShowPayNowButtonForPayPalOnly;
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

DisplayPayNowButtonCodeType::_register();

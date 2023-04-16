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
 * Used to indicate whether the payment method will be displayed for a category
 * belonging to the Lead Generation Format.
 **/
class ClassifiedAdPaymentMethodEnabledCodeType extends EbatNs_EnumType
{
    const TAG = 'ClassifiedAdPaymentMethodEnabledCodeType';
    const NAME = 'ClassifiedAdPaymentMethodEnabledCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * Display the payment method and permit checkout.
     **/
    const CodeType_EnabledWithCheckout = 'EnabledWithCheckout';

    /**
     * Display the payment method and suppress checkout.
     **/
    const CodeType_EnabledWithoutCheckout = 'EnabledWithoutCheckout';

    /**
     * Do not display the payment method.
     **/
    const CodeType_NotSupported = 'NotSupported';

    /**
     * (out) Reserved for internal or future use.
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
     * @return ClassifiedAdPaymentMethodEnabledCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param ClassifiedAdPaymentMethodEnabledCodeType|null $value
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
    public function isEnabledWithCheckout()
    {
        return $this->_value === self::CodeType_EnabledWithCheckout;
    }

    /**
     * @return bool
     */
    public function isEnabledWithoutCheckout()
    {
        return $this->_value === self::CodeType_EnabledWithoutCheckout;
    }

    /**
     * @return bool
     */
    public function isNotSupported()
    {
        return $this->_value === self::CodeType_NotSupported;
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

ClassifiedAdPaymentMethodEnabledCodeType::_register();

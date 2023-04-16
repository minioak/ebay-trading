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
 * This enumerated type is deprecated.
 **/
class PaymentOptionsGroupEnabledCodeType extends EbatNs_EnumType
{
    const TAG = 'PaymentOptionsGroupEnabledCodeType';
    const NAME = 'PaymentOptionsGroupEnabledCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This value is not used.
     **/
    const CodeType_eBayPaymentProcessEnabled = 'eBayPaymentProcessEnabled';

    /**
     * This value is not used.
     **/
    const CodeType_NonStandardPaymentsEnabled = 'NonStandardPaymentsEnabled';

    /**
     * This value is not used.
     **/
    const CodeType_eBayPaymentProcessExcluded = 'eBayPaymentProcessExcluded';

    /**
     * This value is not used.
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
     * @return PaymentOptionsGroupEnabledCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param PaymentOptionsGroupEnabledCodeType|null $value
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
    public function isEBayPaymentProcessEnabled()
    {
        return $this->_value === self::CodeType_eBayPaymentProcessEnabled;
    }

    /**
     * @return bool
     */
    public function isNonStandardPaymentsEnabled()
    {
        return $this->_value === self::CodeType_NonStandardPaymentsEnabled;
    }

    /**
     * @return bool
     */
    public function isEBayPaymentProcessExcluded()
    {
        return $this->_value === self::CodeType_eBayPaymentProcessExcluded;
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

PaymentOptionsGroupEnabledCodeType::_register();

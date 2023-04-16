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
 * This enumeration type is deprecated.
 **/
class PayPalAccountTypeCodeType extends EbatNs_EnumType
{
    const TAG = 'PayPalAccountTypeCodeType';
    const NAME = 'PayPalAccountTypeCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This enumeration value is deprecated.
     **/
    const CodeType_Personal = 'Personal';

    /**
     * This enumeration value is deprecated.
     **/
    const CodeType_Premier = 'Premier';

    /**
     * This enumeration value is deprecated.
     **/
    const CodeType_Business = 'Business';

    /**
     * This enumeration value is deprecated.
     **/
    const CodeType_Unknown = 'Unknown';

    /**
     * This enumeration value is deprecated.
     **/
    const CodeType_Invalid = 'Invalid';

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
     * @return PayPalAccountTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param PayPalAccountTypeCodeType|null $value
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
    public function isPersonal()
    {
        return $this->_value === self::CodeType_Personal;
    }

    /**
     * @return bool
     */
    public function isPremier()
    {
        return $this->_value === self::CodeType_Premier;
    }

    /**
     * @return bool
     */
    public function isBusiness()
    {
        return $this->_value === self::CodeType_Business;
    }

    /**
     * @return bool
     */
    public function isUnknown()
    {
        return $this->_value === self::CodeType_Unknown;
    }

    /**
     * @return bool
     */
    public function isInvalid()
    {
        return $this->_value === self::CodeType_Invalid;
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

PayPalAccountTypeCodeType::_register();

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
class PayPalAccountLevelCodeType extends EbatNs_EnumType
{
    const TAG = 'PayPalAccountLevelCodeType';
    const NAME = 'PayPalAccountLevelCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This enumeration value is deprecated.
     **/
    const CodeType_Unverified = 'Unverified';

    /**
     * This enumeration value is deprecated.
     **/
    const CodeType_InternationalUnverified = 'InternationalUnverified';

    /**
     * This enumeration value is deprecated.
     **/
    const CodeType_Verified = 'Verified';

    /**
     * This enumeration value is deprecated.
     **/
    const CodeType_InternationalVerified = 'InternationalVerified';

    /**
     * This enumeration value is deprecated.
     **/
    const CodeType_Trusted = 'Trusted';

    /**
     * This enumeration value is deprecated.
     **/
    const CodeType_Unknown = 'Unknown';

    /**
     * This enumeration value is deprecated.
     **/
    const CodeType_Invalid = 'Invalid';

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
     * @return PayPalAccountLevelCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param PayPalAccountLevelCodeType|null $value
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
    public function isUnverified()
    {
        return $this->_value === self::CodeType_Unverified;
    }

    /**
     * @return bool
     */
    public function isInternationalUnverified()
    {
        return $this->_value === self::CodeType_InternationalUnverified;
    }

    /**
     * @return bool
     */
    public function isVerified()
    {
        return $this->_value === self::CodeType_Verified;
    }

    /**
     * @return bool
     */
    public function isInternationalVerified()
    {
        return $this->_value === self::CodeType_InternationalVerified;
    }

    /**
     * @return bool
     */
    public function isTrusted()
    {
        return $this->_value === self::CodeType_Trusted;
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

PayPalAccountLevelCodeType::_register();

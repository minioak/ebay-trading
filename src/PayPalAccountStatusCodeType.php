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
class PayPalAccountStatusCodeType extends EbatNs_EnumType
{
    const TAG = 'PayPalAccountStatusCodeType';
    const NAME = 'PayPalAccountStatusCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This enumeration value is deprecated.
     **/
    const CodeType_Active = 'Active';

    /**
     * This enumeration value is deprecated.
     **/
    const CodeType_Closed = 'Closed';

    /**
     * This enumeration value is deprecated.
     **/
    const CodeType_HighRestricted = 'HighRestricted';

    /**
     * This enumeration value is deprecated.
     **/
    const CodeType_LowRestricted = 'LowRestricted';

    /**
     * This enumeration value is deprecated.
     **/
    const CodeType_Locked = 'Locked';

    /**
     * Reserved for internal or future use
     **/
    const CodeType_CustomCode = 'CustomCode';

    /**
     * This enumeration value is deprecated.
     **/
    const CodeType_WireOff = 'WireOff';

    /**
     * This enumeration value is deprecated.
     **/
    const CodeType_Unknown = 'Unknown';

    /**
     * This enumeration value is deprecated.
     **/
    const CodeType_Invalid = 'Invalid';
    
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
     * @return PayPalAccountStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param PayPalAccountStatusCodeType|null $value
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
    public function isActive()
    {
        return $this->_value === self::CodeType_Active;
    }

    /**
     * @return bool
     */
    public function isClosed()
    {
        return $this->_value === self::CodeType_Closed;
    }

    /**
     * @return bool
     */
    public function isHighRestricted()
    {
        return $this->_value === self::CodeType_HighRestricted;
    }

    /**
     * @return bool
     */
    public function isLowRestricted()
    {
        return $this->_value === self::CodeType_LowRestricted;
    }

    /**
     * @return bool
     */
    public function isLocked()
    {
        return $this->_value === self::CodeType_Locked;
    }

    /**
     * @return bool
     */
    public function isCustomCode()
    {
        return $this->_value === self::CodeType_CustomCode;
    }

    /**
     * @return bool
     */
    public function isWireOff()
    {
        return $this->_value === self::CodeType_WireOff;
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
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([], parent::NAME);
        self::assignAttributes([]);
    }

}

PayPalAccountStatusCodeType::_register();

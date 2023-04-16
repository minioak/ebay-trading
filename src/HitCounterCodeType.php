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
 * This type is deprecated.
 **/
class HitCounterCodeType extends EbatNs_EnumType
{
    const TAG = 'HitCounterCodeType';
    const NAME = 'HitCounterCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This value is deprecated.
     **/
    const CodeType_NoHitCounter = 'NoHitCounter';

    /**
     * This value is deprecated.
     **/
    const CodeType_HonestyStyle = 'HonestyStyle';

    /**
     * This value is deprecated.
     **/
    const CodeType_GreenLED = 'GreenLED';

    /**
     * This value is deprecated.
     **/
    const CodeType_Hidden = 'Hidden';

    /**
     * This value is deprecated.
     **/
    const CodeType_BasicStyle = 'BasicStyle';

    /**
     * This value is deprecated.
     **/
    const CodeType_RetroStyle = 'RetroStyle';

    /**
     * This value is deprecated.
     **/
    const CodeType_HiddenStyle = 'HiddenStyle';

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
     * @return HitCounterCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param HitCounterCodeType|null $value
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
    public function isNoHitCounter()
    {
        return $this->_value === self::CodeType_NoHitCounter;
    }

    /**
     * @return bool
     */
    public function isHonestyStyle()
    {
        return $this->_value === self::CodeType_HonestyStyle;
    }

    /**
     * @return bool
     */
    public function isGreenLED()
    {
        return $this->_value === self::CodeType_GreenLED;
    }

    /**
     * @return bool
     */
    public function isHidden()
    {
        return $this->_value === self::CodeType_Hidden;
    }

    /**
     * @return bool
     */
    public function isBasicStyle()
    {
        return $this->_value === self::CodeType_BasicStyle;
    }

    /**
     * @return bool
     */
    public function isRetroStyle()
    {
        return $this->_value === self::CodeType_RetroStyle;
    }

    /**
     * @return bool
     */
    public function isHiddenStyle()
    {
        return $this->_value === self::CodeType_HiddenStyle;
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

HitCounterCodeType::_register();

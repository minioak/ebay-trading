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
 * Units of measure that you can use to specify properties such as weight and size
 * dimensions.
 **/
class UnitCodeType extends EbatNs_EnumType
{
    const TAG = 'UnitCodeType';
    const NAME = 'UnitCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * Kilograms
     **/
    const CodeType_kg = 'kg';

    /**
     * Grams
     **/
    const CodeType_gm = 'gm';

    /**
     * Pounds
     **/
    const CodeType_lbs = 'lbs';

    /**
     * Ounces
     **/
    const CodeType_oz = 'oz';

    /**
     * Centimeters
     **/
    const CodeType_cm = 'cm';

    /**
     * Milimeters
     **/
    const CodeType_mm = 'mm';

    /**
     * Inches
     **/
    const CodeType_inches = 'inches';

    /**
     * Feet
     **/
    const CodeType_ft = 'ft';

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
     * @return UnitCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param UnitCodeType|null $value
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
    public function isKg()
    {
        return $this->_value === self::CodeType_kg;
    }

    /**
     * @return bool
     */
    public function isGm()
    {
        return $this->_value === self::CodeType_gm;
    }

    /**
     * @return bool
     */
    public function isLbs()
    {
        return $this->_value === self::CodeType_lbs;
    }

    /**
     * @return bool
     */
    public function isOz()
    {
        return $this->_value === self::CodeType_oz;
    }

    /**
     * @return bool
     */
    public function isCm()
    {
        return $this->_value === self::CodeType_cm;
    }

    /**
     * @return bool
     */
    public function isMm()
    {
        return $this->_value === self::CodeType_mm;
    }

    /**
     * @return bool
     */
    public function isInches()
    {
        return $this->_value === self::CodeType_inches;
    }

    /**
     * @return bool
     */
    public function isFt()
    {
        return $this->_value === self::CodeType_ft;
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

UnitCodeType::_register();

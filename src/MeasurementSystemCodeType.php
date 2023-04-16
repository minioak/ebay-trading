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
 * This enumerated type defines the two measurement systems that are used globally.
 **/
class MeasurementSystemCodeType extends EbatNs_EnumType
{
    const TAG = 'MeasurementSystemCodeType';
    const NAME = 'MeasurementSystemCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This enumeration value indicates that the English system of measurement is being used. Also known as the Imperial
     * System of Measurement. Weights in this system are expressed as pounds and ounces, and package dimensions are
     * expressed as feet or inches.
     **/
    const CodeType_English = 'English';

    /**
     * This enumeration value indicates that the English system of measurement is being used. Weights in this system are
     * expressed as kilograms and grams, and package dimensions are expressed as meters or centimeters.
     **/
    const CodeType_Metric = 'Metric';
    
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
     * @return MeasurementSystemCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param MeasurementSystemCodeType|null $value
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
    public function isEnglish()
    {
        return $this->_value === self::CodeType_English;
    }

    /**
     * @return bool
     */
    public function isMetric()
    {
        return $this->_value === self::CodeType_Metric;
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

MeasurementSystemCodeType::_register();

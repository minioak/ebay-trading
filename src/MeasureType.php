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
 * Basic type for specifying measures and the system of measurement.
 * A decimal value (e.g., 10.25) is meaningful
 * as a measure when accompanied by a definition of the unit of measure (e.g., Pounds),
 * in which case the value specifies the quantity of that unit.
 * A MeasureType expresses both the value (a decimal) and, optionally, the unit and
 * the system of measurement.
 * Details such as shipping weights are specified as measure types.
 **/
class MeasureType extends EbatNs_SimpleType
{
    const TAG = 'MeasureType';
    const NAME = 'MeasureType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var float|null
     */
    protected $_value = null;


    /**
     * @param float|null $value
     */
    public function __construct($value = null)
    {
        $this->setTypeValue($value);
    }

    /**
     * @return float|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value, '_value');
    }

    /**
     * @param float|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $this->_value = self::_float($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([], parent::NAME);
        self::assignAttributes([
            'unit' => ['type' => 'token'],
            'measurementSystem' => ['type' => 'MeasurementSystemCodeType']]);
    }

}

MeasureType::_register();

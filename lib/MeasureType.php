<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'MeasurementSystemCodeType.php';

/**
  * Basic type for specifying measures and the system of measurement.
  * A decimal value (e.g., 10.25) is meaningful
  * as a measure when accompanied by a definition of the unit of measure (e.g., Pounds),
  * in which case the value specifies the quantity of that unit.
  * A MeasureType expresses both the value (a decimal) and, optionally, the unit and
  * the system of measurement.
  * Details such as shipping weights are specified as measure types.
  * 
  * Unit of measure. This attribute is shared by various fields,
  * representing units such as lbs, oz, kg, g, in, cm.
  * <br><br>
  * For weight, English major/minor units are pounds and ounces,
  * and metric major/minor units are kilograms and grams.
  * For length, the English unit is inches, and metric unit is centimeters.
  * <br><br>
  * To get the full list of package dimension and weight measurement units 
  * (and all alternative spellings and abbreviations) supported by your site, 
  * call <b>GeteBayDetails</b>.
  * 
  * The system of measurement (e.g., English).
  * 
 **/

class MeasureType extends EbatNs_ComplexType
{

	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('MeasureType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
));
		}
		$this->_attributes = array_merge($this->_attributes,
		array(
			'unit' =>
			array(
				'name' => ' unit',
				'type' => 'token',
				'use' => 'optional'
			),
			'measurementSystem' =>
			array(
				'name' => ' measurementSystem',
				'type' => 'MeasurementSystemCodeType',
				'use' => 'optional'
			)));
	}




}
?>

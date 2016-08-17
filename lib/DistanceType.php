<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**
  * This type is deprecated.
  * 
 **/

class DistanceType extends EbatNs_ComplexType
{
	/**
	* @var int
	**/
	protected $DistanceMeasurement;

	/**
	* @var string
	**/
	protected $DistanceUnit;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('DistanceType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'DistanceMeasurement' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DistanceUnit' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				)));
		}
		$this->_attributes = array_merge($this->_attributes,
		array(
));
	}

	/**
	 * @return int
	 **/
	function getDistanceMeasurement()
	{
		return $this->DistanceMeasurement;
	}

	/**
	 * @return void
	 **/
	function setDistanceMeasurement($value)
	{
		$this->DistanceMeasurement = $value;
	}

	/**
	 * @return string
	 **/
	function getDistanceUnit()
	{
		return $this->DistanceUnit;
	}

	/**
	 * @return void
	 **/
	function setDistanceUnit($value)
	{
		$this->DistanceUnit = $value;
	}

}
?>

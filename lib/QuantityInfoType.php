<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**
  * Currently applies to tickets. May apply to other categories in the future.
  * 
 **/

class QuantityInfoType extends EbatNs_ComplexType
{
	/**
	* @var int
	**/
	protected $MinimumRemnantSet;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('QuantityInfoType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'MinimumRemnantSet' =>
				array(
					'required' => false,
					'type' => 'int',
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
	function getMinimumRemnantSet()
	{
		return $this->MinimumRemnantSet;
	}

	/**
	 * @return void
	 **/
	function setMinimumRemnantSet($value)
	{
		$this->MinimumRemnantSet = $value;
	}

}
?>

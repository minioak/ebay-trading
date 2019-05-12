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

class ProductFinderConstraintType extends EbatNs_ComplexType
{
	/**
	* @var string
	**/
	protected $DisplayName;

	/**
	* @var string
	**/
	protected $DisplayValue;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ProductFinderConstraintType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'DisplayName' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DisplayValue' =>
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
	 * @return string
	 **/
	function getDisplayName()
	{
		return $this->DisplayName;
	}

	/**
	 * @return void
	 **/
	function setDisplayName($value)
	{
		$this->DisplayName = $value;
	}

	/**
	 * @return string
	 **/
	function getDisplayValue()
	{
		return $this->DisplayValue;
	}

	/**
	 * @return void
	 **/
	function setDisplayValue($value)
	{
		$this->DisplayValue = $value;
	}

}
?>

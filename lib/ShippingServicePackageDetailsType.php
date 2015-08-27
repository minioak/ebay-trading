<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'ShippingPackageCodeType.php';

/**
  * Packages supported by the enclosing shipping service.
  * 
 **/

class ShippingServicePackageDetailsType extends EbatNs_ComplexType
{
	/**
	* @var ShippingPackageCodeType
	**/
	protected $Name;

	/**
	* @var boolean
	**/
	protected $DimensionsRequired;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ShippingServicePackageDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'Name' =>
				array(
					'required' => false,
					'type' => 'ShippingPackageCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DimensionsRequired' =>
				array(
					'required' => false,
					'type' => 'boolean',
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
	 * @return ShippingPackageCodeType
	 **/
	function getName()
	{
		return $this->Name;
	}

	/**
	 * @return void
	 **/
	function setName($value)
	{
		$this->Name = $value;
	}

	/**
	 * @return boolean
	 **/
	function getDimensionsRequired()
	{
		return $this->DimensionsRequired;
	}

	/**
	 * @return void
	 **/
	function setDimensionsRequired($value)
	{
		$this->DimensionsRequired = $value;
	}

}
?>

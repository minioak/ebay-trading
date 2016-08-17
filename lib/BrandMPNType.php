<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**
  * Type defining the <b>BrandMPN</b> container which is used to identify a product (through unique product brand and Manufacturer Part Number combination), and match that product to a product in the eBay Product Catalog.
  * 
 **/

class BrandMPNType extends EbatNs_ComplexType
{
	/**
	* @var string
	**/
	protected $Brand;

	/**
	* @var string
	**/
	protected $MPN;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('BrandMPNType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'Brand' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'MPN' =>
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
	function getBrand()
	{
		return $this->Brand;
	}

	/**
	 * @return void
	 **/
	function setBrand($value)
	{
		$this->Brand = $value;
	}

	/**
	 * @return string
	 **/
	function getMPN()
	{
		return $this->MPN;
	}

	/**
	 * @return void
	 **/
	function setMPN($value)
	{
		$this->MPN = $value;
	}

}
?>

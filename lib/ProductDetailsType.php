<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**
  * This type defines the <b>ProductDetails</b> container that is returned in the <b>GeteBayDetails</b> response if product identifiers (EANs, ISBNs, UPCs, MPN/Brand) are not supported for a category.
  * 
 **/

class ProductDetailsType extends EbatNs_ComplexType
{
	/**
	* @var string
	**/
	protected $ProductIdentifierUnavailableText;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ProductDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'ProductIdentifierUnavailableText' =>
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
	function getProductIdentifierUnavailableText()
	{
		return $this->ProductIdentifierUnavailableText;
	}

	/**
	 * @return void
	 **/
	function setProductIdentifierUnavailableText($value)
	{
		$this->ProductIdentifierUnavailableText = $value;
	}

}
?>

<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'ProductInfoType.php';

/**
  * This type is deprecated.
  * 
 **/

class ProductRecommendationsType extends EbatNs_ComplexType
{
	/**
	* @var ProductInfoType
	**/
	protected $Product;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ProductRecommendationsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'Product' =>
				array(
					'required' => false,
					'type' => 'ProductInfoType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				)));
		}
		$this->_attributes = array_merge($this->_attributes,
		array(
));
	}

	/**
	 * @return ProductInfoType
	 * @param integer $index 
	 **/
	function getProduct($index = null)
	{
		if ($index !== null)
		{
			return $this->Product[$index];
		}
		else
		{
			return $this->Product;
		}
	}

	/**
	 * @return void
	 * @param ProductInfoType $value
	 * @param integer $index 
	 **/
	function setProduct($value, $index = null)
	{
		if ($index !== null)
		{
			$this->Product[$index] = $value;
		}
		else
		{
			$this->Product= $value;
		}
	}

	/**
	 * @return void
	 * @param ProductInfoType $value
	 **/
	function addProduct($value)
	{
		$this->Product[] = $value;
	}

}
?>

<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractRequestType.php';
require_once 'ProductUseCaseCodeType.php';
require_once 'ProductType.php';

/**
  * his type is deprecated as the call is no longer available.
  * 
  * 
 **/

class GetProductSellingPagesRequestType extends AbstractRequestType
{
	/**
	* @var ProductUseCaseCodeType
	**/
	protected $UseCase;

	/**
	* @var ProductType
	**/
	protected $Product;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('GetProductSellingPagesRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'UseCase' =>
				array(
					'required' => false,
					'type' => 'ProductUseCaseCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Product' =>
				array(
					'required' => false,
					'type' => 'ProductType',
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
	 * @return ProductUseCaseCodeType
	 **/
	function getUseCase()
	{
		return $this->UseCase;
	}

	/**
	 * @return void
	 **/
	function setUseCase($value)
	{
		$this->UseCase = $value;
	}

	/**
	 * @return ProductType
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
	 * @param ProductType $value
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
	 * @param ProductType $value
	 **/
	function addProduct($value)
	{
		$this->Product[] = $value;
	}

}
?>

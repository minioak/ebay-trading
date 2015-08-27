<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'ProductType.php';

/**
  * This type is deprecated as <b>GetProduct*</b> calls were deprecated.
  * 
  * 
 **/

class ProductFamilyType extends EbatNs_ComplexType
{
	/**
	* @var ProductType
	**/
	protected $ParentProduct;

	/**
	* @var ProductType
	**/
	protected $FamilyMembers;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ProductFamilyType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'ParentProduct' =>
				array(
					'required' => false,
					'type' => 'ProductType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'FamilyMembers' =>
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
			'hasMoreChildren' =>
			array(
				'name' => ' hasMoreChildren',
				'type' => 'boolean',
				'use' => 'optional'
			)));
	}

	/**
	 * @return ProductType
	 **/
	function getParentProduct()
	{
		return $this->ParentProduct;
	}

	/**
	 * @return void
	 **/
	function setParentProduct($value)
	{
		$this->ParentProduct = $value;
	}

	/**
	 * @return ProductType
	 * @param integer $index 
	 **/
	function getFamilyMembers($index = null)
	{
		if ($index !== null)
		{
			return $this->FamilyMembers[$index];
		}
		else
		{
			return $this->FamilyMembers;
		}
	}

	/**
	 * @return void
	 * @param ProductType $value
	 * @param integer $index 
	 **/
	function setFamilyMembers($value, $index = null)
	{
		if ($index !== null)
		{
			$this->FamilyMembers[$index] = $value;
		}
		else
		{
			$this->FamilyMembers= $value;
		}
	}

	/**
	 * @return void
	 * @param ProductType $value
	 **/
	function addFamilyMembers($value)
	{
		$this->FamilyMembers[] = $value;
	}


}
?>

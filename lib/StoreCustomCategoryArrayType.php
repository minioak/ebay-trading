<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'StoreCustomCategoryType.php';

/**
  *   Set of custom categories for the Store.
  *   
 **/

class StoreCustomCategoryArrayType extends EbatNs_ComplexType
{
	/**
	* @var StoreCustomCategoryType
	**/
	protected $CustomCategory;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('StoreCustomCategoryArrayType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'CustomCategory' =>
				array(
					'required' => false,
					'type' => 'StoreCustomCategoryType',
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
	 * @return StoreCustomCategoryType
	 * @param integer $index 
	 **/
	function getCustomCategory($index = null)
	{
		if ($index !== null)
		{
			return $this->CustomCategory[$index];
		}
		else
		{
			return $this->CustomCategory;
		}
	}

	/**
	 * @return void
	 * @param StoreCustomCategoryType $value
	 * @param integer $index 
	 **/
	function setCustomCategory($value, $index = null)
	{
		if ($index !== null)
		{
			$this->CustomCategory[$index] = $value;
		}
		else
		{
			$this->CustomCategory= $value;
		}
	}

	/**
	 * @return void
	 * @param StoreCustomCategoryType $value
	 **/
	function addCustomCategory($value)
	{
		$this->CustomCategory[] = $value;
	}

}
?>

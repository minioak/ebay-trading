<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'ItemIDType.php';

/**
  * Type defining the <b>PromotionalSaleItemIDArray</b> container, which 
  * consists of an array of listings to which a Promotional Sale applies.
  * 
 **/

class ItemIDArrayType extends EbatNs_ComplexType
{
	/**
	* @var ItemIDType
	**/
	protected $ItemID;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ItemIDArrayType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'ItemID' =>
				array(
					'required' => false,
					'type' => 'ItemIDType',
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
	 * @return ItemIDType
	 * @param integer $index 
	 **/
	function getItemID($index = null)
	{
		if ($index !== null)
		{
			return $this->ItemID[$index];
		}
		else
		{
			return $this->ItemID;
		}
	}

	/**
	 * @return void
	 * @param ItemIDType $value
	 * @param integer $index 
	 **/
	function setItemID($value, $index = null)
	{
		if ($index !== null)
		{
			$this->ItemID[$index] = $value;
		}
		else
		{
			$this->ItemID= $value;
		}
	}

	/**
	 * @return void
	 * @param ItemIDType $value
	 **/
	function addItemID($value)
	{
		$this->ItemID[] = $value;
	}

}
?>

<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractResponseType.php';
require_once 'AddItemResponseContainerType.php';

/**
  * The response of the <b>AddItems</b> call. The response includes the 
  * Item IDs of the newly created listings, the eBay category each item is listed under, 
  * the seller-defined SKUs of the items (if any), the listing recommendations for each item 
  * (if applicable), the start and end time of each listing, and the estimated fees that
  * each listing will incur.
  * 
 **/

class AddItemsResponseType extends AbstractResponseType
{
	/**
	* @var AddItemResponseContainerType
	**/
	protected $AddItemResponseContainer;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('AddItemsResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'AddItemResponseContainer' =>
				array(
					'required' => false,
					'type' => 'AddItemResponseContainerType',
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
	 * @return AddItemResponseContainerType
	 * @param integer $index 
	 **/
	function getAddItemResponseContainer($index = null)
	{
		if ($index !== null)
		{
			return $this->AddItemResponseContainer[$index];
		}
		else
		{
			return $this->AddItemResponseContainer;
		}
	}

	/**
	 * @return void
	 * @param AddItemResponseContainerType $value
	 * @param integer $index 
	 **/
	function setAddItemResponseContainer($value, $index = null)
	{
		if ($index !== null)
		{
			$this->AddItemResponseContainer[$index] = $value;
		}
		else
		{
			$this->AddItemResponseContainer= $value;
		}
	}

	/**
	 * @return void
	 * @param AddItemResponseContainerType $value
	 **/
	function addAddItemResponseContainer($value)
	{
		$this->AddItemResponseContainer[] = $value;
	}

}
?>

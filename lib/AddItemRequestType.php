<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractRequestType.php';
require_once 'ItemType.php';

/**
  * Defines a single new item and lists it on a specified eBay site.&nbsp;<b>Also for Half.com</b>.
  * Returns the item ID for the new listing, and returns fees the seller will incur for the
  * listing (not including the Final Value Fee, which cannot be calculated until
  * the item is sold).
  * 
 **/

class AddItemRequestType extends AbstractRequestType
{
	/**
	* @var ItemType
	**/
	protected $Item;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('AddItemRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'Item' =>
				array(
					'required' => false,
					'type' => 'ItemType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				)));
		}
		$this->_attributes = array_merge($this->_attributes,
		array(
));
	}

	/**
	 * @return ItemType
	 **/
	function getItem()
	{
		return $this->Item;
	}

	/**
	 * @return void
	 **/
	function setItem($value)
	{
		$this->Item = $value;
	}

}
?>

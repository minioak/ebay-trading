<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'ItemType.php';

/**
  * Type defining the <b>AddItemRequestContainer</b> containers that are used in an <b>AddItems</b> call. An <b>AddItemRequestContainer</b> container is required for each item being created through an <b>AddItems</b> call. Each item being created through an <b>AddItems</b> call is identified through a unique <b>AddItemRequestContainer.MessageID</b> value that is defined by the seller.
  * 
 **/

class AddItemRequestContainerType extends EbatNs_ComplexType
{
	/**
	* @var ItemType
	**/
	protected $Item;

	/**
	* @var string
	**/
	protected $MessageID;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('AddItemRequestContainerType', 'urn:ebay:apis:eBLBaseComponents');
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
				),
				'MessageID' =>
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

	/**
	 * @return string
	 **/
	function getMessageID()
	{
		return $this->MessageID;
	}

	/**
	 * @return void
	 **/
	function setMessageID($value)
	{
		$this->MessageID = $value;
	}

}
?>

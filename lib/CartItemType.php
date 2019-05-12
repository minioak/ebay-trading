<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'ItemType.php';
require_once 'ModifyActionCodeType.php';

/**
  * This type is deprecated.
  * 
 **/

class CartItemType extends EbatNs_ComplexType
{
	/**
	* @var ItemType
	**/
	protected $Item;

	/**
	* @var long
	**/
	protected $ReferenceID;

	/**
	* @var ModifyActionCodeType
	**/
	protected $Action;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('CartItemType', 'urn:ebay:apis:eBLBaseComponents');
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
				'ReferenceID' =>
				array(
					'required' => false,
					'type' => 'long',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Action' =>
				array(
					'required' => false,
					'type' => 'ModifyActionCodeType',
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

	/**
	 * @return long
	 **/
	function getReferenceID()
	{
		return $this->ReferenceID;
	}

	/**
	 * @return void
	 **/
	function setReferenceID($value)
	{
		$this->ReferenceID = $value;
	}

	/**
	 * @return ModifyActionCodeType
	 **/
	function getAction()
	{
		return $this->Action;
	}

	/**
	 * @return void
	 **/
	function setAction($value)
	{
		$this->Action = $value;
	}

}
?>

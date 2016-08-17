<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractRequestType.php';
require_once 'ItemIDType.php';
require_once 'EndReasonCodeType.php';

/**
  * Ends the specified item listing before the date and time at which it would normally end per the listing duration.&nbsp;<b>Also for Half.com</b>.
  * 
 **/

class EndItemRequestType extends AbstractRequestType
{
	/**
	* @var ItemIDType
	**/
	protected $ItemID;

	/**
	* @var EndReasonCodeType
	**/
	protected $EndingReason;

	/**
	* @var string
	**/
	protected $SellerInventoryID;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('EndItemRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'ItemID' =>
				array(
					'required' => false,
					'type' => 'ItemIDType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'EndingReason' =>
				array(
					'required' => false,
					'type' => 'EndReasonCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SellerInventoryID' =>
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
	 * @return ItemIDType
	 **/
	function getItemID()
	{
		return $this->ItemID;
	}

	/**
	 * @return void
	 **/
	function setItemID($value)
	{
		$this->ItemID = $value;
	}

	/**
	 * @return EndReasonCodeType
	 **/
	function getEndingReason()
	{
		return $this->EndingReason;
	}

	/**
	 * @return void
	 **/
	function setEndingReason($value)
	{
		$this->EndingReason = $value;
	}

	/**
	 * @return string
	 **/
	function getSellerInventoryID()
	{
		return $this->SellerInventoryID;
	}

	/**
	 * @return void
	 **/
	function setSellerInventoryID($value)
	{
		$this->SellerInventoryID = $value;
	}

}
?>

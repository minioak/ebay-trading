<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractRequestType.php';
require_once 'ItemIDType.php';
require_once 'DisputeIDType.php';

/**
  * Enables a seller who has opted into the automated Unpaid Item Assistant mechanism to disable the Unpaid Item Assistant at the order line item level. This call can be made whether or not a Unpaid Item case exists for the order line item. If an Unpaid Item case has already been created by the Unpaid Item Assistant, it is converted to a "manual" case for the seller to manage like any other manually-created case.
  * 
 **/

class DisableUnpaidItemAssistanceRequestType extends AbstractRequestType
{
	/**
	* @var ItemIDType
	**/
	protected $ItemID;

	/**
	* @var string
	**/
	protected $TransactionID;

	/**
	* @var DisputeIDType
	**/
	protected $DisputeID;

	/**
	* @var string
	**/
	protected $OrderLineItemID;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('DisableUnpaidItemAssistanceRequestType', 'urn:ebay:apis:eBLBaseComponents');
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
				'TransactionID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DisputeID' =>
				array(
					'required' => false,
					'type' => 'DisputeIDType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'OrderLineItemID' =>
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
	 * @return string
	 **/
	function getTransactionID()
	{
		return $this->TransactionID;
	}

	/**
	 * @return void
	 **/
	function setTransactionID($value)
	{
		$this->TransactionID = $value;
	}

	/**
	 * @return DisputeIDType
	 **/
	function getDisputeID()
	{
		return $this->DisputeID;
	}

	/**
	 * @return void
	 **/
	function setDisputeID($value)
	{
		$this->DisputeID = $value;
	}

	/**
	 * @return string
	 **/
	function getOrderLineItemID()
	{
		return $this->OrderLineItemID;
	}

	/**
	 * @return void
	 **/
	function setOrderLineItemID($value)
	{
		$this->OrderLineItemID = $value;
	}

}
?>

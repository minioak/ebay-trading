<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractRequestType.php';
require_once 'ItemIDType.php';
require_once 'FeedbackInfoType.php';
require_once 'ListingTypeCodeType.php';
require_once 'ShipmentType.php';

/**
  * Enables a seller to do various tasks after the creation of a single line item or
  * multiple line item order. Typically, this call is used after the
  * buyer has paid for the order, but it can be called by the
  * seller beforehand. Typical post-payment tasks available to this call include
  * marking the order as paid, marking the order as shipped, providing shipment tracking
  * details, and leaving feedback for the buyer.
  * 
 **/

class CompleteSaleRequestType extends AbstractRequestType
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
	* @var FeedbackInfoType
	**/
	protected $FeedbackInfo;

	/**
	* @var boolean
	**/
	protected $Shipped;

	/**
	* @var boolean
	**/
	protected $Paid;

	/**
	* @var ListingTypeCodeType
	**/
	protected $ListingType;

	/**
	* @var ShipmentType
	**/
	protected $Shipment;

	/**
	* @var string
	**/
	protected $OrderID;

	/**
	* @var string
	**/
	protected $OrderLineItemID;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('CompleteSaleRequestType', 'urn:ebay:apis:eBLBaseComponents');
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
				'FeedbackInfo' =>
				array(
					'required' => false,
					'type' => 'FeedbackInfoType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Shipped' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Paid' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ListingType' =>
				array(
					'required' => false,
					'type' => 'ListingTypeCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Shipment' =>
				array(
					'required' => false,
					'type' => 'ShipmentType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'OrderID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
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
	 * @return FeedbackInfoType
	 **/
	function getFeedbackInfo()
	{
		return $this->FeedbackInfo;
	}

	/**
	 * @return void
	 **/
	function setFeedbackInfo($value)
	{
		$this->FeedbackInfo = $value;
	}

	/**
	 * @return boolean
	 **/
	function getShipped()
	{
		return $this->Shipped;
	}

	/**
	 * @return void
	 **/
	function setShipped($value)
	{
		$this->Shipped = $value;
	}

	/**
	 * @return boolean
	 **/
	function getPaid()
	{
		return $this->Paid;
	}

	/**
	 * @return void
	 **/
	function setPaid($value)
	{
		$this->Paid = $value;
	}

	/**
	 * @return ListingTypeCodeType
	 **/
	function getListingType()
	{
		return $this->ListingType;
	}

	/**
	 * @return void
	 **/
	function setListingType($value)
	{
		$this->ListingType = $value;
	}

	/**
	 * @return ShipmentType
	 **/
	function getShipment()
	{
		return $this->Shipment;
	}

	/**
	 * @return void
	 **/
	function setShipment($value)
	{
		$this->Shipment = $value;
	}

	/**
	 * @return string
	 **/
	function getOrderID()
	{
		return $this->OrderID;
	}

	/**
	 * @return void
	 **/
	function setOrderID($value)
	{
		$this->OrderID = $value;
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

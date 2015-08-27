<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractRequestType.php';
require_once 'DisputeIDType.php';
require_once 'DisputeActivityCodeType.php';

/**
  * Enables the seller to respond to an Item Not Received dispute opened by a buyer through PayPal's Purchase Protection program, or to update an Unpaid Item dispute. To respond to an Item Not Received or Item Significantly Not As Described case opened through eBay's Resolution Center, the seller should use the <a href="http://developer.ebay.com/Devzone/resolution-case-management/CallRef/index.html" target="_blank">Resolution Case Management API</a>, or manage the case through the eBay Resolution Center.
  * 
 **/

class AddDisputeResponseRequestType extends AbstractRequestType
{
	/**
	* @var DisputeIDType
	**/
	protected $DisputeID;

	/**
	* @var string
	**/
	protected $MessageText;

	/**
	* @var DisputeActivityCodeType
	**/
	protected $DisputeActivity;

	/**
	* @var string
	**/
	protected $ShippingCarrierUsed;

	/**
	* @var string
	**/
	protected $ShipmentTrackNumber;

	/**
	* @var dateTime
	**/
	protected $ShippingTime;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('AddDisputeResponseRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'DisputeID' =>
				array(
					'required' => false,
					'type' => 'DisputeIDType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'MessageText' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DisputeActivity' =>
				array(
					'required' => false,
					'type' => 'DisputeActivityCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ShippingCarrierUsed' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ShipmentTrackNumber' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ShippingTime' =>
				array(
					'required' => false,
					'type' => 'dateTime',
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
	function getMessageText()
	{
		return $this->MessageText;
	}

	/**
	 * @return void
	 **/
	function setMessageText($value)
	{
		$this->MessageText = $value;
	}

	/**
	 * @return DisputeActivityCodeType
	 **/
	function getDisputeActivity()
	{
		return $this->DisputeActivity;
	}

	/**
	 * @return void
	 **/
	function setDisputeActivity($value)
	{
		$this->DisputeActivity = $value;
	}

	/**
	 * @return string
	 **/
	function getShippingCarrierUsed()
	{
		return $this->ShippingCarrierUsed;
	}

	/**
	 * @return void
	 **/
	function setShippingCarrierUsed($value)
	{
		$this->ShippingCarrierUsed = $value;
	}

	/**
	 * @return string
	 **/
	function getShipmentTrackNumber()
	{
		return $this->ShipmentTrackNumber;
	}

	/**
	 * @return void
	 **/
	function setShipmentTrackNumber($value)
	{
		$this->ShipmentTrackNumber = $value;
	}

	/**
	 * @return dateTime
	 **/
	function getShippingTime()
	{
		return $this->ShippingTime;
	}

	/**
	 * @return void
	 **/
	function setShippingTime($value)
	{
		$this->ShippingTime = $value;
	}

}
?>

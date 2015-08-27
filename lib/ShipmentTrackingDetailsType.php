<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'ShipmentLineItemType.php';

/**
  * This type details the shipping carrier and shipment tracking number associated with a
  * package shipment. It also contains information about the line items shipped through the Global Shipping program.
  * 
 **/

class ShipmentTrackingDetailsType extends EbatNs_ComplexType
{
	/**
	* @var string
	**/
	protected $ShippingCarrierUsed;

	/**
	* @var string
	**/
	protected $ShipmentTrackingNumber;

	/**
	* @var ShipmentLineItemType
	**/
	protected $ShipmentLineItem;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ShipmentTrackingDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'ShippingCarrierUsed' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ShipmentTrackingNumber' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ShipmentLineItem' =>
				array(
					'required' => false,
					'type' => 'ShipmentLineItemType',
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
	function getShipmentTrackingNumber()
	{
		return $this->ShipmentTrackingNumber;
	}

	/**
	 * @return void
	 **/
	function setShipmentTrackingNumber($value)
	{
		$this->ShipmentTrackingNumber = $value;
	}

	/**
	 * @return ShipmentLineItemType
	 **/
	function getShipmentLineItem()
	{
		return $this->ShipmentLineItem;
	}

	/**
	 * @return void
	 **/
	function setShipmentLineItem($value)
	{
		$this->ShipmentLineItem = $value;
	}

}
?>

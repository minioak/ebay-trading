<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractResponseType.php';
require_once 'ShippingDetailsType.php';
require_once 'PickupInStoreDetailsType.php';

/**
  * Contains the data returned by the call. The shipping details for the specified
  * item are returned in a ShippingDetails object.
  * 
 **/

class GetItemShippingResponseType extends AbstractResponseType
{
	/**
	* @var ShippingDetailsType
	**/
	protected $ShippingDetails;

	/**
	* @var PickupInStoreDetailsType
	**/
	protected $PickUpInStoreDetails;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('GetItemShippingResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'ShippingDetails' =>
				array(
					'required' => false,
					'type' => 'ShippingDetailsType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PickUpInStoreDetails' =>
				array(
					'required' => false,
					'type' => 'PickupInStoreDetailsType',
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
	 * @return ShippingDetailsType
	 **/
	function getShippingDetails()
	{
		return $this->ShippingDetails;
	}

	/**
	 * @return void
	 **/
	function setShippingDetails($value)
	{
		$this->ShippingDetails = $value;
	}

	/**
	 * @return PickupInStoreDetailsType
	 **/
	function getPickUpInStoreDetails()
	{
		return $this->PickUpInStoreDetails;
	}

	/**
	 * @return void
	 **/
	function setPickUpInStoreDetails($value)
	{
		$this->PickUpInStoreDetails = $value;
	}

}
?>

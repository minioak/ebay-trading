<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'DeliveryStatusType.php';
require_once 'DeliveryDetailsType.php';

/**
  * <span class="tablenote"><strong>Note:</strong>
  * This type will be enabled with version 935. For those using versions older than 935, the <b>DigitalDeliverySelected</b>container will not be returned.
  * </span>
  * <br>
  * This type is used by the <b>DigitalDeliverySelected</b>container that is returned by <b>GetOrders</b> and other order management calls. The <b>DigitalDeliverySelected</b> container is only applicable and returned if the buyer purchased a digital gift card for themselves, or is giving the digital gift card to someone else as a gift.
  * 
 **/

class DigitalDeliverySelectedType extends EbatNs_ComplexType
{
	/**
	* @var token
	**/
	protected $DeliveryMethod;

	/**
	* @var DeliveryStatusType
	**/
	protected $DeliveryStatus;

	/**
	* @var DeliveryDetailsType
	**/
	protected $DeliveryDetails;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('DigitalDeliverySelectedType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'DeliveryMethod' =>
				array(
					'required' => false,
					'type' => 'token',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DeliveryStatus' =>
				array(
					'required' => false,
					'type' => 'DeliveryStatusType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DeliveryDetails' =>
				array(
					'required' => false,
					'type' => 'DeliveryDetailsType',
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
	 * @return token
	 **/
	function getDeliveryMethod()
	{
		return $this->DeliveryMethod;
	}

	/**
	 * @return void
	 **/
	function setDeliveryMethod($value)
	{
		$this->DeliveryMethod = $value;
	}

	/**
	 * @return DeliveryStatusType
	 **/
	function getDeliveryStatus()
	{
		return $this->DeliveryStatus;
	}

	/**
	 * @return void
	 **/
	function setDeliveryStatus($value)
	{
		$this->DeliveryStatus = $value;
	}

	/**
	 * @return DeliveryDetailsType
	 **/
	function getDeliveryDetails()
	{
		return $this->DeliveryDetails;
	}

	/**
	 * @return void
	 **/
	function setDeliveryDetails($value)
	{
		$this->DeliveryDetails = $value;
	}

}
?>

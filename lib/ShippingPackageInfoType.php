<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**
  * Type defining the <b>ShippingPackageInfoType</b> container, which is returned in order management calls. The <b>ShippingPackageInfoType</b> container provides information on delivery times and tracking information for a shipping package.
  * 
 **/

class ShippingPackageInfoType extends EbatNs_ComplexType
{
	/**
	* @var string
	**/
	protected $StoreID;

	/**
	* @var token
	**/
	protected $ShippingTrackingEvent;

	/**
	* @var dateTime
	**/
	protected $ScheduledDeliveryTimeMin;

	/**
	* @var dateTime
	**/
	protected $ScheduledDeliveryTimeMax;

	/**
	* @var dateTime
	**/
	protected $ActualDeliveryTime;

	/**
	* @var dateTime
	**/
	protected $EstimatedDeliveryTimeMin;

	/**
	* @var dateTime
	**/
	protected $EstimatedDeliveryTimeMax;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ShippingPackageInfoType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'StoreID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ShippingTrackingEvent' =>
				array(
					'required' => false,
					'type' => 'token',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ScheduledDeliveryTimeMin' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ScheduledDeliveryTimeMax' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ActualDeliveryTime' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'EstimatedDeliveryTimeMin' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'EstimatedDeliveryTimeMax' =>
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
	 * @return string
	 **/
	function getStoreID()
	{
		return $this->StoreID;
	}

	/**
	 * @return void
	 **/
	function setStoreID($value)
	{
		$this->StoreID = $value;
	}

	/**
	 * @return token
	 **/
	function getShippingTrackingEvent()
	{
		return $this->ShippingTrackingEvent;
	}

	/**
	 * @return void
	 **/
	function setShippingTrackingEvent($value)
	{
		$this->ShippingTrackingEvent = $value;
	}

	/**
	 * @return dateTime
	 **/
	function getScheduledDeliveryTimeMin()
	{
		return $this->ScheduledDeliveryTimeMin;
	}

	/**
	 * @return void
	 **/
	function setScheduledDeliveryTimeMin($value)
	{
		$this->ScheduledDeliveryTimeMin = $value;
	}

	/**
	 * @return dateTime
	 **/
	function getScheduledDeliveryTimeMax()
	{
		return $this->ScheduledDeliveryTimeMax;
	}

	/**
	 * @return void
	 **/
	function setScheduledDeliveryTimeMax($value)
	{
		$this->ScheduledDeliveryTimeMax = $value;
	}

	/**
	 * @return dateTime
	 **/
	function getActualDeliveryTime()
	{
		return $this->ActualDeliveryTime;
	}

	/**
	 * @return void
	 **/
	function setActualDeliveryTime($value)
	{
		$this->ActualDeliveryTime = $value;
	}

	/**
	 * @return dateTime
	 **/
	function getEstimatedDeliveryTimeMin()
	{
		return $this->EstimatedDeliveryTimeMin;
	}

	/**
	 * @return void
	 **/
	function setEstimatedDeliveryTimeMin($value)
	{
		$this->EstimatedDeliveryTimeMin = $value;
	}

	/**
	 * @return dateTime
	 **/
	function getEstimatedDeliveryTimeMax()
	{
		return $this->EstimatedDeliveryTimeMax;
	}

	/**
	 * @return void
	 **/
	function setEstimatedDeliveryTimeMax($value)
	{
		$this->EstimatedDeliveryTimeMax = $value;
	}

}
?>

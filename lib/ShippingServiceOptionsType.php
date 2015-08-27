<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'AmountType.php';
require_once 'ShippingPackageInfoType.php';

/**
  * Container consisting of shipping costs and other details related to a domestic
  * shipping service. An exception to the domestic shipping service rule is seen in the
  * ShippingServiceSelected container returned under the Order and Transaction
  * containers in order and order line item retrieval calls such as GetOrders or
  * GetItemTransactions. In this scenario, the SelectedShippingService container
  * consists of either domestic or international shipping service data, based on the
  * selected service according to the buyer's shipping address.
  * <br/><br/>
  * If one or more international shipping services are provided, the
  * seller must specify at least one domestic shipping service as well.
  * <br/><br/>
  *             <span class="tablenote">
  *             <strong>Note:</strong> For GetItemTransactions and GetSellerTransactions, this container does not return accurate shipping service and cost information for multiple line item orders. Use GetOrders instead, and provide the order's combined <strong>OrderID</strong> to retrieve this information.
  *             </span>
  * 
 **/

class ShippingServiceOptionsType extends EbatNs_ComplexType
{
	/**
	* @var AmountType
	**/
	protected $ShippingInsuranceCost;

	/**
	* @var token
	**/
	protected $ShippingService;

	/**
	* @var AmountType
	**/
	protected $ShippingServiceCost;

	/**
	* @var AmountType
	**/
	protected $ShippingServiceAdditionalCost;

	/**
	* @var int
	**/
	protected $ShippingServicePriority;

	/**
	* @var boolean
	**/
	protected $ExpeditedService;

	/**
	* @var int
	**/
	protected $ShippingTimeMin;

	/**
	* @var int
	**/
	protected $ShippingTimeMax;

	/**
	* @var AmountType
	**/
	protected $ShippingSurcharge;

	/**
	* @var boolean
	**/
	protected $FreeShipping;

	/**
	* @var boolean
	**/
	protected $LocalPickup;

	/**
	* @var AmountType
	**/
	protected $ImportCharge;

	/**
	* @var ShippingPackageInfoType
	**/
	protected $ShippingPackageInfo;

	/**
	* @var dateTime
	**/
	protected $ShippingServiceCutOffTime;

	/**
	* @var string
	**/
	protected $LogisticPlanType;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ShippingServiceOptionsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'ShippingInsuranceCost' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ShippingService' =>
				array(
					'required' => false,
					'type' => 'token',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ShippingServiceCost' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ShippingServiceAdditionalCost' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ShippingServicePriority' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ExpeditedService' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ShippingTimeMin' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ShippingTimeMax' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ShippingSurcharge' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'FreeShipping' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'LocalPickup' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ImportCharge' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ShippingPackageInfo' =>
				array(
					'required' => false,
					'type' => 'ShippingPackageInfoType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				),
				'ShippingServiceCutOffTime' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'LogisticPlanType' =>
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
	 * @return AmountType
	 **/
	function getShippingInsuranceCost()
	{
		return $this->ShippingInsuranceCost;
	}

	/**
	 * @return void
	 **/
	function setShippingInsuranceCost($value)
	{
		$this->ShippingInsuranceCost = $value;
	}

	/**
	 * @return token
	 **/
	function getShippingService()
	{
		return $this->ShippingService;
	}

	/**
	 * @return void
	 **/
	function setShippingService($value)
	{
		$this->ShippingService = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getShippingServiceCost()
	{
		return $this->ShippingServiceCost;
	}

	/**
	 * @return void
	 **/
	function setShippingServiceCost($value)
	{
		$this->ShippingServiceCost = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getShippingServiceAdditionalCost()
	{
		return $this->ShippingServiceAdditionalCost;
	}

	/**
	 * @return void
	 **/
	function setShippingServiceAdditionalCost($value)
	{
		$this->ShippingServiceAdditionalCost = $value;
	}

	/**
	 * @return int
	 **/
	function getShippingServicePriority()
	{
		return $this->ShippingServicePriority;
	}

	/**
	 * @return void
	 **/
	function setShippingServicePriority($value)
	{
		$this->ShippingServicePriority = $value;
	}

	/**
	 * @return boolean
	 **/
	function getExpeditedService()
	{
		return $this->ExpeditedService;
	}

	/**
	 * @return void
	 **/
	function setExpeditedService($value)
	{
		$this->ExpeditedService = $value;
	}

	/**
	 * @return int
	 **/
	function getShippingTimeMin()
	{
		return $this->ShippingTimeMin;
	}

	/**
	 * @return void
	 **/
	function setShippingTimeMin($value)
	{
		$this->ShippingTimeMin = $value;
	}

	/**
	 * @return int
	 **/
	function getShippingTimeMax()
	{
		return $this->ShippingTimeMax;
	}

	/**
	 * @return void
	 **/
	function setShippingTimeMax($value)
	{
		$this->ShippingTimeMax = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getShippingSurcharge()
	{
		return $this->ShippingSurcharge;
	}

	/**
	 * @return void
	 **/
	function setShippingSurcharge($value)
	{
		$this->ShippingSurcharge = $value;
	}

	/**
	 * @return boolean
	 **/
	function getFreeShipping()
	{
		return $this->FreeShipping;
	}

	/**
	 * @return void
	 **/
	function setFreeShipping($value)
	{
		$this->FreeShipping = $value;
	}

	/**
	 * @return boolean
	 **/
	function getLocalPickup()
	{
		return $this->LocalPickup;
	}

	/**
	 * @return void
	 **/
	function setLocalPickup($value)
	{
		$this->LocalPickup = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getImportCharge()
	{
		return $this->ImportCharge;
	}

	/**
	 * @return void
	 **/
	function setImportCharge($value)
	{
		$this->ImportCharge = $value;
	}

	/**
	 * @return ShippingPackageInfoType
	 * @param integer $index 
	 **/
	function getShippingPackageInfo($index = null)
	{
		if ($index !== null)
		{
			return $this->ShippingPackageInfo[$index];
		}
		else
		{
			return $this->ShippingPackageInfo;
		}
	}

	/**
	 * @return void
	 * @param ShippingPackageInfoType $value
	 * @param integer $index 
	 **/
	function setShippingPackageInfo($value, $index = null)
	{
		if ($index !== null)
		{
			$this->ShippingPackageInfo[$index] = $value;
		}
		else
		{
			$this->ShippingPackageInfo= $value;
		}
	}

	/**
	 * @return void
	 * @param ShippingPackageInfoType $value
	 **/
	function addShippingPackageInfo($value)
	{
		$this->ShippingPackageInfo[] = $value;
	}

	/**
	 * @return dateTime
	 **/
	function getShippingServiceCutOffTime()
	{
		return $this->ShippingServiceCutOffTime;
	}

	/**
	 * @return void
	 **/
	function setShippingServiceCutOffTime($value)
	{
		$this->ShippingServiceCutOffTime = $value;
	}

	/**
	 * @return string
	 **/
	function getLogisticPlanType()
	{
		return $this->LogisticPlanType;
	}

	/**
	 * @return void
	 **/
	function setLogisticPlanType($value)
	{
		$this->LogisticPlanType = $value;
	}

}
?>

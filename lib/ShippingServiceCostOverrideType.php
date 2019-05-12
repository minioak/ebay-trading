<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'ShippingServiceType.php';
require_once 'AmountType.php';

/**
  * Type defining the <strong>ShippingServiceCostOverride</strong> container, which is used to override the flat shipping costs for each domestic and/or international shipping service that is defined in the <strong>domesticShippingPolicyInfoService</strong> and <strong>intlShippingPolicyInfoService</strong> containers of the Business Policies shipping profile. Shipping costs include the cost to ship one item, the cost to ship each additional identical item, and any shipping surcharges applicable to domestic shipping services. A <strong>ShippingServiceCostOverride</strong> container is required for every domestic and/or international shipping service that is defined in the Business Policies shipping profile. For example, you cannot override the shipping costs for one domestic shipping service but not the other domestic shipping services defined in the Business Policies shipping profile. The same rule applies to international shipping services. 
  * 
 **/

class ShippingServiceCostOverrideType extends EbatNs_ComplexType
{
	/**
	* @var int
	**/
	protected $ShippingServicePriority;

	/**
	* @var ShippingServiceType
	**/
	protected $ShippingServiceType;

	/**
	* @var AmountType
	**/
	protected $ShippingServiceCost;

	/**
	* @var AmountType
	**/
	protected $ShippingServiceAdditionalCost;

	/**
	* @var AmountType
	**/
	protected $ShippingSurcharge;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ShippingServiceCostOverrideType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'ShippingServicePriority' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ShippingServiceType' =>
				array(
					'required' => false,
					'type' => 'ShippingServiceType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
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
				'ShippingSurcharge' =>
				array(
					'required' => false,
					'type' => 'AmountType',
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
	 * @return ShippingServiceType
	 **/
	function getShippingServiceType()
	{
		return $this->ShippingServiceType;
	}

	/**
	 * @return void
	 **/
	function setShippingServiceType($value)
	{
		$this->ShippingServiceType = $value;
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

}
?>

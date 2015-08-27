<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'AmountType.php';

/**
  *    This type specifies the shipping service and cost of the domestic leg of a Global Shipping Program shipment.
  * 
 **/

class MultiLegShippingServiceType extends EbatNs_ComplexType
{
	/**
	* @var token
	**/
	protected $ShippingService;

	/**
	* @var AmountType
	**/
	protected $TotalShippingCost;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('MultiLegShippingServiceType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'ShippingService' =>
				array(
					'required' => false,
					'type' => 'token',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'TotalShippingCost' =>
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
	function getTotalShippingCost()
	{
		return $this->TotalShippingCost;
	}

	/**
	 * @return void
	 **/
	function setTotalShippingCost($value)
	{
		$this->TotalShippingCost = $value;
	}

}
?>

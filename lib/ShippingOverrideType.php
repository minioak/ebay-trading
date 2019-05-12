<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'ShippingServiceCostOverrideListType.php';

/**
  *         This type is reserved for internal or future use.
  * 
  *       
 **/

class ShippingOverrideType extends EbatNs_ComplexType
{
	/**
	* @var ShippingServiceCostOverrideListType
	**/
	protected $ShippingServiceCostOverrideList;

	/**
	* @var int
	**/
	protected $DispatchTimeMaxOverride;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ShippingOverrideType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'ShippingServiceCostOverrideList' =>
				array(
					'required' => false,
					'type' => 'ShippingServiceCostOverrideListType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DispatchTimeMaxOverride' =>
				array(
					'required' => false,
					'type' => 'int',
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
	 * @return ShippingServiceCostOverrideListType
	 **/
	function getShippingServiceCostOverrideList()
	{
		return $this->ShippingServiceCostOverrideList;
	}

	/**
	 * @return void
	 **/
	function setShippingServiceCostOverrideList($value)
	{
		$this->ShippingServiceCostOverrideList = $value;
	}

	/**
	 * @return int
	 **/
	function getDispatchTimeMaxOverride()
	{
		return $this->DispatchTimeMaxOverride;
	}

	/**
	 * @return void
	 **/
	function setDispatchTimeMaxOverride($value)
	{
		$this->DispatchTimeMaxOverride = $value;
	}

}
?>

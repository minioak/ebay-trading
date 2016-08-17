<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'FlatRateInsuranceRangeCodeType.php';
require_once 'AmountType.php';

/**
  * A pairing of range and insurance cost.
  * 
 **/

class FlatRateInsuranceRangeCostType extends EbatNs_ComplexType
{
	/**
	* @var FlatRateInsuranceRangeCodeType
	**/
	protected $FlatRateInsuranceRange;

	/**
	* @var AmountType
	**/
	protected $InsuranceCost;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('FlatRateInsuranceRangeCostType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'FlatRateInsuranceRange' =>
				array(
					'required' => false,
					'type' => 'FlatRateInsuranceRangeCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'InsuranceCost' =>
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
	 * @return FlatRateInsuranceRangeCodeType
	 **/
	function getFlatRateInsuranceRange()
	{
		return $this->FlatRateInsuranceRange;
	}

	/**
	 * @return void
	 **/
	function setFlatRateInsuranceRange($value)
	{
		$this->FlatRateInsuranceRange = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getInsuranceCost()
	{
		return $this->InsuranceCost;
	}

	/**
	 * @return void
	 **/
	function setInsuranceCost($value)
	{
		$this->InsuranceCost = $value;
	}

}
?>

<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'AmountType.php';
require_once 'CalculatedShippingChargeOptionCodeType.php';
require_once 'CalculatedShippingRateOptionCodeType.php';
require_once 'InsuranceOptionCodeType.php';

/**
  * This type is deprecated.
  * 
 **/

class CalculatedShippingPreferencesType extends EbatNs_ComplexType
{
	/**
	* @var AmountType
	**/
	protected $CalculatedShippingAmountForEntireOrder;

	/**
	* @var CalculatedShippingChargeOptionCodeType
	**/
	protected $CalculatedShippingChargeOption;

	/**
	* @var CalculatedShippingRateOptionCodeType
	**/
	protected $CalculatedShippingRateOption;

	/**
	* @var InsuranceOptionCodeType
	**/
	protected $InsuranceOption;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('CalculatedShippingPreferencesType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'CalculatedShippingAmountForEntireOrder' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CalculatedShippingChargeOption' =>
				array(
					'required' => false,
					'type' => 'CalculatedShippingChargeOptionCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CalculatedShippingRateOption' =>
				array(
					'required' => false,
					'type' => 'CalculatedShippingRateOptionCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'InsuranceOption' =>
				array(
					'required' => false,
					'type' => 'InsuranceOptionCodeType',
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
	 * @return AmountType
	 **/
	function getCalculatedShippingAmountForEntireOrder()
	{
		return $this->CalculatedShippingAmountForEntireOrder;
	}

	/**
	 * @return void
	 **/
	function setCalculatedShippingAmountForEntireOrder($value)
	{
		$this->CalculatedShippingAmountForEntireOrder = $value;
	}

	/**
	 * @return CalculatedShippingChargeOptionCodeType
	 **/
	function getCalculatedShippingChargeOption()
	{
		return $this->CalculatedShippingChargeOption;
	}

	/**
	 * @return void
	 **/
	function setCalculatedShippingChargeOption($value)
	{
		$this->CalculatedShippingChargeOption = $value;
	}

	/**
	 * @return CalculatedShippingRateOptionCodeType
	 **/
	function getCalculatedShippingRateOption()
	{
		return $this->CalculatedShippingRateOption;
	}

	/**
	 * @return void
	 **/
	function setCalculatedShippingRateOption($value)
	{
		$this->CalculatedShippingRateOption = $value;
	}

	/**
	 * @return InsuranceOptionCodeType
	 **/
	function getInsuranceOption()
	{
		return $this->InsuranceOption;
	}

	/**
	 * @return void
	 **/
	function setInsuranceOption($value)
	{
		$this->InsuranceOption = $value;
	}

}
?>

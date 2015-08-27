<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'AmountType.php';
require_once 'InsuranceOptionCodeType.php';

/**
  * Contains the cost of shipping insurance and other insurance-related information.
  * 
 **/

class InsuranceDetailsType extends EbatNs_ComplexType
{
	/**
	* @var AmountType
	**/
	protected $InsuranceFee;

	/**
	* @var InsuranceOptionCodeType
	**/
	protected $InsuranceOption;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('InsuranceDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'InsuranceFee' =>
				array(
					'required' => false,
					'type' => 'AmountType',
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
	function getInsuranceFee()
	{
		return $this->InsuranceFee;
	}

	/**
	 * @return void
	 **/
	function setInsuranceFee($value)
	{
		$this->InsuranceFee = $value;
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

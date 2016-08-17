<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractResponseType.php';
require_once 'CurrencyCodeType.php';
require_once 'FlatShippingDiscountType.php';
require_once 'CalculatedShippingDiscountType.php';
require_once 'CalculatedHandlingDiscountType.php';
require_once 'PromotionalShippingDiscountDetailsType.php';
require_once 'ShippingInsuranceType.php';
require_once 'CombinedPaymentPeriodCodeType.php';

/**
  * Response to call of GetShippingDiscountProfiles.
  * 
 **/

class GetShippingDiscountProfilesResponseType extends AbstractResponseType
{
	/**
	* @var CurrencyCodeType
	**/
	protected $CurrencyID;

	/**
	* @var FlatShippingDiscountType
	**/
	protected $FlatShippingDiscount;

	/**
	* @var CalculatedShippingDiscountType
	**/
	protected $CalculatedShippingDiscount;

	/**
	* @var boolean
	**/
	protected $PromotionalShippingDiscount;

	/**
	* @var CalculatedHandlingDiscountType
	**/
	protected $CalculatedHandlingDiscount;

	/**
	* @var PromotionalShippingDiscountDetailsType
	**/
	protected $PromotionalShippingDiscountDetails;

	/**
	* @var ShippingInsuranceType
	**/
	protected $ShippingInsurance;

	/**
	* @var ShippingInsuranceType
	**/
	protected $InternationalShippingInsurance;

	/**
	* @var CombinedPaymentPeriodCodeType
	**/
	protected $CombinedDuration;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('GetShippingDiscountProfilesResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'CurrencyID' =>
				array(
					'required' => false,
					'type' => 'CurrencyCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'FlatShippingDiscount' =>
				array(
					'required' => false,
					'type' => 'FlatShippingDiscountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CalculatedShippingDiscount' =>
				array(
					'required' => false,
					'type' => 'CalculatedShippingDiscountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PromotionalShippingDiscount' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CalculatedHandlingDiscount' =>
				array(
					'required' => false,
					'type' => 'CalculatedHandlingDiscountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PromotionalShippingDiscountDetails' =>
				array(
					'required' => false,
					'type' => 'PromotionalShippingDiscountDetailsType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ShippingInsurance' =>
				array(
					'required' => false,
					'type' => 'ShippingInsuranceType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'InternationalShippingInsurance' =>
				array(
					'required' => false,
					'type' => 'ShippingInsuranceType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CombinedDuration' =>
				array(
					'required' => false,
					'type' => 'CombinedPaymentPeriodCodeType',
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
	 * @return CurrencyCodeType
	 **/
	function getCurrencyID()
	{
		return $this->CurrencyID;
	}

	/**
	 * @return void
	 **/
	function setCurrencyID($value)
	{
		$this->CurrencyID = $value;
	}

	/**
	 * @return FlatShippingDiscountType
	 **/
	function getFlatShippingDiscount()
	{
		return $this->FlatShippingDiscount;
	}

	/**
	 * @return void
	 **/
	function setFlatShippingDiscount($value)
	{
		$this->FlatShippingDiscount = $value;
	}

	/**
	 * @return CalculatedShippingDiscountType
	 **/
	function getCalculatedShippingDiscount()
	{
		return $this->CalculatedShippingDiscount;
	}

	/**
	 * @return void
	 **/
	function setCalculatedShippingDiscount($value)
	{
		$this->CalculatedShippingDiscount = $value;
	}

	/**
	 * @return boolean
	 **/
	function getPromotionalShippingDiscount()
	{
		return $this->PromotionalShippingDiscount;
	}

	/**
	 * @return void
	 **/
	function setPromotionalShippingDiscount($value)
	{
		$this->PromotionalShippingDiscount = $value;
	}

	/**
	 * @return CalculatedHandlingDiscountType
	 **/
	function getCalculatedHandlingDiscount()
	{
		return $this->CalculatedHandlingDiscount;
	}

	/**
	 * @return void
	 **/
	function setCalculatedHandlingDiscount($value)
	{
		$this->CalculatedHandlingDiscount = $value;
	}

	/**
	 * @return PromotionalShippingDiscountDetailsType
	 **/
	function getPromotionalShippingDiscountDetails()
	{
		return $this->PromotionalShippingDiscountDetails;
	}

	/**
	 * @return void
	 **/
	function setPromotionalShippingDiscountDetails($value)
	{
		$this->PromotionalShippingDiscountDetails = $value;
	}

	/**
	 * @return ShippingInsuranceType
	 **/
	function getShippingInsurance()
	{
		return $this->ShippingInsurance;
	}

	/**
	 * @return void
	 **/
	function setShippingInsurance($value)
	{
		$this->ShippingInsurance = $value;
	}

	/**
	 * @return ShippingInsuranceType
	 **/
	function getInternationalShippingInsurance()
	{
		return $this->InternationalShippingInsurance;
	}

	/**
	 * @return void
	 **/
	function setInternationalShippingInsurance($value)
	{
		$this->InternationalShippingInsurance = $value;
	}

	/**
	 * @return CombinedPaymentPeriodCodeType
	 **/
	function getCombinedDuration()
	{
		return $this->CombinedDuration;
	}

	/**
	 * @return void
	 **/
	function setCombinedDuration($value)
	{
		$this->CombinedDuration = $value;
	}

}
?>

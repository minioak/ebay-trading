<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'CalculatedShippingRateType.php';
require_once 'AmountType.php';
require_once 'InsuranceOptionCodeType.php';
require_once 'SalesTaxType.php';
require_once 'ShippingRateTypeCodeType.php';
require_once 'ShippingServiceOptionsType.php';
require_once 'InternationalShippingServiceOptionsType.php';
require_once 'ShippingTypeCodeType.php';
require_once 'TaxTableType.php';
require_once 'InsuranceDetailsType.php';
require_once 'FlatShippingDiscountType.php';
require_once 'CalculatedShippingDiscountType.php';
require_once 'PromotionalShippingDiscountDetailsType.php';
require_once 'ShipmentTrackingDetailsType.php';
require_once 'RateTableDetailsType.php';

/**
  * Type defining the ShippingDetails container, which contains the shipping-related
  * details for an item (pre-checkout) or order (post-checkout).
  * <br/><br/>
  *             <span class="tablenote">
  *             <strong>IMPORTANT:</strong> To avoid loss of shipping details when revising a listing, you must include all <strong>ShippingDetails</strong> fields that were originally provided. Do not omit any tag, even if its value does not change. Omitting a shipping field when revising an item will remove that detail from the listing.
  *             </span>
  * 
 **/

class ShippingDetailsType extends EbatNs_ComplexType
{
	/**
	* @var boolean
	**/
	protected $AllowPaymentEdit;

	/**
	* @var boolean
	**/
	protected $ApplyShippingDiscount;

	/**
	* @var boolean
	**/
	protected $GlobalShipping;

	/**
	* @var CalculatedShippingRateType
	**/
	protected $CalculatedShippingRate;

	/**
	* @var boolean
	**/
	protected $ChangePaymentInstructions;

	/**
	* @var AmountType
	**/
	protected $InsuranceFee;

	/**
	* @var InsuranceOptionCodeType
	**/
	protected $InsuranceOption;

	/**
	* @var boolean
	**/
	protected $InsuranceWanted;

	/**
	* @var boolean
	**/
	protected $PaymentEdited;

	/**
	* @var string
	**/
	protected $PaymentInstructions;

	/**
	* @var SalesTaxType
	**/
	protected $SalesTax;

	/**
	* @var string
	**/
	protected $ShippingRateErrorMessage;

	/**
	* @var ShippingRateTypeCodeType
	**/
	protected $ShippingRateType;

	/**
	* @var ShippingServiceOptionsType
	**/
	protected $ShippingServiceOptions;

	/**
	* @var InternationalShippingServiceOptionsType
	**/
	protected $InternationalShippingServiceOption;

	/**
	* @var ShippingTypeCodeType
	**/
	protected $ShippingType;

	/**
	* @var int
	**/
	protected $SellingManagerSalesRecordNumber;

	/**
	* @var boolean
	**/
	protected $ThirdPartyCheckout;

	/**
	* @var TaxTableType
	**/
	protected $TaxTable;

	/**
	* @var boolean
	**/
	protected $GetItFast;

	/**
	* @var token
	**/
	protected $ShippingServiceUsed;

	/**
	* @var AmountType
	**/
	protected $DefaultShippingCost;

	/**
	* @var InsuranceDetailsType
	**/
	protected $InsuranceDetails;

	/**
	* @var InsuranceDetailsType
	**/
	protected $InternationalInsuranceDetails;

	/**
	* @var string
	**/
	protected $ShippingDiscountProfileID;

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
	* @var string
	**/
	protected $InternationalShippingDiscountProfileID;

	/**
	* @var FlatShippingDiscountType
	**/
	protected $InternationalFlatShippingDiscount;

	/**
	* @var CalculatedShippingDiscountType
	**/
	protected $InternationalCalculatedShippingDiscount;

	/**
	* @var boolean
	**/
	protected $InternationalPromotionalShippingDiscount;

	/**
	* @var PromotionalShippingDiscountDetailsType
	**/
	protected $PromotionalShippingDiscountDetails;

	/**
	* @var AmountType
	**/
	protected $CODCost;

	/**
	* @var string
	**/
	protected $ExcludeShipToLocation;

	/**
	* @var boolean
	**/
	protected $SellerExcludeShipToLocationsPreference;

	/**
	* @var ShipmentTrackingDetailsType
	**/
	protected $ShipmentTrackingDetails;

	/**
	* @var RateTableDetailsType
	**/
	protected $RateTableDetails;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ShippingDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'AllowPaymentEdit' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ApplyShippingDiscount' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'GlobalShipping' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CalculatedShippingRate' =>
				array(
					'required' => false,
					'type' => 'CalculatedShippingRateType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ChangePaymentInstructions' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
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
				),
				'InsuranceWanted' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PaymentEdited' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PaymentInstructions' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SalesTax' =>
				array(
					'required' => false,
					'type' => 'SalesTaxType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ShippingRateErrorMessage' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ShippingRateType' =>
				array(
					'required' => false,
					'type' => 'ShippingRateTypeCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ShippingServiceOptions' =>
				array(
					'required' => false,
					'type' => 'ShippingServiceOptionsType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				),
				'InternationalShippingServiceOption' =>
				array(
					'required' => false,
					'type' => 'InternationalShippingServiceOptionsType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				),
				'ShippingType' =>
				array(
					'required' => false,
					'type' => 'ShippingTypeCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SellingManagerSalesRecordNumber' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ThirdPartyCheckout' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'TaxTable' =>
				array(
					'required' => false,
					'type' => 'TaxTableType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'GetItFast' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ShippingServiceUsed' =>
				array(
					'required' => false,
					'type' => 'token',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DefaultShippingCost' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'InsuranceDetails' =>
				array(
					'required' => false,
					'type' => 'InsuranceDetailsType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'InternationalInsuranceDetails' =>
				array(
					'required' => false,
					'type' => 'InsuranceDetailsType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ShippingDiscountProfileID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
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
				'InternationalShippingDiscountProfileID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'InternationalFlatShippingDiscount' =>
				array(
					'required' => false,
					'type' => 'FlatShippingDiscountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'InternationalCalculatedShippingDiscount' =>
				array(
					'required' => false,
					'type' => 'CalculatedShippingDiscountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'InternationalPromotionalShippingDiscount' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
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
				'CODCost' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ExcludeShipToLocation' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => true,
					'cardinality' => '0..*'
				),
				'SellerExcludeShipToLocationsPreference' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ShipmentTrackingDetails' =>
				array(
					'required' => false,
					'type' => 'ShipmentTrackingDetailsType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				),
				'RateTableDetails' =>
				array(
					'required' => false,
					'type' => 'RateTableDetailsType',
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
	 * @return boolean
	 **/
	function getAllowPaymentEdit()
	{
		return $this->AllowPaymentEdit;
	}

	/**
	 * @return void
	 **/
	function setAllowPaymentEdit($value)
	{
		$this->AllowPaymentEdit = $value;
	}

	/**
	 * @return boolean
	 **/
	function getApplyShippingDiscount()
	{
		return $this->ApplyShippingDiscount;
	}

	/**
	 * @return void
	 **/
	function setApplyShippingDiscount($value)
	{
		$this->ApplyShippingDiscount = $value;
	}

	/**
	 * @return boolean
	 **/
	function getGlobalShipping()
	{
		return $this->GlobalShipping;
	}

	/**
	 * @return void
	 **/
	function setGlobalShipping($value)
	{
		$this->GlobalShipping = $value;
	}

	/**
	 * @return CalculatedShippingRateType
	 **/
	function getCalculatedShippingRate()
	{
		return $this->CalculatedShippingRate;
	}

	/**
	 * @return void
	 **/
	function setCalculatedShippingRate($value)
	{
		$this->CalculatedShippingRate = $value;
	}

	/**
	 * @return boolean
	 **/
	function getChangePaymentInstructions()
	{
		return $this->ChangePaymentInstructions;
	}

	/**
	 * @return void
	 **/
	function setChangePaymentInstructions($value)
	{
		$this->ChangePaymentInstructions = $value;
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

	/**
	 * @return boolean
	 **/
	function getInsuranceWanted()
	{
		return $this->InsuranceWanted;
	}

	/**
	 * @return void
	 **/
	function setInsuranceWanted($value)
	{
		$this->InsuranceWanted = $value;
	}

	/**
	 * @return boolean
	 **/
	function getPaymentEdited()
	{
		return $this->PaymentEdited;
	}

	/**
	 * @return void
	 **/
	function setPaymentEdited($value)
	{
		$this->PaymentEdited = $value;
	}

	/**
	 * @return string
	 **/
	function getPaymentInstructions()
	{
		return $this->PaymentInstructions;
	}

	/**
	 * @return void
	 **/
	function setPaymentInstructions($value)
	{
		$this->PaymentInstructions = $value;
	}

	/**
	 * @return SalesTaxType
	 **/
	function getSalesTax()
	{
		return $this->SalesTax;
	}

	/**
	 * @return void
	 **/
	function setSalesTax($value)
	{
		$this->SalesTax = $value;
	}

	/**
	 * @return string
	 **/
	function getShippingRateErrorMessage()
	{
		return $this->ShippingRateErrorMessage;
	}

	/**
	 * @return void
	 **/
	function setShippingRateErrorMessage($value)
	{
		$this->ShippingRateErrorMessage = $value;
	}

	/**
	 * @return ShippingRateTypeCodeType
	 **/
	function getShippingRateType()
	{
		return $this->ShippingRateType;
	}

	/**
	 * @return void
	 **/
	function setShippingRateType($value)
	{
		$this->ShippingRateType = $value;
	}

	/**
	 * @return ShippingServiceOptionsType
	 * @param integer $index 
	 **/
	function getShippingServiceOptions($index = null)
	{
		if ($index !== null)
		{
			return $this->ShippingServiceOptions[$index];
		}
		else
		{
			return $this->ShippingServiceOptions;
		}
	}

	/**
	 * @return void
	 * @param ShippingServiceOptionsType $value
	 * @param integer $index 
	 **/
	function setShippingServiceOptions($value, $index = null)
	{
		if ($index !== null)
		{
			$this->ShippingServiceOptions[$index] = $value;
		}
		else
		{
			$this->ShippingServiceOptions= $value;
		}
	}

	/**
	 * @return void
	 * @param ShippingServiceOptionsType $value
	 **/
	function addShippingServiceOptions($value)
	{
		$this->ShippingServiceOptions[] = $value;
	}

	/**
	 * @return InternationalShippingServiceOptionsType
	 * @param integer $index 
	 **/
	function getInternationalShippingServiceOption($index = null)
	{
		if ($index !== null)
		{
			return $this->InternationalShippingServiceOption[$index];
		}
		else
		{
			return $this->InternationalShippingServiceOption;
		}
	}

	/**
	 * @return void
	 * @param InternationalShippingServiceOptionsType $value
	 * @param integer $index 
	 **/
	function setInternationalShippingServiceOption($value, $index = null)
	{
		if ($index !== null)
		{
			$this->InternationalShippingServiceOption[$index] = $value;
		}
		else
		{
			$this->InternationalShippingServiceOption= $value;
		}
	}

	/**
	 * @return void
	 * @param InternationalShippingServiceOptionsType $value
	 **/
	function addInternationalShippingServiceOption($value)
	{
		$this->InternationalShippingServiceOption[] = $value;
	}

	/**
	 * @return ShippingTypeCodeType
	 **/
	function getShippingType()
	{
		return $this->ShippingType;
	}

	/**
	 * @return void
	 **/
	function setShippingType($value)
	{
		$this->ShippingType = $value;
	}

	/**
	 * @return int
	 **/
	function getSellingManagerSalesRecordNumber()
	{
		return $this->SellingManagerSalesRecordNumber;
	}

	/**
	 * @return void
	 **/
	function setSellingManagerSalesRecordNumber($value)
	{
		$this->SellingManagerSalesRecordNumber = $value;
	}

	/**
	 * @return boolean
	 **/
	function getThirdPartyCheckout()
	{
		return $this->ThirdPartyCheckout;
	}

	/**
	 * @return void
	 **/
	function setThirdPartyCheckout($value)
	{
		$this->ThirdPartyCheckout = $value;
	}

	/**
	 * @return TaxTableType
	 **/
	function getTaxTable()
	{
		return $this->TaxTable;
	}

	/**
	 * @return void
	 **/
	function setTaxTable($value)
	{
		$this->TaxTable = $value;
	}

	/**
	 * @return boolean
	 **/
	function getGetItFast()
	{
		return $this->GetItFast;
	}

	/**
	 * @return void
	 **/
	function setGetItFast($value)
	{
		$this->GetItFast = $value;
	}

	/**
	 * @return token
	 **/
	function getShippingServiceUsed()
	{
		return $this->ShippingServiceUsed;
	}

	/**
	 * @return void
	 **/
	function setShippingServiceUsed($value)
	{
		$this->ShippingServiceUsed = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getDefaultShippingCost()
	{
		return $this->DefaultShippingCost;
	}

	/**
	 * @return void
	 **/
	function setDefaultShippingCost($value)
	{
		$this->DefaultShippingCost = $value;
	}

	/**
	 * @return InsuranceDetailsType
	 **/
	function getInsuranceDetails()
	{
		return $this->InsuranceDetails;
	}

	/**
	 * @return void
	 **/
	function setInsuranceDetails($value)
	{
		$this->InsuranceDetails = $value;
	}

	/**
	 * @return InsuranceDetailsType
	 **/
	function getInternationalInsuranceDetails()
	{
		return $this->InternationalInsuranceDetails;
	}

	/**
	 * @return void
	 **/
	function setInternationalInsuranceDetails($value)
	{
		$this->InternationalInsuranceDetails = $value;
	}

	/**
	 * @return string
	 **/
	function getShippingDiscountProfileID()
	{
		return $this->ShippingDiscountProfileID;
	}

	/**
	 * @return void
	 **/
	function setShippingDiscountProfileID($value)
	{
		$this->ShippingDiscountProfileID = $value;
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
	 * @return string
	 **/
	function getInternationalShippingDiscountProfileID()
	{
		return $this->InternationalShippingDiscountProfileID;
	}

	/**
	 * @return void
	 **/
	function setInternationalShippingDiscountProfileID($value)
	{
		$this->InternationalShippingDiscountProfileID = $value;
	}

	/**
	 * @return FlatShippingDiscountType
	 **/
	function getInternationalFlatShippingDiscount()
	{
		return $this->InternationalFlatShippingDiscount;
	}

	/**
	 * @return void
	 **/
	function setInternationalFlatShippingDiscount($value)
	{
		$this->InternationalFlatShippingDiscount = $value;
	}

	/**
	 * @return CalculatedShippingDiscountType
	 **/
	function getInternationalCalculatedShippingDiscount()
	{
		return $this->InternationalCalculatedShippingDiscount;
	}

	/**
	 * @return void
	 **/
	function setInternationalCalculatedShippingDiscount($value)
	{
		$this->InternationalCalculatedShippingDiscount = $value;
	}

	/**
	 * @return boolean
	 **/
	function getInternationalPromotionalShippingDiscount()
	{
		return $this->InternationalPromotionalShippingDiscount;
	}

	/**
	 * @return void
	 **/
	function setInternationalPromotionalShippingDiscount($value)
	{
		$this->InternationalPromotionalShippingDiscount = $value;
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
	 * @return AmountType
	 **/
	function getCODCost()
	{
		return $this->CODCost;
	}

	/**
	 * @return void
	 **/
	function setCODCost($value)
	{
		$this->CODCost = $value;
	}

	/**
	 * @return string
	 * @param integer $index 
	 **/
	function getExcludeShipToLocation($index = null)
	{
		if ($index !== null)
		{
			return $this->ExcludeShipToLocation[$index];
		}
		else
		{
			return $this->ExcludeShipToLocation;
		}
	}

	/**
	 * @return void
	 * @param string $value
	 * @param integer $index 
	 **/
	function setExcludeShipToLocation($value, $index = null)
	{
		if ($index !== null)
		{
			$this->ExcludeShipToLocation[$index] = $value;
		}
		else
		{
			$this->ExcludeShipToLocation= $value;
		}
	}

	/**
	 * @return void
	 * @param string $value
	 **/
	function addExcludeShipToLocation($value)
	{
		$this->ExcludeShipToLocation[] = $value;
	}

	/**
	 * @return boolean
	 **/
	function getSellerExcludeShipToLocationsPreference()
	{
		return $this->SellerExcludeShipToLocationsPreference;
	}

	/**
	 * @return void
	 **/
	function setSellerExcludeShipToLocationsPreference($value)
	{
		$this->SellerExcludeShipToLocationsPreference = $value;
	}

	/**
	 * @return ShipmentTrackingDetailsType
	 * @param integer $index 
	 **/
	function getShipmentTrackingDetails($index = null)
	{
		if ($index !== null)
		{
			return $this->ShipmentTrackingDetails[$index];
		}
		else
		{
			return $this->ShipmentTrackingDetails;
		}
	}

	/**
	 * @return void
	 * @param ShipmentTrackingDetailsType $value
	 * @param integer $index 
	 **/
	function setShipmentTrackingDetails($value, $index = null)
	{
		if ($index !== null)
		{
			$this->ShipmentTrackingDetails[$index] = $value;
		}
		else
		{
			$this->ShipmentTrackingDetails= $value;
		}
	}

	/**
	 * @return void
	 * @param ShipmentTrackingDetailsType $value
	 **/
	function addShipmentTrackingDetails($value)
	{
		$this->ShipmentTrackingDetails[] = $value;
	}

	/**
	 * @return RateTableDetailsType
	 **/
	function getRateTableDetails()
	{
		return $this->RateTableDetails;
	}

	/**
	 * @return void
	 **/
	function setRateTableDetails($value)
	{
		$this->RateTableDetails = $value;
	}

}
?>

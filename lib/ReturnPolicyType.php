<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**
  * Type used to express the details of the return policy for an item.
  * 
 **/

class ReturnPolicyType extends EbatNs_ComplexType
{
	/**
	* @var token
	**/
	protected $RefundOption;

	/**
	* @var string
	**/
	protected $Refund;

	/**
	* @var token
	**/
	protected $ReturnsWithinOption;

	/**
	* @var string
	**/
	protected $ReturnsWithin;

	/**
	* @var token
	**/
	protected $ReturnsAcceptedOption;

	/**
	* @var string
	**/
	protected $ReturnsAccepted;

	/**
	* @var string
	**/
	protected $Description;

	/**
	* @var token
	**/
	protected $WarrantyOfferedOption;

	/**
	* @var string
	**/
	protected $WarrantyOffered;

	/**
	* @var token
	**/
	protected $WarrantyTypeOption;

	/**
	* @var string
	**/
	protected $WarrantyType;

	/**
	* @var token
	**/
	protected $WarrantyDurationOption;

	/**
	* @var string
	**/
	protected $WarrantyDuration;

	/**
	* @var string
	**/
	protected $EAN;

	/**
	* @var token
	**/
	protected $ShippingCostPaidByOption;

	/**
	* @var string
	**/
	protected $ShippingCostPaidBy;

	/**
	* @var token
	**/
	protected $RestockingFeeValue;

	/**
	* @var token
	**/
	protected $RestockingFeeValueOption;

	/**
	* @var boolean
	**/
	protected $ExtendedHolidayReturns;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ReturnPolicyType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'RefundOption' =>
				array(
					'required' => false,
					'type' => 'token',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Refund' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ReturnsWithinOption' =>
				array(
					'required' => false,
					'type' => 'token',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ReturnsWithin' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ReturnsAcceptedOption' =>
				array(
					'required' => false,
					'type' => 'token',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ReturnsAccepted' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Description' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'WarrantyOfferedOption' =>
				array(
					'required' => false,
					'type' => 'token',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'WarrantyOffered' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'WarrantyTypeOption' =>
				array(
					'required' => false,
					'type' => 'token',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'WarrantyType' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'WarrantyDurationOption' =>
				array(
					'required' => false,
					'type' => 'token',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'WarrantyDuration' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'EAN' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ShippingCostPaidByOption' =>
				array(
					'required' => false,
					'type' => 'token',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ShippingCostPaidBy' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'RestockingFeeValue' =>
				array(
					'required' => false,
					'type' => 'token',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'RestockingFeeValueOption' =>
				array(
					'required' => false,
					'type' => 'token',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ExtendedHolidayReturns' =>
				array(
					'required' => false,
					'type' => 'boolean',
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
	 * @return token
	 **/
	function getRefundOption()
	{
		return $this->RefundOption;
	}

	/**
	 * @return void
	 **/
	function setRefundOption($value)
	{
		$this->RefundOption = $value;
	}

	/**
	 * @return string
	 **/
	function getRefund()
	{
		return $this->Refund;
	}

	/**
	 * @return void
	 **/
	function setRefund($value)
	{
		$this->Refund = $value;
	}

	/**
	 * @return token
	 **/
	function getReturnsWithinOption()
	{
		return $this->ReturnsWithinOption;
	}

	/**
	 * @return void
	 **/
	function setReturnsWithinOption($value)
	{
		$this->ReturnsWithinOption = $value;
	}

	/**
	 * @return string
	 **/
	function getReturnsWithin()
	{
		return $this->ReturnsWithin;
	}

	/**
	 * @return void
	 **/
	function setReturnsWithin($value)
	{
		$this->ReturnsWithin = $value;
	}

	/**
	 * @return token
	 **/
	function getReturnsAcceptedOption()
	{
		return $this->ReturnsAcceptedOption;
	}

	/**
	 * @return void
	 **/
	function setReturnsAcceptedOption($value)
	{
		$this->ReturnsAcceptedOption = $value;
	}

	/**
	 * @return string
	 **/
	function getReturnsAccepted()
	{
		return $this->ReturnsAccepted;
	}

	/**
	 * @return void
	 **/
	function setReturnsAccepted($value)
	{
		$this->ReturnsAccepted = $value;
	}

	/**
	 * @return string
	 **/
	function getDescription()
	{
		return $this->Description;
	}

	/**
	 * @return void
	 **/
	function setDescription($value)
	{
		$this->Description = $value;
	}

	/**
	 * @return token
	 **/
	function getWarrantyOfferedOption()
	{
		return $this->WarrantyOfferedOption;
	}

	/**
	 * @return void
	 **/
	function setWarrantyOfferedOption($value)
	{
		$this->WarrantyOfferedOption = $value;
	}

	/**
	 * @return string
	 **/
	function getWarrantyOffered()
	{
		return $this->WarrantyOffered;
	}

	/**
	 * @return void
	 **/
	function setWarrantyOffered($value)
	{
		$this->WarrantyOffered = $value;
	}

	/**
	 * @return token
	 **/
	function getWarrantyTypeOption()
	{
		return $this->WarrantyTypeOption;
	}

	/**
	 * @return void
	 **/
	function setWarrantyTypeOption($value)
	{
		$this->WarrantyTypeOption = $value;
	}

	/**
	 * @return string
	 **/
	function getWarrantyType()
	{
		return $this->WarrantyType;
	}

	/**
	 * @return void
	 **/
	function setWarrantyType($value)
	{
		$this->WarrantyType = $value;
	}

	/**
	 * @return token
	 **/
	function getWarrantyDurationOption()
	{
		return $this->WarrantyDurationOption;
	}

	/**
	 * @return void
	 **/
	function setWarrantyDurationOption($value)
	{
		$this->WarrantyDurationOption = $value;
	}

	/**
	 * @return string
	 **/
	function getWarrantyDuration()
	{
		return $this->WarrantyDuration;
	}

	/**
	 * @return void
	 **/
	function setWarrantyDuration($value)
	{
		$this->WarrantyDuration = $value;
	}

	/**
	 * @return string
	 **/
	function getEAN()
	{
		return $this->EAN;
	}

	/**
	 * @return void
	 **/
	function setEAN($value)
	{
		$this->EAN = $value;
	}

	/**
	 * @return token
	 **/
	function getShippingCostPaidByOption()
	{
		return $this->ShippingCostPaidByOption;
	}

	/**
	 * @return void
	 **/
	function setShippingCostPaidByOption($value)
	{
		$this->ShippingCostPaidByOption = $value;
	}

	/**
	 * @return string
	 **/
	function getShippingCostPaidBy()
	{
		return $this->ShippingCostPaidBy;
	}

	/**
	 * @return void
	 **/
	function setShippingCostPaidBy($value)
	{
		$this->ShippingCostPaidBy = $value;
	}

	/**
	 * @return token
	 **/
	function getRestockingFeeValue()
	{
		return $this->RestockingFeeValue;
	}

	/**
	 * @return void
	 **/
	function setRestockingFeeValue($value)
	{
		$this->RestockingFeeValue = $value;
	}

	/**
	 * @return token
	 **/
	function getRestockingFeeValueOption()
	{
		return $this->RestockingFeeValueOption;
	}

	/**
	 * @return void
	 **/
	function setRestockingFeeValueOption($value)
	{
		$this->RestockingFeeValueOption = $value;
	}

	/**
	 * @return boolean
	 **/
	function getExtendedHolidayReturns()
	{
		return $this->ExtendedHolidayReturns;
	}

	/**
	 * @return void
	 **/
	function setExtendedHolidayReturns($value)
	{
		$this->ExtendedHolidayReturns = $value;
	}

}
?>

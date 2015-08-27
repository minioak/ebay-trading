<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'PaymentStatusCodeType.php';
require_once 'CheckoutStatusCodeType.php';
require_once 'BuyerPaymentMethodCodeType.php';
require_once 'CompleteStatusCodeType.php';
require_once 'PaymentHoldStatusCodeType.php';
require_once 'eBayPaymentMismatchDetailsType.php';
require_once 'InquiryStatusCodeType.php';
require_once 'ReturnStatusCodeType.php';
require_once 'BuyerPaymentInstrumentCodeType.php';
require_once 'DigitalStatusCodeType.php';

/**
  * Contains the order status, e.g. the buyer's online
  * payment and whether the checkout process for the order is complete.
  * 
 **/

class TransactionStatusType extends EbatNs_ComplexType
{
	/**
	* @var PaymentStatusCodeType
	**/
	protected $eBayPaymentStatus;

	/**
	* @var CheckoutStatusCodeType
	**/
	protected $CheckoutStatus;

	/**
	* @var dateTime
	**/
	protected $LastTimeModified;

	/**
	* @var BuyerPaymentMethodCodeType
	**/
	protected $PaymentMethodUsed;

	/**
	* @var CompleteStatusCodeType
	**/
	protected $CompleteStatus;

	/**
	* @var boolean
	**/
	protected $BuyerSelectedShipping;

	/**
	* @var PaymentHoldStatusCodeType
	**/
	protected $PaymentHoldStatus;

	/**
	* @var boolean
	**/
	protected $IntegratedMerchantCreditCardEnabled;

	/**
	* @var eBayPaymentMismatchDetailsType
	**/
	protected $eBayPaymentMismatchDetails;

	/**
	* @var InquiryStatusCodeType
	**/
	protected $InquiryStatus;

	/**
	* @var ReturnStatusCodeType
	**/
	protected $ReturnStatus;

	/**
	* @var BuyerPaymentInstrumentCodeType
	**/
	protected $PaymentInstrument;

	/**
	* @var DigitalStatusCodeType
	**/
	protected $DigitalStatus;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('TransactionStatusType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'eBayPaymentStatus' =>
				array(
					'required' => false,
					'type' => 'PaymentStatusCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CheckoutStatus' =>
				array(
					'required' => false,
					'type' => 'CheckoutStatusCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'LastTimeModified' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PaymentMethodUsed' =>
				array(
					'required' => false,
					'type' => 'BuyerPaymentMethodCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CompleteStatus' =>
				array(
					'required' => false,
					'type' => 'CompleteStatusCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'BuyerSelectedShipping' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PaymentHoldStatus' =>
				array(
					'required' => false,
					'type' => 'PaymentHoldStatusCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'IntegratedMerchantCreditCardEnabled' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'eBayPaymentMismatchDetails' =>
				array(
					'required' => false,
					'type' => 'eBayPaymentMismatchDetailsType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'InquiryStatus' =>
				array(
					'required' => false,
					'type' => 'InquiryStatusCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ReturnStatus' =>
				array(
					'required' => false,
					'type' => 'ReturnStatusCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PaymentInstrument' =>
				array(
					'required' => false,
					'type' => 'BuyerPaymentInstrumentCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DigitalStatus' =>
				array(
					'required' => false,
					'type' => 'DigitalStatusCodeType',
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
	 * @return PaymentStatusCodeType
	 **/
	function geteBayPaymentStatus()
	{
		return $this->eBayPaymentStatus;
	}

	/**
	 * @return void
	 **/
	function seteBayPaymentStatus($value)
	{
		$this->eBayPaymentStatus = $value;
	}

	/**
	 * @return CheckoutStatusCodeType
	 **/
	function getCheckoutStatus()
	{
		return $this->CheckoutStatus;
	}

	/**
	 * @return void
	 **/
	function setCheckoutStatus($value)
	{
		$this->CheckoutStatus = $value;
	}

	/**
	 * @return dateTime
	 **/
	function getLastTimeModified()
	{
		return $this->LastTimeModified;
	}

	/**
	 * @return void
	 **/
	function setLastTimeModified($value)
	{
		$this->LastTimeModified = $value;
	}

	/**
	 * @return BuyerPaymentMethodCodeType
	 **/
	function getPaymentMethodUsed()
	{
		return $this->PaymentMethodUsed;
	}

	/**
	 * @return void
	 **/
	function setPaymentMethodUsed($value)
	{
		$this->PaymentMethodUsed = $value;
	}

	/**
	 * @return CompleteStatusCodeType
	 **/
	function getCompleteStatus()
	{
		return $this->CompleteStatus;
	}

	/**
	 * @return void
	 **/
	function setCompleteStatus($value)
	{
		$this->CompleteStatus = $value;
	}

	/**
	 * @return boolean
	 **/
	function getBuyerSelectedShipping()
	{
		return $this->BuyerSelectedShipping;
	}

	/**
	 * @return void
	 **/
	function setBuyerSelectedShipping($value)
	{
		$this->BuyerSelectedShipping = $value;
	}

	/**
	 * @return PaymentHoldStatusCodeType
	 **/
	function getPaymentHoldStatus()
	{
		return $this->PaymentHoldStatus;
	}

	/**
	 * @return void
	 **/
	function setPaymentHoldStatus($value)
	{
		$this->PaymentHoldStatus = $value;
	}

	/**
	 * @return boolean
	 **/
	function getIntegratedMerchantCreditCardEnabled()
	{
		return $this->IntegratedMerchantCreditCardEnabled;
	}

	/**
	 * @return void
	 **/
	function setIntegratedMerchantCreditCardEnabled($value)
	{
		$this->IntegratedMerchantCreditCardEnabled = $value;
	}

	/**
	 * @return eBayPaymentMismatchDetailsType
	 **/
	function geteBayPaymentMismatchDetails()
	{
		return $this->eBayPaymentMismatchDetails;
	}

	/**
	 * @return void
	 **/
	function seteBayPaymentMismatchDetails($value)
	{
		$this->eBayPaymentMismatchDetails = $value;
	}

	/**
	 * @return InquiryStatusCodeType
	 **/
	function getInquiryStatus()
	{
		return $this->InquiryStatus;
	}

	/**
	 * @return void
	 **/
	function setInquiryStatus($value)
	{
		$this->InquiryStatus = $value;
	}

	/**
	 * @return ReturnStatusCodeType
	 **/
	function getReturnStatus()
	{
		return $this->ReturnStatus;
	}

	/**
	 * @return void
	 **/
	function setReturnStatus($value)
	{
		$this->ReturnStatus = $value;
	}

	/**
	 * @return BuyerPaymentInstrumentCodeType
	 **/
	function getPaymentInstrument()
	{
		return $this->PaymentInstrument;
	}

	/**
	 * @return void
	 **/
	function setPaymentInstrument($value)
	{
		$this->PaymentInstrument = $value;
	}

	/**
	 * @return DigitalStatusCodeType
	 **/
	function getDigitalStatus()
	{
		return $this->DigitalStatus;
	}

	/**
	 * @return void
	 **/
	function setDigitalStatus($value)
	{
		$this->DigitalStatus = $value;
	}

}
?>

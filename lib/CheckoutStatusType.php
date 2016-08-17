<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'PaymentStatusCodeType.php';
require_once 'BuyerPaymentMethodCodeType.php';
require_once 'CompleteStatusCodeType.php';
require_once 'eBayPaymentMismatchDetailsType.php';
require_once 'BuyerPaymentInstrumentCodeType.php';

/**
  * Type defining the <b>CheckoutStatus</b> container that is returned in 
  * <b>GetOrders</b> and <b>GetOrderTransactions</b> to indicate 
  * the current checkout status of the order.
  * 
 **/

class CheckoutStatusType extends EbatNs_ComplexType
{
	/**
	* @var PaymentStatusCodeType
	**/
	protected $eBayPaymentStatus;

	/**
	* @var dateTime
	**/
	protected $LastModifiedTime;

	/**
	* @var BuyerPaymentMethodCodeType
	**/
	protected $PaymentMethod;

	/**
	* @var CompleteStatusCodeType
	**/
	protected $Status;

	/**
	* @var boolean
	**/
	protected $IntegratedMerchantCreditCardEnabled;

	/**
	* @var eBayPaymentMismatchDetailsType
	**/
	protected $eBayPaymentMismatchDetails;

	/**
	* @var BuyerPaymentInstrumentCodeType
	**/
	protected $PaymentInstrument;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('CheckoutStatusType', 'urn:ebay:apis:eBLBaseComponents');
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
				'LastModifiedTime' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PaymentMethod' =>
				array(
					'required' => false,
					'type' => 'BuyerPaymentMethodCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Status' =>
				array(
					'required' => false,
					'type' => 'CompleteStatusCodeType',
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
				'PaymentInstrument' =>
				array(
					'required' => false,
					'type' => 'BuyerPaymentInstrumentCodeType',
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
	 * @return dateTime
	 **/
	function getLastModifiedTime()
	{
		return $this->LastModifiedTime;
	}

	/**
	 * @return void
	 **/
	function setLastModifiedTime($value)
	{
		$this->LastModifiedTime = $value;
	}

	/**
	 * @return BuyerPaymentMethodCodeType
	 **/
	function getPaymentMethod()
	{
		return $this->PaymentMethod;
	}

	/**
	 * @return void
	 **/
	function setPaymentMethod($value)
	{
		$this->PaymentMethod = $value;
	}

	/**
	 * @return CompleteStatusCodeType
	 **/
	function getStatus()
	{
		return $this->Status;
	}

	/**
	 * @return void
	 **/
	function setStatus($value)
	{
		$this->Status = $value;
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

}
?>

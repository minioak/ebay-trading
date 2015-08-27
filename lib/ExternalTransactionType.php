<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'AmountType.php';
require_once 'PaymentTransactionStatusCodeType.php';

/**
  * Container consisting of details related to payment of an eBay order on an
  * external system such as PayPal. This container is only returned if payment has
  * been made on an order. For GetSellerTransaactions and GetItemTransactions, this
  * container is not returned for multiple line item orders.
  * 
 **/

class ExternalTransactionType extends EbatNs_ComplexType
{
	/**
	* @var string
	**/
	protected $ExternalTransactionID;

	/**
	* @var dateTime
	**/
	protected $ExternalTransactionTime;

	/**
	* @var AmountType
	**/
	protected $FeeOrCreditAmount;

	/**
	* @var AmountType
	**/
	protected $PaymentOrRefundAmount;

	/**
	* @var PaymentTransactionStatusCodeType
	**/
	protected $ExternalTransactionStatus;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ExternalTransactionType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'ExternalTransactionID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ExternalTransactionTime' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'FeeOrCreditAmount' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PaymentOrRefundAmount' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ExternalTransactionStatus' =>
				array(
					'required' => false,
					'type' => 'PaymentTransactionStatusCodeType',
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
	 * @return string
	 **/
	function getExternalTransactionID()
	{
		return $this->ExternalTransactionID;
	}

	/**
	 * @return void
	 **/
	function setExternalTransactionID($value)
	{
		$this->ExternalTransactionID = $value;
	}

	/**
	 * @return dateTime
	 **/
	function getExternalTransactionTime()
	{
		return $this->ExternalTransactionTime;
	}

	/**
	 * @return void
	 **/
	function setExternalTransactionTime($value)
	{
		$this->ExternalTransactionTime = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getFeeOrCreditAmount()
	{
		return $this->FeeOrCreditAmount;
	}

	/**
	 * @return void
	 **/
	function setFeeOrCreditAmount($value)
	{
		$this->FeeOrCreditAmount = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getPaymentOrRefundAmount()
	{
		return $this->PaymentOrRefundAmount;
	}

	/**
	 * @return void
	 **/
	function setPaymentOrRefundAmount($value)
	{
		$this->PaymentOrRefundAmount = $value;
	}

	/**
	 * @return PaymentTransactionStatusCodeType
	 **/
	function getExternalTransactionStatus()
	{
		return $this->ExternalTransactionStatus;
	}

	/**
	 * @return void
	 **/
	function setExternalTransactionStatus($value)
	{
		$this->ExternalTransactionStatus = $value;
	}

}
?>

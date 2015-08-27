<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'PaymentTransactionStatusCodeType.php';
require_once 'UserIdentityType.php';
require_once 'AmountType.php';
require_once 'TransactionReferenceType.php';

/**
  * This type contains details about the allocation of funds to one payee from a buyer payment for a specified order.
  * 
 **/

class PaymentTransactionType extends EbatNs_ComplexType
{
	/**
	* @var PaymentTransactionStatusCodeType
	**/
	protected $PaymentStatus;

	/**
	* @var UserIdentityType
	**/
	protected $Payer;

	/**
	* @var UserIdentityType
	**/
	protected $Payee;

	/**
	* @var dateTime
	**/
	protected $PaymentTime;

	/**
	* @var AmountType
	**/
	protected $PaymentAmount;

	/**
	* @var TransactionReferenceType
	**/
	protected $ReferenceID;

	/**
	* @var AmountType
	**/
	protected $FeeOrCreditAmount;

	/**
	* @var TransactionReferenceType
	**/
	protected $PaymentReferenceID;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('PaymentTransactionType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'PaymentStatus' =>
				array(
					'required' => false,
					'type' => 'PaymentTransactionStatusCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Payer' =>
				array(
					'required' => false,
					'type' => 'UserIdentityType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Payee' =>
				array(
					'required' => false,
					'type' => 'UserIdentityType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PaymentTime' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PaymentAmount' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ReferenceID' =>
				array(
					'required' => false,
					'type' => 'TransactionReferenceType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
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
				'PaymentReferenceID' =>
				array(
					'required' => false,
					'type' => 'TransactionReferenceType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				)));
		}
		$this->_attributes = array_merge($this->_attributes,
		array(
));
	}

	/**
	 * @return PaymentTransactionStatusCodeType
	 **/
	function getPaymentStatus()
	{
		return $this->PaymentStatus;
	}

	/**
	 * @return void
	 **/
	function setPaymentStatus($value)
	{
		$this->PaymentStatus = $value;
	}

	/**
	 * @return UserIdentityType
	 **/
	function getPayer()
	{
		return $this->Payer;
	}

	/**
	 * @return void
	 **/
	function setPayer($value)
	{
		$this->Payer = $value;
	}

	/**
	 * @return UserIdentityType
	 **/
	function getPayee()
	{
		return $this->Payee;
	}

	/**
	 * @return void
	 **/
	function setPayee($value)
	{
		$this->Payee = $value;
	}

	/**
	 * @return dateTime
	 **/
	function getPaymentTime()
	{
		return $this->PaymentTime;
	}

	/**
	 * @return void
	 **/
	function setPaymentTime($value)
	{
		$this->PaymentTime = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getPaymentAmount()
	{
		return $this->PaymentAmount;
	}

	/**
	 * @return void
	 **/
	function setPaymentAmount($value)
	{
		$this->PaymentAmount = $value;
	}

	/**
	 * @return TransactionReferenceType
	 **/
	function getReferenceID()
	{
		return $this->ReferenceID;
	}

	/**
	 * @return void
	 **/
	function setReferenceID($value)
	{
		$this->ReferenceID = $value;
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
	 * @return TransactionReferenceType
	 * @param integer $index 
	 **/
	function getPaymentReferenceID($index = null)
	{
		if ($index !== null)
		{
			return $this->PaymentReferenceID[$index];
		}
		else
		{
			return $this->PaymentReferenceID;
		}
	}

	/**
	 * @return void
	 * @param TransactionReferenceType $value
	 * @param integer $index 
	 **/
	function setPaymentReferenceID($value, $index = null)
	{
		if ($index !== null)
		{
			$this->PaymentReferenceID[$index] = $value;
		}
		else
		{
			$this->PaymentReferenceID= $value;
		}
	}

	/**
	 * @return void
	 * @param TransactionReferenceType $value
	 **/
	function addPaymentReferenceID($value)
	{
		$this->PaymentReferenceID[] = $value;
	}

}
?>

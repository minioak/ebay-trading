<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'PaymentTransactionStatusCodeType.php';
require_once 'RefundSourceTypeCodeType.php';
require_once 'UserIdentityType.php';
require_once 'AmountType.php';
require_once 'TransactionReferenceType.php';

/**
  * Type defining the <strong>Refund</strong> container, which consists of detailed information on an In-Store Pickup item refund.
  * <br/><br/>
  * <span class="tablenote">
  * <strong>Note:</strong> At this time, the In-Store Pickup feature is generally only available to large retail merchants, and can only be applied to multi-quantity, fixed-price listings.  
  * </span>
  * 
 **/

class RefundTransactionInfoType extends EbatNs_ComplexType
{
	/**
	* @var PaymentTransactionStatusCodeType
	**/
	protected $RefundStatus;

	/**
	* @var RefundSourceTypeCodeType
	**/
	protected $RefundType;

	/**
	* @var UserIdentityType
	**/
	protected $RefundTo;

	/**
	* @var dateTime
	**/
	protected $RefundTime;

	/**
	* @var AmountType
	**/
	protected $RefundAmount;

	/**
	* @var TransactionReferenceType
	**/
	protected $ReferenceID;

	/**
	* @var AmountType
	**/
	protected $FeeOrCreditAmount;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('RefundTransactionInfoType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'RefundStatus' =>
				array(
					'required' => false,
					'type' => 'PaymentTransactionStatusCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'RefundType' =>
				array(
					'required' => false,
					'type' => 'RefundSourceTypeCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'RefundTo' =>
				array(
					'required' => false,
					'type' => 'UserIdentityType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'RefundTime' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'RefundAmount' =>
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
				)));
		}
		$this->_attributes = array_merge($this->_attributes,
		array(
));
	}

	/**
	 * @return PaymentTransactionStatusCodeType
	 **/
	function getRefundStatus()
	{
		return $this->RefundStatus;
	}

	/**
	 * @return void
	 **/
	function setRefundStatus($value)
	{
		$this->RefundStatus = $value;
	}

	/**
	 * @return RefundSourceTypeCodeType
	 **/
	function getRefundType()
	{
		return $this->RefundType;
	}

	/**
	 * @return void
	 **/
	function setRefundType($value)
	{
		$this->RefundType = $value;
	}

	/**
	 * @return UserIdentityType
	 **/
	function getRefundTo()
	{
		return $this->RefundTo;
	}

	/**
	 * @return void
	 **/
	function setRefundTo($value)
	{
		$this->RefundTo = $value;
	}

	/**
	 * @return dateTime
	 **/
	function getRefundTime()
	{
		return $this->RefundTime;
	}

	/**
	 * @return void
	 **/
	function setRefundTime($value)
	{
		$this->RefundTime = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getRefundAmount()
	{
		return $this->RefundAmount;
	}

	/**
	 * @return void
	 **/
	function setRefundAmount($value)
	{
		$this->RefundAmount = $value;
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

}
?>

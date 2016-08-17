<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'AmountType.php';
require_once 'RefundTransactionArrayType.php';
require_once 'RefundStatusCodeType.php';
require_once 'RefundFailureReasonType.php';
require_once 'RefundFundingSourceArrayType.php';

/**
  * Contains information about a single Half.com refund. 
  * 
 **/

class RefundType extends EbatNs_ComplexType
{
	/**
	* @var AmountType
	**/
	protected $RefundFromSeller;

	/**
	* @var AmountType
	**/
	protected $TotalRefundToBuyer;

	/**
	* @var dateTime
	**/
	protected $RefundTime;

	/**
	* @var string
	**/
	protected $RefundID;

	/**
	* @var RefundTransactionArrayType
	**/
	protected $RefundTransactionArray;

	/**
	* @var AmountType
	**/
	protected $RefundAmount;

	/**
	* @var RefundStatusCodeType
	**/
	protected $RefundStatus;

	/**
	* @var RefundFailureReasonType
	**/
	protected $RefundFailureReason;

	/**
	* @var RefundFundingSourceArrayType
	**/
	protected $RefundFundingSourceArray;

	/**
	* @var string
	**/
	protected $ExternalReferenceID;

	/**
	* @var dateTime
	**/
	protected $RefundRequestedTime;

	/**
	* @var dateTime
	**/
	protected $RefundCompletionTime;

	/**
	* @var dateTime
	**/
	protected $EstimatedRefundCompletionTime;

	/**
	* @var string
	**/
	protected $SellerNoteToBuyer;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('RefundType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'RefundFromSeller' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'TotalRefundToBuyer' =>
				array(
					'required' => false,
					'type' => 'AmountType',
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
				'RefundID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'RefundTransactionArray' =>
				array(
					'required' => false,
					'type' => 'RefundTransactionArrayType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
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
				'RefundStatus' =>
				array(
					'required' => false,
					'type' => 'RefundStatusCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'RefundFailureReason' =>
				array(
					'required' => false,
					'type' => 'RefundFailureReasonType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'RefundFundingSourceArray' =>
				array(
					'required' => false,
					'type' => 'RefundFundingSourceArrayType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ExternalReferenceID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'RefundRequestedTime' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'RefundCompletionTime' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'EstimatedRefundCompletionTime' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SellerNoteToBuyer' =>
				array(
					'required' => false,
					'type' => 'string',
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
	 * @return AmountType
	 **/
	function getRefundFromSeller()
	{
		return $this->RefundFromSeller;
	}

	/**
	 * @return void
	 **/
	function setRefundFromSeller($value)
	{
		$this->RefundFromSeller = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getTotalRefundToBuyer()
	{
		return $this->TotalRefundToBuyer;
	}

	/**
	 * @return void
	 **/
	function setTotalRefundToBuyer($value)
	{
		$this->TotalRefundToBuyer = $value;
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
	 * @return string
	 **/
	function getRefundID()
	{
		return $this->RefundID;
	}

	/**
	 * @return void
	 **/
	function setRefundID($value)
	{
		$this->RefundID = $value;
	}

	/**
	 * @return RefundTransactionArrayType
	 **/
	function getRefundTransactionArray()
	{
		return $this->RefundTransactionArray;
	}

	/**
	 * @return void
	 **/
	function setRefundTransactionArray($value)
	{
		$this->RefundTransactionArray = $value;
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
	 * @return RefundStatusCodeType
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
	 * @return RefundFailureReasonType
	 **/
	function getRefundFailureReason()
	{
		return $this->RefundFailureReason;
	}

	/**
	 * @return void
	 **/
	function setRefundFailureReason($value)
	{
		$this->RefundFailureReason = $value;
	}

	/**
	 * @return RefundFundingSourceArrayType
	 **/
	function getRefundFundingSourceArray()
	{
		return $this->RefundFundingSourceArray;
	}

	/**
	 * @return void
	 **/
	function setRefundFundingSourceArray($value)
	{
		$this->RefundFundingSourceArray = $value;
	}

	/**
	 * @return string
	 **/
	function getExternalReferenceID()
	{
		return $this->ExternalReferenceID;
	}

	/**
	 * @return void
	 **/
	function setExternalReferenceID($value)
	{
		$this->ExternalReferenceID = $value;
	}

	/**
	 * @return dateTime
	 **/
	function getRefundRequestedTime()
	{
		return $this->RefundRequestedTime;
	}

	/**
	 * @return void
	 **/
	function setRefundRequestedTime($value)
	{
		$this->RefundRequestedTime = $value;
	}

	/**
	 * @return dateTime
	 **/
	function getRefundCompletionTime()
	{
		return $this->RefundCompletionTime;
	}

	/**
	 * @return void
	 **/
	function setRefundCompletionTime($value)
	{
		$this->RefundCompletionTime = $value;
	}

	/**
	 * @return dateTime
	 **/
	function getEstimatedRefundCompletionTime()
	{
		return $this->EstimatedRefundCompletionTime;
	}

	/**
	 * @return void
	 **/
	function setEstimatedRefundCompletionTime($value)
	{
		$this->EstimatedRefundCompletionTime = $value;
	}

	/**
	 * @return string
	 **/
	function getSellerNoteToBuyer()
	{
		return $this->SellerNoteToBuyer;
	}

	/**
	 * @return void
	 **/
	function setSellerNoteToBuyer($value)
	{
		$this->SellerNoteToBuyer = $value;
	}

}
?>

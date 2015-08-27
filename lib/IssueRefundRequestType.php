<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractRequestType.php';
require_once 'ItemIDType.php';
require_once 'RefundReasonCodeType.php';
require_once 'RefundTypeCodeType.php';
require_once 'AmountType.php';

/**
  * <b>Half.com only.</b>&nbsp;Issues a refund for a specific
  * Half.com order line item. This can only be called by a seller. Sellers do not
  * have the ability to issue a general refund (a refund not tied to an order line
  * item) to a buyer.
  * 
 **/

class IssueRefundRequestType extends AbstractRequestType
{
	/**
	* @var ItemIDType
	**/
	protected $ItemID;

	/**
	* @var string
	**/
	protected $TransactionID;

	/**
	* @var RefundReasonCodeType
	**/
	protected $RefundReason;

	/**
	* @var RefundTypeCodeType
	**/
	protected $RefundType;

	/**
	* @var AmountType
	**/
	protected $RefundAmount;

	/**
	* @var string
	**/
	protected $RefundMessage;

	/**
	* @var string
	**/
	protected $OrderLineItemID;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('IssueRefundRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'ItemID' =>
				array(
					'required' => false,
					'type' => 'ItemIDType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'TransactionID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'RefundReason' =>
				array(
					'required' => false,
					'type' => 'RefundReasonCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'RefundType' =>
				array(
					'required' => false,
					'type' => 'RefundTypeCodeType',
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
				'RefundMessage' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'OrderLineItemID' =>
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
	 * @return ItemIDType
	 **/
	function getItemID()
	{
		return $this->ItemID;
	}

	/**
	 * @return void
	 **/
	function setItemID($value)
	{
		$this->ItemID = $value;
	}

	/**
	 * @return string
	 **/
	function getTransactionID()
	{
		return $this->TransactionID;
	}

	/**
	 * @return void
	 **/
	function setTransactionID($value)
	{
		$this->TransactionID = $value;
	}

	/**
	 * @return RefundReasonCodeType
	 **/
	function getRefundReason()
	{
		return $this->RefundReason;
	}

	/**
	 * @return void
	 **/
	function setRefundReason($value)
	{
		$this->RefundReason = $value;
	}

	/**
	 * @return RefundTypeCodeType
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
	 * @return string
	 **/
	function getRefundMessage()
	{
		return $this->RefundMessage;
	}

	/**
	 * @return void
	 **/
	function setRefundMessage($value)
	{
		$this->RefundMessage = $value;
	}

	/**
	 * @return string
	 **/
	function getOrderLineItemID()
	{
		return $this->OrderLineItemID;
	}

	/**
	 * @return void
	 **/
	function setOrderLineItemID($value)
	{
		$this->OrderLineItemID = $value;
	}

}
?>

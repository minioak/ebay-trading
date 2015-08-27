<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractRequestType.php';
require_once 'ItemIDType.php';
require_once 'UserIDType.php';
require_once 'FeedbackResponseCodeType.php';

/**
  * Enables a seller to reply to feedback that has been left for a user, or to post a
  * follow-up comment to a feedback comment the user has left for someone else.
  * 
 **/

class RespondToFeedbackRequestType extends AbstractRequestType
{
	/**
	* @var string
	**/
	protected $FeedbackID;

	/**
	* @var ItemIDType
	**/
	protected $ItemID;

	/**
	* @var string
	**/
	protected $TransactionID;

	/**
	* @var UserIDType
	**/
	protected $TargetUserID;

	/**
	* @var FeedbackResponseCodeType
	**/
	protected $ResponseType;

	/**
	* @var string
	**/
	protected $ResponseText;

	/**
	* @var string
	**/
	protected $OrderLineItemID;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('RespondToFeedbackRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'FeedbackID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
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
				'TargetUserID' =>
				array(
					'required' => false,
					'type' => 'UserIDType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ResponseType' =>
				array(
					'required' => false,
					'type' => 'FeedbackResponseCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ResponseText' =>
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
	 * @return string
	 **/
	function getFeedbackID()
	{
		return $this->FeedbackID;
	}

	/**
	 * @return void
	 **/
	function setFeedbackID($value)
	{
		$this->FeedbackID = $value;
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
	 * @return UserIDType
	 **/
	function getTargetUserID()
	{
		return $this->TargetUserID;
	}

	/**
	 * @return void
	 **/
	function setTargetUserID($value)
	{
		$this->TargetUserID = $value;
	}

	/**
	 * @return FeedbackResponseCodeType
	 **/
	function getResponseType()
	{
		return $this->ResponseType;
	}

	/**
	 * @return void
	 **/
	function setResponseType($value)
	{
		$this->ResponseType = $value;
	}

	/**
	 * @return string
	 **/
	function getResponseText()
	{
		return $this->ResponseText;
	}

	/**
	 * @return void
	 **/
	function setResponseText($value)
	{
		$this->ResponseText = $value;
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

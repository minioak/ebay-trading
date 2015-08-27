<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'UserIDType.php';
require_once 'CommentTypeCodeType.php';
require_once 'ItemIDType.php';
require_once 'TradingRoleCodeType.php';
require_once 'AmountType.php';

/**
  * Container consisting of detailed information on a Feedback entry for a specific 
  * order line item.
  *   
 **/

class FeedbackDetailType extends EbatNs_ComplexType
{
	/**
	* @var UserIDType
	**/
	protected $CommentingUser;

	/**
	* @var int
	**/
	protected $CommentingUserScore;

	/**
	* @var string
	**/
	protected $CommentText;

	/**
	* @var dateTime
	**/
	protected $CommentTime;

	/**
	* @var CommentTypeCodeType
	**/
	protected $CommentType;

	/**
	* @var string
	**/
	protected $FeedbackResponse;

	/**
	* @var string
	**/
	protected $Followup;

	/**
	* @var ItemIDType
	**/
	protected $ItemID;

	/**
	* @var TradingRoleCodeType
	**/
	protected $Role;

	/**
	* @var string
	**/
	protected $ItemTitle;

	/**
	* @var AmountType
	**/
	protected $ItemPrice;

	/**
	* @var string
	**/
	protected $FeedbackID;

	/**
	* @var string
	**/
	protected $TransactionID;

	/**
	* @var boolean
	**/
	protected $CommentReplaced;

	/**
	* @var boolean
	**/
	protected $ResponseReplaced;

	/**
	* @var boolean
	**/
	protected $FollowUpReplaced;

	/**
	* @var boolean
	**/
	protected $Countable;

	/**
	* @var boolean
	**/
	protected $FeedbackRevised;

	/**
	* @var string
	**/
	protected $OrderLineItemID;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('FeedbackDetailType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'CommentingUser' =>
				array(
					'required' => false,
					'type' => 'UserIDType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CommentingUserScore' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CommentText' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CommentTime' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CommentType' =>
				array(
					'required' => false,
					'type' => 'CommentTypeCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'FeedbackResponse' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Followup' =>
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
				'Role' =>
				array(
					'required' => false,
					'type' => 'TradingRoleCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ItemTitle' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ItemPrice' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'FeedbackID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
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
				'CommentReplaced' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ResponseReplaced' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'FollowUpReplaced' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Countable' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'FeedbackRevised' =>
				array(
					'required' => false,
					'type' => 'boolean',
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
	 * @return UserIDType
	 **/
	function getCommentingUser()
	{
		return $this->CommentingUser;
	}

	/**
	 * @return void
	 **/
	function setCommentingUser($value)
	{
		$this->CommentingUser = $value;
	}

	/**
	 * @return int
	 **/
	function getCommentingUserScore()
	{
		return $this->CommentingUserScore;
	}

	/**
	 * @return void
	 **/
	function setCommentingUserScore($value)
	{
		$this->CommentingUserScore = $value;
	}

	/**
	 * @return string
	 **/
	function getCommentText()
	{
		return $this->CommentText;
	}

	/**
	 * @return void
	 **/
	function setCommentText($value)
	{
		$this->CommentText = $value;
	}

	/**
	 * @return dateTime
	 **/
	function getCommentTime()
	{
		return $this->CommentTime;
	}

	/**
	 * @return void
	 **/
	function setCommentTime($value)
	{
		$this->CommentTime = $value;
	}

	/**
	 * @return CommentTypeCodeType
	 **/
	function getCommentType()
	{
		return $this->CommentType;
	}

	/**
	 * @return void
	 **/
	function setCommentType($value)
	{
		$this->CommentType = $value;
	}

	/**
	 * @return string
	 **/
	function getFeedbackResponse()
	{
		return $this->FeedbackResponse;
	}

	/**
	 * @return void
	 **/
	function setFeedbackResponse($value)
	{
		$this->FeedbackResponse = $value;
	}

	/**
	 * @return string
	 **/
	function getFollowup()
	{
		return $this->Followup;
	}

	/**
	 * @return void
	 **/
	function setFollowup($value)
	{
		$this->Followup = $value;
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
	 * @return TradingRoleCodeType
	 **/
	function getRole()
	{
		return $this->Role;
	}

	/**
	 * @return void
	 **/
	function setRole($value)
	{
		$this->Role = $value;
	}

	/**
	 * @return string
	 **/
	function getItemTitle()
	{
		return $this->ItemTitle;
	}

	/**
	 * @return void
	 **/
	function setItemTitle($value)
	{
		$this->ItemTitle = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getItemPrice()
	{
		return $this->ItemPrice;
	}

	/**
	 * @return void
	 **/
	function setItemPrice($value)
	{
		$this->ItemPrice = $value;
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
	 * @return boolean
	 **/
	function getCommentReplaced()
	{
		return $this->CommentReplaced;
	}

	/**
	 * @return void
	 **/
	function setCommentReplaced($value)
	{
		$this->CommentReplaced = $value;
	}

	/**
	 * @return boolean
	 **/
	function getResponseReplaced()
	{
		return $this->ResponseReplaced;
	}

	/**
	 * @return void
	 **/
	function setResponseReplaced($value)
	{
		$this->ResponseReplaced = $value;
	}

	/**
	 * @return boolean
	 **/
	function getFollowUpReplaced()
	{
		return $this->FollowUpReplaced;
	}

	/**
	 * @return void
	 **/
	function setFollowUpReplaced($value)
	{
		$this->FollowUpReplaced = $value;
	}

	/**
	 * @return boolean
	 **/
	function getCountable()
	{
		return $this->Countable;
	}

	/**
	 * @return void
	 **/
	function setCountable($value)
	{
		$this->Countable = $value;
	}

	/**
	 * @return boolean
	 **/
	function getFeedbackRevised()
	{
		return $this->FeedbackRevised;
	}

	/**
	 * @return void
	 **/
	function setFeedbackRevised($value)
	{
		$this->FeedbackRevised = $value;
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

<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'UserIDType.php';
require_once 'AmountType.php';
require_once 'BidderStatusCodeType.php';

/**
  * This type is deprecated.
  * 
 **/

class BidApprovalType extends EbatNs_ComplexType
{
	/**
	* @var UserIDType
	**/
	protected $UserID;

	/**
	* @var AmountType
	**/
	protected $ApprovedBiddingLimit;

	/**
	* @var string
	**/
	protected $DeclinedComment;

	/**
	* @var BidderStatusCodeType
	**/
	protected $Status;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('BidApprovalType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'UserID' =>
				array(
					'required' => false,
					'type' => 'UserIDType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ApprovedBiddingLimit' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DeclinedComment' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Status' =>
				array(
					'required' => false,
					'type' => 'BidderStatusCodeType',
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
	 * @return UserIDType
	 **/
	function getUserID()
	{
		return $this->UserID;
	}

	/**
	 * @return void
	 **/
	function setUserID($value)
	{
		$this->UserID = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getApprovedBiddingLimit()
	{
		return $this->ApprovedBiddingLimit;
	}

	/**
	 * @return void
	 **/
	function setApprovedBiddingLimit($value)
	{
		$this->ApprovedBiddingLimit = $value;
	}

	/**
	 * @return string
	 **/
	function getDeclinedComment()
	{
		return $this->DeclinedComment;
	}

	/**
	 * @return void
	 **/
	function setDeclinedComment($value)
	{
		$this->DeclinedComment = $value;
	}

	/**
	 * @return BidderStatusCodeType
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

}
?>

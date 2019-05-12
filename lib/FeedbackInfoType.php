<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'CommentTypeCodeType.php';
require_once 'UserIDType.php';

/**
  * Type defining the Feedback details for an order line item, including the eBay User ID
  * of the user the feedback is intended for, the Feedback rating, and the Feedback comment.
  * 
 **/

class FeedbackInfoType extends EbatNs_ComplexType
{
	/**
	* @var string
	**/
	protected $CommentText;

	/**
	* @var CommentTypeCodeType
	**/
	protected $CommentType;

	/**
	* @var UserIDType
	**/
	protected $TargetUser;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('FeedbackInfoType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'CommentText' =>
				array(
					'required' => false,
					'type' => 'string',
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
				'TargetUser' =>
				array(
					'required' => false,
					'type' => 'UserIDType',
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
	 * @return UserIDType
	 **/
	function getTargetUser()
	{
		return $this->TargetUser;
	}

	/**
	 * @return void
	 **/
	function setTargetUser($value)
	{
		$this->TargetUser = $value;
	}

}
?>

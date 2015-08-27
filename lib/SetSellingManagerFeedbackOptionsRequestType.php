<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractRequestType.php';
require_once 'AutomatedLeaveFeedbackEventCodeType.php';
require_once 'FeedbackCommentArrayType.php';

/**
  * Enables Selling Manager subscribers to store standard feedback comments that can
  * be left for their buyers. Selling Manager Pro subscribers can also specify what
  * events, if any, will trigger an automated feedback to buyers.
  * 
 **/

class SetSellingManagerFeedbackOptionsRequestType extends AbstractRequestType
{
	/**
	* @var AutomatedLeaveFeedbackEventCodeType
	**/
	protected $AutomatedLeaveFeedbackEvent;

	/**
	* @var FeedbackCommentArrayType
	**/
	protected $StoredComments;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('SetSellingManagerFeedbackOptionsRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'AutomatedLeaveFeedbackEvent' =>
				array(
					'required' => false,
					'type' => 'AutomatedLeaveFeedbackEventCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'StoredComments' =>
				array(
					'required' => false,
					'type' => 'FeedbackCommentArrayType',
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
	 * @return AutomatedLeaveFeedbackEventCodeType
	 **/
	function getAutomatedLeaveFeedbackEvent()
	{
		return $this->AutomatedLeaveFeedbackEvent;
	}

	/**
	 * @return void
	 **/
	function setAutomatedLeaveFeedbackEvent($value)
	{
		$this->AutomatedLeaveFeedbackEvent = $value;
	}

	/**
	 * @return FeedbackCommentArrayType
	 **/
	function getStoredComments()
	{
		return $this->StoredComments;
	}

	/**
	 * @return void
	 **/
	function setStoredComments($value)
	{
		$this->StoredComments = $value;
	}

}
?>

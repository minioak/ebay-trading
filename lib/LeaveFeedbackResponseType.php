<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractResponseType.php';

/**
  *           LeaveFeedback response message includes an acknowledgement if the
  *           feedback was successfully left.
  * 
 **/

class LeaveFeedbackResponseType extends AbstractResponseType
{
	/**
	* @var string
	**/
	protected $FeedbackID;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('LeaveFeedbackResponseType', 'urn:ebay:apis:eBLBaseComponents');
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

}
?>

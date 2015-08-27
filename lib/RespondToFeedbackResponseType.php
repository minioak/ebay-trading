<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractResponseType.php';

/**
  * Indicates the success or failure of the attempt to reply
  * to feedback that has been left for a user, or to post a
  * follow-up comment to a feedback comment a user has left
  * for someone else.
  * 
 **/

class RespondToFeedbackResponseType extends AbstractResponseType
{

	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('RespondToFeedbackResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
));
		}
		$this->_attributes = array_merge($this->_attributes,
		array(
));
	}

}
?>

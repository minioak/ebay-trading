<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractResponseType.php';

/**
  * The response to DeleteMyMessagesRequestType. If the request was successful, 
  * DeleteMyMessages returns nothing.
  * 
 **/

class DeleteMyMessagesResponseType extends AbstractResponseType
{

	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('DeleteMyMessagesResponseType', 'urn:ebay:apis:eBLBaseComponents');
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

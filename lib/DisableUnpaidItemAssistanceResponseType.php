<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractResponseType.php';

/**
  * Response of the <b>DisableUnpaidItemAssistance</b> call, which includes only
  * the standard response fields like <b>Ack</b>, <b>Timestamp</b>, <b>Errors</b>, etc.
  * 
 **/

class DisableUnpaidItemAssistanceResponseType extends AbstractResponseType
{

	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('DisableUnpaidItemAssistanceResponseType', 'urn:ebay:apis:eBLBaseComponents');
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

<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractResponseType.php';

/**
  * The Timestamp field indicates the official eBay system time in GMT.
  * For information about converting between GMT and other time zones,
  * see "Time Values" in the Data Types appendix in the eBay Features Guide.
  * 
 **/

class GeteBayOfficialTimeResponseType extends AbstractResponseType
{

	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('GeteBayOfficialTimeResponseType', 'urn:ebay:apis:eBLBaseComponents');
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

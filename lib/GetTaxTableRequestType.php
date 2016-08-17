<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractRequestType.php';

/**
  * Retrieves the tax table for a user on a given site or retrieves the valid
  * jurisdictions (if any) for a given site.
  * 
 **/

class GetTaxTableRequestType extends AbstractRequestType
{

	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('GetTaxTableRequestType', 'urn:ebay:apis:eBLBaseComponents');
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

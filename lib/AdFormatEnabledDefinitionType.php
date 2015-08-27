<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/** 
  * Type defining the <b>AdFormatEnabled</b> field that is returned under the <b>FeatureDefinitions</b> container if 'AdFormatEnabled' is used as a <b>FeatureID</b> value in the request, or if no <b>FeatureID</b> values are used in the request. The field is returned as an empty element (e.g., a boolean value is not returned).
  * 
 **/

class AdFormatEnabledDefinitionType extends EbatNs_ComplexType
{

	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('AdFormatEnabledDefinitionType', 'urn:ebay:apis:eBLBaseComponents');
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

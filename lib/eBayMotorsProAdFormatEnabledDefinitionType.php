<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**
  * Type defining the <b>eBayMotorsProAdFormatEnabled</b> field that is returned under the <b>FeatureDefinitions</b> container if <code>eBayMotorsProAdFormatEnabled</code> is used as a <b>FeatureID</b> value in the request, or if no <b>FeatureID</b> values are used in the request. This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support Classified Ad listings for eBay Motors Pro users.
  * <br/><br/>
  * To verify if a specific eBay site supports Classified Ad listings for eBay Motors Pro users (for most categories), look for a <code>true</code> value in the <b>SiteDefaults.eBayMotorsProAdFormatEnabled</b> field.
  * <br/><br/>
  * To verify if a specific category on a specific eBay site supports Classified Ad listings for eBay Motors Pro users, pass in a <b>CategoryID</b> value in the request, and then look for a <code>true</code> value in the <b>eBayMotorsProAdFormatEnabled</b> field of the corresponding <b>Category</b> node (match up the <b>CategoryID</b> values if more than one Category IDs were passed in the request).
  * 
 **/

class eBayMotorsProAdFormatEnabledDefinitionType extends EbatNs_ComplexType
{

	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('eBayMotorsProAdFormatEnabledDefinitionType', 'urn:ebay:apis:eBLBaseComponents');
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

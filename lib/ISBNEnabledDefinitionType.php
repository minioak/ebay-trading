<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**
  * Type defining the <b>ISBNEnabled</b> field that is returned under the <b>FeatureDefinitions</b> container of the <b>GetCategoryFeatures</b> response (as long as 'ISBNEnabled' is included as a <b>FeatureID</b> value in the call request or no <b>FeatureID</b> values are passed into the call request). This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the ISBN product identifying feature.
  * <br><br>
  * To verify if a specific eBay site supports the ISBN product identifying feature (for most categories), look for a 'true' value in the <b>SiteDefaults.ISBNEnabled</b> field.
  * <br><br>
  * To verify if a specific category on a specific eBay site supports the ISBN product identifying feature, pass in a <b>CategoryID</b> value in the request, and then look for a 'true' value in the <b>ISBNEnabled</b> field of the corresponding <b>Category</b> node (match up the <b>CategoryID<.b> values if more than one Category IDs were passed in the request).
  * 
 **/

class ISBNEnabledDefinitionType extends EbatNs_ComplexType
{

	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ISBNEnabledDefinitionType', 'urn:ebay:apis:eBLBaseComponents');
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

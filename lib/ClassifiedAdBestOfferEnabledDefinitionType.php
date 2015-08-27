<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**
  * Type defining the <b>ClassifiedAdBestOfferEnabled</b> field that is 
  * returned under the <b>FeatureDefinitions</b> container of the 
  * <b>GetCategoryFeatures</b> response (as long as 
  * 'ClassifiedAdBestOfferEnabled' is included as a <b>FeatureID</b> value in 
  * the call request or no <b>FeatureID</b> values are passed into the call 
  * request). This field is returned as an
  * empty element (a boolean value is not returned) if one or more eBay API-enabled sites 
  * support the Classified Ad Best Offer feature. 
  * <br/><br/>
  * To verify if a specific eBay site supports the Classified Ad Best Offer feature (for most
  * categories), look for a 'true' value in the 
  * <b>SiteDefaults.ClassifiedAdBestOfferEnabled</b> field.
  * <br/><br/>
  * To verify if a specific category on a specific eBay site supports the Classified Ad Best Offer feature, pass in a <b>CategoryID</b> value in the request, and then 
  * look for a 'true' value in the <b>ClassifiedAdBestOfferEnabled</b> field 
  * of the corresponding Category node (match up the <b>CategoryID</b> values 
  * if more than one Category IDs were passed in the request).
  * 
 **/

class ClassifiedAdBestOfferEnabledDefinitionType extends EbatNs_ComplexType
{

	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ClassifiedAdBestOfferEnabledDefinitionType', 'urn:ebay:apis:eBLBaseComponents');
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

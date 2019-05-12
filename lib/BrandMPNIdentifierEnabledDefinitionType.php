<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**
  * Type defining the <b>BrandMPNIdentifierEnabled</b> field that is
  * returned under the <b>FeatureDefinitions</b> container of the
  * <b>GetCategoryFeatures</b> response (as long as
  * <code>BrandMPNIdentifierEnabled</code> is included as a <b>FeatureID</b> value in
  * the call request or no <b>FeatureID</b> values are passed into the call
  * request). This field is returned as an
  * empty element (a boolean value is not returned) if one or more eBay API-enabled sites
  * support the Brand/Manufacturer Part Number feature.
  * <br/><br/>
  * To verify if a specific eBay site supports the Brand/Manufacturer Part Number feature (for most
  * categories), look for a <code>true</code> value in the
  * <b>SiteDefaults.BrandMPNIdentifierEnabled</b> field.
  * <br/><br/>
  * To verify if a specific category on a specific eBay site supports the Brand/Manufacturer Part Number feature, pass in a <b>CategoryID</b> value in the request, and then
  * look for a <code>true</code> value in the <b>BrandMPNIdentifierEnabled</b> field
  * of the corresponding <b>Category</b> node (match up the <b>CategoryID</b> values
  * if more than one Category ID was passed in the request).
  * 
 **/

class BrandMPNIdentifierEnabledDefinitionType extends EbatNs_ComplexType
{

	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('BrandMPNIdentifierEnabledDefinitionType', 'urn:ebay:apis:eBLBaseComponents');
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

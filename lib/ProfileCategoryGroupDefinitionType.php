<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**
  * Type defining the <b>PaymentProfileCategoryGroup</b>, <b>
  * ReturnPolicyProfileCategoryGroup</b>, and <b>ShippingProfileCategoryGroup</b>
  * fields, which are all returned in the <b>GetCategoryFeature</b> response if these
  * Business Policies profile types apply to the category. Each of these fields is returned as an
  * empty element.
  * 
 **/

class ProfileCategoryGroupDefinitionType extends EbatNs_ComplexType
{

	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ProfileCategoryGroupDefinitionType', 'urn:ebay:apis:eBLBaseComponents');
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

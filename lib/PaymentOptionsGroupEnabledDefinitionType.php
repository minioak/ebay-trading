<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**
  * The PaymentOptionsGroupEnabled field is returned in the GetCategoryFeature response if the Payment Options Group feature
  * applies to the category. The field is returned as an empty element. The Payment Options Group feature is only applicable to 
  * DE and AT listings.
  * 
 **/

class PaymentOptionsGroupEnabledDefinitionType extends EbatNs_ComplexType
{

	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('PaymentOptionsGroupEnabledDefinitionType', 'urn:ebay:apis:eBLBaseComponents');
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

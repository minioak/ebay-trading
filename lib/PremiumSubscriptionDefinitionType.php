<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/** 
  * Indicates category support for listing of Local Market items by sellers
  * subscribed to Local Market for Premium Vehicles.
  * Each of the subscriptions will have following options, which will define
  * "National" vs "Local" ad format listing.
  * "LocalOptional" : This will allow national and local listing.
  * "LocalOnly" : Seller can have Local listings only.
  * "NationalOnly" : Seller can not opt into local only exposure. It has to be 
  * national listing.
  * 
 **/

class PremiumSubscriptionDefinitionType extends EbatNs_ComplexType
{

	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('PremiumSubscriptionDefinitionType', 'urn:ebay:apis:eBLBaseComponents');
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

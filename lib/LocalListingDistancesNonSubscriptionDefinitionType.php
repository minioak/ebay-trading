<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/** 
  * Defines the LocalListingDistancesNonSubscription feature. This feature displays all the supported local 
  * listing distances for items listed by sellers who have not subscribed to either Local Market for Vehicles 
  * or Local Market for Specialty Vehicles.
  * 
 **/

class LocalListingDistancesNonSubscriptionDefinitionType extends EbatNs_ComplexType
{

	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('LocalListingDistancesNonSubscriptionDefinitionType', 'urn:ebay:apis:eBLBaseComponents');
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

<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/** 
  * Defines the LocalMarketRegularSubscription feature. If this field 
  * is present, the corresponding feature applies to the category. The 
  * field is returned as an empty element (i.e., a boolean value is not 
  * returned). A subscription for Local Market for Vehicles will be 
  * returned by GetUser if a dealer has subscribed to any of the following 
  * Local Market Regular sub-types: Vehicles Regular Six Months, 
  * Vehicles Regular Special Promotion, Vehicles Regular Multistore 
  * Level S, Vehicles Regular Multistore Level M, or Vehicles Regular 
  * Multistore Level L. Each of these sub-types has a separate discount 
  * and billing cycle.
  * 
 **/

class LocalMarketRegularSubscriptionDefinitionType extends EbatNs_ComplexType
{

	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('LocalMarketRegularSubscriptionDefinitionType', 'urn:ebay:apis:eBLBaseComponents');
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

<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'CharityAffiliationTypeCodeType.php';

/**
  * Defines the affiliation status for a nonprofit charity
  * organization registered with the eBay Giving Works provider.
  * 
  * Indicates the affiliation status of the nonprofit charity
  * organization registered with the eBay Giving Works provider.
  * 
 **/

class CharityIDType extends EbatNs_ComplexType
{

	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('CharityIDType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
));
		}
		$this->_attributes = array_merge($this->_attributes,
		array(
			'type' =>
			array(
				'name' => ' type',
				'type' => 'CharityAffiliationTypeCodeType',
				'use' => 'required'
			)));
	}



}
?>

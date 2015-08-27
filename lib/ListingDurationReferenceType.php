<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'ListingTypeCodeType.php';

/**
  * Identifies the type of listing as an attribute on the ListingDuration node.
  * 
  * The type of listing a set of durations describes.
  * 
 **/

class ListingDurationReferenceType extends EbatNs_ComplexType
{

	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ListingDurationReferenceType', 'urn:ebay:apis:eBLBaseComponents');
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
				'type' => 'ListingTypeCodeType',
				'use' => 'optional'
			)));
	}



}
?>

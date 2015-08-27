<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'AddressAttributeCodeType.php';

/**
  * This type is used to display the value of the <b>type</b> attribute of the <b>AddressAttribute</b> field.
  * 
  * The only supported value for this attribute is 'ReferenceNumber', but in the future, other address attributes may be supported.
  * 
 **/

class AddressAttributeType extends EbatNs_ComplexType
{

	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('AddressAttributeType', 'urn:ebay:apis:eBLBaseComponents');
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
				'type' => 'AddressAttributeCodeType',
				'use' => 'optional'
			)));
	}



}
?>

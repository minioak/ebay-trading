<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'AddressAttributeCodeType.php';

/**
  * This type is used to display the value of the <b>type</b> attribute of the <b>AddressAttribute</b> field.
  * 
  * The only supported value for this attribute is <code>ReferenceNumber</code>, but in the future, other address attributes may be supported. The <code>ReferenceNumber</code> is a unique identifier for a 'Click and Collect' order. Click and Collect orders are only available on the eBay UK and eBay Australia sites.
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

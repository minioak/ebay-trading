<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**
  * Used for storing an optional reference ID to the binary attachment
  * 
  * Stores an optional reference ID to the binary attachment.
  * 
 **/

class Base64BinaryType extends EbatNs_ComplexType
{

	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('Base64BinaryType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
));
		}
		$this->_attributes = array_merge($this->_attributes,
		array(
			'contentType' =>
			array(
				'name' => ' contentType',
				'type' => 'string',
				'use' => 'optional'
			)));
	}



}
?>

<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**
  * Mapping between an old category ID and an active category ID.
  * 
 **/

class CategoryMappingType extends EbatNs_ComplexType
{

	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('CategoryMappingType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
));
		}
		$this->_attributes = array_merge($this->_attributes,
		array(
			'oldID' =>
			array(
				'name' => ' oldID',
				'type' => 'string',
				'use' => 'optional'
			),
			'id' =>
			array(
				'name' => ' id',
				'type' => 'string',
				'use' => 'optional'
			)));
	}



}
?>

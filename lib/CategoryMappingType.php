<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**
  * This type is used by the <b>CategoryMapping</b> fields that are returned in the <b>GetCategoryMappings</b> response to indicate any eBay Category IDs that have changed recently.
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

<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AmountType.php';
require_once 'RefundLineTypeCodeType.php';

/**
  * This type is deprecated.
  * 
  *  This field is deprecated. 
  * 
 **/

class RefundLineType extends AmountType
{

	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('RefundLineType', 'urn:ebay:apis:eBLBaseComponents');
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
				'type' => 'RefundLineTypeCodeType',
				'use' => 'optional'
			)));
	}


}
?>

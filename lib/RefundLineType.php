<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AmountType.php';
require_once 'RefundLineTypeCodeType.php';

/**
  * This type is no longer used. 
  * 
  *  This field is no longer used. 
  * </span>
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

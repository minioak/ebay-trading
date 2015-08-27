<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**
  * Used to determine whether the seller meets the minimum feedback
  * requirements for Express.
  * 
 **/

class FeedbackRequirementsType extends EbatNs_ComplexType
{

	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('FeedbackRequirementsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
));
		}
		$this->_attributes = array_merge($this->_attributes,
		array(
			'minimum' =>
			array(
				'name' => ' minimum',
				'type' => 'string',
				'use' => 'optional'
			)));
	}



}
?>

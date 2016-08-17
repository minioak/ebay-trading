<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'TransactionReferenceCodeType.php';

/**
  * Type defining the <strong>ReferenceID</strong> element, which is used to display the unique identifier of a payment (and payment type through the <strong>type</strong> attribute.
  * 
  * This attribute indicates the type of payment.
  * 
 **/

class TransactionReferenceType extends EbatNs_ComplexType
{

	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('TransactionReferenceType', 'urn:ebay:apis:eBLBaseComponents');
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
				'type' => 'TransactionReferenceCodeType',
				'use' => 'optional'
			)));
	}



}
?>

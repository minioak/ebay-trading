<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**
  * This type is used by the <b>DigitalGoodInfo</b> container, which is used in <b>Add</b>/<b>Relist</b>/<b>Revise</b>/<b>Verify</b> listing calls to designate the listing as a digital gift card listing.
  * 
 **/

class DigitalGoodInfoType extends EbatNs_ComplexType
{
	/**
	* @var boolean
	**/
	protected $DigitalDelivery;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('DigitalGoodInfoType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'DigitalDelivery' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				)));
		}
		$this->_attributes = array_merge($this->_attributes,
		array(
));
	}

	/**
	 * @return boolean
	 **/
	function getDigitalDelivery()
	{
		return $this->DigitalDelivery;
	}

	/**
	 * @return void
	 **/
	function setDigitalDelivery($value)
	{
		$this->DigitalDelivery = $value;
	}

}
?>

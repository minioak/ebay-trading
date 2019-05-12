<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**
  * This type is used by the <b>DeliveryStatus</b> container, which will list the current status of whatever delivery method is being used (indicated in the <b>DigitalDeliverySelected.DeliveryMethod</b>field). Currently, the only supported delivery method is by email.
  * 
 **/

class DeliveryStatusType extends EbatNs_ComplexType
{
	/**
	* @var token
	**/
	protected $Email;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('DeliveryStatusType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'Email' =>
				array(
					'required' => false,
					'type' => 'token',
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
	 * @return token
	 **/
	function getEmail()
	{
		return $this->Email;
	}

	/**
	 * @return void
	 **/
	function setEmail($value)
	{
		$this->Email = $value;
	}

}
?>

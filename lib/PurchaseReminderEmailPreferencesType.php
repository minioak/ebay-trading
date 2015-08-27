<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**
  *   Contains a seller's preference for sending a "Payment Reminder Email" to buyers.
  * 
 **/

class PurchaseReminderEmailPreferencesType extends EbatNs_ComplexType
{
	/**
	* @var boolean
	**/
	protected $PurchaseReminderEmailPreferences;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('PurchaseReminderEmailPreferencesType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'PurchaseReminderEmailPreferences' =>
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
	function getPurchaseReminderEmailPreferences()
	{
		return $this->PurchaseReminderEmailPreferences;
	}

	/**
	 * @return void
	 **/
	function setPurchaseReminderEmailPreferences($value)
	{
		$this->PurchaseReminderEmailPreferences = $value;
	}

}
?>

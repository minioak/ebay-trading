<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractRequestType.php';
require_once 'ReminderCustomizationType.php';

/**
  * Requests totals for the Buying and Selling reminders from the user's
  * My eBay account.
  * 
 **/

class GetMyeBayRemindersRequestType extends AbstractRequestType
{
	/**
	* @var ReminderCustomizationType
	**/
	protected $BuyingReminders;

	/**
	* @var ReminderCustomizationType
	**/
	protected $SellingReminders;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('GetMyeBayRemindersRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'BuyingReminders' =>
				array(
					'required' => false,
					'type' => 'ReminderCustomizationType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SellingReminders' =>
				array(
					'required' => false,
					'type' => 'ReminderCustomizationType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				)));
		}
		$this->_attributes = array_merge($this->_attributes,
		array(
));
	}

	/**
	 * @return ReminderCustomizationType
	 **/
	function getBuyingReminders()
	{
		return $this->BuyingReminders;
	}

	/**
	 * @return void
	 **/
	function setBuyingReminders($value)
	{
		$this->BuyingReminders = $value;
	}

	/**
	 * @return ReminderCustomizationType
	 **/
	function getSellingReminders()
	{
		return $this->SellingReminders;
	}

	/**
	 * @return void
	 **/
	function setSellingReminders($value)
	{
		$this->SellingReminders = $value;
	}

}
?>

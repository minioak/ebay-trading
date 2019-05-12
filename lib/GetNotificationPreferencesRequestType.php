<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractRequestType.php';
require_once 'NotificationRoleCodeType.php';

/**
  * Retrieves the requesting application's notification preferences. Details are only returned for events for which a
  * preference has been set. For example, if you enabled notification for the <b>EndOfAuction</b> event and later disabled it,
  * the <b>GetNotificationPreferences</b> response would cite the <b>EndOfAuction</b> event preference as <b>Disabled</b>. Otherwise, no
  * details would be returned regarding <b>EndOfAuction</b>.
  * 
 **/

class GetNotificationPreferencesRequestType extends AbstractRequestType
{
	/**
	* @var NotificationRoleCodeType
	**/
	protected $PreferenceLevel;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('GetNotificationPreferencesRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'PreferenceLevel' =>
				array(
					'required' => false,
					'type' => 'NotificationRoleCodeType',
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
	 * @return NotificationRoleCodeType
	 **/
	function getPreferenceLevel()
	{
		return $this->PreferenceLevel;
	}

	/**
	 * @return void
	 **/
	function setPreferenceLevel($value)
	{
		$this->PreferenceLevel = $value;
	}

}
?>

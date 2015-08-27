<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'NotificationEnableType.php';

/**
  * A list of NotificationEnable entries. Each entry specifies
  * one notification and whether it is enabled.
  * 
 **/

class NotificationEnableArrayType extends EbatNs_ComplexType
{
	/**
	* @var NotificationEnableType
	**/
	protected $NotificationEnable;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('NotificationEnableArrayType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'NotificationEnable' =>
				array(
					'required' => false,
					'type' => 'NotificationEnableType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				)));
		}
		$this->_attributes = array_merge($this->_attributes,
		array(
));
	}

	/**
	 * @return NotificationEnableType
	 * @param integer $index 
	 **/
	function getNotificationEnable($index = null)
	{
		if ($index !== null)
		{
			return $this->NotificationEnable[$index];
		}
		else
		{
			return $this->NotificationEnable;
		}
	}

	/**
	 * @return void
	 * @param NotificationEnableType $value
	 * @param integer $index 
	 **/
	function setNotificationEnable($value, $index = null)
	{
		if ($index !== null)
		{
			$this->NotificationEnable[$index] = $value;
		}
		else
		{
			$this->NotificationEnable= $value;
		}
	}

	/**
	 * @return void
	 * @param NotificationEnableType $value
	 **/
	function addNotificationEnable($value)
	{
		$this->NotificationEnable[] = $value;
	}

}
?>

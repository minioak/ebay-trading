<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractRequestType.php';
require_once 'ItemIDType.php';

/**
  * Retrieves usage information about platform notifications for a given application.
  * You can use this notification information to troubleshoot issues with platform
  * notifications. You can call this up to 50 times per hour for a given application.
  * 
 **/

class GetNotificationsUsageRequestType extends AbstractRequestType
{
	/**
	* @var dateTime
	**/
	protected $StartTime;

	/**
	* @var dateTime
	**/
	protected $EndTime;

	/**
	* @var ItemIDType
	**/
	protected $ItemID;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('GetNotificationsUsageRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'StartTime' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'EndTime' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ItemID' =>
				array(
					'required' => false,
					'type' => 'ItemIDType',
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
	 * @return dateTime
	 **/
	function getStartTime()
	{
		return $this->StartTime;
	}

	/**
	 * @return void
	 **/
	function setStartTime($value)
	{
		$this->StartTime = $value;
	}

	/**
	 * @return dateTime
	 **/
	function getEndTime()
	{
		return $this->EndTime;
	}

	/**
	 * @return void
	 **/
	function setEndTime($value)
	{
		$this->EndTime = $value;
	}

	/**
	 * @return ItemIDType
	 **/
	function getItemID()
	{
		return $this->ItemID;
	}

	/**
	 * @return void
	 **/
	function setItemID($value)
	{
		$this->ItemID = $value;
	}

}
?>

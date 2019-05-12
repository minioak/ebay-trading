<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'NotificationDetailsType.php';

/**
  * Returns information about notifications sent to the given application
  * for the given ItemID. It will only be returned if ItemID was specified in the
  * input parameters.
  * 
 **/

class NotificationDetailsArrayType extends EbatNs_ComplexType
{
	/**
	* @var NotificationDetailsType
	**/
	protected $NotificationDetails;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('NotificationDetailsArrayType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'NotificationDetails' =>
				array(
					'required' => false,
					'type' => 'NotificationDetailsType',
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
	 * @return NotificationDetailsType
	 * @param integer $index 
	 **/
	function getNotificationDetails($index = null)
	{
		if ($index !== null)
		{
			return $this->NotificationDetails[$index];
		}
		else
		{
			return $this->NotificationDetails;
		}
	}

	/**
	 * @return void
	 * @param NotificationDetailsType $value
	 * @param integer $index 
	 **/
	function setNotificationDetails($value, $index = null)
	{
		if ($index !== null)
		{
			$this->NotificationDetails[$index] = $value;
		}
		else
		{
			$this->NotificationDetails= $value;
		}
	}

	/**
	 * @return void
	 * @param NotificationDetailsType $value
	 **/
	function addNotificationDetails($value)
	{
		$this->NotificationDetails[] = $value;
	}

}
?>

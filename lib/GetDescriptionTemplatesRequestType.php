<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractRequestType.php';

/**
  * Retrieves Theme and Layout specifications for the display of an item's description.
  * 
 **/

class GetDescriptionTemplatesRequestType extends AbstractRequestType
{
	/**
	* @var string
	**/
	protected $CategoryID;

	/**
	* @var dateTime
	**/
	protected $LastModifiedTime;

	/**
	* @var boolean
	**/
	protected $MotorVehicles;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('GetDescriptionTemplatesRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'CategoryID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'LastModifiedTime' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'MotorVehicles' =>
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
	 * @return string
	 **/
	function getCategoryID()
	{
		return $this->CategoryID;
	}

	/**
	 * @return void
	 **/
	function setCategoryID($value)
	{
		$this->CategoryID = $value;
	}

	/**
	 * @return dateTime
	 **/
	function getLastModifiedTime()
	{
		return $this->LastModifiedTime;
	}

	/**
	 * @return void
	 **/
	function setLastModifiedTime($value)
	{
		$this->LastModifiedTime = $value;
	}

	/**
	 * @return boolean
	 **/
	function getMotorVehicles()
	{
		return $this->MotorVehicles;
	}

	/**
	 * @return void
	 **/
	function setMotorVehicles($value)
	{
		$this->MotorVehicles = $value;
	}

}
?>

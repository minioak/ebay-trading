<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**
  * Details relating to the response to a message.
  * 
 **/

class MyMessagesResponseDetailsType extends EbatNs_ComplexType
{
	/**
	* @var boolean
	**/
	protected $ResponseEnabled;

	/**
	* @var anyURI
	**/
	protected $ResponseURL;

	/**
	* @var dateTime
	**/
	protected $UserResponseDate;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('MyMessagesResponseDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'ResponseEnabled' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ResponseURL' =>
				array(
					'required' => false,
					'type' => 'anyURI',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'UserResponseDate' =>
				array(
					'required' => false,
					'type' => 'dateTime',
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
	function getResponseEnabled()
	{
		return $this->ResponseEnabled;
	}

	/**
	 * @return void
	 **/
	function setResponseEnabled($value)
	{
		$this->ResponseEnabled = $value;
	}

	/**
	 * @return anyURI
	 **/
	function getResponseURL()
	{
		return $this->ResponseURL;
	}

	/**
	 * @return void
	 **/
	function setResponseURL($value)
	{
		$this->ResponseURL = $value;
	}

	/**
	 * @return dateTime
	 **/
	function getUserResponseDate()
	{
		return $this->UserResponseDate;
	}

	/**
	 * @return void
	 **/
	function setUserResponseDate($value)
	{
		$this->UserResponseDate = $value;
	}

}
?>

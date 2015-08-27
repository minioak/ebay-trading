<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**
  * This type is deprecated because <b>MyMessagesAlert*</b> are deprecated.
  * 
 **/

class MyMessagesForwardDetailsType extends EbatNs_ComplexType
{
	/**
	* @var dateTime
	**/
	protected $UserForwardDate;

	/**
	* @var string
	**/
	protected $ForwardMessageEncoding;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('MyMessagesForwardDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'UserForwardDate' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ForwardMessageEncoding' =>
				array(
					'required' => false,
					'type' => 'string',
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
	 * @return dateTime
	 **/
	function getUserForwardDate()
	{
		return $this->UserForwardDate;
	}

	/**
	 * @return void
	 **/
	function setUserForwardDate($value)
	{
		$this->UserForwardDate = $value;
	}

	/**
	 * @return string
	 **/
	function getForwardMessageEncoding()
	{
		return $this->ForwardMessageEncoding;
	}

	/**
	 * @return void
	 **/
	function setForwardMessageEncoding($value)
	{
		$this->ForwardMessageEncoding = $value;
	}

}
?>

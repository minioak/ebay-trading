<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractResponseType.php';

/**
  * A template for an SMS notification message.
  * 
 **/

class NotificationMessageType extends AbstractResponseType
{
	/**
	* @var string
	**/
	protected $MessageBody;

	/**
	* @var string
	**/
	protected $EIAS;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('NotificationMessageType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'MessageBody' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'EIAS' =>
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
	 * @return string
	 **/
	function getMessageBody()
	{
		return $this->MessageBody;
	}

	/**
	 * @return void
	 **/
	function setMessageBody($value)
	{
		$this->MessageBody = $value;
	}

	/**
	 * @return string
	 **/
	function getEIAS()
	{
		return $this->EIAS;
	}

	/**
	 * @return void
	 **/
	function setEIAS($value)
	{
		$this->EIAS = $value;
	}

}
?>

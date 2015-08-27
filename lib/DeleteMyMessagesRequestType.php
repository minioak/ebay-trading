<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractRequestType.php';
require_once 'MyMessagesAlertIDArrayType.php';
require_once 'MyMessagesMessageIDArrayType.php';

/**
  * Removes selected messages for a given user.
  * 
 **/

class DeleteMyMessagesRequestType extends AbstractRequestType
{
	/**
	* @var MyMessagesAlertIDArrayType
	**/
	protected $AlertIDs;

	/**
	* @var MyMessagesMessageIDArrayType
	**/
	protected $MessageIDs;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('DeleteMyMessagesRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'AlertIDs' =>
				array(
					'required' => false,
					'type' => 'MyMessagesAlertIDArrayType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'MessageIDs' =>
				array(
					'required' => false,
					'type' => 'MyMessagesMessageIDArrayType',
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
	 * @return MyMessagesAlertIDArrayType
	 **/
	function getAlertIDs()
	{
		return $this->AlertIDs;
	}

	/**
	 * @return void
	 **/
	function setAlertIDs($value)
	{
		$this->AlertIDs = $value;
	}

	/**
	 * @return MyMessagesMessageIDArrayType
	 **/
	function getMessageIDs()
	{
		return $this->MessageIDs;
	}

	/**
	 * @return void
	 **/
	function setMessageIDs($value)
	{
		$this->MessageIDs = $value;
	}

}
?>

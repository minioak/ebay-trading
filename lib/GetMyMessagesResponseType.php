<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractResponseType.php';
require_once 'MyMessagesSummaryType.php';
require_once 'MyMessagesAlertArrayType.php';
require_once 'MyMessagesMessageArrayType.php';

/**
  * Contains information about the messages sent to
  * a user. Depending on the detail level, this
  * information can include message counts,
  * resolution and flagged status, message
  * headers, and message text.
  * 
 **/

class GetMyMessagesResponseType extends AbstractResponseType
{
	/**
	* @var MyMessagesSummaryType
	**/
	protected $Summary;

	/**
	* @var MyMessagesAlertArrayType
	**/
	protected $Alerts;

	/**
	* @var MyMessagesMessageArrayType
	**/
	protected $Messages;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('GetMyMessagesResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'Summary' =>
				array(
					'required' => false,
					'type' => 'MyMessagesSummaryType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Alerts' =>
				array(
					'required' => false,
					'type' => 'MyMessagesAlertArrayType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Messages' =>
				array(
					'required' => false,
					'type' => 'MyMessagesMessageArrayType',
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
	 * @return MyMessagesSummaryType
	 **/
	function getSummary()
	{
		return $this->Summary;
	}

	/**
	 * @return void
	 **/
	function setSummary($value)
	{
		$this->Summary = $value;
	}

	/**
	 * @return MyMessagesAlertArrayType
	 **/
	function getAlerts()
	{
		return $this->Alerts;
	}

	/**
	 * @return void
	 **/
	function setAlerts($value)
	{
		$this->Alerts = $value;
	}

	/**
	 * @return MyMessagesMessageArrayType
	 **/
	function getMessages()
	{
		return $this->Messages;
	}

	/**
	 * @return void
	 **/
	function setMessages($value)
	{
		$this->Messages = $value;
	}

}
?>

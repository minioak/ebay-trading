<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractResponseType.php';

/**
  * Returns a Client Alerts token.
  * 
 **/

class GetClientAlertsAuthTokenResponseType extends AbstractResponseType
{
	/**
	* @var string
	**/
	protected $ClientAlertsAuthToken;

	/**
	* @var dateTime
	**/
	protected $HardExpirationTime;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('GetClientAlertsAuthTokenResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'ClientAlertsAuthToken' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'HardExpirationTime' =>
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
	 * @return string
	 **/
	function getClientAlertsAuthToken()
	{
		return $this->ClientAlertsAuthToken;
	}

	/**
	 * @return void
	 **/
	function setClientAlertsAuthToken($value)
	{
		$this->ClientAlertsAuthToken = $value;
	}

	/**
	 * @return dateTime
	 **/
	function getHardExpirationTime()
	{
		return $this->HardExpirationTime;
	}

	/**
	 * @return void
	 **/
	function setHardExpirationTime($value)
	{
		$this->HardExpirationTime = $value;
	}

}
?>

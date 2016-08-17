<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'UserIdPasswordType.php';

/**
  * Security header used for SOAP API calls.
  * 
 **/

class CustomSecurityHeaderType extends EbatNs_ComplexType
{
	/**
	* @var string
	**/
	protected $eBayAuthToken;

	/**
	* @var string
	**/
	protected $HardExpirationWarning;

	/**
	* @var UserIdPasswordType
	**/
	protected $Credentials;

	/**
	* @var string
	**/
	protected $NotificationSignature;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('CustomSecurityHeaderType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'eBayAuthToken' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'HardExpirationWarning' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Credentials' =>
				array(
					'required' => false,
					'type' => 'UserIdPasswordType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'NotificationSignature' =>
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
	function geteBayAuthToken()
	{
		return $this->eBayAuthToken;
	}

	/**
	 * @return void
	 **/
	function seteBayAuthToken($value)
	{
		$this->eBayAuthToken = $value;
	}

	/**
	 * @return string
	 **/
	function getHardExpirationWarning()
	{
		return $this->HardExpirationWarning;
	}

	/**
	 * @return void
	 **/
	function setHardExpirationWarning($value)
	{
		$this->HardExpirationWarning = $value;
	}

	/**
	 * @return UserIdPasswordType
	 **/
	function getCredentials()
	{
		return $this->Credentials;
	}

	/**
	 * @return void
	 **/
	function setCredentials($value)
	{
		$this->Credentials = $value;
	}

	/**
	 * @return string
	 **/
	function getNotificationSignature()
	{
		return $this->NotificationSignature;
	}

	/**
	 * @return void
	 **/
	function setNotificationSignature($value)
	{
		$this->NotificationSignature = $value;
	}

}
?>

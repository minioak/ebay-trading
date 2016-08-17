<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractResponseType.php';

/**
  * Includes the authentication token for the user and the date it expires.
  * 
 **/

class FetchTokenResponseType extends AbstractResponseType
{
	/**
	* @var string
	**/
	protected $eBayAuthToken;

	/**
	* @var dateTime
	**/
	protected $HardExpirationTime;

	/**
	* @var string
	**/
	protected $RESTToken;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('FetchTokenResponseType', 'urn:ebay:apis:eBLBaseComponents');
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
				'HardExpirationTime' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'RESTToken' =>
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

	/**
	 * @return string
	 **/
	function getRESTToken()
	{
		return $this->RESTToken;
	}

	/**
	 * @return void
	 **/
	function setRESTToken($value)
	{
		$this->RESTToken = $value;
	}

}
?>

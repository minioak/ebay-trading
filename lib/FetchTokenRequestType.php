<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractRequestType.php';

/**
  * Retrieves an authentication token for a user.&nbsp;<b>Also for Half.com</b>.
  * 
 **/

class FetchTokenRequestType extends AbstractRequestType
{
	/**
	* @var string
	**/
	protected $SecretID;

	/**
	* @var string
	**/
	protected $SessionID;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('FetchTokenRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'SecretID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SessionID' =>
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
	function getSecretID()
	{
		return $this->SecretID;
	}

	/**
	 * @return void
	 **/
	function setSecretID($value)
	{
		$this->SecretID = $value;
	}

	/**
	 * @return string
	 **/
	function getSessionID()
	{
		return $this->SessionID;
	}

	/**
	 * @return void
	 **/
	function setSessionID($value)
	{
		$this->SessionID = $value;
	}

}
?>

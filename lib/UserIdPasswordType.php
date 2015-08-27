<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**
  * 
 **/

class UserIdPasswordType extends EbatNs_ComplexType
{
	/**
	* @var string
	**/
	protected $AppId;

	/**
	* @var string
	**/
	protected $DevId;

	/**
	* @var string
	**/
	protected $AuthCert;

	/**
	* @var string
	**/
	protected $Username;

	/**
	* @var string
	**/
	protected $Password;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('UserIdPasswordType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'AppId' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DevId' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'AuthCert' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Username' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Password' =>
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
	function getAppId()
	{
		return $this->AppId;
	}

	/**
	 * @return void
	 **/
	function setAppId($value)
	{
		$this->AppId = $value;
	}

	/**
	 * @return string
	 **/
	function getDevId()
	{
		return $this->DevId;
	}

	/**
	 * @return void
	 **/
	function setDevId($value)
	{
		$this->DevId = $value;
	}

	/**
	 * @return string
	 **/
	function getAuthCert()
	{
		return $this->AuthCert;
	}

	/**
	 * @return void
	 **/
	function setAuthCert($value)
	{
		$this->AuthCert = $value;
	}

	/**
	 * @return string
	 **/
	function getUsername()
	{
		return $this->Username;
	}

	/**
	 * @return void
	 **/
	function setUsername($value)
	{
		$this->Username = $value;
	}

	/**
	 * @return string
	 **/
	function getPassword()
	{
		return $this->Password;
	}

	/**
	 * @return void
	 **/
	function setPassword($value)
	{
		$this->Password = $value;
	}

}
?>

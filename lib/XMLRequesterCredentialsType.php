<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**
  * 
 **/

class XMLRequesterCredentialsType extends EbatNs_ComplexType
{
	/**
	* @var string
	**/
	protected $Username;

	/**
	* @var string
	**/
	protected $Password;

	/**
	* @var string
	**/
	protected $eBayAuthToken;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('XMLRequesterCredentialsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
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
				),
				'eBayAuthToken' =>
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

}
?>

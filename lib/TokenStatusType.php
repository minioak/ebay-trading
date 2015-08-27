<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'TokenStatusCodeType.php';

/**
  * Returns token status.
  * 
 **/

class TokenStatusType extends EbatNs_ComplexType
{
	/**
	* @var TokenStatusCodeType
	**/
	protected $Status;

	/**
	* @var string
	**/
	protected $EIASToken;

	/**
	* @var dateTime
	**/
	protected $ExpirationTime;

	/**
	* @var dateTime
	**/
	protected $RevocationTime;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('TokenStatusType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'Status' =>
				array(
					'required' => false,
					'type' => 'TokenStatusCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'EIASToken' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ExpirationTime' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'RevocationTime' =>
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
	 * @return TokenStatusCodeType
	 **/
	function getStatus()
	{
		return $this->Status;
	}

	/**
	 * @return void
	 **/
	function setStatus($value)
	{
		$this->Status = $value;
	}

	/**
	 * @return string
	 **/
	function getEIASToken()
	{
		return $this->EIASToken;
	}

	/**
	 * @return void
	 **/
	function setEIASToken($value)
	{
		$this->EIASToken = $value;
	}

	/**
	 * @return dateTime
	 **/
	function getExpirationTime()
	{
		return $this->ExpirationTime;
	}

	/**
	 * @return void
	 **/
	function setExpirationTime($value)
	{
		$this->ExpirationTime = $value;
	}

	/**
	 * @return dateTime
	 **/
	function getRevocationTime()
	{
		return $this->RevocationTime;
	}

	/**
	 * @return void
	 **/
	function setRevocationTime($value)
	{
		$this->RevocationTime = $value;
	}

}
?>

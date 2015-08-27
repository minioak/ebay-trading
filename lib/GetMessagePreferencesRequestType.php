<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractRequestType.php';
require_once 'UserIDType.php';

/**
  * Returns a seller's Ask Seller a Question (ASQ) subjects, each in
  * its own Subject node.
  * 
 **/

class GetMessagePreferencesRequestType extends AbstractRequestType
{
	/**
	* @var UserIDType
	**/
	protected $SellerID;

	/**
	* @var boolean
	**/
	protected $IncludeASQPreferences;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('GetMessagePreferencesRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'SellerID' =>
				array(
					'required' => false,
					'type' => 'UserIDType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'IncludeASQPreferences' =>
				array(
					'required' => false,
					'type' => 'boolean',
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
	 * @return UserIDType
	 **/
	function getSellerID()
	{
		return $this->SellerID;
	}

	/**
	 * @return void
	 **/
	function setSellerID($value)
	{
		$this->SellerID = $value;
	}

	/**
	 * @return boolean
	 **/
	function getIncludeASQPreferences()
	{
		return $this->IncludeASQPreferences;
	}

	/**
	 * @return void
	 **/
	function setIncludeASQPreferences($value)
	{
		$this->IncludeASQPreferences = $value;
	}

}
?>

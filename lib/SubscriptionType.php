<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'SiteCodeType.php';

/** 
  * 
 **/

class SubscriptionType extends EbatNs_ComplexType
{
	/**
	* @var string
	**/
	protected $EIASToken;

	/**
	* @var SiteCodeType
	**/
	protected $SiteID;

	/**
	* @var boolean
	**/
	protected $Active;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('SubscriptionType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'EIASToken' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SiteID' =>
				array(
					'required' => false,
					'type' => 'SiteCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Active' =>
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
	 * @return SiteCodeType
	 **/
	function getSiteID()
	{
		return $this->SiteID;
	}

	/**
	 * @return void
	 **/
	function setSiteID($value)
	{
		$this->SiteID = $value;
	}

	/**
	 * @return boolean
	 **/
	function getActive()
	{
		return $this->Active;
	}

	/**
	 * @return void
	 **/
	function setActive($value)
	{
		$this->Active = $value;
	}

}
?>

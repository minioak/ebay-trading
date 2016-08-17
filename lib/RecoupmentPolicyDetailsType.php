<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**
  * Details the recoupment policy on this site.  There are two sites involved in recoupment - the listing site
  * and the user registration site, each of which must agree before eBay enforces recoupment for a seller and listing.
  * 
 **/

class RecoupmentPolicyDetailsType extends EbatNs_ComplexType
{
	/**
	* @var boolean
	**/
	protected $EnforcedOnListingSite;

	/**
	* @var boolean
	**/
	protected $EnforcedOnRegistrationSite;

	/**
	* @var string
	**/
	protected $DetailVersion;

	/**
	* @var dateTime
	**/
	protected $UpdateTime;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('RecoupmentPolicyDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'EnforcedOnListingSite' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'EnforcedOnRegistrationSite' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DetailVersion' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'UpdateTime' =>
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
	 * @return boolean
	 **/
	function getEnforcedOnListingSite()
	{
		return $this->EnforcedOnListingSite;
	}

	/**
	 * @return void
	 **/
	function setEnforcedOnListingSite($value)
	{
		$this->EnforcedOnListingSite = $value;
	}

	/**
	 * @return boolean
	 **/
	function getEnforcedOnRegistrationSite()
	{
		return $this->EnforcedOnRegistrationSite;
	}

	/**
	 * @return void
	 **/
	function setEnforcedOnRegistrationSite($value)
	{
		$this->EnforcedOnRegistrationSite = $value;
	}

	/**
	 * @return string
	 **/
	function getDetailVersion()
	{
		return $this->DetailVersion;
	}

	/**
	 * @return void
	 **/
	function setDetailVersion($value)
	{
		$this->DetailVersion = $value;
	}

	/**
	 * @return dateTime
	 **/
	function getUpdateTime()
	{
		return $this->UpdateTime;
	}

	/**
	 * @return void
	 **/
	function setUpdateTime($value)
	{
		$this->UpdateTime = $value;
	}

}
?>

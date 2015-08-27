<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'CharityStatusCodeType.php';

/**
  * Identifies a Giving Works listing and benefiting nonprofit charity organization.
  * 
 **/

class CharityType extends EbatNs_ComplexType
{
	/**
	* @var string
	**/
	protected $CharityName;

	/**
	* @var int
	**/
	protected $CharityNumber;

	/**
	* @var float
	**/
	protected $DonationPercent;

	/**
	* @var string
	**/
	protected $CharityID;

	/**
	* @var string
	**/
	protected $Mission;

	/**
	* @var string
	**/
	protected $LogoURL;

	/**
	* @var CharityStatusCodeType
	**/
	protected $Status;

	/**
	* @var boolean
	**/
	protected $CharityListing;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('CharityType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'CharityName' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CharityNumber' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DonationPercent' =>
				array(
					'required' => false,
					'type' => 'float',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CharityID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Mission' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'LogoURL' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Status' =>
				array(
					'required' => false,
					'type' => 'CharityStatusCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CharityListing' =>
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
	function getCharityName()
	{
		return $this->CharityName;
	}

	/**
	 * @return void
	 **/
	function setCharityName($value)
	{
		$this->CharityName = $value;
	}

	/**
	 * @return int
	 **/
	function getCharityNumber()
	{
		return $this->CharityNumber;
	}

	/**
	 * @return void
	 **/
	function setCharityNumber($value)
	{
		$this->CharityNumber = $value;
	}

	/**
	 * @return float
	 **/
	function getDonationPercent()
	{
		return $this->DonationPercent;
	}

	/**
	 * @return void
	 **/
	function setDonationPercent($value)
	{
		$this->DonationPercent = $value;
	}

	/**
	 * @return string
	 **/
	function getCharityID()
	{
		return $this->CharityID;
	}

	/**
	 * @return void
	 **/
	function setCharityID($value)
	{
		$this->CharityID = $value;
	}

	/**
	 * @return string
	 **/
	function getMission()
	{
		return $this->Mission;
	}

	/**
	 * @return void
	 **/
	function setMission($value)
	{
		$this->Mission = $value;
	}

	/**
	 * @return string
	 **/
	function getLogoURL()
	{
		return $this->LogoURL;
	}

	/**
	 * @return void
	 **/
	function setLogoURL($value)
	{
		$this->LogoURL = $value;
	}

	/**
	 * @return CharityStatusCodeType
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
	 * @return boolean
	 **/
	function getCharityListing()
	{
		return $this->CharityListing;
	}

	/**
	 * @return void
	 **/
	function setCharityListing($value)
	{
		$this->CharityListing = $value;
	}

}
?>

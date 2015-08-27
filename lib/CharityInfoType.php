<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'CharityStatusCodeType.php';
require_once 'NonProfitAddressType.php';
require_once 'NonProfitSocialAddressType.php';

/**
  * Type defining the <b>Charity</b> container, which consists of all details
  * related to a nonprofit charity organization.
  * 
 **/

class CharityInfoType extends EbatNs_ComplexType
{
	/**
	* @var string
	**/
	protected $Name;

	/**
	* @var boolean
	**/
	protected $ListingNPEmailNotifPref;

	/**
	* @var string
	**/
	protected $ListingNPEmail;

	/**
	* @var string
	**/
	protected $ListingNPContactName;

	/**
	* @var string
	**/
	protected $Mission;

	/**
	* @var anyURI
	**/
	protected $LogoURL;

	/**
	* @var CharityStatusCodeType
	**/
	protected $Status;

	/**
	* @var string
	**/
	protected $SearchableString;

	/**
	* @var int
	**/
	protected $CharityRegion;

	/**
	* @var int
	**/
	protected $CharityDomain;

	/**
	* @var string
	**/
	protected $CharityID;

	/**
	* @var anyURI
	**/
	protected $LogoURLSelling;

	/**
	* @var boolean
	**/
	protected $DisplayLogoSelling;

	/**
	* @var boolean
	**/
	protected $DisplayNameInCheckout;

	/**
	* @var string
	**/
	protected $Description;

	/**
	* @var boolean
	**/
	protected $ShowMultipleDonationAmountInCheckout;

	/**
	* @var string
	**/
	protected $ExternalID;

	/**
	* @var int
	**/
	protected $PopularityIndex;

	/**
	* @var string
	**/
	protected $EIN;

	/**
	* @var string
	**/
	protected $NonProfitSecondName;

	/**
	* @var NonProfitAddressType
	**/
	protected $NonProfitAddress;

	/**
	* @var NonProfitSocialAddressType
	**/
	protected $NonProfitSocialAddress;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('CharityInfoType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'Name' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ListingNPEmailNotifPref' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ListingNPEmail' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ListingNPContactName' =>
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
					'type' => 'anyURI',
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
				'SearchableString' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CharityRegion' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CharityDomain' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..3'
				),
				'CharityID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'LogoURLSelling' =>
				array(
					'required' => false,
					'type' => 'anyURI',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DisplayLogoSelling' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DisplayNameInCheckout' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Description' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ShowMultipleDonationAmountInCheckout' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ExternalID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PopularityIndex' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'EIN' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'NonProfitSecondName' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'NonProfitAddress' =>
				array(
					'required' => false,
					'type' => 'NonProfitAddressType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				),
				'NonProfitSocialAddress' =>
				array(
					'required' => false,
					'type' => 'NonProfitSocialAddressType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				)));
		}
		$this->_attributes = array_merge($this->_attributes,
		array(
			'id' =>
			array(
				'name' => ' id',
				'type' => 'string',
				'use' => 'optional'
			)));
	}

	/**
	 * @return string
	 **/
	function getName()
	{
		return $this->Name;
	}

	/**
	 * @return void
	 **/
	function setName($value)
	{
		$this->Name = $value;
	}

	/**
	 * @return boolean
	 **/
	function getListingNPEmailNotifPref()
	{
		return $this->ListingNPEmailNotifPref;
	}

	/**
	 * @return void
	 **/
	function setListingNPEmailNotifPref($value)
	{
		$this->ListingNPEmailNotifPref = $value;
	}

	/**
	 * @return string
	 **/
	function getListingNPEmail()
	{
		return $this->ListingNPEmail;
	}

	/**
	 * @return void
	 **/
	function setListingNPEmail($value)
	{
		$this->ListingNPEmail = $value;
	}

	/**
	 * @return string
	 **/
	function getListingNPContactName()
	{
		return $this->ListingNPContactName;
	}

	/**
	 * @return void
	 **/
	function setListingNPContactName($value)
	{
		$this->ListingNPContactName = $value;
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
	 * @return anyURI
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
	 * @return string
	 **/
	function getSearchableString()
	{
		return $this->SearchableString;
	}

	/**
	 * @return void
	 **/
	function setSearchableString($value)
	{
		$this->SearchableString = $value;
	}

	/**
	 * @return int
	 **/
	function getCharityRegion()
	{
		return $this->CharityRegion;
	}

	/**
	 * @return void
	 **/
	function setCharityRegion($value)
	{
		$this->CharityRegion = $value;
	}

	/**
	 * @return int
	 **/
	function getCharityDomain()
	{
		return $this->CharityDomain;
	}

	/**
	 * @return void
	 **/
	function setCharityDomain($value)
	{
		$this->CharityDomain = $value;
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
	 * @return anyURI
	 **/
	function getLogoURLSelling()
	{
		return $this->LogoURLSelling;
	}

	/**
	 * @return void
	 **/
	function setLogoURLSelling($value)
	{
		$this->LogoURLSelling = $value;
	}

	/**
	 * @return boolean
	 **/
	function getDisplayLogoSelling()
	{
		return $this->DisplayLogoSelling;
	}

	/**
	 * @return void
	 **/
	function setDisplayLogoSelling($value)
	{
		$this->DisplayLogoSelling = $value;
	}

	/**
	 * @return boolean
	 **/
	function getDisplayNameInCheckout()
	{
		return $this->DisplayNameInCheckout;
	}

	/**
	 * @return void
	 **/
	function setDisplayNameInCheckout($value)
	{
		$this->DisplayNameInCheckout = $value;
	}

	/**
	 * @return string
	 **/
	function getDescription()
	{
		return $this->Description;
	}

	/**
	 * @return void
	 **/
	function setDescription($value)
	{
		$this->Description = $value;
	}

	/**
	 * @return boolean
	 **/
	function getShowMultipleDonationAmountInCheckout()
	{
		return $this->ShowMultipleDonationAmountInCheckout;
	}

	/**
	 * @return void
	 **/
	function setShowMultipleDonationAmountInCheckout($value)
	{
		$this->ShowMultipleDonationAmountInCheckout = $value;
	}

	/**
	 * @return string
	 **/
	function getExternalID()
	{
		return $this->ExternalID;
	}

	/**
	 * @return void
	 **/
	function setExternalID($value)
	{
		$this->ExternalID = $value;
	}

	/**
	 * @return int
	 **/
	function getPopularityIndex()
	{
		return $this->PopularityIndex;
	}

	/**
	 * @return void
	 **/
	function setPopularityIndex($value)
	{
		$this->PopularityIndex = $value;
	}

	/**
	 * @return string
	 **/
	function getEIN()
	{
		return $this->EIN;
	}

	/**
	 * @return void
	 **/
	function setEIN($value)
	{
		$this->EIN = $value;
	}

	/**
	 * @return string
	 **/
	function getNonProfitSecondName()
	{
		return $this->NonProfitSecondName;
	}

	/**
	 * @return void
	 **/
	function setNonProfitSecondName($value)
	{
		$this->NonProfitSecondName = $value;
	}

	/**
	 * @return NonProfitAddressType
	 * @param integer $index 
	 **/
	function getNonProfitAddress($index = null)
	{
		if ($index !== null)
		{
			return $this->NonProfitAddress[$index];
		}
		else
		{
			return $this->NonProfitAddress;
		}
	}

	/**
	 * @return void
	 * @param NonProfitAddressType $value
	 * @param integer $index 
	 **/
	function setNonProfitAddress($value, $index = null)
	{
		if ($index !== null)
		{
			$this->NonProfitAddress[$index] = $value;
		}
		else
		{
			$this->NonProfitAddress= $value;
		}
	}

	/**
	 * @return void
	 * @param NonProfitAddressType $value
	 **/
	function addNonProfitAddress($value)
	{
		$this->NonProfitAddress[] = $value;
	}

	/**
	 * @return NonProfitSocialAddressType
	 * @param integer $index 
	 **/
	function getNonProfitSocialAddress($index = null)
	{
		if ($index !== null)
		{
			return $this->NonProfitSocialAddress[$index];
		}
		else
		{
			return $this->NonProfitSocialAddress;
		}
	}

	/**
	 * @return void
	 * @param NonProfitSocialAddressType $value
	 * @param integer $index 
	 **/
	function setNonProfitSocialAddress($value, $index = null)
	{
		if ($index !== null)
		{
			$this->NonProfitSocialAddress[$index] = $value;
		}
		else
		{
			$this->NonProfitSocialAddress= $value;
		}
	}

	/**
	 * @return void
	 * @param NonProfitSocialAddressType $value
	 **/
	function addNonProfitSocialAddress($value)
	{
		$this->NonProfitSocialAddress[] = $value;
	}


}
?>

<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'CountryCodeType.php';

/**
  * Contains information about a country where a specified seller is eligible to offer eBay Plus on listings, as well as the seller's opt-in status and listing preference for that country. 
  * <br/><br/>
  * eBay Plus is a premium account option for buyers, which provides benefits such as fast free domestic shipping and free returns on selected items. Top Rated eBay sellers must opt in to eBay Plus to be able offer the program on qualifying listings. Sellers must commit to next-day delivery of those items.
  * <br/><br/>
  * <span class="tablenote">
  * <strong>Note:</strong> Currently, eBay Plus is available only to buyers in Germany (DE).
  * </span>
  * For more details about eBay Plus, see <a href="../../../../guides/ebayfeatures/Development/Feature-eBayPlus.html">Offering eBay Plus</a>.
  * 
 **/

class eBayPLUSPreferenceType extends EbatNs_ComplexType
{
	/**
	* @var CountryCodeType
	**/
	protected $Country;

	/**
	* @var boolean
	**/
	protected $OptInStatus;

	/**
	* @var boolean
	**/
	protected $ListingPreference;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('eBayPLUSPreferenceType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'Country' =>
				array(
					'required' => false,
					'type' => 'CountryCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'OptInStatus' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ListingPreference' =>
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
	 * @return CountryCodeType
	 **/
	function getCountry()
	{
		return $this->Country;
	}

	/**
	 * @return void
	 **/
	function setCountry($value)
	{
		$this->Country = $value;
	}

	/**
	 * @return boolean
	 **/
	function getOptInStatus()
	{
		return $this->OptInStatus;
	}

	/**
	 * @return void
	 **/
	function setOptInStatus($value)
	{
		$this->OptInStatus = $value;
	}

	/**
	 * @return boolean
	 **/
	function getListingPreference()
	{
		return $this->ListingPreference;
	}

	/**
	 * @return void
	 **/
	function setListingPreference($value)
	{
		$this->ListingPreference = $value;
	}

}
?>

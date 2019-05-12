<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'SupportedSellerProfilesType.php';

/**
  *   Type defining the <b>SellerProfilePreferences</b> container. This container
  * consists of a flag that indicates whether or not the seller has opted into Business
  * Policies, as well as a list of Business Policies profiles that have been set up for the 
  * seller's account.
  * 
 **/

class SellerProfilePreferencesType extends EbatNs_ComplexType
{
	/**
	* @var boolean
	**/
	protected $SellerProfileOptedIn;

	/**
	* @var SupportedSellerProfilesType
	**/
	protected $SupportedSellerProfiles;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('SellerProfilePreferencesType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'SellerProfileOptedIn' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SupportedSellerProfiles' =>
				array(
					'required' => false,
					'type' => 'SupportedSellerProfilesType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
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
	function getSellerProfileOptedIn()
	{
		return $this->SellerProfileOptedIn;
	}

	/**
	 * @return void
	 **/
	function setSellerProfileOptedIn($value)
	{
		$this->SellerProfileOptedIn = $value;
	}

	/**
	 * @return SupportedSellerProfilesType
	 **/
	function getSupportedSellerProfiles()
	{
		return $this->SupportedSellerProfiles;
	}

	/**
	 * @return void
	 **/
	function setSupportedSellerProfiles($value)
	{
		$this->SupportedSellerProfiles = $value;
	}

}
?>

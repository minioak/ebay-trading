<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**
  * ProStores listing level preferences.
  * 
 **/

class ListingCheckoutRedirectPreferenceType extends EbatNs_ComplexType
{
	/**
	* @var string
	**/
	protected $ProStoresStoreName;

	/**
	* @var string
	**/
	protected $SellerThirdPartyUsername;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ListingCheckoutRedirectPreferenceType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'ProStoresStoreName' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SellerThirdPartyUsername' =>
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
	function getProStoresStoreName()
	{
		return $this->ProStoresStoreName;
	}

	/**
	 * @return void
	 **/
	function setProStoresStoreName($value)
	{
		$this->ProStoresStoreName = $value;
	}

	/**
	 * @return string
	 **/
	function getSellerThirdPartyUsername()
	{
		return $this->SellerThirdPartyUsername;
	}

	/**
	 * @return void
	 **/
	function setSellerThirdPartyUsername($value)
	{
		$this->SellerThirdPartyUsername = $value;
	}

}
?>

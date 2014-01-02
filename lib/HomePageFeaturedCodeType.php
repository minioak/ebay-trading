<?php
// autogenerated file 30.09.2013 15:20
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Specifies whether a listing feature is available for the site specified in the 
 * request. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/HomePageFeaturedCodeType.html
 *
 * @property string Enabled
 * @property string Disabled
 * @property string CustomCode
 */
class HomePageFeaturedCodeType extends EbatNs_FacetType
{
	const CodeType_Enabled = 'Enabled';
	const CodeType_Disabled = 'Disabled';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('HomePageFeaturedCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_HomePageFeaturedCodeType = new HomePageFeaturedCodeType();

?>

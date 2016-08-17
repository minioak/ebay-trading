<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class ListingSubtypeCodeType extends EbatNs_FacetType
{
	const CodeType_ClassifiedAd = 'ClassifiedAd';
	const CodeType_LocalMarketBestOfferOnly = 'LocalMarketBestOfferOnly';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('ListingSubtypeCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_ListingSubtypeCodeType = new ListingSubtypeCodeType();
?>
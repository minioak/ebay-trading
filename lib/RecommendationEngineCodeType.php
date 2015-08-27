<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class RecommendationEngineCodeType extends EbatNs_FacetType
{
	const CodeType_ListingAnalyzer = 'ListingAnalyzer';
	const CodeType_SIFFTAS = 'SIFFTAS';
	const CodeType_ProductPricing = 'ProductPricing';
	const CodeType_CustomCode = 'CustomCode';
	const CodeType_SuggestedAttributes = 'SuggestedAttributes';
	const CodeType_ItemSpecifics = 'ItemSpecifics';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('RecommendationEngineCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_RecommendationEngineCodeType = new RecommendationEngineCodeType();
?>
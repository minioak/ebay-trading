<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class ProductSortCodeType extends EbatNs_FacetType
{
	const CodeType_PopularityAsc = 'PopularityAsc';
	const CodeType_PopularityDesc = 'PopularityDesc';
	const CodeType_RatingAsc = 'RatingAsc';
	const CodeType_RatingDesc = 'RatingDesc';
	const CodeType_ReviewCountAsc = 'ReviewCountAsc';
	const CodeType_ReviewCountDesc = 'ReviewCountDesc';
	const CodeType_ItemCountAsc = 'ItemCountAsc';
	const CodeType_ItemCountDesc = 'ItemCountDesc';
	const CodeType_TitleAsc = 'TitleAsc';
	const CodeType_TitleDesc = 'TitleDesc';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('ProductSortCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_ProductSortCodeType = new ProductSortCodeType();
?>
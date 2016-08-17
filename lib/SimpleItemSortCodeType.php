<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class SimpleItemSortCodeType extends EbatNs_FacetType
{
	const CodeType_BestMatch = 'BestMatch';
	const CodeType_CustomCode = 'CustomCode';
	const CodeType_EndTime = 'EndTime';
	const CodeType_BidCount = 'BidCount';
	const CodeType_Country = 'Country';
	const CodeType_CurrentBid = 'CurrentBid';
	const CodeType_Distance = 'Distance';
	const CodeType_StartDate = 'StartDate';
	const CodeType_BestMatchCategoryGroup = 'BestMatchCategoryGroup';
	const CodeType_PricePlusShipping = 'PricePlusShipping';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('SimpleItemSortCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_SimpleItemSortCodeType = new SimpleItemSortCodeType();
?>
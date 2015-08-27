<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class SearchFlagCodeType extends EbatNs_FacetType
{
	const CodeType_Charity = 'Charity';
	const CodeType_Gift = 'Gift';
	const CodeType_NowAndNew = 'NowAndNew';
	const CodeType_LocalSearch = 'LocalSearch';
	const CodeType_FreeShipping = 'FreeShipping';
	const CodeType_Gallery = 'Gallery';
	const CodeType_Picture = 'Picture';
	const CodeType_GetItFast = 'GetItFast';
	const CodeType_Lot = 'Lot';
	const CodeType_GermanMotorsSearchable = 'GermanMotorsSearchable';
	const CodeType_WorldOfGood = 'WorldOfGood';
	const CodeType_DigitalDelivery = 'DigitalDelivery';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('SearchFlagCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_SearchFlagCodeType = new SearchFlagCodeType();
?>
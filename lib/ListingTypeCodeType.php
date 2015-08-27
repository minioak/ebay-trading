<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class ListingTypeCodeType extends EbatNs_FacetType
{
	const CodeType_Unknown = 'Unknown';
	const CodeType_Chinese = 'Chinese';
	const CodeType_Dutch = 'Dutch';
	const CodeType_Live = 'Live';
	const CodeType_Auction = 'Auction';
	const CodeType_AdType = 'AdType';
	const CodeType_StoresFixedPrice = 'StoresFixedPrice';
	const CodeType_PersonalOffer = 'PersonalOffer';
	const CodeType_FixedPriceItem = 'FixedPriceItem';
	const CodeType_Half = 'Half';
	const CodeType_LeadGeneration = 'LeadGeneration';
	const CodeType_Express = 'Express';
	const CodeType_Shopping = 'Shopping';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('ListingTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_ListingTypeCodeType = new ListingTypeCodeType();
?>
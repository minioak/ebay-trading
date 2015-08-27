<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class ListingDurationCodeType extends EbatNs_FacetType
{
	const CodeType_Days_1 = 'Days_1';
	const CodeType_Days_3 = 'Days_3';
	const CodeType_Days_5 = 'Days_5';
	const CodeType_Days_7 = 'Days_7';
	const CodeType_Days_10 = 'Days_10';
	const CodeType_Days_14 = 'Days_14';
	const CodeType_Days_21 = 'Days_21';
	const CodeType_Days_30 = 'Days_30';
	const CodeType_Days_60 = 'Days_60';
	const CodeType_Days_90 = 'Days_90';
	const CodeType_Days_120 = 'Days_120';
	const CodeType_GTC = 'GTC';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('ListingDurationCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_ListingDurationCodeType = new ListingDurationCodeType();
?>
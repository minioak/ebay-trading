<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class BuyerProtectionCodeType extends EbatNs_FacetType
{
	const CodeType_ItemIneligible = 'ItemIneligible';
	const CodeType_ItemEligible = 'ItemEligible';
	const CodeType_ItemMarkedIneligible = 'ItemMarkedIneligible';
	const CodeType_ItemMarkedEligible = 'ItemMarkedEligible';
	const CodeType_NoCoverage = 'NoCoverage';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('BuyerProtectionCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_BuyerProtectionCodeType = new BuyerProtectionCodeType();
?>
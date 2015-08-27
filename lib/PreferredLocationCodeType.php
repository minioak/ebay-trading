<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class PreferredLocationCodeType extends EbatNs_FacetType
{
	const CodeType_ListedInCurrencyImplied = 'ListedInCurrencyImplied';
	const CodeType_LocatedInCountryImplied = 'LocatedInCountryImplied';
	const CodeType_AvailableInCountryImplied = 'AvailableInCountryImplied';
	const CodeType_SiteImplied = 'SiteImplied';
	const CodeType_BelgiumListing = 'BelgiumListing';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('PreferredLocationCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_PreferredLocationCodeType = new PreferredLocationCodeType();
?>
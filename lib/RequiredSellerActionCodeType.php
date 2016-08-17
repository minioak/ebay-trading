<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class RequiredSellerActionCodeType extends EbatNs_FacetType
{
	const CodeType_ResolveeBPCase = 'ResolveeBPCase';
	const CodeType_MarkAsShipped = 'MarkAsShipped';
	const CodeType_ContacteBayCS = 'ContacteBayCS';
	const CodeType_ResolvePPPIcase = 'ResolvePPPIcase';
	const CodeType_SetupPayoutMethod = 'SetupPayoutMethod';
	const CodeType_UpdatePayoutMethod = 'UpdatePayoutMethod';
	const CodeType_None = 'None';
	const CodeType_UploadTrackingInfo = 'UploadTrackingInfo';
	const CodeType_ResolveBuyerMessageInr = 'ResolveBuyerMessageInr';
	const CodeType_ResolveBuyerMessageSnad = 'ResolveBuyerMessageSnad';
	const CodeType_CustomCode = 'CustomCode';
	const CodeType_ResolveReturn = 'ResolveReturn';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('RequiredSellerActionCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_RequiredSellerActionCodeType = new RequiredSellerActionCodeType();
?>
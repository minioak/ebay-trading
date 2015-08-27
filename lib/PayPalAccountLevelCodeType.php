<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class PayPalAccountLevelCodeType extends EbatNs_FacetType
{
	const CodeType_Unverified = 'Unverified';
	const CodeType_InternationalUnverified = 'InternationalUnverified';
	const CodeType_Verified = 'Verified';
	const CodeType_InternationalVerified = 'InternationalVerified';
	const CodeType_Trusted = 'Trusted';
	const CodeType_Unknown = 'Unknown';
	const CodeType_Invalid = 'Invalid';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('PayPalAccountLevelCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_PayPalAccountLevelCodeType = new PayPalAccountLevelCodeType();
?>
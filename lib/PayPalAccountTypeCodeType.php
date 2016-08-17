<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class PayPalAccountTypeCodeType extends EbatNs_FacetType
{
	const CodeType_Personal = 'Personal';
	const CodeType_Premier = 'Premier';
	const CodeType_Business = 'Business';
	const CodeType_Unknown = 'Unknown';
	const CodeType_Invalid = 'Invalid';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('PayPalAccountTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_PayPalAccountTypeCodeType = new PayPalAccountTypeCodeType();
?>
<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class PayPalAccountStatusCodeType extends EbatNs_FacetType
{
	const CodeType_Active = 'Active';
	const CodeType_Closed = 'Closed';
	const CodeType_HighRestricted = 'HighRestricted';
	const CodeType_LowRestricted = 'LowRestricted';
	const CodeType_Locked = 'Locked';
	const CodeType_CustomCode = 'CustomCode';
	const CodeType_WireOff = 'WireOff';
	const CodeType_Unknown = 'Unknown';
	const CodeType_Invalid = 'Invalid';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('PayPalAccountStatusCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_PayPalAccountStatusCodeType = new PayPalAccountStatusCodeType();
?>
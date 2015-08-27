<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class CancelInitiatorCodeType extends EbatNs_FacetType
{
	const CodeType_Unknown = 'Unknown';
	const CodeType_Seller = 'Seller';
	const CodeType_Buyer = 'Buyer';
	const CodeType_CS = 'CS';
	const CodeType_System = 'System';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('CancelInitiatorCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_CancelInitiatorCodeType = new CancelInitiatorCodeType();
?>
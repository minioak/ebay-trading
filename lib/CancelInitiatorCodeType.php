<?php
/* Generated on 10.08.16 17:04 by globalsync
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
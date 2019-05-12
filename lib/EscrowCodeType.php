<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class EscrowCodeType extends EbatNs_FacetType
{
	const CodeType_ByBuyer = 'ByBuyer';
	const CodeType_BySeller = 'BySeller';
	const CodeType_None = 'None';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('EscrowCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_EscrowCodeType = new EscrowCodeType();
?>
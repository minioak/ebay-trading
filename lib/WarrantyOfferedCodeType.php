<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class WarrantyOfferedCodeType extends EbatNs_FacetType
{
	const CodeType_WarrantyOffered = 'WarrantyOffered';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('WarrantyOfferedCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_WarrantyOfferedCodeType = new WarrantyOfferedCodeType();
?>
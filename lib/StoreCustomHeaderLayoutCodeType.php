<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class StoreCustomHeaderLayoutCodeType extends EbatNs_FacetType
{
	const CodeType_NoHeader = 'NoHeader';
	const CodeType_CustomHeaderShown = 'CustomHeaderShown';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('StoreCustomHeaderLayoutCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_StoreCustomHeaderLayoutCodeType = new StoreCustomHeaderLayoutCodeType();
?>
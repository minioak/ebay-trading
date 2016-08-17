<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class StoreFontSizeCodeType extends EbatNs_FacetType
{
	const CodeType_XXS = 'XXS';
	const CodeType_XS = 'XS';
	const CodeType_S = 'S';
	const CodeType_M = 'M';
	const CodeType_L = 'L';
	const CodeType_XL = 'XL';
	const CodeType_XXL = 'XXL';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('StoreFontSizeCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_StoreFontSizeCodeType = new StoreFontSizeCodeType();
?>
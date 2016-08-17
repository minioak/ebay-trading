<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class MerchDisplayCodeType extends EbatNs_FacetType
{
	const CodeType_DefaultTheme = 'DefaultTheme';
	const CodeType_StoreTheme = 'StoreTheme';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('MerchDisplayCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_MerchDisplayCodeType = new MerchDisplayCodeType();
?>
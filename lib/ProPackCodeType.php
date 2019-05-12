<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class ProPackCodeType extends EbatNs_FacetType
{
	const CodeType_Enabled = 'Enabled';
	const CodeType_Disabled = 'Disabled';
	const CodeType_PowerSellerOnly = 'PowerSellerOnly';
	const CodeType_TopRatedSellerOnly = 'TopRatedSellerOnly';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('ProPackCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_ProPackCodeType = new ProPackCodeType();
?>
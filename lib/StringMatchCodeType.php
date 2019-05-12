<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class StringMatchCodeType extends EbatNs_FacetType
{
	const CodeType_CustomCode = 'CustomCode';
	const CodeType_StartsWith = 'StartsWith';
	const CodeType_Contains = 'Contains';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('StringMatchCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_StringMatchCodeType = new StringMatchCodeType();
?>
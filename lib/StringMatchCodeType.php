<?php
/* Generated on 8/11/15 3:23 AM by globalsync
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
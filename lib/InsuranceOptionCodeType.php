<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class InsuranceOptionCodeType extends EbatNs_FacetType
{
	const CodeType_Optional = 'Optional';
	const CodeType_Required = 'Required';
	const CodeType_NotOffered = 'NotOffered';
	const CodeType_IncludedInShippingHandling = 'IncludedInShippingHandling';
	const CodeType_NotOfferedOnSite = 'NotOfferedOnSite';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('InsuranceOptionCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_InsuranceOptionCodeType = new InsuranceOptionCodeType();
?>
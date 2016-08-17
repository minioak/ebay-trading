<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class TaxIdentifierAttributeCodeType extends EbatNs_FacetType
{
	const CodeType_IssuingCountry = 'IssuingCountry';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('TaxIdentifierAttributeCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_TaxIdentifierAttributeCodeType = new TaxIdentifierAttributeCodeType();
?>
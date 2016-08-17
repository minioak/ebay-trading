<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class TaxIdentifierCodeType extends EbatNs_FacetType
{
	const CodeType_CodiceFiscale = 'CodiceFiscale';
	const CodeType_DNI = 'DNI';
	const CodeType_RussianPassport = 'RussianPassport';
	const CodeType_CPFTaxID = 'CPFTaxID';
	const CodeType_TurkeyID = 'TurkeyID';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('TaxIdentifierCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_TaxIdentifierCodeType = new TaxIdentifierCodeType();
?>
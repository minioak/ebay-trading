<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class ValueTypeCodeType extends EbatNs_FacetType
{
	const CodeType_Decimal = 'Decimal';
	const CodeType_Numeric = 'Numeric';
	const CodeType_Text = 'Text';
	const CodeType_ISBN = 'ISBN';
	const CodeType_UPC = 'UPC';
	const CodeType_EAN = 'EAN';
	const CodeType_Date = 'Date';
	const CodeType_CodiceFiscale = 'CodiceFiscale';
	const CodeType_DNI = 'DNI';
	const CodeType_RussianPassport = 'RussianPassport';
	const CodeType_CPFTaxID = 'CPFTaxID';
	const CodeType_TurkeyID = 'TurkeyID';
	const CodeType_NIE = 'NIE';
	const CodeType_NIF = 'NIF';
	const CodeType_CEDULA = 'CEDULA';
	const CodeType_NIT = 'NIT';
	const CodeType_DriverLicense = 'DriverLicense';
	const CodeType_CNPJ = 'CNPJ';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('ValueTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_ValueTypeCodeType = new ValueTypeCodeType();
?>
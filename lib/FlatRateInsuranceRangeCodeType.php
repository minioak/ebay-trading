<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class FlatRateInsuranceRangeCodeType extends EbatNs_FacetType
{
	const CodeType_FlatRateInsuranceRange1 = 'FlatRateInsuranceRange1';
	const CodeType_FlatRateInsuranceRange2 = 'FlatRateInsuranceRange2';
	const CodeType_FlatRateInsuranceRange3 = 'FlatRateInsuranceRange3';
	const CodeType_FlatRateInsuranceRange4 = 'FlatRateInsuranceRange4';
	const CodeType_FlatRateInsuranceRange5 = 'FlatRateInsuranceRange5';
	const CodeType_FlatRateInsuranceRange6 = 'FlatRateInsuranceRange6';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('FlatRateInsuranceRangeCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_FlatRateInsuranceRangeCodeType = new FlatRateInsuranceRangeCodeType();
?>
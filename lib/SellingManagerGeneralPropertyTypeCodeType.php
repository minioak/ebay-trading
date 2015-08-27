<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class SellingManagerGeneralPropertyTypeCodeType extends EbatNs_FacetType
{
	const CodeType_NegativeFeedbackReceived = 'NegativeFeedbackReceived';
	const CodeType_UnpaidItemDispute = 'UnpaidItemDispute';
	const CodeType_BadEmailTemplate = 'BadEmailTemplate';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('SellingManagerGeneralPropertyTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_SellingManagerGeneralPropertyTypeCodeType = new SellingManagerGeneralPropertyTypeCodeType();
?>
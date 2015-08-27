<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class HandlingNameCodeType extends EbatNs_FacetType
{
	const CodeType_EachAdditionalAmount = 'EachAdditionalAmount';
	const CodeType_EachAdditionalAmountOff = 'EachAdditionalAmountOff';
	const CodeType_EachAdditionalPercentOff = 'EachAdditionalPercentOff';
	const CodeType_IndividualHandlingFee = 'IndividualHandlingFee';
	const CodeType_CombinedHandlingFee = 'CombinedHandlingFee';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('HandlingNameCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_HandlingNameCodeType = new HandlingNameCodeType();
?>
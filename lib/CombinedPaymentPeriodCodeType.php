<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class CombinedPaymentPeriodCodeType extends EbatNs_FacetType
{
	const CodeType_Days_3 = 'Days_3';
	const CodeType_Days_5 = 'Days_5';
	const CodeType_Days_7 = 'Days_7';
	const CodeType_Days_14 = 'Days_14';
	const CodeType_Days_30 = 'Days_30';
	const CodeType_Ineligible = 'Ineligible';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('CombinedPaymentPeriodCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_CombinedPaymentPeriodCodeType = new CombinedPaymentPeriodCodeType();
?>
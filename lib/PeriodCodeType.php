<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class PeriodCodeType extends EbatNs_FacetType
{
	const CodeType_Days_1 = 'Days_1';
	const CodeType_Days_30 = 'Days_30';
	const CodeType_Days_180 = 'Days_180';
	const CodeType_Days_360 = 'Days_360';
	const CodeType_Days_540 = 'Days_540';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('PeriodCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_PeriodCodeType = new PeriodCodeType();
?>
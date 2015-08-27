<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class ReturnsWithinOptionsCodeType extends EbatNs_FacetType
{
	const CodeType_Days_3 = 'Days_3';
	const CodeType_Days_7 = 'Days_7';
	const CodeType_Days_10 = 'Days_10';
	const CodeType_Days_14 = 'Days_14';
	const CodeType_Days_30 = 'Days_30';
	const CodeType_Days_60 = 'Days_60';
	const CodeType_Months_1 = 'Months_1';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('ReturnsWithinOptionsCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_ReturnsWithinOptionsCodeType = new ReturnsWithinOptionsCodeType();
?>
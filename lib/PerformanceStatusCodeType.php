<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class PerformanceStatusCodeType extends EbatNs_FacetType
{
	const CodeType_TopRated = 'TopRated';
	const CodeType_AboveStandard = 'AboveStandard';
	const CodeType_Standard = 'Standard';
	const CodeType_BelowStandard = 'BelowStandard';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('PerformanceStatusCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_PerformanceStatusCodeType = new PerformanceStatusCodeType();
?>
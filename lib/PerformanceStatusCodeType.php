<?php
/* Generated on 10.08.16 17:04 by globalsync
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
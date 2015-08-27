<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class SearchStandingStatusCodeType extends EbatNs_FacetType
{
	const CodeType_Raised = 'Raised';
	const CodeType_Standard = 'Standard';
	const CodeType_Lowered = 'Lowered';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('SearchStandingStatusCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_SearchStandingStatusCodeType = new SearchStandingStatusCodeType();
?>
<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class TopRatedProgramCodeType extends EbatNs_FacetType
{
	const CodeType_US = 'US';
	const CodeType_UK = 'UK';
	const CodeType_DE = 'DE';
	const CodeType_Global = 'Global';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('TopRatedProgramCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_TopRatedProgramCodeType = new TopRatedProgramCodeType();
?>
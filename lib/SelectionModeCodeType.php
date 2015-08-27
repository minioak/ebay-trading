<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class SelectionModeCodeType extends EbatNs_FacetType
{
	const CodeType_Automatic = 'Automatic';
	const CodeType_Manual = 'Manual';
	const CodeType_Prefilled = 'Prefilled';
	const CodeType_SelectionOnly = 'SelectionOnly';
	const CodeType_FreeText = 'FreeText';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('SelectionModeCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_SelectionModeCodeType = new SelectionModeCodeType();
?>
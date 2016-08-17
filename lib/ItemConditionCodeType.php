<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class ItemConditionCodeType extends EbatNs_FacetType
{
	const CodeType_New = 'New';
	const CodeType_Used = 'Used';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('ItemConditionCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_ItemConditionCodeType = new ItemConditionCodeType();
?>
<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class StoreCategoryUpdateActionCodeType extends EbatNs_FacetType
{
	const CodeType_Add = 'Add';
	const CodeType_Delete = 'Delete';
	const CodeType_Move = 'Move';
	const CodeType_Rename = 'Rename';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('StoreCategoryUpdateActionCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_StoreCategoryUpdateActionCodeType = new StoreCategoryUpdateActionCodeType();
?>
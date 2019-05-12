<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class ModifyActionCodeType extends EbatNs_FacetType
{
	const CodeType_Add = 'Add';
	const CodeType_Delete = 'Delete';
	const CodeType_Update = 'Update';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('ModifyActionCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_ModifyActionCodeType = new ModifyActionCodeType();
?>
<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class MyMessagesFolderOperationCodeType extends EbatNs_FacetType
{
	const CodeType_Display = 'Display';
	const CodeType_Rename = 'Rename';
	const CodeType_Remove = 'Remove';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('MyMessagesFolderOperationCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_MyMessagesFolderOperationCodeType = new MyMessagesFolderOperationCodeType();
?>
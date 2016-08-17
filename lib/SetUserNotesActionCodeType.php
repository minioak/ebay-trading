<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class SetUserNotesActionCodeType extends EbatNs_FacetType
{
	const CodeType_AddOrUpdate = 'AddOrUpdate';
	const CodeType_Delete = 'Delete';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('SetUserNotesActionCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_SetUserNotesActionCodeType = new SetUserNotesActionCodeType();
?>
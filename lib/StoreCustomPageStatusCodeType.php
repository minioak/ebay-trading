<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class StoreCustomPageStatusCodeType extends EbatNs_FacetType
{
	const CodeType_Active = 'Active';
	const CodeType_Delete = 'Delete';
	const CodeType_Inactive = 'Inactive';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('StoreCustomPageStatusCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_StoreCustomPageStatusCodeType = new StoreCustomPageStatusCodeType();
?>
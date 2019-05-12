<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class ListingFlowCodeType extends EbatNs_FacetType
{
	const CodeType_AddItem = 'AddItem';
	const CodeType_ReviseItem = 'ReviseItem';
	const CodeType_RelistItem = 'RelistItem';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('ListingFlowCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_ListingFlowCodeType = new ListingFlowCodeType();
?>
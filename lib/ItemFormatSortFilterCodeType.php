<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class ItemFormatSortFilterCodeType extends EbatNs_FacetType
{
	const CodeType_ShowAnyItems = 'ShowAnyItems';
	const CodeType_ShowItemsWithBINFirst = 'ShowItemsWithBINFirst';
	const CodeType_ShowOnlyItemsWithBIN = 'ShowOnlyItemsWithBIN';
	const CodeType_ShowOnlyStoreItems = 'ShowOnlyStoreItems';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('ItemFormatSortFilterCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_ItemFormatSortFilterCodeType = new ItemFormatSortFilterCodeType();
?>
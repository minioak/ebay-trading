<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class ItemTypeCodeType extends EbatNs_FacetType
{
	const CodeType_AuctionItemsOnly = 'AuctionItemsOnly';
	const CodeType_FixedPricedItem = 'FixedPricedItem';
	const CodeType_AllItems = 'AllItems';
	const CodeType_StoreInventoryOnly = 'StoreInventoryOnly';
	const CodeType_FixedPriceExcludeStoreInventory = 'FixedPriceExcludeStoreInventory';
	const CodeType_ExcludeStoreInventory = 'ExcludeStoreInventory';
	const CodeType_AllItemTypes = 'AllItemTypes';
	const CodeType_AllFixedPriceItemTypes = 'AllFixedPriceItemTypes';
	const CodeType_CustomCode = 'CustomCode';
	const CodeType_ClassifiedItemsOnly = 'ClassifiedItemsOnly';
	const CodeType_AdFormat = 'AdFormat';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('ItemTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_ItemTypeCodeType = new ItemTypeCodeType();
?>
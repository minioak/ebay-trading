<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class PromotionSchemeCodeType extends EbatNs_FacetType
{
	const CodeType_ItemToItem = 'ItemToItem';
	const CodeType_ItemToStoreCat = 'ItemToStoreCat';
	const CodeType_StoreToStoreCat = 'StoreToStoreCat';
	const CodeType_ItemToDefaultRule = 'ItemToDefaultRule';
	const CodeType_DefaultRule = 'DefaultRule';
	const CodeType_CategoryProximity = 'CategoryProximity';
	const CodeType_RelatedCategoryRule = 'RelatedCategoryRule';
	const CodeType_DefaultUpSellLogic = 'DefaultUpSellLogic';
	const CodeType_DefaultCrossSellLogic = 'DefaultCrossSellLogic';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('PromotionSchemeCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_PromotionSchemeCodeType = new PromotionSchemeCodeType();
?>
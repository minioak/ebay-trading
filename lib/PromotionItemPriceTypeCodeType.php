<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class PromotionItemPriceTypeCodeType extends EbatNs_FacetType
{
	const CodeType_AuctionPrice = 'AuctionPrice';
	const CodeType_BuyItNowPrice = 'BuyItNowPrice';
	const CodeType_BestOfferOnlyPrice = 'BestOfferOnlyPrice';
	const CodeType_ClassifiedAdPrice = 'ClassifiedAdPrice';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('PromotionItemPriceTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_PromotionItemPriceTypeCodeType = new PromotionItemPriceTypeCodeType();
?>
<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class EBaySubscriptionTypeCodeType extends EbatNs_FacetType
{
	const CodeType_SellerAssistant = 'SellerAssistant';
	const CodeType_SellerAssistantPro = 'SellerAssistantPro';
	const CodeType_EBayStoreBasic = 'EBayStoreBasic';
	const CodeType_EBayStoreFeatured = 'EBayStoreFeatured';
	const CodeType_EBayStoreAnchor = 'EBayStoreAnchor';
	const CodeType_SellingManager = 'SellingManager';
	const CodeType_SellingManagerPro = 'SellingManagerPro';
	const CodeType_PictureManagerLevel1 = 'PictureManagerLevel1';
	const CodeType_PictureManagerLevel2 = 'PictureManagerLevel2';
	const CodeType_PictureManagerLevel3 = 'PictureManagerLevel3';
	const CodeType_PictureManagerLevel4 = 'PictureManagerLevel4';
	const CodeType_PictureManagerLevel5 = 'PictureManagerLevel5';
	const CodeType_PictureManagerLevel6 = 'PictureManagerLevel6';
	const CodeType_PictureManagerLevel7 = 'PictureManagerLevel7';
	const CodeType_SellerReportsBasic = 'SellerReportsBasic';
	const CodeType_SellerReportsPlus = 'SellerReportsPlus';
	const CodeType_FileExchange = 'FileExchange';
	const CodeType_LocalMarketSpecialty = 'LocalMarketSpecialty';
	const CodeType_LocalMarketRegular = 'LocalMarketRegular';
	const CodeType_LocalMarketPremium = 'LocalMarketPremium';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('EBaySubscriptionTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_EBaySubscriptionTypeCodeType = new EBaySubscriptionTypeCodeType();
?>
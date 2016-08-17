<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class PurchasePurposeTypeCodeType extends EbatNs_FacetType
{
	const CodeType_Other = 'Other';
	const CodeType_BuyNowItem = 'BuyNowItem';
	const CodeType_ShoppingCart = 'ShoppingCart';
	const CodeType_AuctionItem = 'AuctionItem';
	const CodeType_GiftCertificates = 'GiftCertificates';
	const CodeType_Subscription = 'Subscription';
	const CodeType_Donation = 'Donation';
	const CodeType_eBayBilling = 'eBayBilling';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('PurchasePurposeTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_PurchasePurposeTypeCodeType = new PurchasePurposeTypeCodeType();
?>
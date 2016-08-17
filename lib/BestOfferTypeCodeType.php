<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class BestOfferTypeCodeType extends EbatNs_FacetType
{
	const CodeType_BuyerBestOffer = 'BuyerBestOffer';
	const CodeType_BuyerCounterOffer = 'BuyerCounterOffer';
	const CodeType_SellerCounterOffer = 'SellerCounterOffer';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('BestOfferTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_BestOfferTypeCodeType = new BestOfferTypeCodeType();
?>
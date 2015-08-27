<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class MessageTypeCodeType extends EbatNs_FacetType
{
	const CodeType_AskSellerQuestion = 'AskSellerQuestion';
	const CodeType_ResponseToASQQuestion = 'ResponseToASQQuestion';
	const CodeType_ContactEbayMember = 'ContactEbayMember';
	const CodeType_ContactTransactionPartner = 'ContactTransactionPartner';
	const CodeType_ResponseToContacteBayMember = 'ResponseToContacteBayMember';
	const CodeType_ContacteBayMemberViaCommunityLink = 'ContacteBayMemberViaCommunityLink';
	const CodeType_CustomCode = 'CustomCode';
	const CodeType_All = 'All';
	const CodeType_ContactMyBidder = 'ContactMyBidder';
	const CodeType_ContacteBayMemberViaAnonymousEmail = 'ContacteBayMemberViaAnonymousEmail';
	const CodeType_ClassifiedsContactSeller = 'ClassifiedsContactSeller';
	const CodeType_ClassifiedsBestOffer = 'ClassifiedsBestOffer';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('MessageTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_MessageTypeCodeType = new MessageTypeCodeType();
?>
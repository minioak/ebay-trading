<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class BestOfferStatusCodeType extends EbatNs_FacetType
{
	const CodeType_Pending = 'Pending';
	const CodeType_Accepted = 'Accepted';
	const CodeType_Declined = 'Declined';
	const CodeType_Expired = 'Expired';
	const CodeType_Retracted = 'Retracted';
	const CodeType_AdminEnded = 'AdminEnded';
	const CodeType_Active = 'Active';
	const CodeType_Countered = 'Countered';
	const CodeType_All = 'All';
	const CodeType_PendingBuyerPayment = 'PendingBuyerPayment';
	const CodeType_PendingBuyerConfirmation = 'PendingBuyerConfirmation';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('BestOfferStatusCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_BestOfferStatusCodeType = new BestOfferStatusCodeType();
?>
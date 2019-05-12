<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class DisputeResolutionReasonCodeType extends EbatNs_FacetType
{
	const CodeType_Unresolved = 'Unresolved';
	const CodeType_ProofOfPayment = 'ProofOfPayment';
	const CodeType_ComputerTechnicalProblem = 'ComputerTechnicalProblem';
	const CodeType_NoContact = 'NoContact';
	const CodeType_FamilyEmergency = 'FamilyEmergency';
	const CodeType_ProofGivenInFeedback = 'ProofGivenInFeedback';
	const CodeType_FirstInfraction = 'FirstInfraction';
	const CodeType_CameToAgreement = 'CameToAgreement';
	const CodeType_ItemReturned = 'ItemReturned';
	const CodeType_BuyerPaidAuctionFees = 'BuyerPaidAuctionFees';
	const CodeType_SellerReceivedPayment = 'SellerReceivedPayment';
	const CodeType_OtherResolution = 'OtherResolution';
	const CodeType_ClaimPaid = 'ClaimPaid';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('DisputeResolutionReasonCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_DisputeResolutionReasonCodeType = new DisputeResolutionReasonCodeType();
?>
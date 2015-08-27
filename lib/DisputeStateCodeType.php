<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class DisputeStateCodeType extends EbatNs_FacetType
{
	const CodeType_Locked = 'Locked';
	const CodeType_Closed = 'Closed';
	const CodeType_BuyerFirstResponsePayOption = 'BuyerFirstResponsePayOption';
	const CodeType_BuyerFirstResponseNoPayOption = 'BuyerFirstResponseNoPayOption';
	const CodeType_BuyerFirstResponsePayOptionLateResponse = 'BuyerFirstResponsePayOptionLateResponse';
	const CodeType_BuyerFirstResponseNoPayOptionLateResponse = 'BuyerFirstResponseNoPayOptionLateResponse';
	const CodeType_MutualCommunicationPayOption = 'MutualCommunicationPayOption';
	const CodeType_MutualCommunicationNoPayOption = 'MutualCommunicationNoPayOption';
	const CodeType_PendingResolve = 'PendingResolve';
	const CodeType_MutualWithdrawalAgreement = 'MutualWithdrawalAgreement';
	const CodeType_MutualWithdrawalAgreementLate = 'MutualWithdrawalAgreementLate';
	const CodeType_NotReceivedNoSellerResponse = 'NotReceivedNoSellerResponse';
	const CodeType_NotAsDescribedNoSellerResponse = 'NotAsDescribedNoSellerResponse';
	const CodeType_NotReceivedMutualCommunication = 'NotReceivedMutualCommunication';
	const CodeType_NotAsDescribedMutualCommunication = 'NotAsDescribedMutualCommunication';
	const CodeType_MutualAgreementOrBuyerReturningItem = 'MutualAgreementOrBuyerReturningItem';
	const CodeType_ClaimOpened = 'ClaimOpened';
	const CodeType_NoDocumentation = 'NoDocumentation';
	const CodeType_ClaimClosed = 'ClaimClosed';
	const CodeType_ClaimDenied = 'ClaimDenied';
	const CodeType_ClaimPending = 'ClaimPending';
	const CodeType_ClaimPaymentPending = 'ClaimPaymentPending';
	const CodeType_ClaimPaid = 'ClaimPaid';
	const CodeType_ClaimResolved = 'ClaimResolved';
	const CodeType_ClaimSubmitted = 'ClaimSubmitted';
	const CodeType_UnpaidItemOpen = 'UnpaidItemOpen';
	const CodeType_UPIAssistanceDisabledByeBay = 'UPIAssistanceDisabledByeBay';
	const CodeType_UPIAssistanceDisabledBySeller = 'UPIAssistanceDisabledBySeller';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('DisputeStateCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_DisputeStateCodeType = new DisputeStateCodeType();
?>
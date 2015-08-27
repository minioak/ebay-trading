<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class DisputeStatusCodeType extends EbatNs_FacetType
{
	const CodeType_Closed = 'Closed';
	const CodeType_WaitingForSellerResponse = 'WaitingForSellerResponse';
	const CodeType_WaitingForBuyerResponse = 'WaitingForBuyerResponse';
	const CodeType_ClosedFVFCreditStrike = 'ClosedFVFCreditStrike';
	const CodeType_ClosedNoFVFCreditStrike = 'ClosedNoFVFCreditStrike';
	const CodeType_ClosedFVFCreditNoStrike = 'ClosedFVFCreditNoStrike';
	const CodeType_ClosedNoFVFCreditNoStrike = 'ClosedNoFVFCreditNoStrike';
	const CodeType_StrikeAppealedAfterClosing = 'StrikeAppealedAfterClosing';
	const CodeType_FVFCreditReversedAfterClosing = 'FVFCreditReversedAfterClosing';
	const CodeType_StrikeAppealedAndFVFCreditReversed = 'StrikeAppealedAndFVFCreditReversed';
	const CodeType_ClaimOpened = 'ClaimOpened';
	const CodeType_NoDocumentation = 'NoDocumentation';
	const CodeType_ClaimClosed = 'ClaimClosed';
	const CodeType_ClaimDenied = 'ClaimDenied';
	const CodeType_ClaimInProcess = 'ClaimInProcess';
	const CodeType_ClaimApproved = 'ClaimApproved';
	const CodeType_ClaimPaid = 'ClaimPaid';
	const CodeType_ClaimResolved = 'ClaimResolved';
	const CodeType_ClaimSubmitted = 'ClaimSubmitted';
	const CodeType_UnpaidItemOpened = 'UnpaidItemOpened';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('DisputeStatusCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_DisputeStatusCodeType = new DisputeStatusCodeType();
?>
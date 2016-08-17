<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class DisputeResolutionRecordTypeCodeType extends EbatNs_FacetType
{
	const CodeType_StrikeBuyer = 'StrikeBuyer';
	const CodeType_SuspendBuyer = 'SuspendBuyer';
	const CodeType_RestrictBuyer = 'RestrictBuyer';
	const CodeType_FVFCredit = 'FVFCredit';
	const CodeType_InsertionFeeCredit = 'InsertionFeeCredit';
	const CodeType_AppealBuyerStrike = 'AppealBuyerStrike';
	const CodeType_UnsuspendBuyer = 'UnsuspendBuyer';
	const CodeType_UnrestrictBuyer = 'UnrestrictBuyer';
	const CodeType_ReverseFVFCredit = 'ReverseFVFCredit';
	const CodeType_ReverseInsertionFeeCredit = 'ReverseInsertionFeeCredit';
	const CodeType_GenerateCSTicketForSuspend = 'GenerateCSTicketForSuspend';
	const CodeType_FVFCreditNotGranted = 'FVFCreditNotGranted';
	const CodeType_ItemNotReceivedClaimFiled = 'ItemNotReceivedClaimFiled';
	const CodeType_UnpaidItemRelisted = 'UnpaidItemRelisted';
	const CodeType_UnpaidItemRevised = 'UnpaidItemRevised';
	const CodeType_FVFOnShippingCredit = 'FVFOnShippingCredit';
	const CodeType_FVFOnShippingCreditNotGranted = 'FVFOnShippingCreditNotGranted';
	const CodeType_ReverseFVFOnShippingCredit = 'ReverseFVFOnShippingCredit';
	const CodeType_FeatureFeeCredit = 'FeatureFeeCredit';
	const CodeType_FeatureFeeNotCredit = 'FeatureFeeNotCredit';
	const CodeType_ReverseFeatureFeeCredit = 'ReverseFeatureFeeCredit';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('DisputeResolutionRecordTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_DisputeResolutionRecordTypeCodeType = new DisputeResolutionRecordTypeCodeType();
?>
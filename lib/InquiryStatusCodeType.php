<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class InquiryStatusCodeType extends EbatNs_FacetType
{
	const CodeType_Invalid = 'Invalid';
	const CodeType_NotApplicable = 'NotApplicable';
	const CodeType_TrackInquiryPendingBuyerResponse = 'TrackInquiryPendingBuyerResponse';
	const CodeType_TrackInquiryPendingSellerResponse = 'TrackInquiryPendingSellerResponse';
	const CodeType_TrackInquiryClosedWithRefund = 'TrackInquiryClosedWithRefund';
	const CodeType_TrackInquiryClosedNoRefund = 'TrackInquiryClosedNoRefund';
	const CodeType_TrackInquiryEscalatedPendingBuyer = 'TrackInquiryEscalatedPendingBuyer';
	const CodeType_TrackInquiryEscalatedPendingSeller = 'TrackInquiryEscalatedPendingSeller';
	const CodeType_TrackInquiryEscalatedPendingCS = 'TrackInquiryEscalatedPendingCS';
	const CodeType_TrackInquiryEscalatedClosedWithRefund = 'TrackInquiryEscalatedClosedWithRefund';
	const CodeType_TrackInquiryEscalatedClosedNoRefund = 'TrackInquiryEscalatedClosedNoRefund';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('InquiryStatusCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_InquiryStatusCodeType = new InquiryStatusCodeType();
?>
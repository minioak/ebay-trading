<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class ReturnStatusCodeType extends EbatNs_FacetType
{
	const CodeType_Invalid = 'Invalid';
	const CodeType_NotApplicable = 'NotApplicable';
	const CodeType_ReturnRequestPendingApproval = 'ReturnRequestPendingApproval';
	const CodeType_ReturnRequestRejected = 'ReturnRequestRejected';
	const CodeType_ReturnOpen = 'ReturnOpen';
	const CodeType_ReturnShipped = 'ReturnShipped';
	const CodeType_ReturnDelivered = 'ReturnDelivered';
	const CodeType_ReturnClosedWithRefund = 'ReturnClosedWithRefund';
	const CodeType_ReturnClosedEscalated = 'ReturnClosedEscalated';
	const CodeType_ReturnClosedNoRefund = 'ReturnClosedNoRefund';
	const CodeType_ReturnEscalatedPendingBuyer = 'ReturnEscalatedPendingBuyer';
	const CodeType_ReturnEscalatedPendingSeller = 'ReturnEscalatedPendingSeller';
	const CodeType_ReturnEscalatedPendingCS = 'ReturnEscalatedPendingCS';
	const CodeType_ReturnEscalatedClosedWithRefund = 'ReturnEscalatedClosedWithRefund';
	const CodeType_ReturnEscalatedClosedNoRefund = 'ReturnEscalatedClosedNoRefund';
	const CodeType_ReturnEscalated = 'ReturnEscalated';
	const CodeType_ReturnRequestPending = 'ReturnRequestPending';
	const CodeType_ReturnRequestClosedWithRefund = 'ReturnRequestClosedWithRefund';
	const CodeType_ReturnRequestClosedNoRefund = 'ReturnRequestClosedNoRefund';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('ReturnStatusCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_ReturnStatusCodeType = new ReturnStatusCodeType();
?>
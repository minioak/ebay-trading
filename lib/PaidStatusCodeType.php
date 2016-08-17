<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class PaidStatusCodeType extends EbatNs_FacetType
{
	const CodeType_NotPaid = 'NotPaid';
	const CodeType_BuyerHasNotCompletedCheckout = 'BuyerHasNotCompletedCheckout';
	const CodeType_PaymentPendingWithPayPal = 'PaymentPendingWithPayPal';
	const CodeType_PaidWithPayPal = 'PaidWithPayPal';
	const CodeType_MarkedAsPaid = 'MarkedAsPaid';
	const CodeType_PaymentPendingWithEscrow = 'PaymentPendingWithEscrow';
	const CodeType_PaidWithEscrow = 'PaidWithEscrow';
	const CodeType_EscrowPaymentCancelled = 'EscrowPaymentCancelled';
	const CodeType_PaymentPendingWithPaisaPay = 'PaymentPendingWithPaisaPay';
	const CodeType_PaidWithPaisaPay = 'PaidWithPaisaPay';
	const CodeType_PaymentPending = 'PaymentPending';
	const CodeType_PaymentPendingWithPaisaPayEscrow = 'PaymentPendingWithPaisaPayEscrow';
	const CodeType_PaidWithPaisaPayEscrow = 'PaidWithPaisaPayEscrow';
	const CodeType_PaisaPayNotPaid = 'PaisaPayNotPaid';
	const CodeType_Refunded = 'Refunded';
	const CodeType_WaitingForCODPayment = 'WaitingForCODPayment';
	const CodeType_PaidCOD = 'PaidCOD';
	const CodeType_CustomCode = 'CustomCode';
	const CodeType_Paid = 'Paid';
	const CodeType_PayUponInvoice = 'PayUponInvoice';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('PaidStatusCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_PaidStatusCodeType = new PaidStatusCodeType();
?>
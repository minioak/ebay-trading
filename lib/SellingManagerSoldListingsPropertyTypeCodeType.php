<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class SellingManagerSoldListingsPropertyTypeCodeType extends EbatNs_FacetType
{
	const CodeType_NotPaidNotShipped = 'NotPaidNotShipped';
	const CodeType_PaidNotShipped = 'PaidNotShipped';
	const CodeType_PrintShippingLabel = 'PrintShippingLabel';
	const CodeType_PaidShipped = 'PaidShipped';
	const CodeType_PaidNoFeedback = 'PaidNoFeedback';
	const CodeType_PaymentReminderSendError = 'PaymentReminderSendError';
	const CodeType_PaymentReceivedNotificationSendError = 'PaymentReceivedNotificationSendError';
	const CodeType_RequestForShippingAddressSendError = 'RequestForShippingAddressSendError';
	const CodeType_ShippingNotificationSendError = 'ShippingNotificationSendError';
	const CodeType_PersonalizedEmailsSendError = 'PersonalizedEmailsSendError';
	const CodeType_WinningBuyerNotificationSendError = 'WinningBuyerNotificationSendError';
	const CodeType_FeeCreditRequest = 'FeeCreditRequest';
	const CodeType_PayPalPayment = 'PayPalPayment';
	const CodeType_FeedbackMessageNotSent = 'FeedbackMessageNotSent';
	const CodeType_FeedbackReminderSendError = 'FeedbackReminderSendError';
	const CodeType_NotShipped = 'NotShipped';
	const CodeType_UnpaidItemReminder = 'UnpaidItemReminder';
	const CodeType_EscrowCancelled = 'EscrowCancelled';
	const CodeType_EscrowCompleted = 'EscrowCompleted';
	const CodeType_EscrowInitiated = 'EscrowInitiated';
	const CodeType_EscrowManageRefund = 'EscrowManageRefund';
	const CodeType_EscrowReleasePayment = 'EscrowReleasePayment';
	const CodeType_EscrowShipToBuyer = 'EscrowShipToBuyer';
	const CodeType_EscrowSoldAll = 'EscrowSoldAll';
	const CodeType_ShippedAndAwaitingFeedback = 'ShippedAndAwaitingFeedback';
	const CodeType_InternationalSale = 'InternationalSale';
	const CodeType_eBayGivingWorksDonationOwed = 'eBayGivingWorksDonationOwed';
	const CodeType_PaymentOverDue = 'PaymentOverDue';
	const CodeType_PadiWithPaisaPayEscrow = 'PadiWithPaisaPayEscrow';
	const CodeType_CustomEmailTemplate1SendError = 'CustomEmailTemplate1SendError';
	const CodeType_CustomEmailTemplate2SendError = 'CustomEmailTemplate2SendError';
	const CodeType_CustomEmailTemplate3SendError = 'CustomEmailTemplate3SendError';
	const CodeType_CustomEmailTemplate4SendError = 'CustomEmailTemplate4SendError';
	const CodeType_CustomEmailTemplate5SendError = 'CustomEmailTemplate5SendError';
	const CodeType_CustomEmailTemplate6SendError = 'CustomEmailTemplate6SendError';
	const CodeType_CustomEmailTemplate7SendError = 'CustomEmailTemplate7SendError';
	const CodeType_CustomEmailTemplate8SendError = 'CustomEmailTemplate8SendError';
	const CodeType_CustomEmailTemplate9SendError = 'CustomEmailTemplate9SendError';
	const CodeType_CustomEmailTemplate10SendError = 'CustomEmailTemplate10SendError';
	const CodeType_CustomEmailTemplate11SendError = 'CustomEmailTemplate11SendError';
	const CodeType_CustomEmailTemplate12SendError = 'CustomEmailTemplate12SendError';
	const CodeType_CustomEmailTemplate13SendError = 'CustomEmailTemplate13SendError';
	const CodeType_CustomEmailTemplate14SendError = 'CustomEmailTemplate14SendError';
	const CodeType_CustomEmailTemplate15SendError = 'CustomEmailTemplate15SendError';
	const CodeType_CustomEmailTemplate16SendError = 'CustomEmailTemplate16SendError';
	const CodeType_CustomEmailTemplate17SendError = 'CustomEmailTemplate17SendError';
	const CodeType_CustomEmailTemplate18SendError = 'CustomEmailTemplate18SendError';
	const CodeType_CustomEmailTemplate19SendError = 'CustomEmailTemplate19SendError';
	const CodeType_CustomEmailTemplate20SendError = 'CustomEmailTemplate20SendError';
	const CodeType_ResponseRequiredForReturnCase = 'ResponseRequiredForReturnCase';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('SellingManagerSoldListingsPropertyTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_SellingManagerSoldListingsPropertyTypeCodeType = new SellingManagerSoldListingsPropertyTypeCodeType();
?>
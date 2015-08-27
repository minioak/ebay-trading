<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class NotificationEventTypeCodeType extends EbatNs_FacetType
{
	const CodeType_None = 'None';
	const CodeType_OutBid = 'OutBid';
	const CodeType_EndOfAuction = 'EndOfAuction';
	const CodeType_AuctionCheckoutComplete = 'AuctionCheckoutComplete';
	const CodeType_CheckoutBuyerRequestsTotal = 'CheckoutBuyerRequestsTotal';
	const CodeType_Feedback = 'Feedback';
	const CodeType_FeedbackForSeller = 'FeedbackForSeller';
	const CodeType_FixedPriceTransaction = 'FixedPriceTransaction';
	const CodeType_SecondChanceOffer = 'SecondChanceOffer';
	const CodeType_AskSellerQuestion = 'AskSellerQuestion';
	const CodeType_ItemListed = 'ItemListed';
	const CodeType_ItemRevised = 'ItemRevised';
	const CodeType_BuyerResponseDispute = 'BuyerResponseDispute';
	const CodeType_SellerOpenedDispute = 'SellerOpenedDispute';
	const CodeType_SellerRespondedToDispute = 'SellerRespondedToDispute';
	const CodeType_SellerClosedDispute = 'SellerClosedDispute';
	const CodeType_BestOffer = 'BestOffer';
	const CodeType_MyMessagesAlertHeader = 'MyMessagesAlertHeader';
	const CodeType_MyMessagesAlert = 'MyMessagesAlert';
	const CodeType_MyMessageseBayMessageHeader = 'MyMessageseBayMessageHeader';
	const CodeType_MyMessageseBayMessage = 'MyMessageseBayMessage';
	const CodeType_MyMessagesM2MMessageHeader = 'MyMessagesM2MMessageHeader';
	const CodeType_MyMessagesM2MMessage = 'MyMessagesM2MMessage';
	const CodeType_INRBuyerOpenedDispute = 'INRBuyerOpenedDispute';
	const CodeType_INRBuyerRespondedToDispute = 'INRBuyerRespondedToDispute';
	const CodeType_INRBuyerClosedDispute = 'INRBuyerClosedDispute';
	const CodeType_INRSellerRespondedToDispute = 'INRSellerRespondedToDispute';
	const CodeType_Checkout = 'Checkout';
	const CodeType_WatchedItemEndingSoon = 'WatchedItemEndingSoon';
	const CodeType_ItemClosed = 'ItemClosed';
	const CodeType_ItemSuspended = 'ItemSuspended';
	const CodeType_ItemSold = 'ItemSold';
	const CodeType_ItemExtended = 'ItemExtended';
	const CodeType_UserIDChanged = 'UserIDChanged';
	const CodeType_EmailAddressChanged = 'EmailAddressChanged';
	const CodeType_PasswordChanged = 'PasswordChanged';
	const CodeType_PasswordHintChanged = 'PasswordHintChanged';
	const CodeType_PaymentDetailChanged = 'PaymentDetailChanged';
	const CodeType_AccountSuspended = 'AccountSuspended';
	const CodeType_AccountSummary = 'AccountSummary';
	const CodeType_ThirdPartyCartCheckout = 'ThirdPartyCartCheckout';
	const CodeType_ItemRevisedAddCharity = 'ItemRevisedAddCharity';
	const CodeType_ItemAddedToWatchList = 'ItemAddedToWatchList';
	const CodeType_ItemRemovedFromWatchList = 'ItemRemovedFromWatchList';
	const CodeType_ItemAddedToBidGroup = 'ItemAddedToBidGroup';
	const CodeType_ItemRemovedFromBidGroup = 'ItemRemovedFromBidGroup';
	const CodeType_FeedbackLeft = 'FeedbackLeft';
	const CodeType_FeedbackReceived = 'FeedbackReceived';
	const CodeType_FeedbackStarChanged = 'FeedbackStarChanged';
	const CodeType_BidPlaced = 'BidPlaced';
	const CodeType_BidReceived = 'BidReceived';
	const CodeType_ItemWon = 'ItemWon';
	const CodeType_ItemLost = 'ItemLost';
	const CodeType_ItemUnsold = 'ItemUnsold';
	const CodeType_CounterOfferReceived = 'CounterOfferReceived';
	const CodeType_BestOfferDeclined = 'BestOfferDeclined';
	const CodeType_BestOfferPlaced = 'BestOfferPlaced';
	const CodeType_AddToWatchList = 'AddToWatchList';
	const CodeType_PlaceOffer = 'PlaceOffer';
	const CodeType_RemoveFromWatchList = 'RemoveFromWatchList';
	const CodeType_AddToBidGroup = 'AddToBidGroup';
	const CodeType_RemoveFromBidGroup = 'RemoveFromBidGroup';
	const CodeType_ItemsCanceled = 'ItemsCanceled';
	const CodeType_TokenRevocation = 'TokenRevocation';
	const CodeType_BulkDataExchangeJobCompleted = 'BulkDataExchangeJobCompleted';
	const CodeType_CustomCode = 'CustomCode';
	const CodeType_ItemMarkedShipped = 'ItemMarkedShipped';
	const CodeType_ItemMarkedPaid = 'ItemMarkedPaid';
	const CodeType_EBPMyResponseDue = 'EBPMyResponseDue';
	const CodeType_EBPOtherPartyResponseDue = 'EBPOtherPartyResponseDue';
	const CodeType_EBPEscalatedCase = 'EBPEscalatedCase';
	const CodeType_EBPAppealedCase = 'EBPAppealedCase';
	const CodeType_EBPMyPaymentDue = 'EBPMyPaymentDue';
	const CodeType_EBPPaymentDone = 'EBPPaymentDone';
	const CodeType_EBPClosedAppeal = 'EBPClosedAppeal';
	const CodeType_EBPClosedCase = 'EBPClosedCase';
	const CodeType_MyMessagesHighPriorityMessage = 'MyMessagesHighPriorityMessage';
	const CodeType_MyMessagesHighPriorityMessageHeader = 'MyMessagesHighPriorityMessageHeader';
	const CodeType_EBPOnHoldCase = 'EBPOnHoldCase';
	const CodeType_ReadyToShip = 'ReadyToShip';
	const CodeType_ReadyForPayout = 'ReadyForPayout';
	const CodeType_BidItemEndingSoon = 'BidItemEndingSoon';
	const CodeType_ShoppingCartItemEndingSoon = 'ShoppingCartItemEndingSoon';
	const CodeType_ReturnCreated = 'ReturnCreated';
	const CodeType_ReturnWaitingForSellerInfo = 'ReturnWaitingForSellerInfo';
	const CodeType_ReturnSellerInfoOverdue = 'ReturnSellerInfoOverdue';
	const CodeType_ReturnShipped = 'ReturnShipped';
	const CodeType_ReturnDelivered = 'ReturnDelivered';
	const CodeType_ReturnRefundOverdue = 'ReturnRefundOverdue';
	const CodeType_ReturnClosed = 'ReturnClosed';
	const CodeType_ReturnEscalated = 'ReturnEscalated';
	const CodeType_BuyerCancelRequested = 'BuyerCancelRequested';
	const CodeType_UnmatchedPaymentReceived = 'UnmatchedPaymentReceived';
	const CodeType_RefundSuccess = 'RefundSuccess';
	const CodeType_RefundFailure = 'RefundFailure';
	const CodeType_PaymentReminder = 'PaymentReminder';
	const CodeType_EBNOrderPickedUp = 'EBNOrderPickedUp';
	const CodeType_EBNOrderCanceled = 'EBNOrderCanceled';
	const CodeType_M2MMessageStatusChange = 'M2MMessageStatusChange';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('NotificationEventTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_NotificationEventTypeCodeType = new NotificationEventTypeCodeType();
?>
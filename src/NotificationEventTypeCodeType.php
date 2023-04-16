<?php

namespace InTradeSys\eBay\trading;

/*
 * This class was generated from a WSDL file from March 29, 2023, 11:17 am.
 * Executed by globalsync.
 * Provided and maintained by:
 *
 *  InTradeSys GmbH
 *  Dillenburger Str. 75
 *  D-51105 Cologne
 *  ---
 *  https://www.intradesys.com
 *
 *
 * For paid support options ranging from on-demand,
 * best effort to 24/7 SLAs, please contact us anytime:
 *  ebay.api@InTradeSys.com
 *
 * For more information, visit:
 *  https://sdk.intradesys.com
 */


/**
 * Enumerated type that contains the complete list of platform notifications that
 * can be sent out to subscribed users, servers, or applications. Some notifications are
 * only sent to buyers or sellers, and some are sent to both buyers and sellers.
 **/
class NotificationEventTypeCodeType extends EbatNs_EnumType
{
    const TAG = 'NotificationEventTypeCodeType';
    const NAME = 'NotificationEventTypeCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This notification is for internal or future use.
     **/
    const CodeType_None = 'None';

    /**
     * This notification is sent to a subscribed buyer when another buyer has outbid
     * (placed a higher bid) the subscribed buyer on an auction listing, and
     * the subscribed buyer is no longer the current high bidder.
     * 
     * This notification is only applicable for auction listings.
     **/
    const CodeType_OutBid = 'OutBid';

    /**
     * This notification is sent to all subscribed bidders of an auction item and to
     * the subscribed seller of the auction item as soon as the auction listing ends
     * with or without a winning bidder. This notification will also be sent to
     * subscribed bidders and the subscribed seller if the auction ends as a
     * result of a buyer using the auction listing's Buy It Now feature.
     * 
     * This notification is only applicable for auction listings.
     **/
    const CodeType_EndOfAuction = 'EndOfAuction';

    /**
     * This notification is sent to the subscribed seller when the winning bidder
     * or buyer has paid for the auction or fixed-price item and completed the checkout process.
     * 
     * For multiple line item orders, an
     * AuctionCheckoutComplete
     * notification is only generated for one of the line items in the order.
     **/
    const CodeType_AuctionCheckoutComplete = 'AuctionCheckoutComplete';

    /**
     * This notification is sent to a subscribed seller when a buyer/winning bidder
     * is requesting a total price before paying for the item.
     * 
     * This notification is applicable for auction listings and for fixed-price listings that do not require
     * immediate payment.
     **/
    const CodeType_CheckoutBuyerRequestsTotal = 'CheckoutBuyerRequestsTotal';

    /**
     * This notification is sent to a subscribed buyer or seller when that buyer or seller has left Feedback for the
     * other party in the order, or has received Feedback from the other party in the order. Feedback is given at the
     * order line item level.
     **/
    const CodeType_Feedback = 'Feedback';

    /**
     * This notification is deprecated. Use the
     * Feedback
     * notification instead.
     **/
    const CodeType_FeedbackForSeller = 'FeedbackForSeller';

    /**
     * This notification is sent to a subscribed seller each time a buyer purchases an item in a single or
     * multiple-quantity, fixed-price listing.
     * 
     * This notification is only applicable for fixed-price listings.
     **/
    const CodeType_FixedPriceTransaction = 'FixedPriceTransaction';

    /**
     * This notification is sent to a subscribed buyer when that buyer is offered a Second Chance Offer from the seller,
     * after that buyer failed to win the original auction of the item.
     * 
     * If subscribed to by a buyer and when applicable, this notification will appear in the
     * GetItem
     * call response.
     **/
    const CodeType_SecondChanceOffer = 'SecondChanceOffer';

    /**
     * This notification is sent to a subscribed seller when an eBay user has used the Ask a Question feature on the
     * seller's active listing. An eBay user does not have to be an active bidder on an auction listing to ask a seller
     * a question.
     * 
     * If subscribed to by a seller and when applicable, this notification will appear in the
     * GetMemberMessages
     * call response.
     **/
    const CodeType_AskSellerQuestion = 'AskSellerQuestion';

    /**
     * This notification is sent to a subscribed seller each time one of the subscribed seller's items is listed or
     * relisted. This notification is also triggered when the Unpaid Item preferences relists an item for the seller.
     **/
    const CodeType_ItemListed = 'ItemListed';

    /**
     * This notification is sent to a subscribed seller when one of the subscribed seller's items is revised.
     * 
     * If subscribed to by a seller and when applicable, this notification will appear in the
     * GetItem
     * call response.
     **/
    const CodeType_ItemRevised = 'ItemRevised';

    /**
     * This notification is sent to a subscribed seller each time a buyer responds to a Cancel Transaction request.
     **/
    const CodeType_BuyerResponseDispute = 'BuyerResponseDispute';

    /**
     * This notification is sent to a subscribed buyer if a seller initiates a Cancel Transaction request.
     **/
    const CodeType_SellerOpenedDispute = 'SellerOpenedDispute';

    /**
     * This notification is sent to a subscribed buyer each time a seller responds to an Item Not Received or Return
     * case that the subscribed buyer has opened up against the seller.
     **/
    const CodeType_SellerRespondedToDispute = 'SellerRespondedToDispute';

    /**
     * This notification is sent to the subscribed buyer and seller if the seller closes a Cancel Transaction request.
     **/
    const CodeType_SellerClosedDispute = 'SellerClosedDispute';

    /**
     * This notification is sent to a subscribed seller if a potential buyer has made a Best Offer on a Best
     * Offer-enabled listing.
     * 
     * If subscribed to by a seller and when applicable, this notification will appear in the
     * GetBestOffers
     * call response.
     * 
     * <span class="tablenote">
     * Note:
     * The Best Offer feature can be set for auction listings on the US, Canada, UK, Germany, Australia, France,
     * Italy, and Spain marketplaces, but keep in mind that Best Offer and Buy It Now cannot be used simultaneously in a
     * listing. Also, once a qualifying bid is made on an auction listing, the Best Offer feature is disabled, and any
     * pending offer or counteroffers are no longer valid.
     * </span>
     **/
    const CodeType_BestOffer = 'BestOffer';

    /**
     * This notification is deprecated and can no longer be used.
     **/
    const CodeType_MyMessagesAlertHeader = 'MyMessagesAlertHeader';

    /**
     * This notification is deprecated. Use
     * MyMessagesHighPriorityMessage
     * instead.
     **/
    const CodeType_MyMessagesAlert = 'MyMessagesAlert';

    /**
     * This notification is sent to a subscribed buyer or seller when eBay sends a message to that user's InBox.
     * 
     * If subscribed to by a buyer or seller, and when applicable, this notification will appear in the
     * GetMyMessages
     * call response. For this notification to be returned in
     * GetMyMessages
     * , the
     * DetailLevel
     * value in the
     * GetMyMessages
     * request must be set to <code>ReturnHeaders</code>.
     * 
     * 
     * MyMessageseBayMessageHeader
     * and
     * MyMessageseBayMessage
     * cannot be subscribed
     * to at the same time or specified in the same call.
     **/
    const CodeType_MyMessageseBayMessageHeader = 'MyMessageseBayMessageHeader';

    /**
     * This notification is sent to a subscribed buyer or seller when eBay sends a message to that user's InBox.
     * 
     * If subscribed to by a buyer or seller, and when applicable, this notification will appear in the
     * GetMyMessages
     * call response. For this notification to be returned in
     * GetMyMessages
     * , the
     * DetailLevel
     * value in the
     * GetMyMessages
     * request must be set to <code>ReturnMessages</code>.
     * 
     * 
     * MyMessageseBayMessageHeader
     * and
     * MyMessageseBayMessage
     * cannot be subscribed
     * to at the same time or specified in the same call.
     **/
    const CodeType_MyMessageseBayMessage = 'MyMessageseBayMessage';

    /**
     * This notification is sent to a subscribed buyer or seller when another eBay user sends a message to that user's
     * InBox.
     * 
     * If subscribed to by a buyer or seller, and when applicable, this notification will appear in the
     * GetMyMessages
     * call response. For this notification to be returned in
     * GetMyMessages
     * , the
     * DetailLevel
     * value in the
     * GetMyMessages
     * request must be set to <code>ReturnHeaders</code>.
     * 
     * 
     * MyMessagesM2MMessageHeader
     * and
     * MyMessagesM2MMessage
     * cannot
     * be subscribed to at the same time or specified in the same call.
     **/
    const CodeType_MyMessagesM2MMessageHeader = 'MyMessagesM2MMessageHeader';

    /**
     * This notification is sent to a subscribed buyer or seller when another eBay user sends a message to that user's
     * InBox.
     * 
     * If subscribed to by a buyer or seller, and when applicable, this notification will appear in the
     * GetMyMessages
     * call response. For this notification to be returned in
     * GetMyMessages
     * , the
     * DetailLevel
     * value in the
     * GetMyMessages
     * request must be set to <code>ReturnMessages</code>.
     * 
     * 
     * MyMessagesM2MMessageHeader
     * and
     * MyMessagesM2MMessage
     * cannot
     * be subscribed to at the same time or specified in the same call.
     **/
    const CodeType_MyMessagesM2MMessage = 'MyMessagesM2MMessage';

    /**
     * This notification is sent to a subscribed seller when a buyer opens an Item Not Received case against that
     * seller.
     **/
    const CodeType_INRBuyerOpenedDispute = 'INRBuyerOpenedDispute';

    /**
     * This notification is sent to a subscribed seller when a buyer responds to an Item Not Received case opened by
     * that buyer.
     **/
    const CodeType_INRBuyerRespondedToDispute = 'INRBuyerRespondedToDispute';

    /**
     * This notification is sent to a subscribed seller when a buyer closes an Item Not Received case opened by that
     * buyer.
     **/
    const CodeType_INRBuyerClosedDispute = 'INRBuyerClosedDispute';

    /**
     * This notification is sent to a subscribed buyer when a seller responds to an Item Not Received case opened by the
     * buyer.
     **/
    const CodeType_INRSellerRespondedToDispute = 'INRSellerRespondedToDispute';

    /**
     * This notification is deprecated. Use
     * AuctionCheckoutComplete
     * instead.
     **/
    const CodeType_Checkout = 'Checkout';

    /**
     * This notification is sent to a subscribed buyer when a listing that the buyer is watching is ending soon. This
     * event has a
     * TimeLeft
     * property that defines the 'ending soon' threshold value.
     **/
    const CodeType_WatchedItemEndingSoon = 'WatchedItemEndingSoon';

    /**
     * This notification is sent to a subscribed buyer or seller when a listing ends. This notification can be triggered
     * by an
     * 
     * ItemWon
     * , an
     * ItemSold
     * , or an
     * ItemUnsold
     * event.
     **/
    const CodeType_ItemClosed = 'ItemClosed';

    /**
     * This notification is sent to a subscribed buyer or seller when a listing is administratively taken down by eBay.
     **/
    const CodeType_ItemSuspended = 'ItemSuspended';

    /**
     * This notification is sent to a subscribed seller when an eBay listing ends in a sale.
     **/
    const CodeType_ItemSold = 'ItemSold';

    /**
     * This notification is sent to a subscribed seller when the duration of an eBay listing has been extended.
     **/
    const CodeType_ItemExtended = 'ItemExtended';

    /**
     * This notification is sent to a subscribed buyer or seller when that user has modified their eBay user ID.
     **/
    const CodeType_UserIDChanged = 'UserIDChanged';

    /**
     * This notification is sent to a subscribed buyer or seller when that user has changed the email address associated
     * with the user account. This notification is available for Client Alerts and for SMS only. Not applicable to
     * Platform Notifications.
     **/
    const CodeType_EmailAddressChanged = 'EmailAddressChanged';

    /**
     * This notification is sent to a subscribed buyer or seller when that user has changed the password used for login.
     * This notification is available for Client Alerts and for SMS only. Not applicable to Platform Notifications.
     **/
    const CodeType_PasswordChanged = 'PasswordChanged';

    /**
     * This notification is sent to a subscribed buyer or seller when that user has changed the password hint. This
     * notification is available for Client Alerts and for SMS only. Not applicable to Platform Notifications.
     **/
    const CodeType_PasswordHintChanged = 'PasswordHintChanged';

    /**
     * This notification is sent to a subscribed seller when that seller has changed the payment methods used to pay
     * seller fees for the account. This notification is available for Client Alerts and for SMS only. Not applicable to
     * Platform Notifications.
     **/
    const CodeType_PaymentDetailChanged = 'PaymentDetailChanged';

    /**
     * This notification is sent to a subscribed buyer or seller when that eBay user's account is suspended. This
     * notification is available for Client Alerts and for SMS only. Not applicable to Platform Notifications.
     **/
    const CodeType_AccountSuspended = 'AccountSuspended';

    /**
     * An informational alert about account activity. A buyer or seller can subscribe to receive an account activity
     * summary via SMS or Client Alerts. The user can specify the period (time range) for the account summary and can
     * select how often the summary is to be sent. It is not triggered by an event but rather by an eBay daemon process
     * that monitors a schedule database.
     **/
    const CodeType_AccountSummary = 'AccountSummary';

    /**
     * This notification is deprecated.
     **/
    const CodeType_ThirdPartyCartCheckout = 'ThirdPartyCartCheckout';

    /**
     * This notification is sent to a subscribed seller when the seller has
     * revised a listing and added a nonprofit organization to receive a percentage (10 percent up to 100 percent)
     * of the proceeds.
     **/
    const CodeType_ItemRevisedAddCharity = 'ItemRevisedAddCharity';

    /**
     * This notification is sent to a subscribed buyer when that buyer adds an item to the Watch List.
     * 
     * If subscribed to by a buyer and when applicable, this notification will appear in the
     * GetItem
     * call response.
     **/
    const CodeType_ItemAddedToWatchList = 'ItemAddedToWatchList';

    /**
     * This notification is sent to a subscribed buyer when that buyer removes an item from the Watch List.
     * 
     * If subscribed to by a buyer and when applicable, this notification will appear in the
     * GetItem
     * call response.
     **/
    const CodeType_ItemRemovedFromWatchList = 'ItemRemovedFromWatchList';

    /**
     * This notification is deprecated.
     **/
    const CodeType_ItemAddedToBidGroup = 'ItemAddedToBidGroup';

    /**
     * This notification is deprecated.
     **/
    const CodeType_ItemRemovedFromBidGroup = 'ItemRemovedFromBidGroup';

    /**
     * This notification is sent to a subscribed buyer or seller when that user leaves feedback for an order partner.
     * 
     * If subscribed to by a buyer or seller, and when applicable, this notification will appear in the
     * GetFeedback
     * call response.
     **/
    const CodeType_FeedbackLeft = 'FeedbackLeft';

    /**
     * This notification is sent to a subscribed buyer or seller when that user receives feedback from an order partner.
     * 
     * If subscribed to by a buyer or seller, and when applicable, this notification will appear in the
     * GetFeedback
     * call response.
     **/
    const CodeType_FeedbackReceived = 'FeedbackReceived';

    /**
     * This notification is sent to a subscribed buyer or seller when that user's Feedback star has changed.
     * Sent to a subscribing third party when a user's Feedback star level changes.
     * 
     * If subscribed to by a buyer or seller, and when applicable, this notification will appear in the
     * GetUser
     * call response.
     **/
    const CodeType_FeedbackStarChanged = 'FeedbackStarChanged';

    /**
     * This notification is sent to a subscribed buyer when that buyer places a bid for an auction item.
     * 
     * If subscribed to by a buyer and when applicable, this notification will appear in the
     * GetItem
     * call response.
     **/
    const CodeType_BidPlaced = 'BidPlaced';

    /**
     * This notification is sent to a subscribed seller each time a prospective buyer places a bid for the seller's
     * auction item.
     * 
     * If subscribed to by a seller and when applicable, this notification will appear in the
     * GetItem
     * call response.
     **/
    const CodeType_BidReceived = 'BidReceived';

    /**
     * This notification is sent to a subscribed buyer if that buyer is the winner of an auction item.
     * 
     * If subscribed to by a buyer and when applicable, this notification will appear in the
     * GetItem
     * call response.
     **/
    const CodeType_ItemWon = 'ItemWon';

    /**
     * This notification is sent to a subscribed buyer if that buyer did not end up as the highest bidder for an auction
     * item.
     * 
     * If subscribed to by a buyer and when applicable, this notification will appear in the
     * GetItem
     * call response.
     **/
    const CodeType_ItemLost = 'ItemLost';

    /**
     * This notification is sent to a subscribed seller when an auction listing ends with no winning bidder or when a
     * fixed-price listing ends with no sale(s).
     * 
     * If subscribed to by a seller and when applicable, this notification will appear in the
     * GetItem
     * call response.
     **/
    const CodeType_ItemUnsold = 'ItemUnsold';

    /**
     * This notification is sent to a subscribed buyer when a seller makes a counter offer to the buyer's Best Offer on
     * an item.
     * 
     * If subscribed to by a buyer and when applicable, this notification will appear in the
     * GetBestOffers
     * call response.
     **/
    const CodeType_CounterOfferReceived = 'CounterOfferReceived';

    /**
     * This notification is sent to a subscribed buyer when a seller declines the buyer's Best Offer on an item.
     * 
     * If subscribed to by a buyer and when applicable, this notification will appear in the
     * GetBestOffers
     * call response.
     **/
    const CodeType_BestOfferDeclined = 'BestOfferDeclined';

    /**
     * This notification is sent to a subscribed seller each time a prospective buyer places a Best Offer on an item.
     **/
    const CodeType_BestOfferPlaced = 'BestOfferPlaced';

    /**
     * This notification is deprecated. Use
     * ItemAddedToWatchList
     * notification instead.
     **/
    const CodeType_AddToWatchList = 'AddToWatchList';

    /**
     * This notification is deprecated. Use
     * BidPlaced
     * notification instead.
     **/
    const CodeType_PlaceOffer = 'PlaceOffer';

    /**
     * This notification is deprecated. Use
     * ItemRemovedFromWatchList
     * notification instead. ItemRemovedFromWatchList
     **/
    const CodeType_RemoveFromWatchList = 'RemoveFromWatchList';

    /**
     * This notification is deprecated.
     **/
    const CodeType_AddToBidGroup = 'AddToBidGroup';

    /**
     * This notification is deprecated.
     **/
    const CodeType_RemoveFromBidGroup = 'RemoveFromBidGroup';

    /**
     * This notification is deprecated.
     **/
    const CodeType_ItemsCanceled = 'ItemsCanceled';

    /**
     * This notification is sent to a subscribed buyer or seller if that user's authentication token is revoked.
     * 
     * If subscribed to by a buyer or seller, and when applicable, this notification will appear in the
     * GetTokenStatus
     * call response.
     **/
    const CodeType_TokenRevocation = 'TokenRevocation';

    /**
     * This notification is sent to a subscribed seller when that seller's Bulk Data Exchange job completes.
     **/
    const CodeType_BulkDataExchangeJobCompleted = 'BulkDataExchangeJobCompleted';

    /**
     * Reserved for future use.
     **/
    const CodeType_CustomCode = 'CustomCode';

    /**
     * This notification is sent to a subscribed buyer and seller when that seller has marked an item as 'shipped'.
     **/
    const CodeType_ItemMarkedShipped = 'ItemMarkedShipped';

    /**
     * This notification is sent to a subscribed buyer and seller when that seller has marked an order as 'paid'.
     **/
    const CodeType_ItemMarkedPaid = 'ItemMarkedPaid';

    /**
     * This notification is sent to a subscribing buyer or seller when a response to the eBay Money Back Guarantee case
     * is due from that user. When an eBay Money Back Guarantee case is opened, this notification is only sent to the
     * seller involved in the case and not the buyer.
     **/
    const CodeType_EBPMyResponseDue = 'EBPMyResponseDue';

    /**
     * This notification is sent to the subscribed buyer or seller when a response to the eBay Money Back Guarantee case
     * is due from the other party in the case.
     **/
    const CodeType_EBPOtherPartyResponseDue = 'EBPOtherPartyResponseDue';

    /**
     * This notification is sent to the subscribed buyer or seller when an eBay Money Back Guarantee case is escalated
     * to eBay customer support.
     **/
    const CodeType_EBPEscalatedCase = 'EBPEscalatedCase';

    /**
     * This notification is sent to the subscribed buyer or seller when the decision of an eBay Money Back Guarantee
     * case is appealed.
     **/
    const CodeType_EBPAppealedCase = 'EBPAppealedCase';

    /**
     * This notification is sent to the subscribed seller when payment (to eBay or buyer) related to the outcome of an
     * eBay Money Back Guarantee case is due.
     **/
    const CodeType_EBPMyPaymentDue = 'EBPMyPaymentDue';

    /**
     * This notification is sent to the subscribed seller when payment (to eBay or buyer) related to the outcome of an
     * eBay Money Back Guarantee case is processed.
     **/
    const CodeType_EBPPaymentDone = 'EBPPaymentDone';

    /**
     * This notification is sent to the subscribed buyer or seller when an appeal of an eBay Money Back Guarantee case
     * decision has been closed.
     **/
    const CodeType_EBPClosedAppeal = 'EBPClosedAppeal';

    /**
     * This notification is sent to the subscribed buyer or seller when an eBay Money Back Guarantee case has been
     * closed.
     **/
    const CodeType_EBPClosedCase = 'EBPClosedCase';

    /**
     * This notification is sent to a subscribed buyer or seller when that user receives a high-priority message in
     * InBox.
     * 
     * If subscribed to by a buyer or seller, and when applicable, this notification will appear in the
     * GetMyMessages
     * call response. For this notification to be returned in
     * GetMyMessages
     * , the
     * DetailLevel
     * value in the
     * GetMyMessages
     * request must be set to <code>ReturnMessages</code>.
     * 
     * 
     * MyMessagesHighPriorityMessage
     * ,
     * MyMessagesM2MMessage
     * , and
     * MyMessagesHighPriorityMessageHeader
     * cannot
     * be subscribed to at the same time or specified in the same call.
     **/
    const CodeType_MyMessagesHighPriorityMessage = 'MyMessagesHighPriorityMessage';

    /**
     * This notification is sent to a subscribed buyer or seller when that user receives a high-priority message in
     * InBox.
     * 
     * If subscribed to by a buyer or seller, and when applicable, this notification will appear in the
     * GetMyMessages
     * call response. For this notification to be returned in
     * GetMyMessages
     * , the
     * DetailLevel
     * value in the
     * GetMyMessages
     * request must be set to <code>ReturnHeaders</code>.
     * 
     * 
     * MyMessagesHighPriorityMessage
     * ,
     * MyMessagesM2MMessage
     * , and
     * MyMessagesHighPriorityMessageHeader
     * cannot
     * be subscribed to at the same time or specified in the same call.
     **/
    const CodeType_MyMessagesHighPriorityMessageHeader = 'MyMessagesHighPriorityMessageHeader';

    /**
     * This notification is sent to a subscribed buyer or seller when an eBay Money Back Guarantee case has been put on
     * hold by eBay customer support.
     **/
    const CodeType_EBPOnHoldCase = 'EBPOnHoldCase';

    /**
     * This notification is sent to a subscribed seller after the buyer's payment on an order has cleared.
     **/
    const CodeType_ReadyToShip = 'ReadyToShip';

    /**
     * This notification is sent to a subscribed seller when eBay is prepared to send the seller's funds for an order
     * that was previously placed on hold.
     **/
    const CodeType_ReadyForPayout = 'ReadyForPayout';

    /**
     * This notification is sent to a subscribed buyer when the listing of the auction item where the buyer has an
     * active bid is about
     * to end. This event has a
     * TimeLeft
     * property that defines the 'ending soon' threshold value.
     **/
    const CodeType_BidItemEndingSoon = 'BidItemEndingSoon';

    /**
     * This notification is sent to a subscribed buyer when an item in the buyer's shopping cart is about
     * to end. This event has a
     * TimeLeft
     * property that defines the 'ending soon' threshold value.
     **/
    const CodeType_ShoppingCartItemEndingSoon = 'ShoppingCartItemEndingSoon';

    /**
     * This notification is sent to a subscribed buyer or seller when a return request involving those users is created.
     **/
    const CodeType_ReturnCreated = 'ReturnCreated';

    /**
     * This notification is sent to a subscribed seller when a return request is waiting for information from the
     * seller, like a Return Merchandise Authorization (RMA) number or a correct return address.
     **/
    const CodeType_ReturnWaitingForSellerInfo = 'ReturnWaitingForSellerInfo';

    /**
     * This notification is sent to a subscribed buyer or seller when information from the seller (e.g. a Return
     * Merchandise Authorization number) is overdue.
     **/
    const CodeType_ReturnSellerInfoOverdue = 'ReturnSellerInfoOverdue';

    /**
     * This notification is sent to a subscribed buyer or seller when the buyer has shipped a return item back to the
     * seller.
     **/
    const CodeType_ReturnShipped = 'ReturnShipped';

    /**
     * This notification is sent to a subscribed buyer or seller when a return item is received by the seller.
     **/
    const CodeType_ReturnDelivered = 'ReturnDelivered';

    /**
     * This notification is sent to a subscribed buyer or seller when a refund to the buyer is overdue on a return.
     **/
    const CodeType_ReturnRefundOverdue = 'ReturnRefundOverdue';

    /**
     * This notification is sent to a subscribed buyer or seller when a return request is closed.
     **/
    const CodeType_ReturnClosed = 'ReturnClosed';

    /**
     * This notification is sent to a subscribed buyer or seller when a return request is escalated into a eBay Money
     * Back Guarantee case.
     **/
    const CodeType_ReturnEscalated = 'ReturnEscalated';

    /**
     * This notification is sent to a subscribed seller when a buyer has requested an order cancellation.
     **/
    const CodeType_BuyerCancelRequested = 'BuyerCancelRequested';

    /**
     * This notification is no longer applicable. Do not use.
     **/
    const CodeType_UnmatchedPaymentReceived = 'UnmatchedPaymentReceived';

    /**
     * This notification is sent to a subscribed seller when a refund to the buyer has been successfully processed.
     **/
    const CodeType_RefundSuccess = 'RefundSuccess';

    /**
     * This notification is sent to a subscribed seller when a refund to the buyer has failed.
     **/
    const CodeType_RefundFailure = 'RefundFailure';

    /**
     * This notification is sent to a subscribed seller when the buyer has opened up an Item Not Received inquiry
     * against an order line item.
     **/
    const CodeType_OrderInquiryOpened = 'OrderInquiryOpened';

    /**
     * This notification is sent to a subscribed seller alerting the seller that the buyer will soon be eligible to
     * escalate an Item Not Received inquiry into an eBay Money Back Guarantee case.
     **/
    const CodeType_OrderInquiryReminderForEscalation = 'OrderInquiryReminderForEscalation';

    /**
     * This notification is sent to a subscribed seller alerting the seller that he/she should provide shipment tracking
     * information to the buyer in order to expedite the closure of an Item Not Received inquiry, and to avoid the
     * possibility that the buyer will escalate the inquiry into an eBay Money Back Guarantee case.
     **/
    const CodeType_OrderInquiryProvideShipmentInformation = 'OrderInquiryProvideShipmentInformation';

    /**
     * This notification is sent to a subscribed seller when an Item Not Received inquiry against an order line item has
     * closed.
     **/
    const CodeType_OrderInquiryClosed = 'OrderInquiryClosed';

    /**
     * This notification is sent to a subscribed seller when an Item Not Received inquiry against an order line item has
     * been escalated to an eBay Money Back Guarantee case.
     **/
    const CodeType_OrderInquiryEscalatedToCase = 'OrderInquiryEscalatedToCase';

    /**
     * This notification is sent to a subscribed buyer when an In-Store Pickup or Click and Collect order is ready to be
     * picked up at the merchant's store.
     **/
    const CodeType_ItemReadyForPickup = 'ItemReadyForPickup';

    /**
     * This notification is sent to a subscribed seller when the quantity of a multiple-quantity, Good 'Til Cancelled,
     * fixed-price listing has reached '0'. This notification will only be sent if the seller has the out-of-stock
     * feature turned on in My eBay Preferences.
     **/
    const CodeType_ItemOutOfStock = 'ItemOutOfStock';

    /**
     * This notification is sent to a subscribed seller if an eBay courier was unable to deliver an eBay Scheduled
     * Delivery order to a buyer. This notification is only applicable for eBay Scheduled Delivery orders, which are
     * only available in the London (UK) area.
     **/
    const CodeType_BuyerNoShow = 'BuyerNoShow';

    /**
     * This notification is no longer applicable.
     **/
    const CodeType_WebnextMobilePhotoSync = 'WebnextMobilePhotoSync';

    /**
     * This notification is sent to a subscribed buyer if payment is still due for an order.
     **/
    const CodeType_PaymentReminder = 'PaymentReminder';

    /**
     * This notification is sent to a subscribed seller if an eBay courier has picked up an eBay On Demand Delivery
     * order from a store for delivery to a buyer. This notification is only applicable for eBay On Demand Delivery
     * orders, which are only available in the London (UK) area.
     **/
    const CodeType_EBNOrderPickedUp = 'EBNOrderPickedUp';

    /**
     * This notification is sent to a subscribed seller if an eBay On Demand Delivery order has been cancelled. This
     * notification is only applicable for eBay On Demand Delivery orders, which are only available in the London (UK)
     * area.
     **/
    const CodeType_EBNOrderCanceled = 'EBNOrderCanceled';

    /**
     * This notification is sent to a subscribed buyer or seller if the status of a member-to-member message has
     * changed.
     **/
    const CodeType_M2MMessageStatusChange = 'M2MMessageStatusChange';
    
    /**
     * @var string|null
     */
    protected $_value = null;


    /**
     * @param string|null $value
     */
    public function __construct($value = null)
    {
        $this->setTypeValue($value);
    }

    /**
     * @return NotificationEventTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param NotificationEventTypeCodeType|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $const = 'self::CodeType_' . $value;
        $this->_value = $value !== null && defined($const) ? constant($const) : null;
    }

    /**
     * @return bool
     */
    public function isNone()
    {
        return $this->_value === self::CodeType_None;
    }

    /**
     * @return bool
     */
    public function isOutBid()
    {
        return $this->_value === self::CodeType_OutBid;
    }

    /**
     * @return bool
     */
    public function isEndOfAuction()
    {
        return $this->_value === self::CodeType_EndOfAuction;
    }

    /**
     * @return bool
     */
    public function isAuctionCheckoutComplete()
    {
        return $this->_value === self::CodeType_AuctionCheckoutComplete;
    }

    /**
     * @return bool
     */
    public function isCheckoutBuyerRequestsTotal()
    {
        return $this->_value === self::CodeType_CheckoutBuyerRequestsTotal;
    }

    /**
     * @return bool
     */
    public function isFeedback()
    {
        return $this->_value === self::CodeType_Feedback;
    }

    /**
     * @return bool
     */
    public function isFeedbackForSeller()
    {
        return $this->_value === self::CodeType_FeedbackForSeller;
    }

    /**
     * @return bool
     */
    public function isFixedPriceTransaction()
    {
        return $this->_value === self::CodeType_FixedPriceTransaction;
    }

    /**
     * @return bool
     */
    public function isSecondChanceOffer()
    {
        return $this->_value === self::CodeType_SecondChanceOffer;
    }

    /**
     * @return bool
     */
    public function isAskSellerQuestion()
    {
        return $this->_value === self::CodeType_AskSellerQuestion;
    }

    /**
     * @return bool
     */
    public function isItemListed()
    {
        return $this->_value === self::CodeType_ItemListed;
    }

    /**
     * @return bool
     */
    public function isItemRevised()
    {
        return $this->_value === self::CodeType_ItemRevised;
    }

    /**
     * @return bool
     */
    public function isBuyerResponseDispute()
    {
        return $this->_value === self::CodeType_BuyerResponseDispute;
    }

    /**
     * @return bool
     */
    public function isSellerOpenedDispute()
    {
        return $this->_value === self::CodeType_SellerOpenedDispute;
    }

    /**
     * @return bool
     */
    public function isSellerRespondedToDispute()
    {
        return $this->_value === self::CodeType_SellerRespondedToDispute;
    }

    /**
     * @return bool
     */
    public function isSellerClosedDispute()
    {
        return $this->_value === self::CodeType_SellerClosedDispute;
    }

    /**
     * @return bool
     */
    public function isBestOffer()
    {
        return $this->_value === self::CodeType_BestOffer;
    }

    /**
     * @return bool
     */
    public function isMyMessagesAlertHeader()
    {
        return $this->_value === self::CodeType_MyMessagesAlertHeader;
    }

    /**
     * @return bool
     */
    public function isMyMessagesAlert()
    {
        return $this->_value === self::CodeType_MyMessagesAlert;
    }

    /**
     * @return bool
     */
    public function isMyMessageseBayMessageHeader()
    {
        return $this->_value === self::CodeType_MyMessageseBayMessageHeader;
    }

    /**
     * @return bool
     */
    public function isMyMessageseBayMessage()
    {
        return $this->_value === self::CodeType_MyMessageseBayMessage;
    }

    /**
     * @return bool
     */
    public function isMyMessagesM2MMessageHeader()
    {
        return $this->_value === self::CodeType_MyMessagesM2MMessageHeader;
    }

    /**
     * @return bool
     */
    public function isMyMessagesM2MMessage()
    {
        return $this->_value === self::CodeType_MyMessagesM2MMessage;
    }

    /**
     * @return bool
     */
    public function isINRBuyerOpenedDispute()
    {
        return $this->_value === self::CodeType_INRBuyerOpenedDispute;
    }

    /**
     * @return bool
     */
    public function isINRBuyerRespondedToDispute()
    {
        return $this->_value === self::CodeType_INRBuyerRespondedToDispute;
    }

    /**
     * @return bool
     */
    public function isINRBuyerClosedDispute()
    {
        return $this->_value === self::CodeType_INRBuyerClosedDispute;
    }

    /**
     * @return bool
     */
    public function isINRSellerRespondedToDispute()
    {
        return $this->_value === self::CodeType_INRSellerRespondedToDispute;
    }

    /**
     * @return bool
     */
    public function isCheckout()
    {
        return $this->_value === self::CodeType_Checkout;
    }

    /**
     * @return bool
     */
    public function isWatchedItemEndingSoon()
    {
        return $this->_value === self::CodeType_WatchedItemEndingSoon;
    }

    /**
     * @return bool
     */
    public function isItemClosed()
    {
        return $this->_value === self::CodeType_ItemClosed;
    }

    /**
     * @return bool
     */
    public function isItemSuspended()
    {
        return $this->_value === self::CodeType_ItemSuspended;
    }

    /**
     * @return bool
     */
    public function isItemSold()
    {
        return $this->_value === self::CodeType_ItemSold;
    }

    /**
     * @return bool
     */
    public function isItemExtended()
    {
        return $this->_value === self::CodeType_ItemExtended;
    }

    /**
     * @return bool
     */
    public function isUserIDChanged()
    {
        return $this->_value === self::CodeType_UserIDChanged;
    }

    /**
     * @return bool
     */
    public function isEmailAddressChanged()
    {
        return $this->_value === self::CodeType_EmailAddressChanged;
    }

    /**
     * @return bool
     */
    public function isPasswordChanged()
    {
        return $this->_value === self::CodeType_PasswordChanged;
    }

    /**
     * @return bool
     */
    public function isPasswordHintChanged()
    {
        return $this->_value === self::CodeType_PasswordHintChanged;
    }

    /**
     * @return bool
     */
    public function isPaymentDetailChanged()
    {
        return $this->_value === self::CodeType_PaymentDetailChanged;
    }

    /**
     * @return bool
     */
    public function isAccountSuspended()
    {
        return $this->_value === self::CodeType_AccountSuspended;
    }

    /**
     * @return bool
     */
    public function isAccountSummary()
    {
        return $this->_value === self::CodeType_AccountSummary;
    }

    /**
     * @return bool
     */
    public function isThirdPartyCartCheckout()
    {
        return $this->_value === self::CodeType_ThirdPartyCartCheckout;
    }

    /**
     * @return bool
     */
    public function isItemRevisedAddCharity()
    {
        return $this->_value === self::CodeType_ItemRevisedAddCharity;
    }

    /**
     * @return bool
     */
    public function isItemAddedToWatchList()
    {
        return $this->_value === self::CodeType_ItemAddedToWatchList;
    }

    /**
     * @return bool
     */
    public function isItemRemovedFromWatchList()
    {
        return $this->_value === self::CodeType_ItemRemovedFromWatchList;
    }

    /**
     * @return bool
     */
    public function isItemAddedToBidGroup()
    {
        return $this->_value === self::CodeType_ItemAddedToBidGroup;
    }

    /**
     * @return bool
     */
    public function isItemRemovedFromBidGroup()
    {
        return $this->_value === self::CodeType_ItemRemovedFromBidGroup;
    }

    /**
     * @return bool
     */
    public function isFeedbackLeft()
    {
        return $this->_value === self::CodeType_FeedbackLeft;
    }

    /**
     * @return bool
     */
    public function isFeedbackReceived()
    {
        return $this->_value === self::CodeType_FeedbackReceived;
    }

    /**
     * @return bool
     */
    public function isFeedbackStarChanged()
    {
        return $this->_value === self::CodeType_FeedbackStarChanged;
    }

    /**
     * @return bool
     */
    public function isBidPlaced()
    {
        return $this->_value === self::CodeType_BidPlaced;
    }

    /**
     * @return bool
     */
    public function isBidReceived()
    {
        return $this->_value === self::CodeType_BidReceived;
    }

    /**
     * @return bool
     */
    public function isItemWon()
    {
        return $this->_value === self::CodeType_ItemWon;
    }

    /**
     * @return bool
     */
    public function isItemLost()
    {
        return $this->_value === self::CodeType_ItemLost;
    }

    /**
     * @return bool
     */
    public function isItemUnsold()
    {
        return $this->_value === self::CodeType_ItemUnsold;
    }

    /**
     * @return bool
     */
    public function isCounterOfferReceived()
    {
        return $this->_value === self::CodeType_CounterOfferReceived;
    }

    /**
     * @return bool
     */
    public function isBestOfferDeclined()
    {
        return $this->_value === self::CodeType_BestOfferDeclined;
    }

    /**
     * @return bool
     */
    public function isBestOfferPlaced()
    {
        return $this->_value === self::CodeType_BestOfferPlaced;
    }

    /**
     * @return bool
     */
    public function isAddToWatchList()
    {
        return $this->_value === self::CodeType_AddToWatchList;
    }

    /**
     * @return bool
     */
    public function isPlaceOffer()
    {
        return $this->_value === self::CodeType_PlaceOffer;
    }

    /**
     * @return bool
     */
    public function isRemoveFromWatchList()
    {
        return $this->_value === self::CodeType_RemoveFromWatchList;
    }

    /**
     * @return bool
     */
    public function isAddToBidGroup()
    {
        return $this->_value === self::CodeType_AddToBidGroup;
    }

    /**
     * @return bool
     */
    public function isRemoveFromBidGroup()
    {
        return $this->_value === self::CodeType_RemoveFromBidGroup;
    }

    /**
     * @return bool
     */
    public function isItemsCanceled()
    {
        return $this->_value === self::CodeType_ItemsCanceled;
    }

    /**
     * @return bool
     */
    public function isTokenRevocation()
    {
        return $this->_value === self::CodeType_TokenRevocation;
    }

    /**
     * @return bool
     */
    public function isBulkDataExchangeJobCompleted()
    {
        return $this->_value === self::CodeType_BulkDataExchangeJobCompleted;
    }

    /**
     * @return bool
     */
    public function isCustomCode()
    {
        return $this->_value === self::CodeType_CustomCode;
    }

    /**
     * @return bool
     */
    public function isItemMarkedShipped()
    {
        return $this->_value === self::CodeType_ItemMarkedShipped;
    }

    /**
     * @return bool
     */
    public function isItemMarkedPaid()
    {
        return $this->_value === self::CodeType_ItemMarkedPaid;
    }

    /**
     * @return bool
     */
    public function isEBPMyResponseDue()
    {
        return $this->_value === self::CodeType_EBPMyResponseDue;
    }

    /**
     * @return bool
     */
    public function isEBPOtherPartyResponseDue()
    {
        return $this->_value === self::CodeType_EBPOtherPartyResponseDue;
    }

    /**
     * @return bool
     */
    public function isEBPEscalatedCase()
    {
        return $this->_value === self::CodeType_EBPEscalatedCase;
    }

    /**
     * @return bool
     */
    public function isEBPAppealedCase()
    {
        return $this->_value === self::CodeType_EBPAppealedCase;
    }

    /**
     * @return bool
     */
    public function isEBPMyPaymentDue()
    {
        return $this->_value === self::CodeType_EBPMyPaymentDue;
    }

    /**
     * @return bool
     */
    public function isEBPPaymentDone()
    {
        return $this->_value === self::CodeType_EBPPaymentDone;
    }

    /**
     * @return bool
     */
    public function isEBPClosedAppeal()
    {
        return $this->_value === self::CodeType_EBPClosedAppeal;
    }

    /**
     * @return bool
     */
    public function isEBPClosedCase()
    {
        return $this->_value === self::CodeType_EBPClosedCase;
    }

    /**
     * @return bool
     */
    public function isMyMessagesHighPriorityMessage()
    {
        return $this->_value === self::CodeType_MyMessagesHighPriorityMessage;
    }

    /**
     * @return bool
     */
    public function isMyMessagesHighPriorityMessageHeader()
    {
        return $this->_value === self::CodeType_MyMessagesHighPriorityMessageHeader;
    }

    /**
     * @return bool
     */
    public function isEBPOnHoldCase()
    {
        return $this->_value === self::CodeType_EBPOnHoldCase;
    }

    /**
     * @return bool
     */
    public function isReadyToShip()
    {
        return $this->_value === self::CodeType_ReadyToShip;
    }

    /**
     * @return bool
     */
    public function isReadyForPayout()
    {
        return $this->_value === self::CodeType_ReadyForPayout;
    }

    /**
     * @return bool
     */
    public function isBidItemEndingSoon()
    {
        return $this->_value === self::CodeType_BidItemEndingSoon;
    }

    /**
     * @return bool
     */
    public function isShoppingCartItemEndingSoon()
    {
        return $this->_value === self::CodeType_ShoppingCartItemEndingSoon;
    }

    /**
     * @return bool
     */
    public function isReturnCreated()
    {
        return $this->_value === self::CodeType_ReturnCreated;
    }

    /**
     * @return bool
     */
    public function isReturnWaitingForSellerInfo()
    {
        return $this->_value === self::CodeType_ReturnWaitingForSellerInfo;
    }

    /**
     * @return bool
     */
    public function isReturnSellerInfoOverdue()
    {
        return $this->_value === self::CodeType_ReturnSellerInfoOverdue;
    }

    /**
     * @return bool
     */
    public function isReturnShipped()
    {
        return $this->_value === self::CodeType_ReturnShipped;
    }

    /**
     * @return bool
     */
    public function isReturnDelivered()
    {
        return $this->_value === self::CodeType_ReturnDelivered;
    }

    /**
     * @return bool
     */
    public function isReturnRefundOverdue()
    {
        return $this->_value === self::CodeType_ReturnRefundOverdue;
    }

    /**
     * @return bool
     */
    public function isReturnClosed()
    {
        return $this->_value === self::CodeType_ReturnClosed;
    }

    /**
     * @return bool
     */
    public function isReturnEscalated()
    {
        return $this->_value === self::CodeType_ReturnEscalated;
    }

    /**
     * @return bool
     */
    public function isBuyerCancelRequested()
    {
        return $this->_value === self::CodeType_BuyerCancelRequested;
    }

    /**
     * @return bool
     */
    public function isUnmatchedPaymentReceived()
    {
        return $this->_value === self::CodeType_UnmatchedPaymentReceived;
    }

    /**
     * @return bool
     */
    public function isRefundSuccess()
    {
        return $this->_value === self::CodeType_RefundSuccess;
    }

    /**
     * @return bool
     */
    public function isRefundFailure()
    {
        return $this->_value === self::CodeType_RefundFailure;
    }

    /**
     * @return bool
     */
    public function isOrderInquiryOpened()
    {
        return $this->_value === self::CodeType_OrderInquiryOpened;
    }

    /**
     * @return bool
     */
    public function isOrderInquiryReminderForEscalation()
    {
        return $this->_value === self::CodeType_OrderInquiryReminderForEscalation;
    }

    /**
     * @return bool
     */
    public function isOrderInquiryProvideShipmentInformation()
    {
        return $this->_value === self::CodeType_OrderInquiryProvideShipmentInformation;
    }

    /**
     * @return bool
     */
    public function isOrderInquiryClosed()
    {
        return $this->_value === self::CodeType_OrderInquiryClosed;
    }

    /**
     * @return bool
     */
    public function isOrderInquiryEscalatedToCase()
    {
        return $this->_value === self::CodeType_OrderInquiryEscalatedToCase;
    }

    /**
     * @return bool
     */
    public function isItemReadyForPickup()
    {
        return $this->_value === self::CodeType_ItemReadyForPickup;
    }

    /**
     * @return bool
     */
    public function isItemOutOfStock()
    {
        return $this->_value === self::CodeType_ItemOutOfStock;
    }

    /**
     * @return bool
     */
    public function isBuyerNoShow()
    {
        return $this->_value === self::CodeType_BuyerNoShow;
    }

    /**
     * @return bool
     */
    public function isWebnextMobilePhotoSync()
    {
        return $this->_value === self::CodeType_WebnextMobilePhotoSync;
    }

    /**
     * @return bool
     */
    public function isPaymentReminder()
    {
        return $this->_value === self::CodeType_PaymentReminder;
    }

    /**
     * @return bool
     */
    public function isEBNOrderPickedUp()
    {
        return $this->_value === self::CodeType_EBNOrderPickedUp;
    }

    /**
     * @return bool
     */
    public function isEBNOrderCanceled()
    {
        return $this->_value === self::CodeType_EBNOrderCanceled;
    }

    /**
     * @return bool
     */
    public function isM2MMessageStatusChange()
    {
        return $this->_value === self::CodeType_M2MMessageStatusChange;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([], parent::NAME);
        self::assignAttributes([]);
    }

}

NotificationEventTypeCodeType::_register();

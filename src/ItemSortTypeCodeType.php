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
 * This enumerated type contains the possible values that can be used when sorting results in the
 * GetItemsAwaitingFeedback
 * ,
 * GetMyeBayBuying
 * , and
 * GetMyeBaySelling
 * calls. Assume that each of sort values can be used in any of the three calls above unless it is specifically
 * called out that a certain enumeration value will not work/is not applicable to a call.
 **/
class ItemSortTypeCodeType extends EbatNs_EnumType
{
    const TAG = 'ItemSortTypeCodeType';
    const NAME = 'ItemSortTypeCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This enumeration value is used to sort listings and orders according to Item ID value in ascending order.
     **/
    const CodeType_ItemID = 'ItemID';

    /**
     * This enumeration value is used to sort listings according to item price value in ascending order.
     * 
     * This enumeration value is not applicable to the
     * GetItemsAwaitingFeedback
     * call.
     **/
    const CodeType_Price = 'Price';

    /**
     * This enumeration value is used to sort listings or orders according to the starting price value in ascending
     * order.
     * 
     * This enumeration value is not applicable to the
     * GetItemsAwaitingFeedback
     * call.
     **/
    const CodeType_StartPrice = 'StartPrice';

    /**
     * This enumeration value is used to sort listings or orders according to listing title in ascending (alphabetical)
     * order.
     **/
    const CodeType_Title = 'Title';

    /**
     * This enumeration value is used to sort auction listings according to the number of bids received in ascending
     * order. This enumeration value is only applicable to auction listings, and is not applicable to the
     * GetItemsAwaitingFeedback
     * call.
     **/
    const CodeType_BidCount = 'BidCount';

    /**
     * This enumeration value is used to sort fixed-price listings and orders according to item quantity in ascending
     * order. This enumeration value is only applicable to fixed-price listings, and is not applicable to the
     * GetItemsAwaitingFeedback
     * call.
     **/
    const CodeType_Quantity = 'Quantity';

    /**
     * This enumeration value is used to sort listings and orders according to start time in ascending order.
     * 
     * This enumeration value is not applicable to the
     * GetItemsAwaitingFeedback
     * call.
     **/
    const CodeType_StartTime = 'StartTime';

    /**
     * This enumeration value is used to sort listings and orders according to end time in ascending order.
     **/
    const CodeType_EndTime = 'EndTime';

    /**
     * This enumeration value is used to sort listings and orders according to the seller's user ID in ascending
     * (alphabetical) order.
     * 
     * This enumeration value is not applicable to the
     * GetItemsAwaitingFeedback
     * or
     * GetMyeBaySelling
     * calls.
     **/
    const CodeType_SellerUserID = 'SellerUserID';

    /**
     * This enumeration value is used to sort active listings and orders according to the time left before listing ends
     * (in ascending order).
     * 
     * This enumeration value is not applicable to the
     * GetItemsAwaitingFeedback
     * call.
     **/
    const CodeType_TimeLeft = 'TimeLeft';

    /**
     * This enumeration value is used by the
     * GetMyeBaySelling
     * call to sort listings according to the listing duration in ascending order.
     * 
     * This enumeration value is not applicable to the
     * GetItemsAwaitingFeedback
     * or
     * GetMyeBayBuying
     * calls.
     **/
    const CodeType_ListingDuration = 'ListingDuration';

    /**
     * This enumeration value is used to sort listings and orders according to the listing type in ascending order.
     * 
     * This enumeration value is not applicable to the
     * GetItemsAwaitingFeedback
     * call.
     **/
    const CodeType_ListingType = 'ListingType';

    /**
     * This enumeration value is used to sort listings and orders according to the current/final price in ascending
     * order.
     * 
     * This enumeration value is not applicable to the
     * GetItemsAwaitingFeedback
     * call.
     **/
    const CodeType_CurrentPrice = 'CurrentPrice';

    /**
     * This enumeration value is used to sort auction listings and orders according to the reserve price in ascending
     * order. This enumeration value is only applicable when a seller wants to retrieve information on their own auction
     * listings that have reserve prices set on them. This enumeration is not applicable to the
     * GetItemsAwaitingFeedback
     * or
     * GetMyeBayBuying
     * calls.
     **/
    const CodeType_ReservePrice = 'ReservePrice';

    /**
     * This enumeration value is used by a buyer to sort auction listings and orders according to the maximum bid price
     * that they placed on an auction listing in ascending order. This enumeration value is only applicable to auction
     * listings, and is not applicable to the
     * GetItemsAwaitingFeedback
     * or
     * GetMyeBaySelling
     * calls.
     **/
    const CodeType_MaxBid = 'MaxBid';

    /**
     * This enumeration value is used to sort auction listings according to the number of unique bidders in ascending
     * order. This enumeration value is only applicable to auction listings, and is not applicable to the
     * GetItemsAwaitingFeedback
     * or
     * GetMyeBayBuying
     * calls.
     **/
    const CodeType_BidderCount = 'BidderCount';

    /**
     * This enumeration value is used to sort auction listings according to the user ID of the highest bidder in
     * ascending order. This enumeration value is only applicable to auction listings, and is not applicable to the
     * GetItemsAwaitingFeedback
     * or
     * GetMyeBayBuying
     * calls.
     **/
    const CodeType_HighBidderUserID = 'HighBidderUserID';

    /**
     * This enumeration value is used by the
     * GetMyeBaySelling
     * call to sort listings according to the buyer's user ID in ascending order.
     * 
     * This enumeration value is not applicable to the
     * GetItemsAwaitingFeedback
     * or
     * GetMyeBayBuying
     * calls.
     **/
    const CodeType_BuyerUserID = 'BuyerUserID';

    /**
     * This enumeration value is used by the
     * GetMyeBaySelling
     * call to sort listings according to the buyer's location in ascending order.
     * 
     * This enumeration value is not applicable to the
     * GetItemsAwaitingFeedback
     * or
     * GetMyeBayBuying
     * calls.
     **/
    const CodeType_BuyerPostalCode = 'BuyerPostalCode';

    /**
     * This enumeration value is used by the
     * GetMyeBaySelling
     * call to sort listings according to the buyer's email address in ascending order.
     * 
     * This enumeration value is not applicable to the
     * GetItemsAwaitingFeedback
     * or
     * GetMyeBayBuying
     * calls, and a buyer's email address will only be exposed to the seller within two weeks of order purchase.
     **/
    const CodeType_BuyerEmail = 'BuyerEmail';

    /**
     * This enumeration value is used by the
     * GetMyeBayBuying
     * call to sort listings and orders according to the seller's email address in ascending order.
     * 
     * This enumeration value is not applicable to the
     * GetItemsAwaitingFeedback
     * or
     * GetMyeBaySelling
     * calls.
     **/
    const CodeType_SellerEmail = 'SellerEmail';

    /**
     * This enumeration value is used to sort orders according to item price value in ascending order.
     * 
     * This enumeration value is not applicable to the
     * GetItemsAwaitingFeedback
     * call.
     **/
    const CodeType_TotalPrice = 'TotalPrice';

    /**
     * This enumeration value is used by the
     * GetMyeBaySelling
     * call to sort listings and orders according to the number of users watching the listing in ascending order.
     * 
     * This enumeration value is not applicable to the
     * GetItemsAwaitingFeedback
     * or
     * GetMyeBayBuying
     * calls.
     **/
    const CodeType_WatchCount = 'WatchCount';

    /**
     * This enumeration value is used by the
     * GetMyeBaySelling
     * call to sort active listings according to the number of Best Offers that the listing has received in ascending
     * order.
     * 
     * This enumeration value is not applicable to the
     * GetItemsAwaitingFeedback
     * or
     * GetMyeBayBuying
     * calls.
     **/
    const CodeType_BestOfferCount = 'BestOfferCount';

    /**
     * This enumeration value is used by the
     * GetMyeBaySelling
     * call to sort listings and orders according to the number of questions that the listing has received in ascending
     * order.
     * 
     * This enumeration value is not applicable to the
     * GetItemsAwaitingFeedback
     * or
     * GetMyeBayBuying
     * calls.
     **/
    const CodeType_QuestionCount = 'QuestionCount';

    /**
     * This enumeration value is used to sort orders according to the cost to ship one unit of the order line item in
     * ascending order.
     * 
     * This enumeration value is not applicable to the
     * GetItemsAwaitingFeedback
     * call.
     **/
    const CodeType_ShippingServiceCost = 'ShippingServiceCost';

    /**
     * This enumeration value is used to sort orders according to the type of feedback that a user received in ascending
     * order. The Feedback ratings are defined in
     * CommentTypeCodeType
     * .
     **/
    const CodeType_FeedbackReceived = 'FeedbackReceived';

    /**
     * This enumeration value is used to sort orders according to the type of feedback that a user left for another user
     * in ascending order. The Feedback ratings are defined in
     * CommentTypeCodeType
     * .
     **/
    const CodeType_FeedbackLeft = 'FeedbackLeft';

    /**
     * This enumeration value is used to sort listings and orders according to the eBay user ID of the order
     * partner/owner of listing in ascending order.
     **/
    const CodeType_UserID = 'UserID';

    /**
     * This enumeration value is used by the
     * GetMyeBaySelling
     * call to sort order line items according to the quantity sold in ascending order.
     * 
     * This enumeration value is not applicable to the
     * GetItemsAwaitingFeedback
     * or
     * GetMyeBayBuying
     * calls.
     **/
    const CodeType_QuantitySold = 'QuantitySold';

    /**
     * This enumeration value is used by the buyer in a
     * GetMyeBayBuying
     * call to sort all Best Offers made in ascending order according to the dollar amount of the Best Offer. This sort
     * option is only applicable if the buyer has at least one pending Best Offer on an order line item.
     * 
     * This enumeration value is not applicable to the
     * GetItemsAwaitingFeedback
     * or
     * GetMyeBaySelling
     * calls.
     **/
    const CodeType_BestOffer = 'BestOffer';

    /**
     * This enumeration value is used to sort order line items according to quantity available for purchase in ascending
     * order.
     * 
     * This enumeration value is not applicable to the
     * GetItemsAwaitingFeedback
     * call, and it is only relevant to the
     * WatchList
     * container of the
     * GetMyeBayBuying
     * call.
     **/
    const CodeType_QuantityAvailable = 'QuantityAvailable';

    /**
     * This enumeration value is used to sort purchased line items according to the quantity purchased by the buyer in
     * ascending order.
     * 
     * This enumeration value is not applicable to the
     * GetItemsAwaitingFeedback
     * call.
     **/
    const CodeType_QuantityPurchased = 'QuantityPurchased';

    /**
     * This enumeration value is no longer applicable as Half.com has been shut down, and eBay marketplace is the only
     * remaining platform.
     **/
    const CodeType_WonPlatform = 'WonPlatform';

    /**
     * This enumeration value is no longer applicable as Half.com has been shut down, and eBay marketplace is the only
     * remaining platform.
     **/
    const CodeType_SoldPlatform = 'SoldPlatform';

    /**
     * This enumeration value is used by the
     * GetMyeBaySelling
     * call to sort listings according to the listing duration in descending order.
     * 
     * This enumeration value is not applicable to the
     * GetItemsAwaitingFeedback
     * or
     * GetMyeBayBuying
     * calls.
     **/
    const CodeType_ListingDurationDescending = 'ListingDurationDescending';

    /**
     * This enumeration value is used to sort listings and orders according to the listing type in descending order.
     * 
     * This enumeration value is not applicable to the
     * GetItemsAwaitingFeedback
     * call.
     **/
    const CodeType_ListingTypeDescending = 'ListingTypeDescending';

    /**
     * This enumeration value is used to sort listings and orders according to the current/final price in descending
     * order.
     * 
     * This enumeration value is not applicable to the
     * GetItemsAwaitingFeedback
     * call.
     **/
    const CodeType_CurrentPriceDescending = 'CurrentPriceDescending';

    /**
     * This enumeration value is used by the
     * GetMyeBaySelling
     * call to sort auction listings and orders according to the reserve price in descending order. This enumeration
     * value is only applicable when a seller wants to retrieve information on their own auction listings that have
     * reserve prices set on them.
     * 
     * This enumeration is not applicable to the
     * GetItemsAwaitingFeedback
     * or
     * GetMyeBayBuying
     * calls.
     **/
    const CodeType_ReservePriceDescending = 'ReservePriceDescending';

    /**
     * This enumeration value is used by the
     * GetMyeBayBuying
     * call to sort auction listings and orders according to the maximum bid price that a buyer placed on an auction
     * listing in descending order.
     * 
     * This enumeration value is only applicable to auction listings, and is not applicable to the
     * GetItemsAwaitingFeedback
     * or
     * GetMyeBaySelling
     * calls.
     **/
    const CodeType_MaxBidDescending = 'MaxBidDescending';

    /**
     * This enumeration value is used by the
     * GetMyeBaySelling
     * call to sort auction listings according to the number of unique bidders in descending order.
     * 
     * This enumeration value is only applicable to auction listings, and is not applicable to the
     * GetItemsAwaitingFeedback
     * or
     * GetMyeBayBuying
     * calls.
     **/
    const CodeType_BidderCountDescending = 'BidderCountDescending';

    /**
     * This enumeration value is used by the
     * GetMyeBaySelling
     * call to sort auction listings according to the user ID of the highest bidder in descending order.
     * 
     * This enumeration value is only applicable to auction listings, and is not applicable to the
     * GetItemsAwaitingFeedback
     * or
     * GetMyeBayBuying
     * calls.
     **/
    const CodeType_HighBidderUserIDDescending = 'HighBidderUserIDDescending';

    /**
     * This enumeration value is used by the
     * GetMyeBaySelling
     * call to sort listings according to the buyer's user ID in descending order.
     * 
     * This enumeration value is not applicable to the
     * GetItemsAwaitingFeedback
     * or
     * GetMyeBayBuying
     * calls.
     **/
    const CodeType_BuyerUserIDDescending = 'BuyerUserIDDescending';

    /**
     * This enumeration value is used by the
     * GetMyeBaySelling
     * call to sort listings according to the buyer's location in descending order.
     * 
     * This enumeration value is not applicable to the
     * GetItemsAwaitingFeedback
     * or
     * GetMyeBayBuying
     * calls.
     **/
    const CodeType_BuyerPostalCodeDescending = 'BuyerPostalCodeDescending';

    /**
     * This enumeration value is used by the
     * GetMyeBaySelling
     * call to sort listings according to the buyer's email address in descending order. A buyer's actual email address
     * will only be exposed to the seller within two weeks of order purchase.
     * 
     * This enumeration value is not applicable to the
     * GetItemsAwaitingFeedback
     * or
     * GetMyeBayBuying
     * calls.
     **/
    const CodeType_BuyerEmailDescending = 'BuyerEmailDescending';

    /**
     * This enumeration value is used by the
     * GetMyeBayBuying
     * call to sort listings and orders according to the seller's email address in descending order.
     * 
     * This enumeration value is not applicable to the
     * GetItemsAwaitingFeedback
     * or
     * GetMyeBaySelling
     * calls.
     **/
    const CodeType_SellerEmailDescending = 'SellerEmailDescending';

    /**
     * This enumeration value is used to sort orders according to item price value in descending order.
     * 
     * This enumeration value is not applicable to the
     * GetItemsAwaitingFeedback
     * call.
     **/
    const CodeType_TotalPriceDescending = 'TotalPriceDescending';

    /**
     * This enumeration value is used by the
     * GetMyeBaySelling
     * call to sort listings and orders according to the number of users watching the listing in descending order.
     * 
     * This enumeration value is not applicable to the
     * GetItemsAwaitingFeedback
     * or
     * GetMyeBayBuying
     * calls.
     **/
    const CodeType_WatchCountDescending = 'WatchCountDescending';

    /**
     * This enumeration value is used by the
     * GetMyeBaySelling
     * call to sort listings and orders according to the number of questions that the listing has received in
     * descending order.
     * 
     * This enumeration value is not applicable to the
     * GetItemsAwaitingFeedback
     * or
     * GetMyeBayBuying
     * calls.
     **/
    const CodeType_QuestionCountDescending = 'QuestionCountDescending';

    /**
     * This enumeration value is used to sort orders according to the cost to ship one unit of the order line item in
     * descending order.
     * 
     * This enumeration value is not applicable to the
     * GetItemsAwaitingFeedback
     * call.
     **/
    const CodeType_ShippingServiceCostDescending = 'ShippingServiceCostDescending';

    /**
     * This enumeration value is used to sort orders according to the type of feedback that a user received in
     * descending order. The Feedback ratings are defined in
     * CommentTypeCodeType
     * .
     **/
    const CodeType_FeedbackReceivedDescending = 'FeedbackReceivedDescending';

    /**
     * This enumeration value is used to sort orders according to the type of feedback that a user left for another user
     * in descending order. The Feedback ratings are defined in
     * CommentTypeCodeType
     * .
     **/
    const CodeType_FeedbackLeftDescending = 'FeedbackLeftDescending';

    /**
     * This enumeration value is used to sort listings and orders according to the eBay user ID of the order
     * partner/owner of listing in descending order.
     **/
    const CodeType_UserIDDescending = 'UserIDDescending';

    /**
     * This enumeration value is used by the
     * GetMyeBaySelling
     * call to sort order line items according to the quantity sold in descending order.
     * 
     * This enumeration value is not applicable to the
     * GetItemsAwaitingFeedback
     * or
     * GetMyeBayBuying
     * calls.
     **/
    const CodeType_QuantitySoldDescending = 'QuantitySoldDescending';

    /**
     * This enumeration value is used by the
     * GetMyeBaySelling
     * call to sort active listings according to the number of Best Offers that the listing has received in descending
     * order.
     * 
     * This enumeration value is not applicable to the
     * GetItemsAwaitingFeedback
     * or
     * GetMyeBayBuying
     * calls.
     **/
    const CodeType_BestOfferCountDescending = 'BestOfferCountDescending';

    /**
     * This enumeration value is used to sort order line items according to quantity available for purchase in
     * descending order.
     * 
     * This enumeration value is not applicable to the
     * GetItemsAwaitingFeedback
     * call, and it is only relevant to the
     * WatchList
     * container of the
     * GetMyeBayBuying
     * call.
     **/
    const CodeType_QuantityAvailableDescending = 'QuantityAvailableDescending';

    /**
     * This enumeration value is used to sort purchased line items according to the quantity purchased by the buyer in
     * descending order.
     * 
     * This enumeration value is not applicable to the
     * GetItemsAwaitingFeedback
     * call.
     **/
    const CodeType_QuantityPurchasedDescending = 'QuantityPurchasedDescending';

    /**
     * This enumeration value is used by the
     * GetMyeBayBuying
     * call to sort all Best Offers made in descending order according to the dollar amount of the Best Offer. This
     * sort option is only applicable if the buyer has at least one pending Best Offer on an order line item.
     * 
     * This enumeration value is not applicable to the
     * GetItemsAwaitingFeedback
     * or
     * GetMyeBaySelling
     * calls.
     **/
    const CodeType_BestOfferDescending = 'BestOfferDescending';

    /**
     * This enumeration value is used to sort listings and orders according to Item ID value in descending order.
     **/
    const CodeType_ItemIDDescending = 'ItemIDDescending';

    /**
     * This enumeration value is used to sort listings according to item price value in descending order.
     * 
     * This enumeration value is not applicable to the
     * GetItemsAwaitingFeedback
     * call.
     **/
    const CodeType_PriceDescending = 'PriceDescending';

    /**
     * This enumeration value is used to sort listings or orders according to the starting price value in descending
     * order.
     * 
     * This enumeration value is not applicable to the
     * GetItemsAwaitingFeedback
     * call.
     **/
    const CodeType_StartPriceDescending = 'StartPriceDescending';

    /**
     * This enumeration value is used to sort listings or orders according to listing title in descending (alphabetical)
     * order.
     **/
    const CodeType_TitleDescending = 'TitleDescending';

    /**
     * This enumeration value is used to sort auction listings according to the number of bids received in descending
     * order.
     * 
     * This enumeration value is only applicable to auction listings, and is not applicable to the
     * GetItemsAwaitingFeedback
     * call.
     **/
    const CodeType_BidCountDescending = 'BidCountDescending';

    /**
     * This enumeration value is used to sort fixed-price listings and orders according to item quantity in descending
     * order.
     * 
     * This enumeration value is only applicable to fixed-price listings, and is not applicable to the
     * GetItemsAwaitingFeedback
     * call.
     **/
    const CodeType_QuantityDescending = 'QuantityDescending';

    /**
     * This enumeration value is used to sort listings and orders according to start time in descending order.
     * 
     * This enumeration value is not applicable to the
     * GetItemsAwaitingFeedback
     * call.
     **/
    const CodeType_StartTimeDescending = 'StartTimeDescending';

    /**
     * This enumeration value is used to sort listings and orders according to end time in descending order.
     **/
    const CodeType_EndTimeDescending = 'EndTimeDescending';

    /**
     * This enumeration value is used by the
     * GetMyeBayBuying
     * call to sort listings and orders according to the seller's user ID in descending order.
     * 
     * This enumeration value is not applicable to the
     * GetItemsAwaitingFeedback
     * or
     * GetMyeBaySelling
     * calls.
     **/
    const CodeType_SellerUserIDDescending = 'SellerUserIDDescending';

    /**
     * This enumeration value is used to sort active listings and orders according to the time left before listing ends
     * (in descending order).
     * 
     * This enumeration value is not applicable to the
     * GetItemsAwaitingFeedback
     * call.
     **/
    const CodeType_TimeLeftDescending = 'TimeLeftDescending';

    /**
     * This enumeration value is no longer applicable as Half.com has been shut down, and eBay marketplace is the only
     * remaining platform.
     **/
    const CodeType_WonPlatformDescending = 'WonPlatformDescending';

    /**
     * This enumeration value is no longer applicable as Half.com has been shut down, and eBay marketplace is the only
     * remaining platform.
     **/
    const CodeType_SoldPlatformDescending = 'SoldPlatformDescending';

    /**
     * This enumeration value is used by the seller of a classified ad listing in a
     * GetMyeBaySelling
     * call to sort classified ad listings according to the total number of leads (prospective buyer inquiries) in
     * ascending order. Each lead involves an email to the buyer, and the
     * LeadCount
     * value includes read and unread emails.
     * 
     * This enumeration value is not applicable to the
     * GetItemsAwaitingFeedback
     * or
     * GetMyeBayBuying
     * calls.
     **/
    const CodeType_LeadCount = 'LeadCount';

    /**
     * This enumeration value is used by the seller of a classified ad listing in a
     * GetMyeBaySelling
     * call to sort classified ad listings according to the number of new leads (prospective buyer inquiries) in
     * ascending order. Each lead involves an email to the buyer, and the
     * NewLeadCount
     * value only includes unread emails.
     * 
     * This enumeration value is not applicable to the
     * GetItemsAwaitingFeedback
     * or
     * GetMyeBayBuying
     * calls.
     **/
    const CodeType_NewLeadCount = 'NewLeadCount';

    /**
     * This enumeration value is used by the seller of a classified ad listing in a
     * GetMyeBaySelling
     * call to sort classified ad listings according to the total number of leads (prospective buyer inquiries) in
     * descending order. Each lead involves an email to the buyer, and the
     * LeadCount
     * value includes read and unread emails.
     * 
     * This enumeration value is not applicable to the
     * GetItemsAwaitingFeedback
     * or
     * GetMyeBayBuying
     * calls.
     **/
    const CodeType_LeadCountDescending = 'LeadCountDescending';

    /**
     * This enumeration value is used by the seller of a classified ad listing in a
     * GetMyeBaySelling
     * call to sort classified ad listings according to the number of new leads (prospective buyer inquiries) in
     * descending order. Each lead involves an email to the buyer, and the
     * NewLeadCount
     * value only includes unread emails.
     * 
     * This enumeration value is not applicable to the
     * GetItemsAwaitingFeedback
     * or
     * GetMyeBayBuying
     * calls.
     **/
    const CodeType_NewLeadCountDescending = 'NewLeadCountDescending';

    /**
     * The pay-per-lead feature is no longer available, so this value is no longer
     * applicable.
     **/
    const CodeType_ClassifiedAdPayPerLeadFee = 'ClassifiedAdPayPerLeadFee';

    /**
     * The pay-per-lead feature is no longer available, so this value is no longer
     * applicable.
     **/
    const CodeType_ClassifiedAdPayPerLeadFeeDescending = 'ClassifiedAdPayPerLeadFeeDescending';

    /**
     * Reserved for internal or future use.
     **/
    const CodeType_CustomCode = 'CustomCode';
    
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
     * @return ItemSortTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param ItemSortTypeCodeType|null $value
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
    public function isItemID()
    {
        return $this->_value === self::CodeType_ItemID;
    }

    /**
     * @return bool
     */
    public function isPrice()
    {
        return $this->_value === self::CodeType_Price;
    }

    /**
     * @return bool
     */
    public function isStartPrice()
    {
        return $this->_value === self::CodeType_StartPrice;
    }

    /**
     * @return bool
     */
    public function isTitle()
    {
        return $this->_value === self::CodeType_Title;
    }

    /**
     * @return bool
     */
    public function isBidCount()
    {
        return $this->_value === self::CodeType_BidCount;
    }

    /**
     * @return bool
     */
    public function isQuantity()
    {
        return $this->_value === self::CodeType_Quantity;
    }

    /**
     * @return bool
     */
    public function isStartTime()
    {
        return $this->_value === self::CodeType_StartTime;
    }

    /**
     * @return bool
     */
    public function isEndTime()
    {
        return $this->_value === self::CodeType_EndTime;
    }

    /**
     * @return bool
     */
    public function isSellerUserID()
    {
        return $this->_value === self::CodeType_SellerUserID;
    }

    /**
     * @return bool
     */
    public function isTimeLeft()
    {
        return $this->_value === self::CodeType_TimeLeft;
    }

    /**
     * @return bool
     */
    public function isListingDuration()
    {
        return $this->_value === self::CodeType_ListingDuration;
    }

    /**
     * @return bool
     */
    public function isListingType()
    {
        return $this->_value === self::CodeType_ListingType;
    }

    /**
     * @return bool
     */
    public function isCurrentPrice()
    {
        return $this->_value === self::CodeType_CurrentPrice;
    }

    /**
     * @return bool
     */
    public function isReservePrice()
    {
        return $this->_value === self::CodeType_ReservePrice;
    }

    /**
     * @return bool
     */
    public function isMaxBid()
    {
        return $this->_value === self::CodeType_MaxBid;
    }

    /**
     * @return bool
     */
    public function isBidderCount()
    {
        return $this->_value === self::CodeType_BidderCount;
    }

    /**
     * @return bool
     */
    public function isHighBidderUserID()
    {
        return $this->_value === self::CodeType_HighBidderUserID;
    }

    /**
     * @return bool
     */
    public function isBuyerUserID()
    {
        return $this->_value === self::CodeType_BuyerUserID;
    }

    /**
     * @return bool
     */
    public function isBuyerPostalCode()
    {
        return $this->_value === self::CodeType_BuyerPostalCode;
    }

    /**
     * @return bool
     */
    public function isBuyerEmail()
    {
        return $this->_value === self::CodeType_BuyerEmail;
    }

    /**
     * @return bool
     */
    public function isSellerEmail()
    {
        return $this->_value === self::CodeType_SellerEmail;
    }

    /**
     * @return bool
     */
    public function isTotalPrice()
    {
        return $this->_value === self::CodeType_TotalPrice;
    }

    /**
     * @return bool
     */
    public function isWatchCount()
    {
        return $this->_value === self::CodeType_WatchCount;
    }

    /**
     * @return bool
     */
    public function isBestOfferCount()
    {
        return $this->_value === self::CodeType_BestOfferCount;
    }

    /**
     * @return bool
     */
    public function isQuestionCount()
    {
        return $this->_value === self::CodeType_QuestionCount;
    }

    /**
     * @return bool
     */
    public function isShippingServiceCost()
    {
        return $this->_value === self::CodeType_ShippingServiceCost;
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
    public function isFeedbackLeft()
    {
        return $this->_value === self::CodeType_FeedbackLeft;
    }

    /**
     * @return bool
     */
    public function isUserID()
    {
        return $this->_value === self::CodeType_UserID;
    }

    /**
     * @return bool
     */
    public function isQuantitySold()
    {
        return $this->_value === self::CodeType_QuantitySold;
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
    public function isQuantityAvailable()
    {
        return $this->_value === self::CodeType_QuantityAvailable;
    }

    /**
     * @return bool
     */
    public function isQuantityPurchased()
    {
        return $this->_value === self::CodeType_QuantityPurchased;
    }

    /**
     * @return bool
     */
    public function isWonPlatform()
    {
        return $this->_value === self::CodeType_WonPlatform;
    }

    /**
     * @return bool
     */
    public function isSoldPlatform()
    {
        return $this->_value === self::CodeType_SoldPlatform;
    }

    /**
     * @return bool
     */
    public function isListingDurationDescending()
    {
        return $this->_value === self::CodeType_ListingDurationDescending;
    }

    /**
     * @return bool
     */
    public function isListingTypeDescending()
    {
        return $this->_value === self::CodeType_ListingTypeDescending;
    }

    /**
     * @return bool
     */
    public function isCurrentPriceDescending()
    {
        return $this->_value === self::CodeType_CurrentPriceDescending;
    }

    /**
     * @return bool
     */
    public function isReservePriceDescending()
    {
        return $this->_value === self::CodeType_ReservePriceDescending;
    }

    /**
     * @return bool
     */
    public function isMaxBidDescending()
    {
        return $this->_value === self::CodeType_MaxBidDescending;
    }

    /**
     * @return bool
     */
    public function isBidderCountDescending()
    {
        return $this->_value === self::CodeType_BidderCountDescending;
    }

    /**
     * @return bool
     */
    public function isHighBidderUserIDDescending()
    {
        return $this->_value === self::CodeType_HighBidderUserIDDescending;
    }

    /**
     * @return bool
     */
    public function isBuyerUserIDDescending()
    {
        return $this->_value === self::CodeType_BuyerUserIDDescending;
    }

    /**
     * @return bool
     */
    public function isBuyerPostalCodeDescending()
    {
        return $this->_value === self::CodeType_BuyerPostalCodeDescending;
    }

    /**
     * @return bool
     */
    public function isBuyerEmailDescending()
    {
        return $this->_value === self::CodeType_BuyerEmailDescending;
    }

    /**
     * @return bool
     */
    public function isSellerEmailDescending()
    {
        return $this->_value === self::CodeType_SellerEmailDescending;
    }

    /**
     * @return bool
     */
    public function isTotalPriceDescending()
    {
        return $this->_value === self::CodeType_TotalPriceDescending;
    }

    /**
     * @return bool
     */
    public function isWatchCountDescending()
    {
        return $this->_value === self::CodeType_WatchCountDescending;
    }

    /**
     * @return bool
     */
    public function isQuestionCountDescending()
    {
        return $this->_value === self::CodeType_QuestionCountDescending;
    }

    /**
     * @return bool
     */
    public function isShippingServiceCostDescending()
    {
        return $this->_value === self::CodeType_ShippingServiceCostDescending;
    }

    /**
     * @return bool
     */
    public function isFeedbackReceivedDescending()
    {
        return $this->_value === self::CodeType_FeedbackReceivedDescending;
    }

    /**
     * @return bool
     */
    public function isFeedbackLeftDescending()
    {
        return $this->_value === self::CodeType_FeedbackLeftDescending;
    }

    /**
     * @return bool
     */
    public function isUserIDDescending()
    {
        return $this->_value === self::CodeType_UserIDDescending;
    }

    /**
     * @return bool
     */
    public function isQuantitySoldDescending()
    {
        return $this->_value === self::CodeType_QuantitySoldDescending;
    }

    /**
     * @return bool
     */
    public function isBestOfferCountDescending()
    {
        return $this->_value === self::CodeType_BestOfferCountDescending;
    }

    /**
     * @return bool
     */
    public function isQuantityAvailableDescending()
    {
        return $this->_value === self::CodeType_QuantityAvailableDescending;
    }

    /**
     * @return bool
     */
    public function isQuantityPurchasedDescending()
    {
        return $this->_value === self::CodeType_QuantityPurchasedDescending;
    }

    /**
     * @return bool
     */
    public function isBestOfferDescending()
    {
        return $this->_value === self::CodeType_BestOfferDescending;
    }

    /**
     * @return bool
     */
    public function isItemIDDescending()
    {
        return $this->_value === self::CodeType_ItemIDDescending;
    }

    /**
     * @return bool
     */
    public function isPriceDescending()
    {
        return $this->_value === self::CodeType_PriceDescending;
    }

    /**
     * @return bool
     */
    public function isStartPriceDescending()
    {
        return $this->_value === self::CodeType_StartPriceDescending;
    }

    /**
     * @return bool
     */
    public function isTitleDescending()
    {
        return $this->_value === self::CodeType_TitleDescending;
    }

    /**
     * @return bool
     */
    public function isBidCountDescending()
    {
        return $this->_value === self::CodeType_BidCountDescending;
    }

    /**
     * @return bool
     */
    public function isQuantityDescending()
    {
        return $this->_value === self::CodeType_QuantityDescending;
    }

    /**
     * @return bool
     */
    public function isStartTimeDescending()
    {
        return $this->_value === self::CodeType_StartTimeDescending;
    }

    /**
     * @return bool
     */
    public function isEndTimeDescending()
    {
        return $this->_value === self::CodeType_EndTimeDescending;
    }

    /**
     * @return bool
     */
    public function isSellerUserIDDescending()
    {
        return $this->_value === self::CodeType_SellerUserIDDescending;
    }

    /**
     * @return bool
     */
    public function isTimeLeftDescending()
    {
        return $this->_value === self::CodeType_TimeLeftDescending;
    }

    /**
     * @return bool
     */
    public function isWonPlatformDescending()
    {
        return $this->_value === self::CodeType_WonPlatformDescending;
    }

    /**
     * @return bool
     */
    public function isSoldPlatformDescending()
    {
        return $this->_value === self::CodeType_SoldPlatformDescending;
    }

    /**
     * @return bool
     */
    public function isLeadCount()
    {
        return $this->_value === self::CodeType_LeadCount;
    }

    /**
     * @return bool
     */
    public function isNewLeadCount()
    {
        return $this->_value === self::CodeType_NewLeadCount;
    }

    /**
     * @return bool
     */
    public function isLeadCountDescending()
    {
        return $this->_value === self::CodeType_LeadCountDescending;
    }

    /**
     * @return bool
     */
    public function isNewLeadCountDescending()
    {
        return $this->_value === self::CodeType_NewLeadCountDescending;
    }

    /**
     * @return bool
     */
    public function isClassifiedAdPayPerLeadFee()
    {
        return $this->_value === self::CodeType_ClassifiedAdPayPerLeadFee;
    }

    /**
     * @return bool
     */
    public function isClassifiedAdPayPerLeadFeeDescending()
    {
        return $this->_value === self::CodeType_ClassifiedAdPayPerLeadFeeDescending;
    }

    /**
     * @return bool
     */
    public function isCustomCode()
    {
        return $this->_value === self::CodeType_CustomCode;
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

ItemSortTypeCodeType::_register();

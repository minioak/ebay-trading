<?php

namespace InTradeSys\eBay\trading;


/**
 * This class is the basic interface to the eBay-Webserice for the user.
 * We generated the "proxy" externally as the SOAP-wsdl proxy generator does
 * not really did what we needed.
 */
class EbatNs_ServiceProxy extends EbatNs_Client
{
    /**
     * Setup the ServiceProxy
     *
     * @param mixed $sessionOrConfig Could be either a path to a config-file or a EbatNs_Session-object
     * @param string $converter Name of the converter class used, defaults to 'EbatNs_DataConverterIso' for convertion from uft8 to iso-8859-1
     */
    public function __construct($sessionOrConfig, $converter = 'InTradeSys\eBay\trading\EbatNs_DataConverter')
    {
        $session = $sessionOrConfig instanceof EbatNs_Session ? $sessionOrConfig : new EbatNs_Session($sessionOrConfig);
        parent::__construct($session, $converter);
    }

    /**
     * @param $response
     * @param bool $onlyErrors true (default) will ignore warnings, so we detect ONLY real failures ...
     * @return bool
     */
    public function isGood($response, $onlyErrors = true)
    {
        return $response->isGood($onlyErrors);
    }

    /**
     * Checks if the response had failures
     *
     * @param EbatNs_Response $response	A response returned by any of the eBay API calls
     * @return bool
     */
    public function isFailure($response)
    {
        return !!$response->getFailures();
    }

        /**
     * @param AddFixedPriceItemRequestType
     * @return AddFixedPriceItemResponseType|EbatNs_ResponseError|array
     **/
    function AddFixedPriceItem($request)
    {
        $requestType = is_array($request) ? current($request) : $request;
        return $requestType === false ? [] : $this->call($requestType::REQUEST, $request);
    }

    /**
     * @param AddItemRequestType
     * @return AddItemResponseType|EbatNs_ResponseError|array
     **/
    function AddItem($request)
    {
        $requestType = is_array($request) ? current($request) : $request;
        return $requestType === false ? [] : $this->call($requestType::REQUEST, $request);
    }

    /**
     * @param AddItemsRequestType
     * @return AddItemsResponseType|EbatNs_ResponseError|array
     **/
    function AddItems($request)
    {
        $requestType = is_array($request) ? current($request) : $request;
        return $requestType === false ? [] : $this->call($requestType::REQUEST, $request);
    }

    /**
     * @param AddMemberMessageAAQToPartnerRequestType
     * @return AddMemberMessageAAQToPartnerResponseType|EbatNs_ResponseError|array
     **/
    function AddMemberMessageAAQToPartner($request)
    {
        $requestType = is_array($request) ? current($request) : $request;
        return $requestType === false ? [] : $this->call($requestType::REQUEST, $request);
    }

    /**
     * @param AddMemberMessageRTQRequestType
     * @return AddMemberMessageRTQResponseType|EbatNs_ResponseError|array
     **/
    function AddMemberMessageRTQ($request)
    {
        $requestType = is_array($request) ? current($request) : $request;
        return $requestType === false ? [] : $this->call($requestType::REQUEST, $request);
    }

    /**
     * @param AddMemberMessagesAAQToBidderRequestType
     * @return AddMemberMessagesAAQToBidderResponseType|EbatNs_ResponseError|array
     **/
    function AddMemberMessagesAAQToBidder($request)
    {
        $requestType = is_array($request) ? current($request) : $request;
        return $requestType === false ? [] : $this->call($requestType::REQUEST, $request);
    }

    /**
     * @param AddOrderRequestType
     * @return AddOrderResponseType|EbatNs_ResponseError|array
     **/
    function AddOrder($request)
    {
        $requestType = is_array($request) ? current($request) : $request;
        return $requestType === false ? [] : $this->call($requestType::REQUEST, $request);
    }

    /**
     * @param AddSecondChanceItemRequestType
     * @return AddSecondChanceItemResponseType|EbatNs_ResponseError|array
     **/
    function AddSecondChanceItem($request)
    {
        $requestType = is_array($request) ? current($request) : $request;
        return $requestType === false ? [] : $this->call($requestType::REQUEST, $request);
    }

    /**
     * @param AddToItemDescriptionRequestType
     * @return AddToItemDescriptionResponseType|EbatNs_ResponseError|array
     **/
    function AddToItemDescription($request)
    {
        $requestType = is_array($request) ? current($request) : $request;
        return $requestType === false ? [] : $this->call($requestType::REQUEST, $request);
    }

    /**
     * @param AddToWatchListRequestType
     * @return AddToWatchListResponseType|EbatNs_ResponseError|array
     **/
    function AddToWatchList($request)
    {
        $requestType = is_array($request) ? current($request) : $request;
        return $requestType === false ? [] : $this->call($requestType::REQUEST, $request);
    }

    /**
     * @param AddTransactionConfirmationItemRequestType
     * @return AddTransactionConfirmationItemResponseType|EbatNs_ResponseError|array
     **/
    function AddTransactionConfirmationItem($request)
    {
        $requestType = is_array($request) ? current($request) : $request;
        return $requestType === false ? [] : $this->call($requestType::REQUEST, $request);
    }

    /**
     * @param CompleteSaleRequestType
     * @return CompleteSaleResponseType|EbatNs_ResponseError|array
     **/
    function CompleteSale($request)
    {
        $requestType = is_array($request) ? current($request) : $request;
        return $requestType === false ? [] : $this->call($requestType::REQUEST, $request);
    }

    /**
     * @param ConfirmIdentityRequestType
     * @return ConfirmIdentityResponseType|EbatNs_ResponseError|array
     **/
    function ConfirmIdentity($request)
    {
        $requestType = is_array($request) ? current($request) : $request;
        return $requestType === false ? [] : $this->call($requestType::REQUEST, $request);
    }

    /**
     * @param DeleteMyMessagesRequestType
     * @return DeleteMyMessagesResponseType|EbatNs_ResponseError|array
     **/
    function DeleteMyMessages($request)
    {
        $requestType = is_array($request) ? current($request) : $request;
        return $requestType === false ? [] : $this->call($requestType::REQUEST, $request);
    }

    /**
     * @param EndFixedPriceItemRequestType
     * @return EndFixedPriceItemResponseType|EbatNs_ResponseError|array
     **/
    function EndFixedPriceItem($request)
    {
        $requestType = is_array($request) ? current($request) : $request;
        return $requestType === false ? [] : $this->call($requestType::REQUEST, $request);
    }

    /**
     * @param EndItemRequestType
     * @return EndItemResponseType|EbatNs_ResponseError|array
     **/
    function EndItem($request)
    {
        $requestType = is_array($request) ? current($request) : $request;
        return $requestType === false ? [] : $this->call($requestType::REQUEST, $request);
    }

    /**
     * @param EndItemsRequestType
     * @return EndItemsResponseType|EbatNs_ResponseError|array
     **/
    function EndItems($request)
    {
        $requestType = is_array($request) ? current($request) : $request;
        return $requestType === false ? [] : $this->call($requestType::REQUEST, $request);
    }

    /**
     * @param ExtendSiteHostedPicturesRequestType
     * @return ExtendSiteHostedPicturesResponseType|EbatNs_ResponseError|array
     **/
    function ExtendSiteHostedPictures($request)
    {
        $requestType = is_array($request) ? current($request) : $request;
        return $requestType === false ? [] : $this->call($requestType::REQUEST, $request);
    }

    /**
     * @param FetchTokenRequestType
     * @return FetchTokenResponseType|EbatNs_ResponseError|array
     **/
    function FetchToken($request)
    {
        $requestType = is_array($request) ? current($request) : $request;
        return $requestType === false ? [] : $this->call($requestType::REQUEST, $request);
    }

    /**
     * @param GetAccountRequestType
     * @return GetAccountResponseType|EbatNs_ResponseError|array
     **/
    function GetAccount($request)
    {
        $requestType = is_array($request) ? current($request) : $request;
        return $requestType === false ? [] : $this->call($requestType::REQUEST, $request);
    }

    /**
     * @param GetAdFormatLeadsRequestType
     * @return GetAdFormatLeadsResponseType|EbatNs_ResponseError|array
     **/
    function GetAdFormatLeads($request)
    {
        $requestType = is_array($request) ? current($request) : $request;
        return $requestType === false ? [] : $this->call($requestType::REQUEST, $request);
    }

    /**
     * @param GetAllBiddersRequestType
     * @return GetAllBiddersResponseType|EbatNs_ResponseError|array
     **/
    function GetAllBidders($request)
    {
        $requestType = is_array($request) ? current($request) : $request;
        return $requestType === false ? [] : $this->call($requestType::REQUEST, $request);
    }

    /**
     * @param GetApiAccessRulesRequestType
     * @return GetApiAccessRulesResponseType|EbatNs_ResponseError|array
     **/
    function GetApiAccessRules($request)
    {
        $requestType = is_array($request) ? current($request) : $request;
        return $requestType === false ? [] : $this->call($requestType::REQUEST, $request);
    }

    /**
     * @param GetBestOffersRequestType
     * @return GetBestOffersResponseType|EbatNs_ResponseError|array
     **/
    function GetBestOffers($request)
    {
        $requestType = is_array($request) ? current($request) : $request;
        return $requestType === false ? [] : $this->call($requestType::REQUEST, $request);
    }

    /**
     * @param GetBidderListRequestType
     * @return GetBidderListResponseType|EbatNs_ResponseError|array
     **/
    function GetBidderList($request)
    {
        $requestType = is_array($request) ? current($request) : $request;
        return $requestType === false ? [] : $this->call($requestType::REQUEST, $request);
    }

    /**
     * @param GetCategoriesRequestType
     * @return GetCategoriesResponseType|EbatNs_ResponseError|array
     **/
    function GetCategories($request)
    {
        $requestType = is_array($request) ? current($request) : $request;
        return $requestType === false ? [] : $this->call($requestType::REQUEST, $request);
    }

    /**
     * @param GetCategoryFeaturesRequestType
     * @return GetCategoryFeaturesResponseType|EbatNs_ResponseError|array
     **/
    function GetCategoryFeatures($request)
    {
        $requestType = is_array($request) ? current($request) : $request;
        return $requestType === false ? [] : $this->call($requestType::REQUEST, $request);
    }

    /**
     * @param GetCategoryMappingsRequestType
     * @return GetCategoryMappingsResponseType|EbatNs_ResponseError|array
     **/
    function GetCategoryMappings($request)
    {
        $requestType = is_array($request) ? current($request) : $request;
        return $requestType === false ? [] : $this->call($requestType::REQUEST, $request);
    }

    /**
     * @param GetChallengeTokenRequestType
     * @return GetChallengeTokenResponseType|EbatNs_ResponseError|array
     **/
    function GetChallengeToken($request)
    {
        $requestType = is_array($request) ? current($request) : $request;
        return $requestType === false ? [] : $this->call($requestType::REQUEST, $request);
    }

    /**
     * @param GetCharitiesRequestType
     * @return GetCharitiesResponseType|EbatNs_ResponseError|array
     **/
    function GetCharities($request)
    {
        $requestType = is_array($request) ? current($request) : $request;
        return $requestType === false ? [] : $this->call($requestType::REQUEST, $request);
    }

    /**
     * @param GetClientAlertsAuthTokenRequestType
     * @return GetClientAlertsAuthTokenResponseType|EbatNs_ResponseError|array
     **/
    function GetClientAlertsAuthToken($request)
    {
        $requestType = is_array($request) ? current($request) : $request;
        return $requestType === false ? [] : $this->call($requestType::REQUEST, $request);
    }

    /**
     * @param GetContextualKeywordsRequestType
     * @return GetContextualKeywordsResponseType|EbatNs_ResponseError|array
     **/
    function GetContextualKeywords($request)
    {
        $requestType = is_array($request) ? current($request) : $request;
        return $requestType === false ? [] : $this->call($requestType::REQUEST, $request);
    }

    /**
     * @param GetDescriptionTemplatesRequestType
     * @return GetDescriptionTemplatesResponseType|EbatNs_ResponseError|array
     **/
    function GetDescriptionTemplates($request)
    {
        $requestType = is_array($request) ? current($request) : $request;
        return $requestType === false ? [] : $this->call($requestType::REQUEST, $request);
    }

    /**
     * @param GetFeedbackRequestType
     * @return GetFeedbackResponseType|EbatNs_ResponseError|array
     **/
    function GetFeedback($request)
    {
        $requestType = is_array($request) ? current($request) : $request;
        return $requestType === false ? [] : $this->call($requestType::REQUEST, $request);
    }

    /**
     * @param GetItemRequestType
     * @return GetItemResponseType|EbatNs_ResponseError|array
     **/
    function GetItem($request)
    {
        $requestType = is_array($request) ? current($request) : $request;
        return $requestType === false ? [] : $this->call($requestType::REQUEST, $request);
    }

    /**
     * @param GetItemShippingRequestType
     * @return GetItemShippingResponseType|EbatNs_ResponseError|array
     **/
    function GetItemShipping($request)
    {
        $requestType = is_array($request) ? current($request) : $request;
        return $requestType === false ? [] : $this->call($requestType::REQUEST, $request);
    }

    /**
     * @param GetItemTransactionsRequestType
     * @return GetItemTransactionsResponseType|EbatNs_ResponseError|array
     **/
    function GetItemTransactions($request)
    {
        $requestType = is_array($request) ? current($request) : $request;
        return $requestType === false ? [] : $this->call($requestType::REQUEST, $request);
    }

    /**
     * @param GetItemsAwaitingFeedbackRequestType
     * @return GetItemsAwaitingFeedbackResponseType|EbatNs_ResponseError|array
     **/
    function GetItemsAwaitingFeedback($request)
    {
        $requestType = is_array($request) ? current($request) : $request;
        return $requestType === false ? [] : $this->call($requestType::REQUEST, $request);
    }

    /**
     * @param GetMemberMessagesRequestType
     * @return GetMemberMessagesResponseType|EbatNs_ResponseError|array
     **/
    function GetMemberMessages($request)
    {
        $requestType = is_array($request) ? current($request) : $request;
        return $requestType === false ? [] : $this->call($requestType::REQUEST, $request);
    }

    /**
     * @param GetMessagePreferencesRequestType
     * @return GetMessagePreferencesResponseType|EbatNs_ResponseError|array
     **/
    function GetMessagePreferences($request)
    {
        $requestType = is_array($request) ? current($request) : $request;
        return $requestType === false ? [] : $this->call($requestType::REQUEST, $request);
    }

    /**
     * @param GetMyMessagesRequestType
     * @return GetMyMessagesResponseType|EbatNs_ResponseError|array
     **/
    function GetMyMessages($request)
    {
        $requestType = is_array($request) ? current($request) : $request;
        return $requestType === false ? [] : $this->call($requestType::REQUEST, $request);
    }

    /**
     * @param GetMyeBayBuyingRequestType
     * @return GetMyeBayBuyingResponseType|EbatNs_ResponseError|array
     **/
    function GetMyeBayBuying($request)
    {
        $requestType = is_array($request) ? current($request) : $request;
        return $requestType === false ? [] : $this->call($requestType::REQUEST, $request);
    }

    /**
     * @param GetMyeBayRemindersRequestType
     * @return GetMyeBayRemindersResponseType|EbatNs_ResponseError|array
     **/
    function GetMyeBayReminders($request)
    {
        $requestType = is_array($request) ? current($request) : $request;
        return $requestType === false ? [] : $this->call($requestType::REQUEST, $request);
    }

    /**
     * @param GetMyeBaySellingRequestType
     * @return GetMyeBaySellingResponseType|EbatNs_ResponseError|array
     **/
    function GetMyeBaySelling($request)
    {
        $requestType = is_array($request) ? current($request) : $request;
        return $requestType === false ? [] : $this->call($requestType::REQUEST, $request);
    }

    /**
     * @param GetNotificationPreferencesRequestType
     * @return GetNotificationPreferencesResponseType|EbatNs_ResponseError|array
     **/
    function GetNotificationPreferences($request)
    {
        $requestType = is_array($request) ? current($request) : $request;
        return $requestType === false ? [] : $this->call($requestType::REQUEST, $request);
    }

    /**
     * @param GetNotificationsUsageRequestType
     * @return GetNotificationsUsageResponseType|EbatNs_ResponseError|array
     **/
    function GetNotificationsUsage($request)
    {
        $requestType = is_array($request) ? current($request) : $request;
        return $requestType === false ? [] : $this->call($requestType::REQUEST, $request);
    }

    /**
     * @param GetOrderTransactionsRequestType
     * @return GetOrderTransactionsResponseType|EbatNs_ResponseError|array
     **/
    function GetOrderTransactions($request)
    {
        $requestType = is_array($request) ? current($request) : $request;
        return $requestType === false ? [] : $this->call($requestType::REQUEST, $request);
    }

    /**
     * @param GetOrdersRequestType
     * @return GetOrdersResponseType|EbatNs_ResponseError|array
     **/
    function GetOrders($request)
    {
        $requestType = is_array($request) ? current($request) : $request;
        return $requestType === false ? [] : $this->call($requestType::REQUEST, $request);
    }

    /**
     * @param GetSellerDashboardRequestType
     * @return GetSellerDashboardResponseType|EbatNs_ResponseError|array
     **/
    function GetSellerDashboard($request)
    {
        $requestType = is_array($request) ? current($request) : $request;
        return $requestType === false ? [] : $this->call($requestType::REQUEST, $request);
    }

    /**
     * @param GetSellerEventsRequestType
     * @return GetSellerEventsResponseType|EbatNs_ResponseError|array
     **/
    function GetSellerEvents($request)
    {
        $requestType = is_array($request) ? current($request) : $request;
        return $requestType === false ? [] : $this->call($requestType::REQUEST, $request);
    }

    /**
     * @param GetSellerListRequestType
     * @return GetSellerListResponseType|EbatNs_ResponseError|array
     **/
    function GetSellerList($request)
    {
        $requestType = is_array($request) ? current($request) : $request;
        return $requestType === false ? [] : $this->call($requestType::REQUEST, $request);
    }

    /**
     * @param GetSellerTransactionsRequestType
     * @return GetSellerTransactionsResponseType|EbatNs_ResponseError|array
     **/
    function GetSellerTransactions($request)
    {
        $requestType = is_array($request) ? current($request) : $request;
        return $requestType === false ? [] : $this->call($requestType::REQUEST, $request);
    }

    /**
     * @param GetSessionIDRequestType
     * @return GetSessionIDResponseType|EbatNs_ResponseError|array
     **/
    function GetSessionID($request)
    {
        $requestType = is_array($request) ? current($request) : $request;
        return $requestType === false ? [] : $this->call($requestType::REQUEST, $request);
    }

    /**
     * @param GetShippingDiscountProfilesRequestType
     * @return GetShippingDiscountProfilesResponseType|EbatNs_ResponseError|array
     **/
    function GetShippingDiscountProfiles($request)
    {
        $requestType = is_array($request) ? current($request) : $request;
        return $requestType === false ? [] : $this->call($requestType::REQUEST, $request);
    }

    /**
     * @param GetStoreRequestType
     * @return GetStoreResponseType|EbatNs_ResponseError|array
     **/
    function GetStore($request)
    {
        $requestType = is_array($request) ? current($request) : $request;
        return $requestType === false ? [] : $this->call($requestType::REQUEST, $request);
    }

    /**
     * @param GetStoreCategoryUpdateStatusRequestType
     * @return GetStoreCategoryUpdateStatusResponseType|EbatNs_ResponseError|array
     **/
    function GetStoreCategoryUpdateStatus($request)
    {
        $requestType = is_array($request) ? current($request) : $request;
        return $requestType === false ? [] : $this->call($requestType::REQUEST, $request);
    }

    /**
     * @param GetSuggestedCategoriesRequestType
     * @return GetSuggestedCategoriesResponseType|EbatNs_ResponseError|array
     **/
    function GetSuggestedCategories($request)
    {
        $requestType = is_array($request) ? current($request) : $request;
        return $requestType === false ? [] : $this->call($requestType::REQUEST, $request);
    }

    /**
     * @param GetTaxTableRequestType
     * @return GetTaxTableResponseType|EbatNs_ResponseError|array
     **/
    function GetTaxTable($request)
    {
        $requestType = is_array($request) ? current($request) : $request;
        return $requestType === false ? [] : $this->call($requestType::REQUEST, $request);
    }

    /**
     * @param GetTokenStatusRequestType
     * @return GetTokenStatusResponseType|EbatNs_ResponseError|array
     **/
    function GetTokenStatus($request)
    {
        $requestType = is_array($request) ? current($request) : $request;
        return $requestType === false ? [] : $this->call($requestType::REQUEST, $request);
    }

    /**
     * @param GetUserRequestType
     * @return GetUserResponseType|EbatNs_ResponseError|array
     **/
    function GetUser($request)
    {
        $requestType = is_array($request) ? current($request) : $request;
        return $requestType === false ? [] : $this->call($requestType::REQUEST, $request);
    }

    /**
     * @param GetUserContactDetailsRequestType
     * @return GetUserContactDetailsResponseType|EbatNs_ResponseError|array
     **/
    function GetUserContactDetails($request)
    {
        $requestType = is_array($request) ? current($request) : $request;
        return $requestType === false ? [] : $this->call($requestType::REQUEST, $request);
    }

    /**
     * @param GetUserPreferencesRequestType
     * @return GetUserPreferencesResponseType|EbatNs_ResponseError|array
     **/
    function GetUserPreferences($request)
    {
        $requestType = is_array($request) ? current($request) : $request;
        return $requestType === false ? [] : $this->call($requestType::REQUEST, $request);
    }

    /**
     * @param GetVeROReasonCodeDetailsRequestType
     * @return GetVeROReasonCodeDetailsResponseType|EbatNs_ResponseError|array
     **/
    function GetVeROReasonCodeDetails($request)
    {
        $requestType = is_array($request) ? current($request) : $request;
        return $requestType === false ? [] : $this->call($requestType::REQUEST, $request);
    }

    /**
     * @param GetVeROReportStatusRequestType
     * @return GetVeROReportStatusResponseType|EbatNs_ResponseError|array
     **/
    function GetVeROReportStatus($request)
    {
        $requestType = is_array($request) ? current($request) : $request;
        return $requestType === false ? [] : $this->call($requestType::REQUEST, $request);
    }

    /**
     * @param GeteBayDetailsRequestType
     * @return GeteBayDetailsResponseType|EbatNs_ResponseError|array
     **/
    function GeteBayDetails($request)
    {
        $requestType = is_array($request) ? current($request) : $request;
        return $requestType === false ? [] : $this->call($requestType::REQUEST, $request);
    }

    /**
     * @param GeteBayOfficialTimeRequestType
     * @return GeteBayOfficialTimeResponseType|EbatNs_ResponseError|array
     **/
    function GeteBayOfficialTime($request)
    {
        $requestType = is_array($request) ? current($request) : $request;
        return $requestType === false ? [] : $this->call($requestType::REQUEST, $request);
    }

    /**
     * @param LeaveFeedbackRequestType
     * @return LeaveFeedbackResponseType|EbatNs_ResponseError|array
     **/
    function LeaveFeedback($request)
    {
        $requestType = is_array($request) ? current($request) : $request;
        return $requestType === false ? [] : $this->call($requestType::REQUEST, $request);
    }

    /**
     * @param PlaceOfferRequestType
     * @return PlaceOfferResponseType|EbatNs_ResponseError|array
     **/
    function PlaceOffer($request)
    {
        $requestType = is_array($request) ? current($request) : $request;
        return $requestType === false ? [] : $this->call($requestType::REQUEST, $request);
    }

    /**
     * @param RelistFixedPriceItemRequestType
     * @return RelistFixedPriceItemResponseType|EbatNs_ResponseError|array
     **/
    function RelistFixedPriceItem($request)
    {
        $requestType = is_array($request) ? current($request) : $request;
        return $requestType === false ? [] : $this->call($requestType::REQUEST, $request);
    }

    /**
     * @param RelistItemRequestType
     * @return RelistItemResponseType|EbatNs_ResponseError|array
     **/
    function RelistItem($request)
    {
        $requestType = is_array($request) ? current($request) : $request;
        return $requestType === false ? [] : $this->call($requestType::REQUEST, $request);
    }

    /**
     * @param RemoveFromWatchListRequestType
     * @return RemoveFromWatchListResponseType|EbatNs_ResponseError|array
     **/
    function RemoveFromWatchList($request)
    {
        $requestType = is_array($request) ? current($request) : $request;
        return $requestType === false ? [] : $this->call($requestType::REQUEST, $request);
    }

    /**
     * @param RespondToBestOfferRequestType
     * @return RespondToBestOfferResponseType|EbatNs_ResponseError|array
     **/
    function RespondToBestOffer($request)
    {
        $requestType = is_array($request) ? current($request) : $request;
        return $requestType === false ? [] : $this->call($requestType::REQUEST, $request);
    }

    /**
     * @param RespondToFeedbackRequestType
     * @return RespondToFeedbackResponseType|EbatNs_ResponseError|array
     **/
    function RespondToFeedback($request)
    {
        $requestType = is_array($request) ? current($request) : $request;
        return $requestType === false ? [] : $this->call($requestType::REQUEST, $request);
    }

    /**
     * @param ReviseFixedPriceItemRequestType
     * @return ReviseFixedPriceItemResponseType|EbatNs_ResponseError|array
     **/
    function ReviseFixedPriceItem($request)
    {
        $requestType = is_array($request) ? current($request) : $request;
        return $requestType === false ? [] : $this->call($requestType::REQUEST, $request);
    }

    /**
     * @param ReviseInventoryStatusRequestType
     * @return ReviseInventoryStatusResponseType|EbatNs_ResponseError|array
     **/
    function ReviseInventoryStatus($request)
    {
        $requestType = is_array($request) ? current($request) : $request;
        return $requestType === false ? [] : $this->call($requestType::REQUEST, $request);
    }

    /**
     * @param ReviseItemRequestType
     * @return ReviseItemResponseType|EbatNs_ResponseError|array
     **/
    function ReviseItem($request)
    {
        $requestType = is_array($request) ? current($request) : $request;
        return $requestType === false ? [] : $this->call($requestType::REQUEST, $request);
    }

    /**
     * @param ReviseMyMessagesRequestType
     * @return ReviseMyMessagesResponseType|EbatNs_ResponseError|array
     **/
    function ReviseMyMessages($request)
    {
        $requestType = is_array($request) ? current($request) : $request;
        return $requestType === false ? [] : $this->call($requestType::REQUEST, $request);
    }

    /**
     * @param ReviseMyMessagesFoldersRequestType
     * @return ReviseMyMessagesFoldersResponseType|EbatNs_ResponseError|array
     **/
    function ReviseMyMessagesFolders($request)
    {
        $requestType = is_array($request) ? current($request) : $request;
        return $requestType === false ? [] : $this->call($requestType::REQUEST, $request);
    }

    /**
     * @param RevokeTokenRequestType
     * @return RevokeTokenResponseType|EbatNs_ResponseError|array
     **/
    function RevokeToken($request)
    {
        $requestType = is_array($request) ? current($request) : $request;
        return $requestType === false ? [] : $this->call($requestType::REQUEST, $request);
    }

    /**
     * @param SendInvoiceRequestType
     * @return SendInvoiceResponseType|EbatNs_ResponseError|array
     **/
    function SendInvoice($request)
    {
        $requestType = is_array($request) ? current($request) : $request;
        return $requestType === false ? [] : $this->call($requestType::REQUEST, $request);
    }

    /**
     * @param SetMessagePreferencesRequestType
     * @return SetMessagePreferencesResponseType|EbatNs_ResponseError|array
     **/
    function SetMessagePreferences($request)
    {
        $requestType = is_array($request) ? current($request) : $request;
        return $requestType === false ? [] : $this->call($requestType::REQUEST, $request);
    }

    /**
     * @param SetNotificationPreferencesRequestType
     * @return SetNotificationPreferencesResponseType|EbatNs_ResponseError|array
     **/
    function SetNotificationPreferences($request)
    {
        $requestType = is_array($request) ? current($request) : $request;
        return $requestType === false ? [] : $this->call($requestType::REQUEST, $request);
    }

    /**
     * @param SetShippingDiscountProfilesRequestType
     * @return SetShippingDiscountProfilesResponseType|EbatNs_ResponseError|array
     **/
    function SetShippingDiscountProfiles($request)
    {
        $requestType = is_array($request) ? current($request) : $request;
        return $requestType === false ? [] : $this->call($requestType::REQUEST, $request);
    }

    /**
     * @param SetStoreCategoriesRequestType
     * @return SetStoreCategoriesResponseType|EbatNs_ResponseError|array
     **/
    function SetStoreCategories($request)
    {
        $requestType = is_array($request) ? current($request) : $request;
        return $requestType === false ? [] : $this->call($requestType::REQUEST, $request);
    }

    /**
     * @param SetTaxTableRequestType
     * @return SetTaxTableResponseType|EbatNs_ResponseError|array
     **/
    function SetTaxTable($request)
    {
        $requestType = is_array($request) ? current($request) : $request;
        return $requestType === false ? [] : $this->call($requestType::REQUEST, $request);
    }

    /**
     * @param SetUserNotesRequestType
     * @return SetUserNotesResponseType|EbatNs_ResponseError|array
     **/
    function SetUserNotes($request)
    {
        $requestType = is_array($request) ? current($request) : $request;
        return $requestType === false ? [] : $this->call($requestType::REQUEST, $request);
    }

    /**
     * @param SetUserPreferencesRequestType
     * @return SetUserPreferencesResponseType|EbatNs_ResponseError|array
     **/
    function SetUserPreferences($request)
    {
        $requestType = is_array($request) ? current($request) : $request;
        return $requestType === false ? [] : $this->call($requestType::REQUEST, $request);
    }

    /**
     * @param UploadSiteHostedPicturesRequestType
     * @return UploadSiteHostedPicturesResponseType|EbatNs_ResponseError|array
     **/
    function UploadSiteHostedPictures($request)
    {
        $requestType = is_array($request) ? current($request) : $request;
        return $requestType === false ? [] : $this->call($requestType::REQUEST, $request);
    }

    /**
     * @param ValidateChallengeInputRequestType
     * @return ValidateChallengeInputResponseType|EbatNs_ResponseError|array
     **/
    function ValidateChallengeInput($request)
    {
        $requestType = is_array($request) ? current($request) : $request;
        return $requestType === false ? [] : $this->call($requestType::REQUEST, $request);
    }

    /**
     * @param ValidateTestUserRegistrationRequestType
     * @return ValidateTestUserRegistrationResponseType|EbatNs_ResponseError|array
     **/
    function ValidateTestUserRegistration($request)
    {
        $requestType = is_array($request) ? current($request) : $request;
        return $requestType === false ? [] : $this->call($requestType::REQUEST, $request);
    }

    /**
     * @param VeROReportItemsRequestType
     * @return VeROReportItemsResponseType|EbatNs_ResponseError|array
     **/
    function VeROReportItems($request)
    {
        $requestType = is_array($request) ? current($request) : $request;
        return $requestType === false ? [] : $this->call($requestType::REQUEST, $request);
    }

    /**
     * @param VerifyAddFixedPriceItemRequestType
     * @return VerifyAddFixedPriceItemResponseType|EbatNs_ResponseError|array
     **/
    function VerifyAddFixedPriceItem($request)
    {
        $requestType = is_array($request) ? current($request) : $request;
        return $requestType === false ? [] : $this->call($requestType::REQUEST, $request);
    }

    /**
     * @param VerifyAddItemRequestType
     * @return VerifyAddItemResponseType|EbatNs_ResponseError|array
     **/
    function VerifyAddItem($request)
    {
        $requestType = is_array($request) ? current($request) : $request;
        return $requestType === false ? [] : $this->call($requestType::REQUEST, $request);
    }

    /**
     * @param VerifyAddSecondChanceItemRequestType
     * @return VerifyAddSecondChanceItemResponseType|EbatNs_ResponseError|array
     **/
    function VerifyAddSecondChanceItem($request)
    {
        $requestType = is_array($request) ? current($request) : $request;
        return $requestType === false ? [] : $this->call($requestType::REQUEST, $request);
    }

    /**
     * @param VerifyRelistItemRequestType
     * @return VerifyRelistItemResponseType|EbatNs_ResponseError|array
     **/
    function VerifyRelistItem($request)
    {
        $requestType = is_array($request) ? current($request) : $request;
        return $requestType === false ? [] : $this->call($requestType::REQUEST, $request);
    }
}

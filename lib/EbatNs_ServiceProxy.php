<?php
// $Id: ClientProxy.tpl.php,v 1.6 2008-06-05 08:58:31 michael Exp $
// $Log: ClientProxy.tpl.php,v $
// Revision 1.6  2008-06-05 08:58:31  michael
// switched to getAck()
//
// Revision 1.5  2008/05/28 16:53:18  michael
// fixed and moved method getErrorsToString() to Client
//
// Revision 1.4  2008/05/05 15:51:31  carsten
// *** empty log message ***
//
// Revision 1.3  2008/05/04 15:24:03  carsten
// *** empty log message ***
//
// Revision 1.2  2008/05/02 15:04:05  carsten
// Initial, PHP5
//
// 
// auto-generated 8/11/15 3:23 AM 
// Ebay-Schema Version 933
//
/**
 * Load files we depend on.
 */

require_once 'EbatNs_Client.php';
require_once 'EbatNs_Session.php';

/**
 * The WSDL version the SDK is built against.
 */
define('EBAY_WSDL_VERSION', '933');

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
    function __construct($sessionOrConfig, $converter = 'EbatNs_DataConverterIso')
    {
        if ($sessionOrConfig instanceof EbatNs_Session)
        {
			// Initialize the SOAP Client.
			parent::__construct($sessionOrConfig, $converter);
		}
		else
		{
			// assume that $session is the path to the config-file
			//
		    if (is_string($sessionOrConfig))
			{
				$session = new EbatNs_Session($sessionOrConfig);
				parent::__construct($session, $converter);
			}
		}
    }

    /**
     * Checks if the response has errors (from the eBay API side)
     *
     * @param AbstractResponseType $response	A response returned by any of the eBay API calls
     * @param Boolean $ignoreWarnings	true (default) will ignore warnings, so we detect ONLY real failures ...
     * @return Boolean
     */
	function isGood($response, $ignoreWarnings = true)
	{
		if ($ignoreWarnings)
			return ($response->getAck() == 'Success' || $response->getAck() == 'Warning');		
		else
			return ($response->getAck() == 'Success');
	}

	/**
	 * Checks if the response had failures
	 *
	 * @param AbstractResponseType $response	A response returned by any of the eBay API calls
	 * @return Boolean
	 */
	function isFailure($response)
	{
		return ($response->getAck() == 'Failure');
	}
	
	/**
	 * @return AddDisputeResponseType
	 * @param AddDisputeRequestType
	 **/
	function AddDispute($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('AddDispute', $request);
	}

	/**
	 * @return AddDisputeResponseResponseType
	 * @param AddDisputeResponseRequestType
	 **/
	function AddDisputeResponse($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('AddDisputeResponse', $request);
	}

	/**
	 * @return AddFixedPriceItemResponseType
	 * @param AddFixedPriceItemRequestType
	 **/
	function AddFixedPriceItem($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('AddFixedPriceItem', $request);
	}

	/**
	 * @return AddItemResponseType
	 * @param AddItemRequestType
	 **/
	function AddItem($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('AddItem', $request);
	}

	/**
	 * @return AddItemFromSellingManagerTemplateResponseType
	 * @param AddItemFromSellingManagerTemplateRequestType
	 **/
	function AddItemFromSellingManagerTemplate($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('AddItemFromSellingManagerTemplate', $request);
	}

	/**
	 * @return AddItemsResponseType
	 * @param AddItemsRequestType
	 **/
	function AddItems($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('AddItems', $request);
	}

	/**
	 * @return AddMemberMessageAAQToPartnerResponseType
	 * @param AddMemberMessageAAQToPartnerRequestType
	 **/
	function AddMemberMessageAAQToPartner($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('AddMemberMessageAAQToPartner', $request);
	}

	/**
	 * @return AddMemberMessageRTQResponseType
	 * @param AddMemberMessageRTQRequestType
	 **/
	function AddMemberMessageRTQ($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('AddMemberMessageRTQ', $request);
	}

	/**
	 * @return AddMemberMessagesAAQToBidderResponseType
	 * @param AddMemberMessagesAAQToBidderRequestType
	 **/
	function AddMemberMessagesAAQToBidder($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('AddMemberMessagesAAQToBidder', $request);
	}

	/**
	 * @return AddOrderResponseType
	 * @param AddOrderRequestType
	 **/
	function AddOrder($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('AddOrder', $request);
	}

	/**
	 * @return AddSecondChanceItemResponseType
	 * @param AddSecondChanceItemRequestType
	 **/
	function AddSecondChanceItem($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('AddSecondChanceItem', $request);
	}

	/**
	 * @return AddSellingManagerInventoryFolderResponseType
	 * @param AddSellingManagerInventoryFolderRequestType
	 **/
	function AddSellingManagerInventoryFolder($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('AddSellingManagerInventoryFolder', $request);
	}

	/**
	 * @return AddSellingManagerProductResponseType
	 * @param AddSellingManagerProductRequestType
	 **/
	function AddSellingManagerProduct($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('AddSellingManagerProduct', $request);
	}

	/**
	 * @return AddSellingManagerTemplateResponseType
	 * @param AddSellingManagerTemplateRequestType
	 **/
	function AddSellingManagerTemplate($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('AddSellingManagerTemplate', $request);
	}

	/**
	 * @return AddToItemDescriptionResponseType
	 * @param AddToItemDescriptionRequestType
	 **/
	function AddToItemDescription($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('AddToItemDescription', $request);
	}

	/**
	 * @return AddToWatchListResponseType
	 * @param AddToWatchListRequestType
	 **/
	function AddToWatchList($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('AddToWatchList', $request);
	}

	/**
	 * @return AddTransactionConfirmationItemResponseType
	 * @param AddTransactionConfirmationItemRequestType
	 **/
	function AddTransactionConfirmationItem($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('AddTransactionConfirmationItem', $request);
	}

	/**
	 * @return CompleteSaleResponseType
	 * @param CompleteSaleRequestType
	 **/
	function CompleteSale($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('CompleteSale', $request);
	}

	/**
	 * @return ConfirmIdentityResponseType
	 * @param ConfirmIdentityRequestType
	 **/
	function ConfirmIdentity($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('ConfirmIdentity', $request);
	}

	/**
	 * @return DeleteMyMessagesResponseType
	 * @param DeleteMyMessagesRequestType
	 **/
	function DeleteMyMessages($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('DeleteMyMessages', $request);
	}

	/**
	 * @return DeleteSellingManagerInventoryFolderResponseType
	 * @param DeleteSellingManagerInventoryFolderRequestType
	 **/
	function DeleteSellingManagerInventoryFolder($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('DeleteSellingManagerInventoryFolder', $request);
	}

	/**
	 * @return DeleteSellingManagerItemAutomationRuleResponseType
	 * @param DeleteSellingManagerItemAutomationRuleRequestType
	 **/
	function DeleteSellingManagerItemAutomationRule($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('DeleteSellingManagerItemAutomationRule', $request);
	}

	/**
	 * @return DeleteSellingManagerProductResponseType
	 * @param DeleteSellingManagerProductRequestType
	 **/
	function DeleteSellingManagerProduct($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('DeleteSellingManagerProduct', $request);
	}

	/**
	 * @return DeleteSellingManagerTemplateResponseType
	 * @param DeleteSellingManagerTemplateRequestType
	 **/
	function DeleteSellingManagerTemplate($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('DeleteSellingManagerTemplate', $request);
	}

	/**
	 * @return DeleteSellingManagerTemplateAutomationRuleResponseType
	 * @param DeleteSellingManagerTemplateAutomationRuleRequestType
	 **/
	function DeleteSellingManagerTemplateAutomationRule($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('DeleteSellingManagerTemplateAutomationRule', $request);
	}

	/**
	 * @return DisableUnpaidItemAssistanceResponseType
	 * @param DisableUnpaidItemAssistanceRequestType
	 **/
	function DisableUnpaidItemAssistance($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('DisableUnpaidItemAssistance', $request);
	}

	/**
	 * @return EndFixedPriceItemResponseType
	 * @param EndFixedPriceItemRequestType
	 **/
	function EndFixedPriceItem($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('EndFixedPriceItem', $request);
	}

	/**
	 * @return EndItemResponseType
	 * @param EndItemRequestType
	 **/
	function EndItem($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('EndItem', $request);
	}

	/**
	 * @return EndItemsResponseType
	 * @param EndItemsRequestType
	 **/
	function EndItems($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('EndItems', $request);
	}

	/**
	 * @return ExtendSiteHostedPicturesResponseType
	 * @param ExtendSiteHostedPicturesRequestType
	 **/
	function ExtendSiteHostedPictures($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('ExtendSiteHostedPictures', $request);
	}

	/**
	 * @return FetchTokenResponseType
	 * @param FetchTokenRequestType
	 **/
	function FetchToken($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('FetchToken', $request);
	}

	/**
	 * @return GetAccountResponseType
	 * @param GetAccountRequestType
	 **/
	function GetAccount($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('GetAccount', $request);
	}

	/**
	 * @return GetAdFormatLeadsResponseType
	 * @param GetAdFormatLeadsRequestType
	 **/
	function GetAdFormatLeads($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('GetAdFormatLeads', $request);
	}

	/**
	 * @return GetAllBiddersResponseType
	 * @param GetAllBiddersRequestType
	 **/
	function GetAllBidders($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('GetAllBidders', $request);
	}

	/**
	 * @return GetApiAccessRulesResponseType
	 * @param GetApiAccessRulesRequestType
	 **/
	function GetApiAccessRules($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('GetApiAccessRules', $request);
	}

	/**
	 * @return GetAttributesCSResponseType
	 * @param GetAttributesCSRequestType
	 **/
	function GetAttributesCS($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('GetAttributesCS', $request);
	}

	/**
	 * @return GetAttributesXSLResponseType
	 * @param GetAttributesXSLRequestType
	 **/
	function GetAttributesXSL($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('GetAttributesXSL', $request);
	}

	/**
	 * @return GetBestOffersResponseType
	 * @param GetBestOffersRequestType
	 **/
	function GetBestOffers($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('GetBestOffers', $request);
	}

	/**
	 * @return GetBidderListResponseType
	 * @param GetBidderListRequestType
	 **/
	function GetBidderList($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('GetBidderList', $request);
	}

	/**
	 * @return GetCategoriesResponseType
	 * @param GetCategoriesRequestType
	 **/
	function GetCategories($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('GetCategories', $request);
	}

	/**
	 * @return GetCategory2CSResponseType
	 * @param GetCategory2CSRequestType
	 **/
	function GetCategory2CS($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('GetCategory2CS', $request);
	}

	/**
	 * @return GetCategoryFeaturesResponseType
	 * @param GetCategoryFeaturesRequestType
	 **/
	function GetCategoryFeatures($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('GetCategoryFeatures', $request);
	}

	/**
	 * @return GetCategoryMappingsResponseType
	 * @param GetCategoryMappingsRequestType
	 **/
	function GetCategoryMappings($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('GetCategoryMappings', $request);
	}

	/**
	 * @return GetCategorySpecificsResponseType
	 * @param GetCategorySpecificsRequestType
	 **/
	function GetCategorySpecifics($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('GetCategorySpecifics', $request);
	}

	/**
	 * @return GetChallengeTokenResponseType
	 * @param GetChallengeTokenRequestType
	 **/
	function GetChallengeToken($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('GetChallengeToken', $request);
	}

	/**
	 * @return GetCharitiesResponseType
	 * @param GetCharitiesRequestType
	 **/
	function GetCharities($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('GetCharities', $request);
	}

	/**
	 * @return GetClientAlertsAuthTokenResponseType
	 * @param GetClientAlertsAuthTokenRequestType
	 **/
	function GetClientAlertsAuthToken($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('GetClientAlertsAuthToken', $request);
	}

	/**
	 * @return GetContextualKeywordsResponseType
	 * @param GetContextualKeywordsRequestType
	 **/
	function GetContextualKeywords($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('GetContextualKeywords', $request);
	}

	/**
	 * @return GetCrossPromotionsResponseType
	 * @param GetCrossPromotionsRequestType
	 **/
	function GetCrossPromotions($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('GetCrossPromotions', $request);
	}

	/**
	 * @return GetDescriptionTemplatesResponseType
	 * @param GetDescriptionTemplatesRequestType
	 **/
	function GetDescriptionTemplates($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('GetDescriptionTemplates', $request);
	}

	/**
	 * @return GetDisputeResponseType
	 * @param GetDisputeRequestType
	 **/
	function GetDispute($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('GetDispute', $request);
	}

	/**
	 * @return GetFeedbackResponseType
	 * @param GetFeedbackRequestType
	 **/
	function GetFeedback($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('GetFeedback', $request);
	}

	/**
	 * @return GetHighBiddersResponseType
	 * @param GetHighBiddersRequestType
	 **/
	function GetHighBidders($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('GetHighBidders', $request);
	}

	/**
	 * @return GetItemResponseType
	 * @param GetItemRequestType
	 **/
	function GetItem($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('GetItem', $request);
	}

	/**
	 * @return GetItemRecommendationsResponseType
	 * @param GetItemRecommendationsRequestType
	 **/
	function GetItemRecommendations($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('GetItemRecommendations', $request);
	}

	/**
	 * @return GetItemShippingResponseType
	 * @param GetItemShippingRequestType
	 **/
	function GetItemShipping($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('GetItemShipping', $request);
	}

	/**
	 * @return GetItemTransactionsResponseType
	 * @param GetItemTransactionsRequestType
	 **/
	function GetItemTransactions($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('GetItemTransactions', $request);
	}

	/**
	 * @return GetItemsAwaitingFeedbackResponseType
	 * @param GetItemsAwaitingFeedbackRequestType
	 **/
	function GetItemsAwaitingFeedback($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('GetItemsAwaitingFeedback', $request);
	}

	/**
	 * @return GetMemberMessagesResponseType
	 * @param GetMemberMessagesRequestType
	 **/
	function GetMemberMessages($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('GetMemberMessages', $request);
	}

	/**
	 * @return GetMessagePreferencesResponseType
	 * @param GetMessagePreferencesRequestType
	 **/
	function GetMessagePreferences($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('GetMessagePreferences', $request);
	}

	/**
	 * @return GetMyMessagesResponseType
	 * @param GetMyMessagesRequestType
	 **/
	function GetMyMessages($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('GetMyMessages', $request);
	}

	/**
	 * @return GetMyeBayBuyingResponseType
	 * @param GetMyeBayBuyingRequestType
	 **/
	function GetMyeBayBuying($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('GetMyeBayBuying', $request);
	}

	/**
	 * @return GetMyeBayRemindersResponseType
	 * @param GetMyeBayRemindersRequestType
	 **/
	function GetMyeBayReminders($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('GetMyeBayReminders', $request);
	}

	/**
	 * @return GetMyeBaySellingResponseType
	 * @param GetMyeBaySellingRequestType
	 **/
	function GetMyeBaySelling($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('GetMyeBaySelling', $request);
	}

	/**
	 * @return GetNotificationPreferencesResponseType
	 * @param GetNotificationPreferencesRequestType
	 **/
	function GetNotificationPreferences($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('GetNotificationPreferences', $request);
	}

	/**
	 * @return GetNotificationsUsageResponseType
	 * @param GetNotificationsUsageRequestType
	 **/
	function GetNotificationsUsage($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('GetNotificationsUsage', $request);
	}

	/**
	 * @return GetOrderTransactionsResponseType
	 * @param GetOrderTransactionsRequestType
	 **/
	function GetOrderTransactions($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('GetOrderTransactions', $request);
	}

	/**
	 * @return GetOrdersResponseType
	 * @param GetOrdersRequestType
	 **/
	function GetOrders($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('GetOrders', $request);
	}

	/**
	 * @return GetPictureManagerDetailsResponseType
	 * @param GetPictureManagerDetailsRequestType
	 **/
	function GetPictureManagerDetails($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('GetPictureManagerDetails', $request);
	}

	/**
	 * @return GetPictureManagerOptionsResponseType
	 * @param GetPictureManagerOptionsRequestType
	 **/
	function GetPictureManagerOptions($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('GetPictureManagerOptions', $request);
	}

	/**
	 * @return GetProductFamilyMembersResponseType
	 * @param GetProductFamilyMembersRequestType
	 **/
	function GetProductFamilyMembers($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('GetProductFamilyMembers', $request);
	}

	/**
	 * @return GetProductFinderResponseType
	 * @param GetProductFinderRequestType
	 **/
	function GetProductFinder($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('GetProductFinder', $request);
	}

	/**
	 * @return GetProductFinderXSLResponseType
	 * @param GetProductFinderXSLRequestType
	 **/
	function GetProductFinderXSL($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('GetProductFinderXSL', $request);
	}

	/**
	 * @return GetProductSearchPageResponseType
	 * @param GetProductSearchPageRequestType
	 **/
	function GetProductSearchPage($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('GetProductSearchPage', $request);
	}

	/**
	 * @return GetProductSearchResultsResponseType
	 * @param GetProductSearchResultsRequestType
	 **/
	function GetProductSearchResults($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('GetProductSearchResults', $request);
	}

	/**
	 * @return GetProductSellingPagesResponseType
	 * @param GetProductSellingPagesRequestType
	 **/
	function GetProductSellingPages($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('GetProductSellingPages', $request);
	}

	/**
	 * @return GetPromotionRulesResponseType
	 * @param GetPromotionRulesRequestType
	 **/
	function GetPromotionRules($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('GetPromotionRules', $request);
	}

	/**
	 * @return GetPromotionalSaleDetailsResponseType
	 * @param GetPromotionalSaleDetailsRequestType
	 **/
	function GetPromotionalSaleDetails($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('GetPromotionalSaleDetails', $request);
	}

	/**
	 * @return GetSellerDashboardResponseType
	 * @param GetSellerDashboardRequestType
	 **/
	function GetSellerDashboard($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('GetSellerDashboard', $request);
	}

	/**
	 * @return GetSellerEventsResponseType
	 * @param GetSellerEventsRequestType
	 **/
	function GetSellerEvents($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('GetSellerEvents', $request);
	}

	/**
	 * @return GetSellerListResponseType
	 * @param GetSellerListRequestType
	 **/
	function GetSellerList($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('GetSellerList', $request);
	}

	/**
	 * @return GetSellerPaymentsResponseType
	 * @param GetSellerPaymentsRequestType
	 **/
	function GetSellerPayments($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('GetSellerPayments', $request);
	}

	/**
	 * @return GetSellerTransactionsResponseType
	 * @param GetSellerTransactionsRequestType
	 **/
	function GetSellerTransactions($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('GetSellerTransactions', $request);
	}

	/**
	 * @return GetSellingManagerAlertsResponseType
	 * @param GetSellingManagerAlertsRequestType
	 **/
	function GetSellingManagerAlerts($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('GetSellingManagerAlerts', $request);
	}

	/**
	 * @return GetSellingManagerEmailLogResponseType
	 * @param GetSellingManagerEmailLogRequestType
	 **/
	function GetSellingManagerEmailLog($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('GetSellingManagerEmailLog', $request);
	}

	/**
	 * @return GetSellingManagerInventoryResponseType
	 * @param GetSellingManagerInventoryRequestType
	 **/
	function GetSellingManagerInventory($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('GetSellingManagerInventory', $request);
	}

	/**
	 * @return GetSellingManagerInventoryFolderResponseType
	 * @param GetSellingManagerInventoryFolderRequestType
	 **/
	function GetSellingManagerInventoryFolder($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('GetSellingManagerInventoryFolder', $request);
	}

	/**
	 * @return GetSellingManagerItemAutomationRuleResponseType
	 * @param GetSellingManagerItemAutomationRuleRequestType
	 **/
	function GetSellingManagerItemAutomationRule($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('GetSellingManagerItemAutomationRule', $request);
	}

	/**
	 * @return GetSellingManagerSaleRecordResponseType
	 * @param GetSellingManagerSaleRecordRequestType
	 **/
	function GetSellingManagerSaleRecord($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('GetSellingManagerSaleRecord', $request);
	}

	/**
	 * @return GetSellingManagerSoldListingsResponseType
	 * @param GetSellingManagerSoldListingsRequestType
	 **/
	function GetSellingManagerSoldListings($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('GetSellingManagerSoldListings', $request);
	}

	/**
	 * @return GetSellingManagerTemplateAutomationRuleResponseType
	 * @param GetSellingManagerTemplateAutomationRuleRequestType
	 **/
	function GetSellingManagerTemplateAutomationRule($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('GetSellingManagerTemplateAutomationRule', $request);
	}

	/**
	 * @return GetSellingManagerTemplatesResponseType
	 * @param GetSellingManagerTemplatesRequestType
	 **/
	function GetSellingManagerTemplates($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('GetSellingManagerTemplates', $request);
	}

	/**
	 * @return GetSessionIDResponseType
	 * @param GetSessionIDRequestType
	 **/
	function GetSessionID($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('GetSessionID', $request);
	}

	/**
	 * @return GetShippingDiscountProfilesResponseType
	 * @param GetShippingDiscountProfilesRequestType
	 **/
	function GetShippingDiscountProfiles($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('GetShippingDiscountProfiles', $request);
	}

	/**
	 * @return GetStoreResponseType
	 * @param GetStoreRequestType
	 **/
	function GetStore($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('GetStore', $request);
	}

	/**
	 * @return GetStoreCategoryUpdateStatusResponseType
	 * @param GetStoreCategoryUpdateStatusRequestType
	 **/
	function GetStoreCategoryUpdateStatus($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('GetStoreCategoryUpdateStatus', $request);
	}

	/**
	 * @return GetStoreCustomPageResponseType
	 * @param GetStoreCustomPageRequestType
	 **/
	function GetStoreCustomPage($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('GetStoreCustomPage', $request);
	}

	/**
	 * @return GetStoreOptionsResponseType
	 * @param GetStoreOptionsRequestType
	 **/
	function GetStoreOptions($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('GetStoreOptions', $request);
	}

	/**
	 * @return GetStorePreferencesResponseType
	 * @param GetStorePreferencesRequestType
	 **/
	function GetStorePreferences($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('GetStorePreferences', $request);
	}

	/**
	 * @return GetSuggestedCategoriesResponseType
	 * @param GetSuggestedCategoriesRequestType
	 **/
	function GetSuggestedCategories($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('GetSuggestedCategories', $request);
	}

	/**
	 * @return GetTaxTableResponseType
	 * @param GetTaxTableRequestType
	 **/
	function GetTaxTable($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('GetTaxTable', $request);
	}

	/**
	 * @return GetTokenStatusResponseType
	 * @param GetTokenStatusRequestType
	 **/
	function GetTokenStatus($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('GetTokenStatus', $request);
	}

	/**
	 * @return GetUserResponseType
	 * @param GetUserRequestType
	 **/
	function GetUser($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('GetUser', $request);
	}

	/**
	 * @return GetUserContactDetailsResponseType
	 * @param GetUserContactDetailsRequestType
	 **/
	function GetUserContactDetails($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('GetUserContactDetails', $request);
	}

	/**
	 * @return GetUserDisputesResponseType
	 * @param GetUserDisputesRequestType
	 **/
	function GetUserDisputes($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('GetUserDisputes', $request);
	}

	/**
	 * @return GetUserPreferencesResponseType
	 * @param GetUserPreferencesRequestType
	 **/
	function GetUserPreferences($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('GetUserPreferences', $request);
	}

	/**
	 * @return GetVeROReasonCodeDetailsResponseType
	 * @param GetVeROReasonCodeDetailsRequestType
	 **/
	function GetVeROReasonCodeDetails($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('GetVeROReasonCodeDetails', $request);
	}

	/**
	 * @return GetVeROReportStatusResponseType
	 * @param GetVeROReportStatusRequestType
	 **/
	function GetVeROReportStatus($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('GetVeROReportStatus', $request);
	}

	/**
	 * @return GetWantItNowPostResponseType
	 * @param GetWantItNowPostRequestType
	 **/
	function GetWantItNowPost($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('GetWantItNowPost', $request);
	}

	/**
	 * @return GetWantItNowSearchResultsResponseType
	 * @param GetWantItNowSearchResultsRequestType
	 **/
	function GetWantItNowSearchResults($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('GetWantItNowSearchResults', $request);
	}

	/**
	 * @return GeteBayDetailsResponseType
	 * @param GeteBayDetailsRequestType
	 **/
	function GeteBayDetails($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('GeteBayDetails', $request);
	}

	/**
	 * @return GeteBayOfficialTimeResponseType
	 * @param GeteBayOfficialTimeRequestType
	 **/
	function GeteBayOfficialTime($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('GeteBayOfficialTime', $request);
	}

	/**
	 * @return IssueRefundResponseType
	 * @param IssueRefundRequestType
	 **/
	function IssueRefund($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('IssueRefund', $request);
	}

	/**
	 * @return LeaveFeedbackResponseType
	 * @param LeaveFeedbackRequestType
	 **/
	function LeaveFeedback($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('LeaveFeedback', $request);
	}

	/**
	 * @return MoveSellingManagerInventoryFolderResponseType
	 * @param MoveSellingManagerInventoryFolderRequestType
	 **/
	function MoveSellingManagerInventoryFolder($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('MoveSellingManagerInventoryFolder', $request);
	}

	/**
	 * @return PlaceOfferResponseType
	 * @param PlaceOfferRequestType
	 **/
	function PlaceOffer($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('PlaceOffer', $request);
	}

	/**
	 * @return RelistFixedPriceItemResponseType
	 * @param RelistFixedPriceItemRequestType
	 **/
	function RelistFixedPriceItem($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('RelistFixedPriceItem', $request);
	}

	/**
	 * @return RelistItemResponseType
	 * @param RelistItemRequestType
	 **/
	function RelistItem($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('RelistItem', $request);
	}

	/**
	 * @return RemoveFromWatchListResponseType
	 * @param RemoveFromWatchListRequestType
	 **/
	function RemoveFromWatchList($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('RemoveFromWatchList', $request);
	}

	/**
	 * @return RespondToBestOfferResponseType
	 * @param RespondToBestOfferRequestType
	 **/
	function RespondToBestOffer($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('RespondToBestOffer', $request);
	}

	/**
	 * @return RespondToFeedbackResponseType
	 * @param RespondToFeedbackRequestType
	 **/
	function RespondToFeedback($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('RespondToFeedback', $request);
	}

	/**
	 * @return RespondToWantItNowPostResponseType
	 * @param RespondToWantItNowPostRequestType
	 **/
	function RespondToWantItNowPost($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('RespondToWantItNowPost', $request);
	}

	/**
	 * @return ReviseCheckoutStatusResponseType
	 * @param ReviseCheckoutStatusRequestType
	 **/
	function ReviseCheckoutStatus($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('ReviseCheckoutStatus', $request);
	}

	/**
	 * @return ReviseFixedPriceItemResponseType
	 * @param ReviseFixedPriceItemRequestType
	 **/
	function ReviseFixedPriceItem($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('ReviseFixedPriceItem', $request);
	}

	/**
	 * @return ReviseInventoryStatusResponseType
	 * @param ReviseInventoryStatusRequestType
	 **/
	function ReviseInventoryStatus($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('ReviseInventoryStatus', $request);
	}

	/**
	 * @return ReviseItemResponseType
	 * @param ReviseItemRequestType
	 **/
	function ReviseItem($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('ReviseItem', $request);
	}

	/**
	 * @return ReviseMyMessagesResponseType
	 * @param ReviseMyMessagesRequestType
	 **/
	function ReviseMyMessages($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('ReviseMyMessages', $request);
	}

	/**
	 * @return ReviseMyMessagesFoldersResponseType
	 * @param ReviseMyMessagesFoldersRequestType
	 **/
	function ReviseMyMessagesFolders($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('ReviseMyMessagesFolders', $request);
	}

	/**
	 * @return ReviseSellingManagerInventoryFolderResponseType
	 * @param ReviseSellingManagerInventoryFolderRequestType
	 **/
	function ReviseSellingManagerInventoryFolder($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('ReviseSellingManagerInventoryFolder', $request);
	}

	/**
	 * @return ReviseSellingManagerProductResponseType
	 * @param ReviseSellingManagerProductRequestType
	 **/
	function ReviseSellingManagerProduct($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('ReviseSellingManagerProduct', $request);
	}

	/**
	 * @return ReviseSellingManagerSaleRecordResponseType
	 * @param ReviseSellingManagerSaleRecordRequestType
	 **/
	function ReviseSellingManagerSaleRecord($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('ReviseSellingManagerSaleRecord', $request);
	}

	/**
	 * @return ReviseSellingManagerTemplateResponseType
	 * @param ReviseSellingManagerTemplateRequestType
	 **/
	function ReviseSellingManagerTemplate($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('ReviseSellingManagerTemplate', $request);
	}

	/**
	 * @return RevokeTokenResponseType
	 * @param RevokeTokenRequestType
	 **/
	function RevokeToken($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('RevokeToken', $request);
	}

	/**
	 * @return SaveItemToSellingManagerTemplateResponseType
	 * @param SaveItemToSellingManagerTemplateRequestType
	 **/
	function SaveItemToSellingManagerTemplate($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('SaveItemToSellingManagerTemplate', $request);
	}

	/**
	 * @return SellerReverseDisputeResponseType
	 * @param SellerReverseDisputeRequestType
	 **/
	function SellerReverseDispute($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('SellerReverseDispute', $request);
	}

	/**
	 * @return SendInvoiceResponseType
	 * @param SendInvoiceRequestType
	 **/
	function SendInvoice($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('SendInvoice', $request);
	}

	/**
	 * @return SetMessagePreferencesResponseType
	 * @param SetMessagePreferencesRequestType
	 **/
	function SetMessagePreferences($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('SetMessagePreferences', $request);
	}

	/**
	 * @return SetNotificationPreferencesResponseType
	 * @param SetNotificationPreferencesRequestType
	 **/
	function SetNotificationPreferences($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('SetNotificationPreferences', $request);
	}

	/**
	 * @return SetPictureManagerDetailsResponseType
	 * @param SetPictureManagerDetailsRequestType
	 **/
	function SetPictureManagerDetails($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('SetPictureManagerDetails', $request);
	}

	/**
	 * @return SetPromotionalSaleResponseType
	 * @param SetPromotionalSaleRequestType
	 **/
	function SetPromotionalSale($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('SetPromotionalSale', $request);
	}

	/**
	 * @return SetPromotionalSaleListingsResponseType
	 * @param SetPromotionalSaleListingsRequestType
	 **/
	function SetPromotionalSaleListings($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('SetPromotionalSaleListings', $request);
	}

	/**
	 * @return SetSellingManagerFeedbackOptionsResponseType
	 * @param SetSellingManagerFeedbackOptionsRequestType
	 **/
	function SetSellingManagerFeedbackOptions($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('SetSellingManagerFeedbackOptions', $request);
	}

	/**
	 * @return SetSellingManagerItemAutomationRuleResponseType
	 * @param SetSellingManagerItemAutomationRuleRequestType
	 **/
	function SetSellingManagerItemAutomationRule($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('SetSellingManagerItemAutomationRule', $request);
	}

	/**
	 * @return SetSellingManagerTemplateAutomationRuleResponseType
	 * @param SetSellingManagerTemplateAutomationRuleRequestType
	 **/
	function SetSellingManagerTemplateAutomationRule($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('SetSellingManagerTemplateAutomationRule', $request);
	}

	/**
	 * @return SetShippingDiscountProfilesResponseType
	 * @param SetShippingDiscountProfilesRequestType
	 **/
	function SetShippingDiscountProfiles($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('SetShippingDiscountProfiles', $request);
	}

	/**
	 * @return SetStoreResponseType
	 * @param SetStoreRequestType
	 **/
	function SetStore($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('SetStore', $request);
	}

	/**
	 * @return SetStoreCategoriesResponseType
	 * @param SetStoreCategoriesRequestType
	 **/
	function SetStoreCategories($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('SetStoreCategories', $request);
	}

	/**
	 * @return SetStoreCustomPageResponseType
	 * @param SetStoreCustomPageRequestType
	 **/
	function SetStoreCustomPage($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('SetStoreCustomPage', $request);
	}

	/**
	 * @return SetStorePreferencesResponseType
	 * @param SetStorePreferencesRequestType
	 **/
	function SetStorePreferences($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('SetStorePreferences', $request);
	}

	/**
	 * @return SetTaxTableResponseType
	 * @param SetTaxTableRequestType
	 **/
	function SetTaxTable($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('SetTaxTable', $request);
	}

	/**
	 * @return SetUserNotesResponseType
	 * @param SetUserNotesRequestType
	 **/
	function SetUserNotes($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('SetUserNotes', $request);
	}

	/**
	 * @return SetUserPreferencesResponseType
	 * @param SetUserPreferencesRequestType
	 **/
	function SetUserPreferences($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('SetUserPreferences', $request);
	}

	/**
	 * @return UploadSiteHostedPicturesResponseType
	 * @param UploadSiteHostedPicturesRequestType
	 **/
	function UploadSiteHostedPictures($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->callXmlStyle('UploadSiteHostedPictures', $request);
	}

	/**
	 * @return ValidateChallengeInputResponseType
	 * @param ValidateChallengeInputRequestType
	 **/
	function ValidateChallengeInput($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('ValidateChallengeInput', $request);
	}

	/**
	 * @return ValidateTestUserRegistrationResponseType
	 * @param ValidateTestUserRegistrationRequestType
	 **/
	function ValidateTestUserRegistration($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('ValidateTestUserRegistration', $request);
	}

	/**
	 * @return VeROReportItemsResponseType
	 * @param VeROReportItemsRequestType
	 **/
	function VeROReportItems($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('VeROReportItems', $request);
	}

	/**
	 * @return VerifyAddFixedPriceItemResponseType
	 * @param VerifyAddFixedPriceItemRequestType
	 **/
	function VerifyAddFixedPriceItem($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('VerifyAddFixedPriceItem', $request);
	}

	/**
	 * @return VerifyAddItemResponseType
	 * @param VerifyAddItemRequestType
	 **/
	function VerifyAddItem($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('VerifyAddItem', $request);
	}

	/**
	 * @return VerifyAddSecondChanceItemResponseType
	 * @param VerifyAddSecondChanceItemRequestType
	 **/
	function VerifyAddSecondChanceItem($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('VerifyAddSecondChanceItem', $request);
	}

	/**
	 * @return VerifyRelistItemResponseType
	 * @param VerifyRelistItemRequestType
	 **/
	function VerifyRelistItem($request)
	{
		$request->setVersion(EBAY_WSDL_VERSION);
		return $this->call('VerifyRelistItem', $request);
	}


}
?>

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
 * Retrieves the specified user preferences for the authenticated caller.
 **/
class GetUserPreferencesRequestType extends AbstractRequestType
{
    const TAG = 'GetUserPreferencesRequest';
    const NAME = 'GetUserPreferencesRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'GetUserPreferences';

    /**
     * @var bool|null "true" or "false"
     */
    protected $ShowBidderNoticePreferences = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $ShowCombinedPaymentPreferences = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $ShowCrossPromotionPreferences = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $ShowSellerPaymentPreferences = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $ShowEndOfAuctionEmailPreferences = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $ShowSellerFavoriteItemPreferences = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $ShowProStoresPreferences = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $ShowEmailShipmentTrackingNumberPreference = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $ShowRequiredShipPhoneNumberPreference = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $ShowSellerExcludeShipToLocationPreference = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $ShowUnpaidItemAssistancePreference = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $ShowPurchaseReminderEmailPreferences = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $ShowUnpaidItemAssistanceExclusionList = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $ShowSellerProfilePreferences = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $ShowSellerReturnPreferences = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $ShowGlobalShippingProgramPreference = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $ShowDispatchCutoffTimePreferences = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $ShowGlobalShippingProgramListingPreference = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $ShowOverrideGSPServiceWithIntlServicePreference = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $ShowPickupDropoffPreferences = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $ShowOutOfStockControlPreference = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $ShoweBayPLUSPreference = null;


    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShowBidderNoticePreferences()
    {
        return $this->_dc($this->ShowBidderNoticePreferences === 'true', 'ShowBidderNoticePreferences');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setShowBidderNoticePreferences($value)
    {
        $this->ShowBidderNoticePreferences = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShowCombinedPaymentPreferences()
    {
        return $this->_dc($this->ShowCombinedPaymentPreferences === 'true', 'ShowCombinedPaymentPreferences');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setShowCombinedPaymentPreferences($value)
    {
        $this->ShowCombinedPaymentPreferences = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShowCrossPromotionPreferences()
    {
        return $this->_dc($this->ShowCrossPromotionPreferences === 'true', 'ShowCrossPromotionPreferences');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setShowCrossPromotionPreferences($value)
    {
        $this->ShowCrossPromotionPreferences = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShowSellerPaymentPreferences()
    {
        return $this->_dc($this->ShowSellerPaymentPreferences === 'true', 'ShowSellerPaymentPreferences');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setShowSellerPaymentPreferences($value)
    {
        $this->ShowSellerPaymentPreferences = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShowEndOfAuctionEmailPreferences()
    {
        return $this->_dc($this->ShowEndOfAuctionEmailPreferences === 'true', 'ShowEndOfAuctionEmailPreferences');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setShowEndOfAuctionEmailPreferences($value)
    {
        $this->ShowEndOfAuctionEmailPreferences = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShowSellerFavoriteItemPreferences()
    {
        return $this->_dc($this->ShowSellerFavoriteItemPreferences === 'true', 'ShowSellerFavoriteItemPreferences');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setShowSellerFavoriteItemPreferences($value)
    {
        $this->ShowSellerFavoriteItemPreferences = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShowProStoresPreferences()
    {
        return $this->_dc($this->ShowProStoresPreferences === 'true', 'ShowProStoresPreferences');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setShowProStoresPreferences($value)
    {
        $this->ShowProStoresPreferences = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShowEmailShipmentTrackingNumberPreference()
    {
        return $this->_dc($this->ShowEmailShipmentTrackingNumberPreference === 'true', 'ShowEmailShipmentTrackingNumberPreference');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setShowEmailShipmentTrackingNumberPreference($value)
    {
        $this->ShowEmailShipmentTrackingNumberPreference = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShowRequiredShipPhoneNumberPreference()
    {
        return $this->_dc($this->ShowRequiredShipPhoneNumberPreference === 'true', 'ShowRequiredShipPhoneNumberPreference');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setShowRequiredShipPhoneNumberPreference($value)
    {
        $this->ShowRequiredShipPhoneNumberPreference = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShowSellerExcludeShipToLocationPreference()
    {
        return $this->_dc($this->ShowSellerExcludeShipToLocationPreference === 'true', 'ShowSellerExcludeShipToLocationPreference');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setShowSellerExcludeShipToLocationPreference($value)
    {
        $this->ShowSellerExcludeShipToLocationPreference = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShowUnpaidItemAssistancePreference()
    {
        return $this->_dc($this->ShowUnpaidItemAssistancePreference === 'true', 'ShowUnpaidItemAssistancePreference');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setShowUnpaidItemAssistancePreference($value)
    {
        $this->ShowUnpaidItemAssistancePreference = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShowPurchaseReminderEmailPreferences()
    {
        return $this->_dc($this->ShowPurchaseReminderEmailPreferences === 'true', 'ShowPurchaseReminderEmailPreferences');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setShowPurchaseReminderEmailPreferences($value)
    {
        $this->ShowPurchaseReminderEmailPreferences = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShowUnpaidItemAssistanceExclusionList()
    {
        return $this->_dc($this->ShowUnpaidItemAssistanceExclusionList === 'true', 'ShowUnpaidItemAssistanceExclusionList');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setShowUnpaidItemAssistanceExclusionList($value)
    {
        $this->ShowUnpaidItemAssistanceExclusionList = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShowSellerProfilePreferences()
    {
        return $this->_dc($this->ShowSellerProfilePreferences === 'true', 'ShowSellerProfilePreferences');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setShowSellerProfilePreferences($value)
    {
        $this->ShowSellerProfilePreferences = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShowSellerReturnPreferences()
    {
        return $this->_dc($this->ShowSellerReturnPreferences === 'true', 'ShowSellerReturnPreferences');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setShowSellerReturnPreferences($value)
    {
        $this->ShowSellerReturnPreferences = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShowGlobalShippingProgramPreference()
    {
        return $this->_dc($this->ShowGlobalShippingProgramPreference === 'true', 'ShowGlobalShippingProgramPreference');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setShowGlobalShippingProgramPreference($value)
    {
        $this->ShowGlobalShippingProgramPreference = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShowDispatchCutoffTimePreferences()
    {
        return $this->_dc($this->ShowDispatchCutoffTimePreferences === 'true', 'ShowDispatchCutoffTimePreferences');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setShowDispatchCutoffTimePreferences($value)
    {
        $this->ShowDispatchCutoffTimePreferences = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShowGlobalShippingProgramListingPreference()
    {
        return $this->_dc($this->ShowGlobalShippingProgramListingPreference === 'true', 'ShowGlobalShippingProgramListingPreference');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setShowGlobalShippingProgramListingPreference($value)
    {
        $this->ShowGlobalShippingProgramListingPreference = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShowOverrideGSPServiceWithIntlServicePreference()
    {
        return $this->_dc($this->ShowOverrideGSPServiceWithIntlServicePreference === 'true', 'ShowOverrideGSPServiceWithIntlServicePreference');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setShowOverrideGSPServiceWithIntlServicePreference($value)
    {
        $this->ShowOverrideGSPServiceWithIntlServicePreference = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShowPickupDropoffPreferences()
    {
        return $this->_dc($this->ShowPickupDropoffPreferences === 'true', 'ShowPickupDropoffPreferences');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setShowPickupDropoffPreferences($value)
    {
        $this->ShowPickupDropoffPreferences = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShowOutOfStockControlPreference()
    {
        return $this->_dc($this->ShowOutOfStockControlPreference === 'true', 'ShowOutOfStockControlPreference');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setShowOutOfStockControlPreference($value)
    {
        $this->ShowOutOfStockControlPreference = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShoweBayPLUSPreference()
    {
        return $this->_dc($this->ShoweBayPLUSPreference === 'true', 'ShoweBayPLUSPreference');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setShoweBayPLUSPreference($value)
    {
        $this->ShoweBayPLUSPreference = self::_bool($value);
    }

    /**
     * @return GetUserPreferencesResponseType|EbatNs_ResponseError
     * @param EbatNs_Client
     **/
    function call($client)
    {
        return $client->call(self::REQUEST, $this);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'ShowBidderNoticePreferences' => ['type' => 'bool'],
            'ShowCombinedPaymentPreferences' => ['type' => 'bool'],
            'ShowCrossPromotionPreferences' => ['type' => 'bool'],
            'ShowSellerPaymentPreferences' => ['type' => 'bool'],
            'ShowEndOfAuctionEmailPreferences' => ['type' => 'bool'],
            'ShowSellerFavoriteItemPreferences' => ['type' => 'bool'],
            'ShowProStoresPreferences' => ['type' => 'bool'],
            'ShowEmailShipmentTrackingNumberPreference' => ['type' => 'bool'],
            'ShowRequiredShipPhoneNumberPreference' => ['type' => 'bool'],
            'ShowSellerExcludeShipToLocationPreference' => ['type' => 'bool'],
            'ShowUnpaidItemAssistancePreference' => ['type' => 'bool'],
            'ShowPurchaseReminderEmailPreferences' => ['type' => 'bool'],
            'ShowUnpaidItemAssistanceExclusionList' => ['type' => 'bool'],
            'ShowSellerProfilePreferences' => ['type' => 'bool'],
            'ShowSellerReturnPreferences' => ['type' => 'bool'],
            'ShowGlobalShippingProgramPreference' => ['type' => 'bool'],
            'ShowDispatchCutoffTimePreferences' => ['type' => 'bool'],
            'ShowGlobalShippingProgramListingPreference' => ['type' => 'bool'],
            'ShowOverrideGSPServiceWithIntlServicePreference' => ['type' => 'bool'],
            'ShowPickupDropoffPreferences' => ['type' => 'bool'],
            'ShowOutOfStockControlPreference' => ['type' => 'bool'],
            'ShoweBayPLUSPreference' => ['type' => 'bool']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

GetUserPreferencesRequestType::_register();

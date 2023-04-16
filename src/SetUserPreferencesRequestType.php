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
 * This call allows an eBay user to set/modify numerous seller account preferences.
 **/
class SetUserPreferencesRequestType extends AbstractRequestType
{
    const TAG = 'SetUserPreferencesRequest';
    const NAME = 'SetUserPreferencesRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'SetUserPreferences';

    /**
     * @var BidderNoticePreferencesType|null
     */
    protected $BidderNoticePreferences = null;

    /**
     * @var CombinedPaymentPreferencesType|null
     */
    protected $CombinedPaymentPreferences = null;

    /**
     * @var CrossPromotionPreferencesType|null
     */
    protected $CrossPromotionPreferences = null;

    /**
     * @var SellerPaymentPreferencesType|null
     */
    protected $SellerPaymentPreferences = null;

    /**
     * @var SellerFavoriteItemPreferencesType|null
     */
    protected $SellerFavoriteItemPreferences = null;

    /**
     * @var EndOfAuctionEmailPreferencesType|null
     */
    protected $EndOfAuctionEmailPreferences = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $EmailShipmentTrackingNumberPreference = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $RequiredShipPhoneNumberPreference = null;

    /**
     * @var UnpaidItemAssistancePreferencesType|null
     */
    protected $UnpaidItemAssistancePreferences = null;

    /**
     * @var PurchaseReminderEmailPreferencesType|null
     */
    protected $PurchaseReminderEmailPreferences = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $SellerThirdPartyCheckoutDisabled = null;

    /**
     * @var DispatchCutoffTimePreferencesType|null
     */
    protected $DispatchCutoffTimePreference = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $GlobalShippingProgramListingPreference = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $OverrideGSPserviceWithIntlService = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $OutOfStockControlPreference = null;


    /**
     * @return BidderNoticePreferencesType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBidderNoticePreferences()
    {
        return $this->_dc($this->BidderNoticePreferences, 'BidderNoticePreferences');
    }

    /**
     * @param BidderNoticePreferencesType|null $value
     * @return void
     */
    public function setBidderNoticePreferences($value)
    {
        $this->BidderNoticePreferences = $value;
    }

    /**
     * @return CombinedPaymentPreferencesType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCombinedPaymentPreferences()
    {
        return $this->_dc($this->CombinedPaymentPreferences, 'CombinedPaymentPreferences');
    }

    /**
     * @param CombinedPaymentPreferencesType|null $value
     * @return void
     */
    public function setCombinedPaymentPreferences($value)
    {
        $this->CombinedPaymentPreferences = $value;
    }

    /**
     * @return CrossPromotionPreferencesType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCrossPromotionPreferences()
    {
        return $this->_dc($this->CrossPromotionPreferences, 'CrossPromotionPreferences');
    }

    /**
     * @param CrossPromotionPreferencesType|null $value
     * @return void
     */
    public function setCrossPromotionPreferences($value)
    {
        $this->CrossPromotionPreferences = $value;
    }

    /**
     * @return SellerPaymentPreferencesType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSellerPaymentPreferences()
    {
        return $this->_dc($this->SellerPaymentPreferences, 'SellerPaymentPreferences');
    }

    /**
     * @param SellerPaymentPreferencesType|null $value
     * @return void
     */
    public function setSellerPaymentPreferences($value)
    {
        $this->SellerPaymentPreferences = $value;
    }

    /**
     * @return SellerFavoriteItemPreferencesType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSellerFavoriteItemPreferences()
    {
        return $this->_dc($this->SellerFavoriteItemPreferences, 'SellerFavoriteItemPreferences');
    }

    /**
     * @param SellerFavoriteItemPreferencesType|null $value
     * @return void
     */
    public function setSellerFavoriteItemPreferences($value)
    {
        $this->SellerFavoriteItemPreferences = $value;
    }

    /**
     * @return EndOfAuctionEmailPreferencesType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEndOfAuctionEmailPreferences()
    {
        return $this->_dc($this->EndOfAuctionEmailPreferences, 'EndOfAuctionEmailPreferences');
    }

    /**
     * @param EndOfAuctionEmailPreferencesType|null $value
     * @return void
     */
    public function setEndOfAuctionEmailPreferences($value)
    {
        $this->EndOfAuctionEmailPreferences = $value;
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEmailShipmentTrackingNumberPreference()
    {
        return $this->_dc($this->EmailShipmentTrackingNumberPreference === 'true', 'EmailShipmentTrackingNumberPreference');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setEmailShipmentTrackingNumberPreference($value)
    {
        $this->EmailShipmentTrackingNumberPreference = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getRequiredShipPhoneNumberPreference()
    {
        return $this->_dc($this->RequiredShipPhoneNumberPreference === 'true', 'RequiredShipPhoneNumberPreference');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setRequiredShipPhoneNumberPreference($value)
    {
        $this->RequiredShipPhoneNumberPreference = self::_bool($value);
    }

    /**
     * @return UnpaidItemAssistancePreferencesType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getUnpaidItemAssistancePreferences()
    {
        return $this->_dc($this->UnpaidItemAssistancePreferences, 'UnpaidItemAssistancePreferences');
    }

    /**
     * @param UnpaidItemAssistancePreferencesType|null $value
     * @return void
     */
    public function setUnpaidItemAssistancePreferences($value)
    {
        $this->UnpaidItemAssistancePreferences = $value;
    }

    /**
     * @return PurchaseReminderEmailPreferencesType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPurchaseReminderEmailPreferences()
    {
        return $this->_dc($this->PurchaseReminderEmailPreferences, 'PurchaseReminderEmailPreferences');
    }

    /**
     * @param PurchaseReminderEmailPreferencesType|null $value
     * @return void
     */
    public function setPurchaseReminderEmailPreferences($value)
    {
        $this->PurchaseReminderEmailPreferences = $value;
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSellerThirdPartyCheckoutDisabled()
    {
        return $this->_dc($this->SellerThirdPartyCheckoutDisabled === 'true', 'SellerThirdPartyCheckoutDisabled');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setSellerThirdPartyCheckoutDisabled($value)
    {
        $this->SellerThirdPartyCheckoutDisabled = self::_bool($value);
    }

    /**
     * @return DispatchCutoffTimePreferencesType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDispatchCutoffTimePreference()
    {
        return $this->_dc($this->DispatchCutoffTimePreference, 'DispatchCutoffTimePreference');
    }

    /**
     * @param DispatchCutoffTimePreferencesType|null $value
     * @return void
     */
    public function setDispatchCutoffTimePreference($value)
    {
        $this->DispatchCutoffTimePreference = $value;
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getGlobalShippingProgramListingPreference()
    {
        return $this->_dc($this->GlobalShippingProgramListingPreference === 'true', 'GlobalShippingProgramListingPreference');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setGlobalShippingProgramListingPreference($value)
    {
        $this->GlobalShippingProgramListingPreference = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getOverrideGSPserviceWithIntlService()
    {
        return $this->_dc($this->OverrideGSPserviceWithIntlService === 'true', 'OverrideGSPserviceWithIntlService');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setOverrideGSPserviceWithIntlService($value)
    {
        $this->OverrideGSPserviceWithIntlService = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getOutOfStockControlPreference()
    {
        return $this->_dc($this->OutOfStockControlPreference === 'true', 'OutOfStockControlPreference');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setOutOfStockControlPreference($value)
    {
        $this->OutOfStockControlPreference = self::_bool($value);
    }

    /**
     * @return SetUserPreferencesResponseType|EbatNs_ResponseError
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
            'BidderNoticePreferences' => ['type' => 'BidderNoticePreferencesType', 'xmlns' => self::XMLNS],
            'CombinedPaymentPreferences' => ['type' => 'CombinedPaymentPreferencesType', 'xmlns' => self::XMLNS],
            'CrossPromotionPreferences' => ['type' => 'CrossPromotionPreferencesType', 'xmlns' => self::XMLNS],
            'SellerPaymentPreferences' => ['type' => 'SellerPaymentPreferencesType', 'xmlns' => self::XMLNS],
            'SellerFavoriteItemPreferences' => ['type' => 'SellerFavoriteItemPreferencesType', 'xmlns' => self::XMLNS],
            'EndOfAuctionEmailPreferences' => ['type' => 'EndOfAuctionEmailPreferencesType', 'xmlns' => self::XMLNS],
            'EmailShipmentTrackingNumberPreference' => ['type' => 'bool'],
            'RequiredShipPhoneNumberPreference' => ['type' => 'bool'],
            'UnpaidItemAssistancePreferences' => ['type' => 'UnpaidItemAssistancePreferencesType', 'xmlns' => self::XMLNS],
            'PurchaseReminderEmailPreferences' => ['type' => 'PurchaseReminderEmailPreferencesType', 'xmlns' => self::XMLNS],
            'SellerThirdPartyCheckoutDisabled' => ['type' => 'bool'],
            'DispatchCutoffTimePreference' => ['type' => 'DispatchCutoffTimePreferencesType', 'xmlns' => self::XMLNS],
            'GlobalShippingProgramListingPreference' => ['type' => 'bool'],
            'OverrideGSPserviceWithIntlService' => ['type' => 'bool'],
            'OutOfStockControlPreference' => ['type' => 'bool']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

SetUserPreferencesRequestType::_register();

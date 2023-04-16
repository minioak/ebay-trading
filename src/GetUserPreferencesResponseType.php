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
 * Contains some or all of the authenticated user's preferences. The preferences are
 * grouped in sets and are returned according to the flag settings in the request.
 **/
class GetUserPreferencesResponseType extends EbatNs_Response
{
    const TAG = 'GetUserPreferencesResponseType';
    const NAME = 'GetUserPreferencesResponseType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

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
     * @var ProStoresCheckoutPreferenceType|null
     */
    protected $ProStoresPreference = null;

    /**
     * @var UnpaidItemAssistancePreferencesType|null
     */
    protected $UnpaidItemAssistancePreferences = null;

    /**
     * @var SellerExcludeShipToLocationPreferencesType|null
     */
    protected $SellerExcludeShipToLocationPreferences = null;

    /**
     * @var PurchaseReminderEmailPreferencesType|null
     */
    protected $PurchaseReminderEmailPreferences = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $SellerThirdPartyCheckoutDisabled = null;

    /**
     * @var SellerProfilePreferencesType|null
     */
    protected $SellerProfilePreferences = null;

    /**
     * @var SellerReturnPreferencesType|null
     */
    protected $SellerReturnPreferences = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $OfferGlobalShippingProgramPreference = null;

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
    protected $OverrideGSPServiceWithIntlServicePreference = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $PickupDropoffSellerPreference = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $OutOfStockControlPreference = null;

    /**
     * @var EBayPLUSPreferenceType[]|null
     */
    protected $eBayPLUSPreference = [];


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
     * @return ProStoresCheckoutPreferenceType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getProStoresPreference()
    {
        return $this->_dc($this->ProStoresPreference, 'ProStoresPreference');
    }

    /**
     * @param ProStoresCheckoutPreferenceType|null $value
     * @return void
     */
    public function setProStoresPreference($value)
    {
        $this->ProStoresPreference = $value;
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
     * @return SellerExcludeShipToLocationPreferencesType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSellerExcludeShipToLocationPreferences()
    {
        return $this->_dc($this->SellerExcludeShipToLocationPreferences, 'SellerExcludeShipToLocationPreferences');
    }

    /**
     * @param SellerExcludeShipToLocationPreferencesType|null $value
     * @return void
     */
    public function setSellerExcludeShipToLocationPreferences($value)
    {
        $this->SellerExcludeShipToLocationPreferences = $value;
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
     * @return SellerProfilePreferencesType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSellerProfilePreferences()
    {
        return $this->_dc($this->SellerProfilePreferences, 'SellerProfilePreferences');
    }

    /**
     * @param SellerProfilePreferencesType|null $value
     * @return void
     */
    public function setSellerProfilePreferences($value)
    {
        $this->SellerProfilePreferences = $value;
    }

    /**
     * @return SellerReturnPreferencesType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSellerReturnPreferences()
    {
        return $this->_dc($this->SellerReturnPreferences, 'SellerReturnPreferences');
    }

    /**
     * @param SellerReturnPreferencesType|null $value
     * @return void
     */
    public function setSellerReturnPreferences($value)
    {
        $this->SellerReturnPreferences = $value;
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getOfferGlobalShippingProgramPreference()
    {
        return $this->_dc($this->OfferGlobalShippingProgramPreference === 'true', 'OfferGlobalShippingProgramPreference');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setOfferGlobalShippingProgramPreference($value)
    {
        $this->OfferGlobalShippingProgramPreference = self::_bool($value);
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
    public function getOverrideGSPServiceWithIntlServicePreference()
    {
        return $this->_dc($this->OverrideGSPServiceWithIntlServicePreference === 'true', 'OverrideGSPServiceWithIntlServicePreference');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setOverrideGSPServiceWithIntlServicePreference($value)
    {
        $this->OverrideGSPServiceWithIntlServicePreference = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPickupDropoffSellerPreference()
    {
        return $this->_dc($this->PickupDropoffSellerPreference === 'true', 'PickupDropoffSellerPreference');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setPickupDropoffSellerPreference($value)
    {
        $this->PickupDropoffSellerPreference = self::_bool($value);
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
     * @return EBayPLUSPreferenceType[]|EBayPLUSPreferenceType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getEBayPLUSPreference($index = null)
    {
        return $this->_dc($index === null
            ? $this->eBayPLUSPreference
            : (count($this->eBayPLUSPreference) > $index
                ? $this->eBayPLUSPreference[$index]
                : null), 'eBayPLUSPreference');
    }

    /**
     * @param EBayPLUSPreferenceType|null|EBayPLUSPreferenceType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setEBayPLUSPreference($value, $index = null)
    {
        if ($index === null) {
            $this->eBayPLUSPreference = $value;
        } else {
            $this->eBayPLUSPreference[$index] = [];
            
            foreach ($value as $item) {
                $this->addEBayPLUSPreference($item);
            }
        }
    }

    /**
     * @param EBayPLUSPreferenceType|null $value
     * @return void
     */
    public function addEBayPLUSPreference($value)
    {
        $this->eBayPLUSPreference[] = $value;
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
            'ProStoresPreference' => ['type' => 'ProStoresCheckoutPreferenceType', 'xmlns' => self::XMLNS],
            'UnpaidItemAssistancePreferences' => ['type' => 'UnpaidItemAssistancePreferencesType', 'xmlns' => self::XMLNS],
            'SellerExcludeShipToLocationPreferences' => ['type' => 'SellerExcludeShipToLocationPreferencesType', 'xmlns' => self::XMLNS],
            'PurchaseReminderEmailPreferences' => ['type' => 'PurchaseReminderEmailPreferencesType', 'xmlns' => self::XMLNS],
            'SellerThirdPartyCheckoutDisabled' => ['type' => 'bool'],
            'SellerProfilePreferences' => ['type' => 'SellerProfilePreferencesType', 'xmlns' => self::XMLNS],
            'SellerReturnPreferences' => ['type' => 'SellerReturnPreferencesType', 'xmlns' => self::XMLNS],
            'OfferGlobalShippingProgramPreference' => ['type' => 'bool'],
            'DispatchCutoffTimePreference' => ['type' => 'DispatchCutoffTimePreferencesType', 'xmlns' => self::XMLNS],
            'GlobalShippingProgramListingPreference' => ['type' => 'bool'],
            'OverrideGSPServiceWithIntlServicePreference' => ['type' => 'bool'],
            'PickupDropoffSellerPreference' => ['type' => 'bool'],
            'OutOfStockControlPreference' => ['type' => 'bool'],
            'eBayPLUSPreference' => ['type' => 'EBayPLUSPreferenceType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

GetUserPreferencesResponseType::_register();

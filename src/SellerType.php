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
 * Information about a user returned in the context of an item's seller.
 **/
class SellerType extends EbatNs_ComplexType
{
    const TAG = 'SellerType';
    const NAME = 'SellerType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var int|null
     */
    protected $PaisaPayStatus = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $AllowPaymentEdit = null;

    /**
     * @var CurrencyCodeType|null
     */
    protected $BillingCurrency = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $CheckoutEnabled = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $CIPBankAccountStored = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $GoodStanding = null;

    /**
     * @var MerchandizingPrefCodeType|null
     */
    protected $MerchandizingPref = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $QualifiesForB2BVAT = null;

    /**
     * @var SellerGuaranteeLevelCodeType|null
     */
    protected $SellerGuaranteeLevel = null;

    /**
     * @var SellerLevelCodeType|null
     */
    protected $SellerLevel = null;

    /**
     * @var AddressType|null
     */
    protected $SellerPaymentAddress = null;

    /**
     * @var SchedulingInfoType|null
     */
    protected $SchedulingInfo = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $StoreOwner = null;

    /**
     * @var string|null
     */
    protected $StoreURL = null;

    /**
     * @var SellerBusinessCodeType|null
     */
    protected $SellerBusinessType = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $RegisteredBusinessSeller = null;

    /**
     * @var SiteCodeType|null
     */
    protected $StoreSite = null;

    /**
     * @var SellerPaymentMethodCodeType|null
     */
    protected $PaymentMethod = null;

    /**
     * @var ProStoresCheckoutPreferenceType|null
     */
    protected $ProStoresPreference = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $CharityRegistered = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $SafePaymentExempt = null;

    /**
     * @var int|null
     */
    protected $PaisaPayEscrowEMIStatus = null;

    /**
     * @var CharityAffiliationDetailsType|null
     */
    protected $CharityAffiliationDetails = null;

    /**
     * @var float|null
     */
    protected $TransactionPercent = null;

    /**
     * @var IntegratedMerchantCreditCardInfoType|null
     */
    protected $IntegratedMerchantCreditCardInfo = null;

    /**
     * @var FeatureEligibilityType|null
     */
    protected $FeatureEligibility = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $TopRatedSeller = null;

    /**
     * @var TopRatedSellerDetailsType|null
     */
    protected $TopRatedSellerDetails = null;

    /**
     * @var RecoupmentPolicyConsentType|null
     */
    protected $RecoupmentPolicyConsent = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $DomesticRateTable = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $InternationalRateTable = null;

    /**
     * @var SellereBayPaymentProcessStatusCodeType|null
     */
    protected $SellereBayPaymentProcessStatus = null;

    /**
     * @var SellereBayPaymentProcessConsentCodeType|null
     */
    protected $SellereBayPaymentProcessConsent = null;


    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPaisaPayStatus()
    {
        return $this->_dc($this->PaisaPayStatus, 'PaisaPayStatus');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setPaisaPayStatus($value)
    {
        $this->PaisaPayStatus = self::_int($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getAllowPaymentEdit()
    {
        return $this->_dc($this->AllowPaymentEdit === 'true', 'AllowPaymentEdit');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setAllowPaymentEdit($value)
    {
        $this->AllowPaymentEdit = self::_bool($value);
    }

    /**
     * @return CurrencyCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBillingCurrency()
    {
        return $this->_dc($this->BillingCurrency);
    }

    /**
     * @param CurrencyCodeType|null $value
     * @return void
     */
    public function setBillingCurrency($value)
    {
        $this->BillingCurrency = $this->_enum($value, CurrencyCodeType::class);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCheckoutEnabled()
    {
        return $this->_dc($this->CheckoutEnabled === 'true', 'CheckoutEnabled');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setCheckoutEnabled($value)
    {
        $this->CheckoutEnabled = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCIPBankAccountStored()
    {
        return $this->_dc($this->CIPBankAccountStored === 'true', 'CIPBankAccountStored');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setCIPBankAccountStored($value)
    {
        $this->CIPBankAccountStored = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getGoodStanding()
    {
        return $this->_dc($this->GoodStanding === 'true', 'GoodStanding');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setGoodStanding($value)
    {
        $this->GoodStanding = self::_bool($value);
    }

    /**
     * @return MerchandizingPrefCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMerchandizingPref()
    {
        return $this->_dc($this->MerchandizingPref);
    }

    /**
     * @param MerchandizingPrefCodeType|null $value
     * @return void
     */
    public function setMerchandizingPref($value)
    {
        $this->MerchandizingPref = $this->_enum($value, MerchandizingPrefCodeType::class);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getQualifiesForB2BVAT()
    {
        return $this->_dc($this->QualifiesForB2BVAT === 'true', 'QualifiesForB2BVAT');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setQualifiesForB2BVAT($value)
    {
        $this->QualifiesForB2BVAT = self::_bool($value);
    }

    /**
     * @return SellerGuaranteeLevelCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSellerGuaranteeLevel()
    {
        return $this->_dc($this->SellerGuaranteeLevel);
    }

    /**
     * @param SellerGuaranteeLevelCodeType|null $value
     * @return void
     */
    public function setSellerGuaranteeLevel($value)
    {
        $this->SellerGuaranteeLevel = $this->_enum($value, SellerGuaranteeLevelCodeType::class);
    }

    /**
     * @return SellerLevelCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSellerLevel()
    {
        return $this->_dc($this->SellerLevel);
    }

    /**
     * @param SellerLevelCodeType|null $value
     * @return void
     */
    public function setSellerLevel($value)
    {
        $this->SellerLevel = $this->_enum($value, SellerLevelCodeType::class);
    }

    /**
     * @return AddressType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSellerPaymentAddress()
    {
        return $this->_dc($this->SellerPaymentAddress, 'SellerPaymentAddress');
    }

    /**
     * @param AddressType|null $value
     * @return void
     */
    public function setSellerPaymentAddress($value)
    {
        $this->SellerPaymentAddress = $value;
    }

    /**
     * @return SchedulingInfoType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSchedulingInfo()
    {
        return $this->_dc($this->SchedulingInfo, 'SchedulingInfo');
    }

    /**
     * @param SchedulingInfoType|null $value
     * @return void
     */
    public function setSchedulingInfo($value)
    {
        $this->SchedulingInfo = $value;
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getStoreOwner()
    {
        return $this->_dc($this->StoreOwner === 'true', 'StoreOwner');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setStoreOwner($value)
    {
        $this->StoreOwner = self::_bool($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getStoreURL()
    {
        return $this->_dc($this->StoreURL, 'StoreURL');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setStoreURL($value)
    {
        $this->StoreURL = self::_string($value);
    }

    /**
     * @return SellerBusinessCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSellerBusinessType()
    {
        return $this->_dc($this->SellerBusinessType);
    }

    /**
     * @param SellerBusinessCodeType|null $value
     * @return void
     */
    public function setSellerBusinessType($value)
    {
        $this->SellerBusinessType = $this->_enum($value, SellerBusinessCodeType::class);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getRegisteredBusinessSeller()
    {
        return $this->_dc($this->RegisteredBusinessSeller === 'true', 'RegisteredBusinessSeller');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setRegisteredBusinessSeller($value)
    {
        $this->RegisteredBusinessSeller = self::_bool($value);
    }

    /**
     * @return SiteCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getStoreSite()
    {
        return $this->_dc($this->StoreSite);
    }

    /**
     * @param SiteCodeType|null $value
     * @return void
     */
    public function setStoreSite($value)
    {
        $this->StoreSite = $this->_enum($value, SiteCodeType::class);
    }

    /**
     * @return SellerPaymentMethodCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPaymentMethod()
    {
        return $this->_dc($this->PaymentMethod);
    }

    /**
     * @param SellerPaymentMethodCodeType|null $value
     * @return void
     */
    public function setPaymentMethod($value)
    {
        $this->PaymentMethod = $this->_enum($value, SellerPaymentMethodCodeType::class);
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
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCharityRegistered()
    {
        return $this->_dc($this->CharityRegistered === 'true', 'CharityRegistered');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setCharityRegistered($value)
    {
        $this->CharityRegistered = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSafePaymentExempt()
    {
        return $this->_dc($this->SafePaymentExempt === 'true', 'SafePaymentExempt');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setSafePaymentExempt($value)
    {
        $this->SafePaymentExempt = self::_bool($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPaisaPayEscrowEMIStatus()
    {
        return $this->_dc($this->PaisaPayEscrowEMIStatus, 'PaisaPayEscrowEMIStatus');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setPaisaPayEscrowEMIStatus($value)
    {
        $this->PaisaPayEscrowEMIStatus = self::_int($value);
    }

    /**
     * @return CharityAffiliationDetailsType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCharityAffiliationDetails()
    {
        return $this->_dc($this->CharityAffiliationDetails, 'CharityAffiliationDetails');
    }

    /**
     * @param CharityAffiliationDetailsType|null $value
     * @return void
     */
    public function setCharityAffiliationDetails($value)
    {
        $this->CharityAffiliationDetails = $value;
    }

    /**
     * @return float|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTransactionPercent()
    {
        return $this->_dc($this->TransactionPercent, 'TransactionPercent');
    }

    /**
     * @param float|null $value
     * @return void
     */
    public function setTransactionPercent($value)
    {
        $this->TransactionPercent = self::_float($value);
    }

    /**
     * @return IntegratedMerchantCreditCardInfoType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getIntegratedMerchantCreditCardInfo()
    {
        return $this->_dc($this->IntegratedMerchantCreditCardInfo, 'IntegratedMerchantCreditCardInfo');
    }

    /**
     * @param IntegratedMerchantCreditCardInfoType|null $value
     * @return void
     */
    public function setIntegratedMerchantCreditCardInfo($value)
    {
        $this->IntegratedMerchantCreditCardInfo = $value;
    }

    /**
     * @return FeatureEligibilityType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getFeatureEligibility()
    {
        return $this->_dc($this->FeatureEligibility, 'FeatureEligibility');
    }

    /**
     * @param FeatureEligibilityType|null $value
     * @return void
     */
    public function setFeatureEligibility($value)
    {
        $this->FeatureEligibility = $value;
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTopRatedSeller()
    {
        return $this->_dc($this->TopRatedSeller === 'true', 'TopRatedSeller');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setTopRatedSeller($value)
    {
        $this->TopRatedSeller = self::_bool($value);
    }

    /**
     * @return TopRatedSellerDetailsType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTopRatedSellerDetails()
    {
        return $this->_dc($this->TopRatedSellerDetails, 'TopRatedSellerDetails');
    }

    /**
     * @param TopRatedSellerDetailsType|null $value
     * @return void
     */
    public function setTopRatedSellerDetails($value)
    {
        $this->TopRatedSellerDetails = $value;
    }

    /**
     * @return RecoupmentPolicyConsentType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getRecoupmentPolicyConsent()
    {
        return $this->_dc($this->RecoupmentPolicyConsent, 'RecoupmentPolicyConsent');
    }

    /**
     * @param RecoupmentPolicyConsentType|null $value
     * @return void
     */
    public function setRecoupmentPolicyConsent($value)
    {
        $this->RecoupmentPolicyConsent = $value;
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDomesticRateTable()
    {
        return $this->_dc($this->DomesticRateTable === 'true', 'DomesticRateTable');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setDomesticRateTable($value)
    {
        $this->DomesticRateTable = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getInternationalRateTable()
    {
        return $this->_dc($this->InternationalRateTable === 'true', 'InternationalRateTable');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setInternationalRateTable($value)
    {
        $this->InternationalRateTable = self::_bool($value);
    }

    /**
     * @return SellereBayPaymentProcessStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSellereBayPaymentProcessStatus()
    {
        return $this->_dc($this->SellereBayPaymentProcessStatus);
    }

    /**
     * @param SellereBayPaymentProcessStatusCodeType|null $value
     * @return void
     */
    public function setSellereBayPaymentProcessStatus($value)
    {
        $this->SellereBayPaymentProcessStatus = $this->_enum($value, SellereBayPaymentProcessStatusCodeType::class);
    }

    /**
     * @return SellereBayPaymentProcessConsentCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSellereBayPaymentProcessConsent()
    {
        return $this->_dc($this->SellereBayPaymentProcessConsent, 'SellereBayPaymentProcessConsent');
    }

    /**
     * @param SellereBayPaymentProcessConsentCodeType|null $value
     * @return void
     */
    public function setSellereBayPaymentProcessConsent($value)
    {
        $this->SellereBayPaymentProcessConsent = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'PaisaPayStatus' => ['type' => 'int'],
            'AllowPaymentEdit' => ['type' => 'bool'],
            'BillingCurrency' => ['type' => 'CurrencyCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'CheckoutEnabled' => ['type' => 'bool'],
            'CIPBankAccountStored' => ['type' => 'bool'],
            'GoodStanding' => ['type' => 'bool'],
            'MerchandizingPref' => ['type' => 'MerchandizingPrefCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'QualifiesForB2BVAT' => ['type' => 'bool'],
            'SellerGuaranteeLevel' => ['type' => 'SellerGuaranteeLevelCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'SellerLevel' => ['type' => 'SellerLevelCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'SellerPaymentAddress' => ['type' => 'AddressType', 'xmlns' => self::XMLNS],
            'SchedulingInfo' => ['type' => 'SchedulingInfoType', 'xmlns' => self::XMLNS],
            'StoreOwner' => ['type' => 'bool'],
            'StoreURL' => [],
            'SellerBusinessType' => ['type' => 'SellerBusinessCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'RegisteredBusinessSeller' => ['type' => 'bool'],
            'StoreSite' => ['type' => 'SiteCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'PaymentMethod' => ['type' => 'SellerPaymentMethodCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'ProStoresPreference' => ['type' => 'ProStoresCheckoutPreferenceType', 'xmlns' => self::XMLNS],
            'CharityRegistered' => ['type' => 'bool'],
            'SafePaymentExempt' => ['type' => 'bool'],
            'PaisaPayEscrowEMIStatus' => ['type' => 'int'],
            'CharityAffiliationDetails' => ['type' => 'CharityAffiliationDetailsType', 'xmlns' => self::XMLNS],
            'TransactionPercent' => ['type' => 'float'],
            'IntegratedMerchantCreditCardInfo' => ['type' => 'IntegratedMerchantCreditCardInfoType', 'xmlns' => self::XMLNS],
            'FeatureEligibility' => ['type' => 'FeatureEligibilityType', 'xmlns' => self::XMLNS],
            'TopRatedSeller' => ['type' => 'bool'],
            'TopRatedSellerDetails' => ['type' => 'TopRatedSellerDetailsType', 'xmlns' => self::XMLNS],
            'RecoupmentPolicyConsent' => ['type' => 'RecoupmentPolicyConsentType', 'xmlns' => self::XMLNS],
            'DomesticRateTable' => ['type' => 'bool'],
            'InternationalRateTable' => ['type' => 'bool'],
            'SellereBayPaymentProcessStatus' => ['type' => 'SellereBayPaymentProcessStatusCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'SellereBayPaymentProcessConsent' => ['type' => 'SellereBayPaymentProcessConsentCodeType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

SellerType::_register();

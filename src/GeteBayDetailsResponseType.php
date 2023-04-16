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
 * Details about a specified site in response to
 * GeteBayDetailsRequest
 * . If no
 * DetailName
 * field is identified in the request, all elements of
 * GeteBayDetailsResponse
 * are returned. Otherwise, eBay returns only the elements corresponding to the specified
 * DetailName
 * fields.
 * UpdateTime
 * gives the time of modification of the most recently modified
 * DetailName
 * .
 **/
class GeteBayDetailsResponseType extends EbatNs_Response
{
    const TAG = 'GeteBayDetailsResponseType';
    const NAME = 'GeteBayDetailsResponseType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var CountryDetailsType[]|null
     */
    protected $CountryDetails = [];

    /**
     * @var CurrencyDetailsType[]|null
     */
    protected $CurrencyDetails = [];

    /**
     * @var DispatchTimeMaxDetailsType[]|null
     */
    protected $DispatchTimeMaxDetails = [];

    /**
     * @var PaymentOptionDetailsType[]|null
     */
    protected $PaymentOptionDetails = [];

    /**
     * @var RegionDetailsType[]|null
     */
    protected $RegionDetails = [];

    /**
     * @var ShippingLocationDetailsType[]|null
     */
    protected $ShippingLocationDetails = [];

    /**
     * @var ShippingServiceDetailsType[]|null
     */
    protected $ShippingServiceDetails = [];

    /**
     * @var SiteDetailsType[]|null
     */
    protected $SiteDetails = [];

    /**
     * @var TaxJurisdictionType[]|null
     */
    protected $TaxJurisdiction = [];

    /**
     * @var URLDetailsType[]|null
     */
    protected $URLDetails = [];

    /**
     * @var TimeZoneDetailsType[]|null
     */
    protected $TimeZoneDetails = [];

    /**
     * @var ItemSpecificDetailsType[]|null
     */
    protected $ItemSpecificDetails = [];

    /**
     * @var UnitOfMeasurementDetailsType[]|null
     */
    protected $UnitOfMeasurementDetails = [];

    /**
     * @var RegionOfOriginDetailsType[]|null
     */
    protected $RegionOfOriginDetails = [];

    /**
     * @var ShippingPackageDetailsType[]|null
     */
    protected $ShippingPackageDetails = [];

    /**
     * @var ShippingCarrierDetailsType[]|null
     */
    protected $ShippingCarrierDetails = [];

    /**
     * @var ReturnPolicyDetailsType|null
     */
    protected $ReturnPolicyDetails = null;

    /**
     * @var ReturnPolicyDetailsType|null
     */
    protected $InternationalReturnPolicyDetails = null;

    /**
     * @var ListingStartPriceDetailsType[]|null
     */
    protected $ListingStartPriceDetails = [];

    /**
     * @var SiteBuyerRequirementDetailsType[]|null
     */
    protected $BuyerRequirementDetails = [];

    /**
     * @var ListingFeatureDetailsType[]|null
     */
    protected $ListingFeatureDetails = [];

    /**
     * @var VariationDetailsType|null
     */
    protected $VariationDetails = null;

    /**
     * @var ExcludeShippingLocationDetailsType[]|null
     */
    protected $ExcludeShippingLocationDetails = [];

    /**
     * @var string|null
     */
    protected $UpdateTime = null;

    /**
     * @var RecoupmentPolicyDetailsType[]|null
     */
    protected $RecoupmentPolicyDetails = [];

    /**
     * @var ShippingCategoryDetailsType[]|null
     */
    protected $ShippingCategoryDetails = [];

    /**
     * @var ProductDetailsType|null
     */
    protected $ProductDetails = null;


    /**
     * @return CountryDetailsType[]|CountryDetailsType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getCountryDetails($index = null)
    {
        return $this->_dc($index === null
            ? $this->CountryDetails
            : (count($this->CountryDetails) > $index
                ? $this->CountryDetails[$index]
                : null), 'CountryDetails');
    }

    /**
     * @param CountryDetailsType|null|CountryDetailsType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setCountryDetails($value, $index = null)
    {
        if ($index === null) {
            $this->CountryDetails = $value;
        } else {
            $this->CountryDetails[$index] = [];
            
            foreach ($value as $item) {
                $this->addCountryDetails($item);
            }
        }
    }

    /**
     * @param CountryDetailsType|null $value
     * @return void
     */
    public function addCountryDetails($value)
    {
        $this->CountryDetails[] = $value;
    }

    /**
     * @return CurrencyDetailsType[]|CurrencyDetailsType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getCurrencyDetails($index = null)
    {
        return $this->_dc($index === null
            ? $this->CurrencyDetails
            : (count($this->CurrencyDetails) > $index
                ? $this->CurrencyDetails[$index]
                : null), 'CurrencyDetails');
    }

    /**
     * @param CurrencyDetailsType|null|CurrencyDetailsType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setCurrencyDetails($value, $index = null)
    {
        if ($index === null) {
            $this->CurrencyDetails = $value;
        } else {
            $this->CurrencyDetails[$index] = [];
            
            foreach ($value as $item) {
                $this->addCurrencyDetails($item);
            }
        }
    }

    /**
     * @param CurrencyDetailsType|null $value
     * @return void
     */
    public function addCurrencyDetails($value)
    {
        $this->CurrencyDetails[] = $value;
    }

    /**
     * @return DispatchTimeMaxDetailsType[]|DispatchTimeMaxDetailsType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getDispatchTimeMaxDetails($index = null)
    {
        return $this->_dc($index === null
            ? $this->DispatchTimeMaxDetails
            : (count($this->DispatchTimeMaxDetails) > $index
                ? $this->DispatchTimeMaxDetails[$index]
                : null), 'DispatchTimeMaxDetails');
    }

    /**
     * @param DispatchTimeMaxDetailsType|null|DispatchTimeMaxDetailsType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setDispatchTimeMaxDetails($value, $index = null)
    {
        if ($index === null) {
            $this->DispatchTimeMaxDetails = $value;
        } else {
            $this->DispatchTimeMaxDetails[$index] = [];
            
            foreach ($value as $item) {
                $this->addDispatchTimeMaxDetails($item);
            }
        }
    }

    /**
     * @param DispatchTimeMaxDetailsType|null $value
     * @return void
     */
    public function addDispatchTimeMaxDetails($value)
    {
        $this->DispatchTimeMaxDetails[] = $value;
    }

    /**
     * @return PaymentOptionDetailsType[]|PaymentOptionDetailsType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getPaymentOptionDetails($index = null)
    {
        return $this->_dc($index === null
            ? $this->PaymentOptionDetails
            : (count($this->PaymentOptionDetails) > $index
                ? $this->PaymentOptionDetails[$index]
                : null), 'PaymentOptionDetails');
    }

    /**
     * @param PaymentOptionDetailsType|null|PaymentOptionDetailsType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setPaymentOptionDetails($value, $index = null)
    {
        if ($index === null) {
            $this->PaymentOptionDetails = $value;
        } else {
            $this->PaymentOptionDetails[$index] = [];
            
            foreach ($value as $item) {
                $this->addPaymentOptionDetails($item);
            }
        }
    }

    /**
     * @param PaymentOptionDetailsType|null $value
     * @return void
     */
    public function addPaymentOptionDetails($value)
    {
        $this->PaymentOptionDetails[] = $value;
    }

    /**
     * @return RegionDetailsType[]|RegionDetailsType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getRegionDetails($index = null)
    {
        return $this->_dc($index === null
            ? $this->RegionDetails
            : (count($this->RegionDetails) > $index
                ? $this->RegionDetails[$index]
                : null), 'RegionDetails');
    }

    /**
     * @param RegionDetailsType|null|RegionDetailsType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setRegionDetails($value, $index = null)
    {
        if ($index === null) {
            $this->RegionDetails = $value;
        } else {
            $this->RegionDetails[$index] = [];
            
            foreach ($value as $item) {
                $this->addRegionDetails($item);
            }
        }
    }

    /**
     * @param RegionDetailsType|null $value
     * @return void
     */
    public function addRegionDetails($value)
    {
        $this->RegionDetails[] = $value;
    }

    /**
     * @return ShippingLocationDetailsType[]|ShippingLocationDetailsType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getShippingLocationDetails($index = null)
    {
        return $this->_dc($index === null
            ? $this->ShippingLocationDetails
            : (count($this->ShippingLocationDetails) > $index
                ? $this->ShippingLocationDetails[$index]
                : null), 'ShippingLocationDetails');
    }

    /**
     * @param ShippingLocationDetailsType|null|ShippingLocationDetailsType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setShippingLocationDetails($value, $index = null)
    {
        if ($index === null) {
            $this->ShippingLocationDetails = $value;
        } else {
            $this->ShippingLocationDetails[$index] = [];
            
            foreach ($value as $item) {
                $this->addShippingLocationDetails($item);
            }
        }
    }

    /**
     * @param ShippingLocationDetailsType|null $value
     * @return void
     */
    public function addShippingLocationDetails($value)
    {
        $this->ShippingLocationDetails[] = $value;
    }

    /**
     * @return ShippingServiceDetailsType[]|ShippingServiceDetailsType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getShippingServiceDetails($index = null)
    {
        return $this->_dc($index === null
            ? $this->ShippingServiceDetails
            : (count($this->ShippingServiceDetails) > $index
                ? $this->ShippingServiceDetails[$index]
                : null), 'ShippingServiceDetails');
    }

    /**
     * @param ShippingServiceDetailsType|null|ShippingServiceDetailsType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setShippingServiceDetails($value, $index = null)
    {
        if ($index === null) {
            $this->ShippingServiceDetails = $value;
        } else {
            $this->ShippingServiceDetails[$index] = [];
            
            foreach ($value as $item) {
                $this->addShippingServiceDetails($item);
            }
        }
    }

    /**
     * @param ShippingServiceDetailsType|null $value
     * @return void
     */
    public function addShippingServiceDetails($value)
    {
        $this->ShippingServiceDetails[] = $value;
    }

    /**
     * @return SiteDetailsType[]|SiteDetailsType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getSiteDetails($index = null)
    {
        return $this->_dc($index === null
            ? $this->SiteDetails
            : (count($this->SiteDetails) > $index
                ? $this->SiteDetails[$index]
                : null), 'SiteDetails');
    }

    /**
     * @param SiteDetailsType|null|SiteDetailsType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setSiteDetails($value, $index = null)
    {
        if ($index === null) {
            $this->SiteDetails = $value;
        } else {
            $this->SiteDetails[$index] = [];
            
            foreach ($value as $item) {
                $this->addSiteDetails($item);
            }
        }
    }

    /**
     * @param SiteDetailsType|null $value
     * @return void
     */
    public function addSiteDetails($value)
    {
        $this->SiteDetails[] = $value;
    }

    /**
     * @return TaxJurisdictionType[]|TaxJurisdictionType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getTaxJurisdiction($index = null)
    {
        return $this->_dc($index === null
            ? $this->TaxJurisdiction
            : (count($this->TaxJurisdiction) > $index
                ? $this->TaxJurisdiction[$index]
                : null), 'TaxJurisdiction');
    }

    /**
     * @param TaxJurisdictionType|null|TaxJurisdictionType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setTaxJurisdiction($value, $index = null)
    {
        if ($index === null) {
            $this->TaxJurisdiction = $value;
        } else {
            $this->TaxJurisdiction[$index] = [];
            
            foreach ($value as $item) {
                $this->addTaxJurisdiction($item);
            }
        }
    }

    /**
     * @param TaxJurisdictionType|null $value
     * @return void
     */
    public function addTaxJurisdiction($value)
    {
        $this->TaxJurisdiction[] = $value;
    }

    /**
     * @return URLDetailsType[]|URLDetailsType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getURLDetails($index = null)
    {
        return $this->_dc($index === null
            ? $this->URLDetails
            : (count($this->URLDetails) > $index
                ? $this->URLDetails[$index]
                : null), 'URLDetails');
    }

    /**
     * @param URLDetailsType|null|URLDetailsType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setURLDetails($value, $index = null)
    {
        if ($index === null) {
            $this->URLDetails = $value;
        } else {
            $this->URLDetails[$index] = [];
            
            foreach ($value as $item) {
                $this->addURLDetails($item);
            }
        }
    }

    /**
     * @param URLDetailsType|null $value
     * @return void
     */
    public function addURLDetails($value)
    {
        $this->URLDetails[] = $value;
    }

    /**
     * @return TimeZoneDetailsType[]|TimeZoneDetailsType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getTimeZoneDetails($index = null)
    {
        return $this->_dc($index === null
            ? $this->TimeZoneDetails
            : (count($this->TimeZoneDetails) > $index
                ? $this->TimeZoneDetails[$index]
                : null), 'TimeZoneDetails');
    }

    /**
     * @param TimeZoneDetailsType|null|TimeZoneDetailsType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setTimeZoneDetails($value, $index = null)
    {
        if ($index === null) {
            $this->TimeZoneDetails = $value;
        } else {
            $this->TimeZoneDetails[$index] = [];
            
            foreach ($value as $item) {
                $this->addTimeZoneDetails($item);
            }
        }
    }

    /**
     * @param TimeZoneDetailsType|null $value
     * @return void
     */
    public function addTimeZoneDetails($value)
    {
        $this->TimeZoneDetails[] = $value;
    }

    /**
     * @return ItemSpecificDetailsType[]|ItemSpecificDetailsType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getItemSpecificDetails($index = null)
    {
        return $this->_dc($index === null
            ? $this->ItemSpecificDetails
            : (count($this->ItemSpecificDetails) > $index
                ? $this->ItemSpecificDetails[$index]
                : null), 'ItemSpecificDetails');
    }

    /**
     * @param ItemSpecificDetailsType|null|ItemSpecificDetailsType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setItemSpecificDetails($value, $index = null)
    {
        if ($index === null) {
            $this->ItemSpecificDetails = $value;
        } else {
            $this->ItemSpecificDetails[$index] = [];
            
            foreach ($value as $item) {
                $this->addItemSpecificDetails($item);
            }
        }
    }

    /**
     * @param ItemSpecificDetailsType|null $value
     * @return void
     */
    public function addItemSpecificDetails($value)
    {
        $this->ItemSpecificDetails[] = $value;
    }

    /**
     * @return UnitOfMeasurementDetailsType[]|UnitOfMeasurementDetailsType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getUnitOfMeasurementDetails($index = null)
    {
        return $this->_dc($index === null
            ? $this->UnitOfMeasurementDetails
            : (count($this->UnitOfMeasurementDetails) > $index
                ? $this->UnitOfMeasurementDetails[$index]
                : null), 'UnitOfMeasurementDetails');
    }

    /**
     * @param UnitOfMeasurementDetailsType|null|UnitOfMeasurementDetailsType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setUnitOfMeasurementDetails($value, $index = null)
    {
        if ($index === null) {
            $this->UnitOfMeasurementDetails = $value;
        } else {
            $this->UnitOfMeasurementDetails[$index] = [];
            
            foreach ($value as $item) {
                $this->addUnitOfMeasurementDetails($item);
            }
        }
    }

    /**
     * @param UnitOfMeasurementDetailsType|null $value
     * @return void
     */
    public function addUnitOfMeasurementDetails($value)
    {
        $this->UnitOfMeasurementDetails[] = $value;
    }

    /**
     * @return RegionOfOriginDetailsType[]|RegionOfOriginDetailsType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getRegionOfOriginDetails($index = null)
    {
        return $this->_dc($index === null
            ? $this->RegionOfOriginDetails
            : (count($this->RegionOfOriginDetails) > $index
                ? $this->RegionOfOriginDetails[$index]
                : null), 'RegionOfOriginDetails');
    }

    /**
     * @param RegionOfOriginDetailsType|null|RegionOfOriginDetailsType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setRegionOfOriginDetails($value, $index = null)
    {
        if ($index === null) {
            $this->RegionOfOriginDetails = $value;
        } else {
            $this->RegionOfOriginDetails[$index] = [];
            
            foreach ($value as $item) {
                $this->addRegionOfOriginDetails($item);
            }
        }
    }

    /**
     * @param RegionOfOriginDetailsType|null $value
     * @return void
     */
    public function addRegionOfOriginDetails($value)
    {
        $this->RegionOfOriginDetails[] = $value;
    }

    /**
     * @return ShippingPackageDetailsType[]|ShippingPackageDetailsType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getShippingPackageDetails($index = null)
    {
        return $this->_dc($index === null
            ? $this->ShippingPackageDetails
            : (count($this->ShippingPackageDetails) > $index
                ? $this->ShippingPackageDetails[$index]
                : null), 'ShippingPackageDetails');
    }

    /**
     * @param ShippingPackageDetailsType|null|ShippingPackageDetailsType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setShippingPackageDetails($value, $index = null)
    {
        if ($index === null) {
            $this->ShippingPackageDetails = $value;
        } else {
            $this->ShippingPackageDetails[$index] = [];
            
            foreach ($value as $item) {
                $this->addShippingPackageDetails($item);
            }
        }
    }

    /**
     * @param ShippingPackageDetailsType|null $value
     * @return void
     */
    public function addShippingPackageDetails($value)
    {
        $this->ShippingPackageDetails[] = $value;
    }

    /**
     * @return ShippingCarrierDetailsType[]|ShippingCarrierDetailsType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getShippingCarrierDetails($index = null)
    {
        return $this->_dc($index === null
            ? $this->ShippingCarrierDetails
            : (count($this->ShippingCarrierDetails) > $index
                ? $this->ShippingCarrierDetails[$index]
                : null), 'ShippingCarrierDetails');
    }

    /**
     * @param ShippingCarrierDetailsType|null|ShippingCarrierDetailsType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setShippingCarrierDetails($value, $index = null)
    {
        if ($index === null) {
            $this->ShippingCarrierDetails = $value;
        } else {
            $this->ShippingCarrierDetails[$index] = [];
            
            foreach ($value as $item) {
                $this->addShippingCarrierDetails($item);
            }
        }
    }

    /**
     * @param ShippingCarrierDetailsType|null $value
     * @return void
     */
    public function addShippingCarrierDetails($value)
    {
        $this->ShippingCarrierDetails[] = $value;
    }

    /**
     * @return ReturnPolicyDetailsType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getReturnPolicyDetails()
    {
        return $this->_dc($this->ReturnPolicyDetails, 'ReturnPolicyDetails');
    }

    /**
     * @param ReturnPolicyDetailsType|null $value
     * @return void
     */
    public function setReturnPolicyDetails($value)
    {
        $this->ReturnPolicyDetails = $value;
    }

    /**
     * @return ReturnPolicyDetailsType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getInternationalReturnPolicyDetails()
    {
        return $this->_dc($this->InternationalReturnPolicyDetails, 'InternationalReturnPolicyDetails');
    }

    /**
     * @param ReturnPolicyDetailsType|null $value
     * @return void
     */
    public function setInternationalReturnPolicyDetails($value)
    {
        $this->InternationalReturnPolicyDetails = $value;
    }

    /**
     * @return ListingStartPriceDetailsType[]|ListingStartPriceDetailsType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getListingStartPriceDetails($index = null)
    {
        return $this->_dc($index === null
            ? $this->ListingStartPriceDetails
            : (count($this->ListingStartPriceDetails) > $index
                ? $this->ListingStartPriceDetails[$index]
                : null), 'ListingStartPriceDetails');
    }

    /**
     * @param ListingStartPriceDetailsType|null|ListingStartPriceDetailsType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setListingStartPriceDetails($value, $index = null)
    {
        if ($index === null) {
            $this->ListingStartPriceDetails = $value;
        } else {
            $this->ListingStartPriceDetails[$index] = [];
            
            foreach ($value as $item) {
                $this->addListingStartPriceDetails($item);
            }
        }
    }

    /**
     * @param ListingStartPriceDetailsType|null $value
     * @return void
     */
    public function addListingStartPriceDetails($value)
    {
        $this->ListingStartPriceDetails[] = $value;
    }

    /**
     * @return SiteBuyerRequirementDetailsType[]|SiteBuyerRequirementDetailsType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getBuyerRequirementDetails($index = null)
    {
        return $this->_dc($index === null
            ? $this->BuyerRequirementDetails
            : (count($this->BuyerRequirementDetails) > $index
                ? $this->BuyerRequirementDetails[$index]
                : null), 'BuyerRequirementDetails');
    }

    /**
     * @param SiteBuyerRequirementDetailsType|null|SiteBuyerRequirementDetailsType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setBuyerRequirementDetails($value, $index = null)
    {
        if ($index === null) {
            $this->BuyerRequirementDetails = $value;
        } else {
            $this->BuyerRequirementDetails[$index] = [];
            
            foreach ($value as $item) {
                $this->addBuyerRequirementDetails($item);
            }
        }
    }

    /**
     * @param SiteBuyerRequirementDetailsType|null $value
     * @return void
     */
    public function addBuyerRequirementDetails($value)
    {
        $this->BuyerRequirementDetails[] = $value;
    }

    /**
     * @return ListingFeatureDetailsType[]|ListingFeatureDetailsType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getListingFeatureDetails($index = null)
    {
        return $this->_dc($index === null
            ? $this->ListingFeatureDetails
            : (count($this->ListingFeatureDetails) > $index
                ? $this->ListingFeatureDetails[$index]
                : null), 'ListingFeatureDetails');
    }

    /**
     * @param ListingFeatureDetailsType|null|ListingFeatureDetailsType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setListingFeatureDetails($value, $index = null)
    {
        if ($index === null) {
            $this->ListingFeatureDetails = $value;
        } else {
            $this->ListingFeatureDetails[$index] = [];
            
            foreach ($value as $item) {
                $this->addListingFeatureDetails($item);
            }
        }
    }

    /**
     * @param ListingFeatureDetailsType|null $value
     * @return void
     */
    public function addListingFeatureDetails($value)
    {
        $this->ListingFeatureDetails[] = $value;
    }

    /**
     * @return VariationDetailsType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getVariationDetails()
    {
        return $this->_dc($this->VariationDetails, 'VariationDetails');
    }

    /**
     * @param VariationDetailsType|null $value
     * @return void
     */
    public function setVariationDetails($value)
    {
        $this->VariationDetails = $value;
    }

    /**
     * @return ExcludeShippingLocationDetailsType[]|ExcludeShippingLocationDetailsType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getExcludeShippingLocationDetails($index = null)
    {
        return $this->_dc($index === null
            ? $this->ExcludeShippingLocationDetails
            : (count($this->ExcludeShippingLocationDetails) > $index
                ? $this->ExcludeShippingLocationDetails[$index]
                : null), 'ExcludeShippingLocationDetails');
    }

    /**
     * @param ExcludeShippingLocationDetailsType|null|ExcludeShippingLocationDetailsType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setExcludeShippingLocationDetails($value, $index = null)
    {
        if ($index === null) {
            $this->ExcludeShippingLocationDetails = $value;
        } else {
            $this->ExcludeShippingLocationDetails[$index] = [];
            
            foreach ($value as $item) {
                $this->addExcludeShippingLocationDetails($item);
            }
        }
    }

    /**
     * @param ExcludeShippingLocationDetailsType|null $value
     * @return void
     */
    public function addExcludeShippingLocationDetails($value)
    {
        $this->ExcludeShippingLocationDetails[] = $value;
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getUpdateTime()
    {
        return $this->_dc($this->UpdateTime, 'UpdateTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setUpdateTime($value)
    {
        $this->UpdateTime = self::_string($value);
    }

    /**
     * @return RecoupmentPolicyDetailsType[]|RecoupmentPolicyDetailsType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getRecoupmentPolicyDetails($index = null)
    {
        return $this->_dc($index === null
            ? $this->RecoupmentPolicyDetails
            : (count($this->RecoupmentPolicyDetails) > $index
                ? $this->RecoupmentPolicyDetails[$index]
                : null), 'RecoupmentPolicyDetails');
    }

    /**
     * @param RecoupmentPolicyDetailsType|null|RecoupmentPolicyDetailsType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setRecoupmentPolicyDetails($value, $index = null)
    {
        if ($index === null) {
            $this->RecoupmentPolicyDetails = $value;
        } else {
            $this->RecoupmentPolicyDetails[$index] = [];
            
            foreach ($value as $item) {
                $this->addRecoupmentPolicyDetails($item);
            }
        }
    }

    /**
     * @param RecoupmentPolicyDetailsType|null $value
     * @return void
     */
    public function addRecoupmentPolicyDetails($value)
    {
        $this->RecoupmentPolicyDetails[] = $value;
    }

    /**
     * @return ShippingCategoryDetailsType[]|ShippingCategoryDetailsType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getShippingCategoryDetails($index = null)
    {
        return $this->_dc($index === null
            ? $this->ShippingCategoryDetails
            : (count($this->ShippingCategoryDetails) > $index
                ? $this->ShippingCategoryDetails[$index]
                : null), 'ShippingCategoryDetails');
    }

    /**
     * @param ShippingCategoryDetailsType|null|ShippingCategoryDetailsType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setShippingCategoryDetails($value, $index = null)
    {
        if ($index === null) {
            $this->ShippingCategoryDetails = $value;
        } else {
            $this->ShippingCategoryDetails[$index] = [];
            
            foreach ($value as $item) {
                $this->addShippingCategoryDetails($item);
            }
        }
    }

    /**
     * @param ShippingCategoryDetailsType|null $value
     * @return void
     */
    public function addShippingCategoryDetails($value)
    {
        $this->ShippingCategoryDetails[] = $value;
    }

    /**
     * @return ProductDetailsType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getProductDetails()
    {
        return $this->_dc($this->ProductDetails, 'ProductDetails');
    }

    /**
     * @param ProductDetailsType|null $value
     * @return void
     */
    public function setProductDetails($value)
    {
        $this->ProductDetails = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'CountryDetails' => ['type' => 'CountryDetailsType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'CurrencyDetails' => ['type' => 'CurrencyDetailsType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'DispatchTimeMaxDetails' => ['type' => 'DispatchTimeMaxDetailsType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'PaymentOptionDetails' => ['type' => 'PaymentOptionDetailsType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'RegionDetails' => ['type' => 'RegionDetailsType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'ShippingLocationDetails' => ['type' => 'ShippingLocationDetailsType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'ShippingServiceDetails' => ['type' => 'ShippingServiceDetailsType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'SiteDetails' => ['type' => 'SiteDetailsType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'TaxJurisdiction' => ['type' => 'TaxJurisdictionType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'URLDetails' => ['type' => 'URLDetailsType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'TimeZoneDetails' => ['type' => 'TimeZoneDetailsType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'ItemSpecificDetails' => ['type' => 'ItemSpecificDetailsType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'UnitOfMeasurementDetails' => ['type' => 'UnitOfMeasurementDetailsType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'RegionOfOriginDetails' => ['type' => 'RegionOfOriginDetailsType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'ShippingPackageDetails' => ['type' => 'ShippingPackageDetailsType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'ShippingCarrierDetails' => ['type' => 'ShippingCarrierDetailsType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'ReturnPolicyDetails' => ['type' => 'ReturnPolicyDetailsType', 'xmlns' => self::XMLNS],
            'InternationalReturnPolicyDetails' => ['type' => 'ReturnPolicyDetailsType', 'xmlns' => self::XMLNS],
            'ListingStartPriceDetails' => ['type' => 'ListingStartPriceDetailsType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'BuyerRequirementDetails' => ['type' => 'SiteBuyerRequirementDetailsType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'ListingFeatureDetails' => ['type' => 'ListingFeatureDetailsType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'VariationDetails' => ['type' => 'VariationDetailsType', 'xmlns' => self::XMLNS],
            'ExcludeShippingLocationDetails' => ['type' => 'ExcludeShippingLocationDetailsType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'UpdateTime' => [],
            'RecoupmentPolicyDetails' => ['type' => 'RecoupmentPolicyDetailsType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'ShippingCategoryDetails' => ['type' => 'ShippingCategoryDetailsType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'ProductDetails' => ['type' => 'ProductDetailsType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

GeteBayDetailsResponseType::_register();

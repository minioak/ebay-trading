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
 * Type defining the
 * ShippingDetails
 * container, which contains the shipping-related
 * details for an order line item (pre-checkout) or order (post-checkout).
 * 
 * <span class="tablenote">
 * <strong>IMPORTANT:</strong> To avoid loss of shipping details when revising a listing, you must include all
 * <strong>ShippingDetails</strong> fields that were originally provided. Do not omit any tag, even if its value
 * does not change. Omitting a shipping field when revising an item will remove that detail from the listing.
 * </span>
 **/
class ShippingDetailsType extends EbatNs_ComplexType
{
    const TAG = 'ShippingDetailsType';
    const NAME = 'ShippingDetailsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var bool|null "true" or "false"
     */
    protected $AllowPaymentEdit = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $ApplyShippingDiscount = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $GlobalShipping = null;

    /**
     * @var CalculatedShippingRateType|null
     */
    protected $CalculatedShippingRate = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $ChangePaymentInstructions = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $InsuranceWanted = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $PaymentEdited = null;

    /**
     * @var string|null
     */
    protected $PaymentInstructions = null;

    /**
     * @var SalesTaxType|null
     */
    protected $SalesTax = null;

    /**
     * @var string|null
     */
    protected $ShippingRateErrorMessage = null;

    /**
     * @var ShippingRateTypeCodeType|null
     */
    protected $ShippingRateType = null;

    /**
     * @var ShippingServiceOptionsType[]|null
     */
    protected $ShippingServiceOptions = [];

    /**
     * @var InternationalShippingServiceOptionsType[]|null
     */
    protected $InternationalShippingServiceOption = [];

    /**
     * @var ShippingTypeCodeType|null
     */
    protected $ShippingType = null;

    /**
     * @var int|null
     */
    protected $SellingManagerSalesRecordNumber = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $ThirdPartyCheckout = null;

    /**
     * @var TaxTableType|null
     */
    protected $TaxTable = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $GetItFast = null;

    /**
     * @var string|null
     */
    protected $ShippingServiceUsed = null;

    /**
     * @var AmountType|null
     */
    protected $DefaultShippingCost = null;

    /**
     * @var string|null
     */
    protected $ShippingDiscountProfileID = null;

    /**
     * @var FlatShippingDiscountType|null
     */
    protected $FlatShippingDiscount = null;

    /**
     * @var CalculatedShippingDiscountType|null
     */
    protected $CalculatedShippingDiscount = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $PromotionalShippingDiscount = null;

    /**
     * @var string|null
     */
    protected $InternationalShippingDiscountProfileID = null;

    /**
     * @var FlatShippingDiscountType|null
     */
    protected $InternationalFlatShippingDiscount = null;

    /**
     * @var CalculatedShippingDiscountType|null
     */
    protected $InternationalCalculatedShippingDiscount = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $InternationalPromotionalShippingDiscount = null;

    /**
     * @var PromotionalShippingDiscountDetailsType|null
     */
    protected $PromotionalShippingDiscountDetails = null;

    /**
     * @var AmountType|null
     */
    protected $CODCost = null;

    /**
     * @var string[]|null
     */
    protected $ExcludeShipToLocation = [];

    /**
     * @var AmountType|null
     */
    protected $eBayEstimatedLabelCost = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $SellerExcludeShipToLocationsPreference = null;

    /**
     * @var ShipmentTrackingDetailsType[]|null
     */
    protected $ShipmentTrackingDetails = [];

    /**
     * @var RateTableDetailsType|null
     */
    protected $RateTableDetails = null;


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
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getApplyShippingDiscount()
    {
        return $this->_dc($this->ApplyShippingDiscount === 'true', 'ApplyShippingDiscount');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setApplyShippingDiscount($value)
    {
        $this->ApplyShippingDiscount = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getGlobalShipping()
    {
        return $this->_dc($this->GlobalShipping === 'true', 'GlobalShipping');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setGlobalShipping($value)
    {
        $this->GlobalShipping = self::_bool($value);
    }

    /**
     * @return CalculatedShippingRateType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCalculatedShippingRate()
    {
        return $this->_dc($this->CalculatedShippingRate, 'CalculatedShippingRate');
    }

    /**
     * @param CalculatedShippingRateType|null $value
     * @return void
     */
    public function setCalculatedShippingRate($value)
    {
        $this->CalculatedShippingRate = $value;
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getChangePaymentInstructions()
    {
        return $this->_dc($this->ChangePaymentInstructions === 'true', 'ChangePaymentInstructions');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setChangePaymentInstructions($value)
    {
        $this->ChangePaymentInstructions = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getInsuranceWanted()
    {
        return $this->_dc($this->InsuranceWanted === 'true', 'InsuranceWanted');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setInsuranceWanted($value)
    {
        $this->InsuranceWanted = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPaymentEdited()
    {
        return $this->_dc($this->PaymentEdited === 'true', 'PaymentEdited');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setPaymentEdited($value)
    {
        $this->PaymentEdited = self::_bool($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPaymentInstructions()
    {
        return $this->_dc($this->PaymentInstructions, 'PaymentInstructions');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setPaymentInstructions($value)
    {
        $this->PaymentInstructions = self::_string($value);
    }

    /**
     * @return SalesTaxType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSalesTax()
    {
        return $this->_dc($this->SalesTax, 'SalesTax');
    }

    /**
     * @param SalesTaxType|null $value
     * @return void
     */
    public function setSalesTax($value)
    {
        $this->SalesTax = $value;
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShippingRateErrorMessage()
    {
        return $this->_dc($this->ShippingRateErrorMessage, 'ShippingRateErrorMessage');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setShippingRateErrorMessage($value)
    {
        $this->ShippingRateErrorMessage = self::_string($value);
    }

    /**
     * @return ShippingRateTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShippingRateType()
    {
        return $this->_dc($this->ShippingRateType);
    }

    /**
     * @param ShippingRateTypeCodeType|null $value
     * @return void
     */
    public function setShippingRateType($value)
    {
        $this->ShippingRateType = $this->_enum($value, ShippingRateTypeCodeType::class);
    }

    /**
     * @return ShippingServiceOptionsType[]|ShippingServiceOptionsType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getShippingServiceOptions($index = null)
    {
        return $this->_dc($index === null
            ? $this->ShippingServiceOptions
            : (count($this->ShippingServiceOptions) > $index
                ? $this->ShippingServiceOptions[$index]
                : null), 'ShippingServiceOptions');
    }

    /**
     * @param ShippingServiceOptionsType|null|ShippingServiceOptionsType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setShippingServiceOptions($value, $index = null)
    {
        if ($index === null) {
            $this->ShippingServiceOptions = $value;
        } else {
            $this->ShippingServiceOptions[$index] = [];
            
            foreach ($value as $item) {
                $this->addShippingServiceOptions($item);
            }
        }
    }

    /**
     * @param ShippingServiceOptionsType|null $value
     * @return void
     */
    public function addShippingServiceOptions($value)
    {
        $this->ShippingServiceOptions[] = $value;
    }

    /**
     * @return InternationalShippingServiceOptionsType[]|InternationalShippingServiceOptionsType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getInternationalShippingServiceOption($index = null)
    {
        return $this->_dc($index === null
            ? $this->InternationalShippingServiceOption
            : (count($this->InternationalShippingServiceOption) > $index
                ? $this->InternationalShippingServiceOption[$index]
                : null), 'InternationalShippingServiceOption');
    }

    /**
     * @param InternationalShippingServiceOptionsType|null|InternationalShippingServiceOptionsType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setInternationalShippingServiceOption($value, $index = null)
    {
        if ($index === null) {
            $this->InternationalShippingServiceOption = $value;
        } else {
            $this->InternationalShippingServiceOption[$index] = [];
            
            foreach ($value as $item) {
                $this->addInternationalShippingServiceOption($item);
            }
        }
    }

    /**
     * @param InternationalShippingServiceOptionsType|null $value
     * @return void
     */
    public function addInternationalShippingServiceOption($value)
    {
        $this->InternationalShippingServiceOption[] = $value;
    }

    /**
     * @return ShippingTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShippingType()
    {
        return $this->_dc($this->ShippingType);
    }

    /**
     * @param ShippingTypeCodeType|null $value
     * @return void
     */
    public function setShippingType($value)
    {
        $this->ShippingType = $this->_enum($value, ShippingTypeCodeType::class);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSellingManagerSalesRecordNumber()
    {
        return $this->_dc($this->SellingManagerSalesRecordNumber, 'SellingManagerSalesRecordNumber');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setSellingManagerSalesRecordNumber($value)
    {
        $this->SellingManagerSalesRecordNumber = self::_int($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getThirdPartyCheckout()
    {
        return $this->_dc($this->ThirdPartyCheckout === 'true', 'ThirdPartyCheckout');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setThirdPartyCheckout($value)
    {
        $this->ThirdPartyCheckout = self::_bool($value);
    }

    /**
     * @return TaxTableType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTaxTable()
    {
        return $this->_dc($this->TaxTable, 'TaxTable');
    }

    /**
     * @param TaxTableType|null $value
     * @return void
     */
    public function setTaxTable($value)
    {
        $this->TaxTable = $value;
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getGetItFast()
    {
        return $this->_dc($this->GetItFast === 'true', 'GetItFast');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setGetItFast($value)
    {
        $this->GetItFast = self::_bool($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShippingServiceUsed()
    {
        return $this->_dc($this->ShippingServiceUsed, 'ShippingServiceUsed');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setShippingServiceUsed($value)
    {
        $this->ShippingServiceUsed = self::_string($value);
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDefaultShippingCost()
    {
        return $this->_dc($this->DefaultShippingCost, 'DefaultShippingCost');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setDefaultShippingCost($value)
    {
        $this->DefaultShippingCost = $value;
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShippingDiscountProfileID()
    {
        return $this->_dc($this->ShippingDiscountProfileID, 'ShippingDiscountProfileID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setShippingDiscountProfileID($value)
    {
        $this->ShippingDiscountProfileID = self::_string($value);
    }

    /**
     * @return FlatShippingDiscountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getFlatShippingDiscount()
    {
        return $this->_dc($this->FlatShippingDiscount, 'FlatShippingDiscount');
    }

    /**
     * @param FlatShippingDiscountType|null $value
     * @return void
     */
    public function setFlatShippingDiscount($value)
    {
        $this->FlatShippingDiscount = $value;
    }

    /**
     * @return CalculatedShippingDiscountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCalculatedShippingDiscount()
    {
        return $this->_dc($this->CalculatedShippingDiscount, 'CalculatedShippingDiscount');
    }

    /**
     * @param CalculatedShippingDiscountType|null $value
     * @return void
     */
    public function setCalculatedShippingDiscount($value)
    {
        $this->CalculatedShippingDiscount = $value;
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPromotionalShippingDiscount()
    {
        return $this->_dc($this->PromotionalShippingDiscount === 'true', 'PromotionalShippingDiscount');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setPromotionalShippingDiscount($value)
    {
        $this->PromotionalShippingDiscount = self::_bool($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getInternationalShippingDiscountProfileID()
    {
        return $this->_dc($this->InternationalShippingDiscountProfileID, 'InternationalShippingDiscountProfileID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setInternationalShippingDiscountProfileID($value)
    {
        $this->InternationalShippingDiscountProfileID = self::_string($value);
    }

    /**
     * @return FlatShippingDiscountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getInternationalFlatShippingDiscount()
    {
        return $this->_dc($this->InternationalFlatShippingDiscount, 'InternationalFlatShippingDiscount');
    }

    /**
     * @param FlatShippingDiscountType|null $value
     * @return void
     */
    public function setInternationalFlatShippingDiscount($value)
    {
        $this->InternationalFlatShippingDiscount = $value;
    }

    /**
     * @return CalculatedShippingDiscountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getInternationalCalculatedShippingDiscount()
    {
        return $this->_dc($this->InternationalCalculatedShippingDiscount, 'InternationalCalculatedShippingDiscount');
    }

    /**
     * @param CalculatedShippingDiscountType|null $value
     * @return void
     */
    public function setInternationalCalculatedShippingDiscount($value)
    {
        $this->InternationalCalculatedShippingDiscount = $value;
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getInternationalPromotionalShippingDiscount()
    {
        return $this->_dc($this->InternationalPromotionalShippingDiscount === 'true', 'InternationalPromotionalShippingDiscount');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setInternationalPromotionalShippingDiscount($value)
    {
        $this->InternationalPromotionalShippingDiscount = self::_bool($value);
    }

    /**
     * @return PromotionalShippingDiscountDetailsType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPromotionalShippingDiscountDetails()
    {
        return $this->_dc($this->PromotionalShippingDiscountDetails, 'PromotionalShippingDiscountDetails');
    }

    /**
     * @param PromotionalShippingDiscountDetailsType|null $value
     * @return void
     */
    public function setPromotionalShippingDiscountDetails($value)
    {
        $this->PromotionalShippingDiscountDetails = $value;
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCODCost()
    {
        return $this->_dc($this->CODCost, 'CODCost');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setCODCost($value)
    {
        $this->CODCost = $value;
    }

    /**
     * @return string[]|string|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getExcludeShipToLocation($index = null)
    {
        return $this->_dc($index === null
            ? $this->ExcludeShipToLocation
            : (count($this->ExcludeShipToLocation) > $index
                ? $this->ExcludeShipToLocation[$index]
                : null), 'ExcludeShipToLocation');
    }

    /**
     * @param string|null|string[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setExcludeShipToLocation($value, $index = null)
    {
        if ($index === null) {
            $this->ExcludeShipToLocation = $value;
        } else {
            $this->ExcludeShipToLocation[$index] = [];
            
            foreach ($value as $item) {
                $this->addExcludeShipToLocation($item);
            }
        }
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function addExcludeShipToLocation($value)
    {
        $this->ExcludeShipToLocation[] = self::_string($value);
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEBayEstimatedLabelCost()
    {
        return $this->_dc($this->eBayEstimatedLabelCost, 'eBayEstimatedLabelCost');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setEBayEstimatedLabelCost($value)
    {
        $this->eBayEstimatedLabelCost = $value;
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSellerExcludeShipToLocationsPreference()
    {
        return $this->_dc($this->SellerExcludeShipToLocationsPreference === 'true', 'SellerExcludeShipToLocationsPreference');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setSellerExcludeShipToLocationsPreference($value)
    {
        $this->SellerExcludeShipToLocationsPreference = self::_bool($value);
    }

    /**
     * @return ShipmentTrackingDetailsType[]|ShipmentTrackingDetailsType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getShipmentTrackingDetails($index = null)
    {
        return $this->_dc($index === null
            ? $this->ShipmentTrackingDetails
            : (count($this->ShipmentTrackingDetails) > $index
                ? $this->ShipmentTrackingDetails[$index]
                : null), 'ShipmentTrackingDetails');
    }

    /**
     * @param ShipmentTrackingDetailsType|null|ShipmentTrackingDetailsType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setShipmentTrackingDetails($value, $index = null)
    {
        if ($index === null) {
            $this->ShipmentTrackingDetails = $value;
        } else {
            $this->ShipmentTrackingDetails[$index] = [];
            
            foreach ($value as $item) {
                $this->addShipmentTrackingDetails($item);
            }
        }
    }

    /**
     * @param ShipmentTrackingDetailsType|null $value
     * @return void
     */
    public function addShipmentTrackingDetails($value)
    {
        $this->ShipmentTrackingDetails[] = $value;
    }

    /**
     * @return RateTableDetailsType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getRateTableDetails()
    {
        return $this->_dc($this->RateTableDetails, 'RateTableDetails');
    }

    /**
     * @param RateTableDetailsType|null $value
     * @return void
     */
    public function setRateTableDetails($value)
    {
        $this->RateTableDetails = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'AllowPaymentEdit' => ['type' => 'bool'],
            'ApplyShippingDiscount' => ['type' => 'bool'],
            'GlobalShipping' => ['type' => 'bool'],
            'CalculatedShippingRate' => ['type' => 'CalculatedShippingRateType', 'xmlns' => self::XMLNS],
            'ChangePaymentInstructions' => ['type' => 'bool'],
            'InsuranceWanted' => ['type' => 'bool'],
            'PaymentEdited' => ['type' => 'bool'],
            'PaymentInstructions' => [],
            'SalesTax' => ['type' => 'SalesTaxType', 'xmlns' => self::XMLNS],
            'ShippingRateErrorMessage' => [],
            'ShippingRateType' => ['type' => 'ShippingRateTypeCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'ShippingServiceOptions' => ['type' => 'ShippingServiceOptionsType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'InternationalShippingServiceOption' => ['type' => 'InternationalShippingServiceOptionsType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'ShippingType' => ['type' => 'ShippingTypeCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'SellingManagerSalesRecordNumber' => ['type' => 'int'],
            'ThirdPartyCheckout' => ['type' => 'bool'],
            'TaxTable' => ['type' => 'TaxTableType', 'xmlns' => self::XMLNS],
            'GetItFast' => ['type' => 'bool'],
            'ShippingServiceUsed' => [],
            'DefaultShippingCost' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'ShippingDiscountProfileID' => [],
            'FlatShippingDiscount' => ['type' => 'FlatShippingDiscountType', 'xmlns' => self::XMLNS],
            'CalculatedShippingDiscount' => ['type' => 'CalculatedShippingDiscountType', 'xmlns' => self::XMLNS],
            'PromotionalShippingDiscount' => ['type' => 'bool'],
            'InternationalShippingDiscountProfileID' => [],
            'InternationalFlatShippingDiscount' => ['type' => 'FlatShippingDiscountType', 'xmlns' => self::XMLNS],
            'InternationalCalculatedShippingDiscount' => ['type' => 'CalculatedShippingDiscountType', 'xmlns' => self::XMLNS],
            'InternationalPromotionalShippingDiscount' => ['type' => 'bool'],
            'PromotionalShippingDiscountDetails' => ['type' => 'PromotionalShippingDiscountDetailsType', 'xmlns' => self::XMLNS],
            'CODCost' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'ExcludeShipToLocation' => ['cardinality' => '0..*'],
            'eBayEstimatedLabelCost' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'SellerExcludeShipToLocationsPreference' => ['type' => 'bool'],
            'ShipmentTrackingDetails' => ['type' => 'ShipmentTrackingDetailsType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'RateTableDetails' => ['type' => 'RateTableDetailsType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

ShippingDetailsType::_register();

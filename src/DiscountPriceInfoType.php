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
 * Using this container, a seller can supply original retail price and
 * discount price for an item to clarify the discount treatment (also known
 * as strike-through pricing). This only applies to fixed-price listings and auction listings with the Buy It
 * Now
 * option. This feature is available for large enterprise sellers via
 * white list. A seller can provide discount treatment regardless of
 * whether the listing includes a SKU.
 **/
class DiscountPriceInfoType extends EbatNs_ComplexType
{
    const TAG = 'DiscountPriceInfoType';
    const NAME = 'DiscountPriceInfoType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var AmountType|null
     */
    protected $OriginalRetailPrice = null;

    /**
     * @var AmountType|null
     */
    protected $MinimumAdvertisedPrice = null;

    /**
     * @var MinimumAdvertisedPriceExposureCodeType|null
     */
    protected $MinimumAdvertisedPriceExposure = null;

    /**
     * @var PricingTreatmentCodeType|null
     */
    protected $PricingTreatment = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $SoldOneBay = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $SoldOffeBay = null;

    /**
     * @var AmountType|null
     */
    protected $MadeForOutletComparisonPrice = null;


    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getOriginalRetailPrice()
    {
        return $this->_dc($this->OriginalRetailPrice, 'OriginalRetailPrice');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setOriginalRetailPrice($value)
    {
        $this->OriginalRetailPrice = $value;
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMinimumAdvertisedPrice()
    {
        return $this->_dc($this->MinimumAdvertisedPrice, 'MinimumAdvertisedPrice');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setMinimumAdvertisedPrice($value)
    {
        $this->MinimumAdvertisedPrice = $value;
    }

    /**
     * @return MinimumAdvertisedPriceExposureCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMinimumAdvertisedPriceExposure()
    {
        return $this->_dc($this->MinimumAdvertisedPriceExposure);
    }

    /**
     * @param MinimumAdvertisedPriceExposureCodeType|null $value
     * @return void
     */
    public function setMinimumAdvertisedPriceExposure($value)
    {
        $this->MinimumAdvertisedPriceExposure = $this->_enum($value, MinimumAdvertisedPriceExposureCodeType::class);
    }

    /**
     * @return PricingTreatmentCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPricingTreatment()
    {
        return $this->_dc($this->PricingTreatment);
    }

    /**
     * @param PricingTreatmentCodeType|null $value
     * @return void
     */
    public function setPricingTreatment($value)
    {
        $this->PricingTreatment = $this->_enum($value, PricingTreatmentCodeType::class);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSoldOneBay()
    {
        return $this->_dc($this->SoldOneBay === 'true', 'SoldOneBay');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setSoldOneBay($value)
    {
        $this->SoldOneBay = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSoldOffeBay()
    {
        return $this->_dc($this->SoldOffeBay === 'true', 'SoldOffeBay');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setSoldOffeBay($value)
    {
        $this->SoldOffeBay = self::_bool($value);
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMadeForOutletComparisonPrice()
    {
        return $this->_dc($this->MadeForOutletComparisonPrice, 'MadeForOutletComparisonPrice');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setMadeForOutletComparisonPrice($value)
    {
        $this->MadeForOutletComparisonPrice = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'OriginalRetailPrice' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'MinimumAdvertisedPrice' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'MinimumAdvertisedPriceExposure' => ['type' => 'MinimumAdvertisedPriceExposureCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'PricingTreatment' => ['type' => 'PricingTreatmentCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'SoldOneBay' => ['type' => 'bool'],
            'SoldOffeBay' => ['type' => 'bool'],
            'MadeForOutletComparisonPrice' => ['type' => 'AmountType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

DiscountPriceInfoType::_register();

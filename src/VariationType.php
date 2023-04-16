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
 * This type is used by the
 * Variation
 * container, which provides full details on each item variation in a multiple-variation listing.
 **/
class VariationType extends EbatNs_ComplexType
{
    const TAG = 'VariationType';
    const NAME = 'VariationType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var SKUType|null
     */
    protected $SKU = null;

    /**
     * @var AmountType|null
     */
    protected $StartPrice = null;

    /**
     * @var int|null
     */
    protected $Quantity = null;

    /**
     * @var NameValueListArrayType|null
     */
    protected $VariationSpecifics = null;

    /**
     * @var int|null
     */
    protected $UnitsAvailable = null;

    /**
     * @var SellingStatusType|null
     */
    protected $SellingStatus = null;

    /**
     * @var string|null
     */
    protected $VariationTitle = null;

    /**
     * @var string|null
     */
    protected $VariationViewItemURL = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $Delete = null;

    /**
     * @var int|null
     */
    protected $WatchCount = null;

    /**
     * @var string|null
     */
    protected $PrivateNotes = null;

    /**
     * @var DiscountPriceInfoType|null
     */
    protected $DiscountPriceInfo = null;

    /**
     * @var VariationProductListingDetailsType|null
     */
    protected $VariationProductListingDetails = null;

    /**
     * @var VariationExtendedProducerResponsibilityType|null
     */
    protected $VariationExtendedProducerResponsibility = null;


    /**
     * @return SKUType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSKU()
    {
        return $this->_dc($this->SKU, 'SKU');
    }

    /**
     * @param SKUType|null $value
     * @return void
     */
    public function setSKU($value)
    {
        $this->SKU = $value;
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getStartPrice()
    {
        return $this->_dc($this->StartPrice, 'StartPrice');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setStartPrice($value)
    {
        $this->StartPrice = $value;
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getQuantity()
    {
        return $this->_dc($this->Quantity, 'Quantity');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setQuantity($value)
    {
        $this->Quantity = self::_int($value);
    }

    /**
     * @return NameValueListArrayType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getVariationSpecifics()
    {
        return $this->_dc($this->VariationSpecifics, 'VariationSpecifics');
    }

    /**
     * @param NameValueListArrayType|null $value
     * @return void
     */
    public function setVariationSpecifics($value)
    {
        $this->VariationSpecifics = $value;
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getUnitsAvailable()
    {
        return $this->_dc($this->UnitsAvailable, 'UnitsAvailable');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setUnitsAvailable($value)
    {
        $this->UnitsAvailable = self::_int($value);
    }

    /**
     * @return SellingStatusType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSellingStatus()
    {
        return $this->_dc($this->SellingStatus, 'SellingStatus');
    }

    /**
     * @param SellingStatusType|null $value
     * @return void
     */
    public function setSellingStatus($value)
    {
        $this->SellingStatus = $value;
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getVariationTitle()
    {
        return $this->_dc($this->VariationTitle, 'VariationTitle');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setVariationTitle($value)
    {
        $this->VariationTitle = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getVariationViewItemURL()
    {
        return $this->_dc($this->VariationViewItemURL, 'VariationViewItemURL');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setVariationViewItemURL($value)
    {
        $this->VariationViewItemURL = self::_string($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDelete()
    {
        return $this->_dc($this->Delete === 'true', 'Delete');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setDelete($value)
    {
        $this->Delete = self::_bool($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getWatchCount()
    {
        return $this->_dc($this->WatchCount, 'WatchCount');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setWatchCount($value)
    {
        $this->WatchCount = self::_int($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPrivateNotes()
    {
        return $this->_dc($this->PrivateNotes, 'PrivateNotes');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setPrivateNotes($value)
    {
        $this->PrivateNotes = self::_string($value);
    }

    /**
     * @return DiscountPriceInfoType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDiscountPriceInfo()
    {
        return $this->_dc($this->DiscountPriceInfo, 'DiscountPriceInfo');
    }

    /**
     * @param DiscountPriceInfoType|null $value
     * @return void
     */
    public function setDiscountPriceInfo($value)
    {
        $this->DiscountPriceInfo = $value;
    }

    /**
     * @return VariationProductListingDetailsType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getVariationProductListingDetails()
    {
        return $this->_dc($this->VariationProductListingDetails, 'VariationProductListingDetails');
    }

    /**
     * @param VariationProductListingDetailsType|null $value
     * @return void
     */
    public function setVariationProductListingDetails($value)
    {
        $this->VariationProductListingDetails = $value;
    }

    /**
     * @return VariationExtendedProducerResponsibilityType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getVariationExtendedProducerResponsibility()
    {
        return $this->_dc($this->VariationExtendedProducerResponsibility, 'VariationExtendedProducerResponsibility');
    }

    /**
     * @param VariationExtendedProducerResponsibilityType|null $value
     * @return void
     */
    public function setVariationExtendedProducerResponsibility($value)
    {
        $this->VariationExtendedProducerResponsibility = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'SKU' => ['type' => 'SKUType', 'xmlns' => self::XMLNS],
            'StartPrice' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'Quantity' => ['type' => 'int'],
            'VariationSpecifics' => ['type' => 'NameValueListArrayType', 'xmlns' => self::XMLNS],
            'UnitsAvailable' => ['type' => 'int'],
            'SellingStatus' => ['type' => 'SellingStatusType', 'xmlns' => self::XMLNS],
            'VariationTitle' => [],
            'VariationViewItemURL' => [],
            'Delete' => ['type' => 'bool'],
            'WatchCount' => ['type' => 'int'],
            'PrivateNotes' => [],
            'DiscountPriceInfo' => ['type' => 'DiscountPriceInfoType', 'xmlns' => self::XMLNS],
            'VariationProductListingDetails' => ['type' => 'VariationProductListingDetailsType', 'xmlns' => self::XMLNS],
            'VariationExtendedProducerResponsibility' => ['type' => 'VariationExtendedProducerResponsibilityType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

VariationType::_register();

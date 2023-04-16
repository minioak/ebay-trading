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
 * Contains various details about the current status of a listing. These
 * values are computed by eBay and cannot be specified at listing time.
 **/
class SellingStatusType extends EbatNs_ComplexType
{
    const TAG = 'SellingStatusType';
    const NAME = 'SellingStatusType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var int|null
     */
    protected $BidCount = null;

    /**
     * @var AmountType|null
     */
    protected $BidIncrement = null;

    /**
     * @var AmountType|null
     */
    protected $ConvertedCurrentPrice = null;

    /**
     * @var AmountType|null
     */
    protected $CurrentPrice = null;

    /**
     * @var UserType|null
     */
    protected $HighBidder = null;

    /**
     * @var int|null
     */
    protected $LeadCount = null;

    /**
     * @var AmountType|null
     */
    protected $MinimumToBid = null;

    /**
     * @var int|null
     */
    protected $QuantitySold = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $ReserveMet = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $SecondChanceEligible = null;

    /**
     * @var int|null
     */
    protected $BidderCount = null;

    /**
     * @var ListingStatusCodeType|null
     */
    protected $ListingStatus = null;

    /**
     * @var AmountType|null
     */
    protected $FinalValueFee = null;

    /**
     * @var PromotionalSaleDetailsType|null
     */
    protected $PromotionalSaleDetails = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $AdminEnded = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $SoldAsBin = null;

    /**
     * @var int|null
     */
    protected $QuantitySoldByPickupInStore = null;

    /**
     * @var SuggestedBidValueType|null
     */
    protected $SuggestedBidValues = null;


    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBidCount()
    {
        return $this->_dc($this->BidCount, 'BidCount');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setBidCount($value)
    {
        $this->BidCount = self::_int($value);
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBidIncrement()
    {
        return $this->_dc($this->BidIncrement, 'BidIncrement');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setBidIncrement($value)
    {
        $this->BidIncrement = $value;
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getConvertedCurrentPrice()
    {
        return $this->_dc($this->ConvertedCurrentPrice, 'ConvertedCurrentPrice');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setConvertedCurrentPrice($value)
    {
        $this->ConvertedCurrentPrice = $value;
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCurrentPrice()
    {
        return $this->_dc($this->CurrentPrice, 'CurrentPrice');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setCurrentPrice($value)
    {
        $this->CurrentPrice = $value;
    }

    /**
     * @return UserType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getHighBidder()
    {
        return $this->_dc($this->HighBidder, 'HighBidder');
    }

    /**
     * @param UserType|null $value
     * @return void
     */
    public function setHighBidder($value)
    {
        $this->HighBidder = $value;
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getLeadCount()
    {
        return $this->_dc($this->LeadCount, 'LeadCount');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setLeadCount($value)
    {
        $this->LeadCount = self::_int($value);
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMinimumToBid()
    {
        return $this->_dc($this->MinimumToBid, 'MinimumToBid');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setMinimumToBid($value)
    {
        $this->MinimumToBid = $value;
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getQuantitySold()
    {
        return $this->_dc($this->QuantitySold, 'QuantitySold');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setQuantitySold($value)
    {
        $this->QuantitySold = self::_int($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getReserveMet()
    {
        return $this->_dc($this->ReserveMet === 'true', 'ReserveMet');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setReserveMet($value)
    {
        $this->ReserveMet = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSecondChanceEligible()
    {
        return $this->_dc($this->SecondChanceEligible === 'true', 'SecondChanceEligible');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setSecondChanceEligible($value)
    {
        $this->SecondChanceEligible = self::_bool($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBidderCount()
    {
        return $this->_dc($this->BidderCount, 'BidderCount');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setBidderCount($value)
    {
        $this->BidderCount = self::_int($value);
    }

    /**
     * @return ListingStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getListingStatus()
    {
        return $this->_dc($this->ListingStatus);
    }

    /**
     * @param ListingStatusCodeType|null $value
     * @return void
     */
    public function setListingStatus($value)
    {
        $this->ListingStatus = $this->_enum($value, ListingStatusCodeType::class);
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getFinalValueFee()
    {
        return $this->_dc($this->FinalValueFee, 'FinalValueFee');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setFinalValueFee($value)
    {
        $this->FinalValueFee = $value;
    }

    /**
     * @return PromotionalSaleDetailsType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPromotionalSaleDetails()
    {
        return $this->_dc($this->PromotionalSaleDetails, 'PromotionalSaleDetails');
    }

    /**
     * @param PromotionalSaleDetailsType|null $value
     * @return void
     */
    public function setPromotionalSaleDetails($value)
    {
        $this->PromotionalSaleDetails = $value;
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getAdminEnded()
    {
        return $this->_dc($this->AdminEnded === 'true', 'AdminEnded');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setAdminEnded($value)
    {
        $this->AdminEnded = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSoldAsBin()
    {
        return $this->_dc($this->SoldAsBin === 'true', 'SoldAsBin');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setSoldAsBin($value)
    {
        $this->SoldAsBin = self::_bool($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getQuantitySoldByPickupInStore()
    {
        return $this->_dc($this->QuantitySoldByPickupInStore, 'QuantitySoldByPickupInStore');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setQuantitySoldByPickupInStore($value)
    {
        $this->QuantitySoldByPickupInStore = self::_int($value);
    }

    /**
     * @return SuggestedBidValueType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSuggestedBidValues()
    {
        return $this->_dc($this->SuggestedBidValues, 'SuggestedBidValues');
    }

    /**
     * @param SuggestedBidValueType|null $value
     * @return void
     */
    public function setSuggestedBidValues($value)
    {
        $this->SuggestedBidValues = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'BidCount' => ['type' => 'int'],
            'BidIncrement' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'ConvertedCurrentPrice' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'CurrentPrice' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'HighBidder' => ['type' => 'UserType', 'xmlns' => self::XMLNS],
            'LeadCount' => ['type' => 'int'],
            'MinimumToBid' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'QuantitySold' => ['type' => 'int'],
            'ReserveMet' => ['type' => 'bool'],
            'SecondChanceEligible' => ['type' => 'bool'],
            'BidderCount' => ['type' => 'int'],
            'ListingStatus' => ['type' => 'ListingStatusCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'FinalValueFee' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'PromotionalSaleDetails' => ['type' => 'PromotionalSaleDetailsType', 'xmlns' => self::XMLNS],
            'AdminEnded' => ['type' => 'bool'],
            'SoldAsBin' => ['type' => 'bool'],
            'QuantitySoldByPickupInStore' => ['type' => 'int'],
            'SuggestedBidValues' => ['type' => 'SuggestedBidValueType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

SellingStatusType::_register();

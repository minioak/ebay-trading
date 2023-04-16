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
 * Contains information pertaining to an offer made on an item listing and
 * the current bidding or purchase state of the listing.
 **/
class OfferType extends EbatNs_ComplexType
{
    const TAG = 'OfferType';
    const NAME = 'OfferType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var BidActionCodeType|null
     */
    protected $Action = null;

    /**
     * @var CurrencyCodeType|null
     */
    protected $Currency = null;

    /**
     * @var ItemIDType|null
     */
    protected $ItemID = null;

    /**
     * @var AmountType|null
     */
    protected $MaxBid = null;

    /**
     * @var OfferDiscountsType|null
     */
    protected $Discounts = null;

    /**
     * @var int|null
     */
    protected $Quantity = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $SecondChanceEnabled = null;

    /**
     * @var CurrencyCodeType|null
     */
    protected $SiteCurrency = null;

    /**
     * @var string|null
     */
    protected $TimeBid = null;

    /**
     * @var AmountType|null
     */
    protected $HighestBid = null;

    /**
     * @var AmountType|null
     */
    protected $ConvertedPrice = null;

    /**
     * @var string|null
     */
    protected $TransactionID = null;

    /**
     * @var UserType|null
     */
    protected $User = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $UserConsent = null;

    /**
     * @var int|null
     */
    protected $BidCount = null;

    /**
     * @var string|null
     */
    protected $Message = null;

    /**
     * @var BestOfferIDType|null
     */
    protected $BestOfferID = null;

    /**
     * @var AmountType|null
     */
    protected $MyMaxBid = null;


    /**
     * @return BidActionCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getAction()
    {
        return $this->_dc($this->Action);
    }

    /**
     * @param BidActionCodeType|null $value
     * @return void
     */
    public function setAction($value)
    {
        $this->Action = $this->_enum($value, BidActionCodeType::class);
    }

    /**
     * @return CurrencyCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCurrency()
    {
        return $this->_dc($this->Currency);
    }

    /**
     * @param CurrencyCodeType|null $value
     * @return void
     */
    public function setCurrency($value)
    {
        $this->Currency = $this->_enum($value, CurrencyCodeType::class);
    }

    /**
     * @return ItemIDType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getItemID()
    {
        return $this->_dc($this->ItemID, 'ItemID');
    }

    /**
     * @param ItemIDType|null $value
     * @return void
     */
    public function setItemID($value)
    {
        $this->ItemID = $value;
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMaxBid()
    {
        return $this->_dc($this->MaxBid, 'MaxBid');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setMaxBid($value)
    {
        $this->MaxBid = $value;
    }

    /**
     * @return OfferDiscountsType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDiscounts()
    {
        return $this->_dc($this->Discounts, 'Discounts');
    }

    /**
     * @param OfferDiscountsType|null $value
     * @return void
     */
    public function setDiscounts($value)
    {
        $this->Discounts = $value;
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
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSecondChanceEnabled()
    {
        return $this->_dc($this->SecondChanceEnabled === 'true', 'SecondChanceEnabled');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setSecondChanceEnabled($value)
    {
        $this->SecondChanceEnabled = self::_bool($value);
    }

    /**
     * @return CurrencyCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSiteCurrency()
    {
        return $this->_dc($this->SiteCurrency);
    }

    /**
     * @param CurrencyCodeType|null $value
     * @return void
     */
    public function setSiteCurrency($value)
    {
        $this->SiteCurrency = $this->_enum($value, CurrencyCodeType::class);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTimeBid()
    {
        return $this->_dc($this->TimeBid, 'TimeBid');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setTimeBid($value)
    {
        $this->TimeBid = self::_string($value);
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getHighestBid()
    {
        return $this->_dc($this->HighestBid, 'HighestBid');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setHighestBid($value)
    {
        $this->HighestBid = $value;
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getConvertedPrice()
    {
        return $this->_dc($this->ConvertedPrice, 'ConvertedPrice');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setConvertedPrice($value)
    {
        $this->ConvertedPrice = $value;
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTransactionID()
    {
        return $this->_dc($this->TransactionID, 'TransactionID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setTransactionID($value)
    {
        $this->TransactionID = self::_string($value);
    }

    /**
     * @return UserType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getUser()
    {
        return $this->_dc($this->User, 'User');
    }

    /**
     * @param UserType|null $value
     * @return void
     */
    public function setUser($value)
    {
        $this->User = $value;
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getUserConsent()
    {
        return $this->_dc($this->UserConsent === 'true', 'UserConsent');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setUserConsent($value)
    {
        $this->UserConsent = self::_bool($value);
    }

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
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMessage()
    {
        return $this->_dc($this->Message, 'Message');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setMessage($value)
    {
        $this->Message = self::_string($value);
    }

    /**
     * @return BestOfferIDType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBestOfferID()
    {
        return $this->_dc($this->BestOfferID, 'BestOfferID');
    }

    /**
     * @param BestOfferIDType|null $value
     * @return void
     */
    public function setBestOfferID($value)
    {
        $this->BestOfferID = $value;
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMyMaxBid()
    {
        return $this->_dc($this->MyMaxBid, 'MyMaxBid');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setMyMaxBid($value)
    {
        $this->MyMaxBid = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'Action' => ['type' => 'BidActionCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'Currency' => ['type' => 'CurrencyCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'ItemID' => ['type' => 'ItemIDType', 'xmlns' => self::XMLNS],
            'MaxBid' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'Discounts' => ['type' => 'OfferDiscountsType', 'xmlns' => self::XMLNS],
            'Quantity' => ['type' => 'int'],
            'SecondChanceEnabled' => ['type' => 'bool'],
            'SiteCurrency' => ['type' => 'CurrencyCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'TimeBid' => [],
            'HighestBid' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'ConvertedPrice' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'TransactionID' => [],
            'User' => ['type' => 'UserType', 'xmlns' => self::XMLNS],
            'UserConsent' => ['type' => 'bool'],
            'BidCount' => ['type' => 'int'],
            'Message' => [],
            'BestOfferID' => ['type' => 'BestOfferIDType', 'xmlns' => self::XMLNS],
            'MyMaxBid' => ['type' => 'AmountType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

OfferType::_register();

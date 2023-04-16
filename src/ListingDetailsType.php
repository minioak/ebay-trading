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
 * Various details about a listing. Some of the details are calculated or derived after
 * an item is listed. The details in this type include the start and end time and
 * the converted (localized) prices. The details in this type also include
 * input values applicable to the Best Offer feature.
 * Additional details in this type include flags indicating if a seller
 * specified fields whose values are not visible to the requesting user.
 **/
class ListingDetailsType extends EbatNs_ComplexType
{
    const TAG = 'ListingDetailsType';
    const NAME = 'ListingDetailsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var bool|null "true" or "false"
     */
    protected $Adult = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $BindingAuction = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $CheckoutEnabled = null;

    /**
     * @var AmountType|null
     */
    protected $ConvertedBuyItNowPrice = null;

    /**
     * @var AmountType|null
     */
    protected $ConvertedStartPrice = null;

    /**
     * @var AmountType|null
     */
    protected $ConvertedReservePrice = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $HasReservePrice = null;

    /**
     * @var ItemIDType|null
     */
    protected $RelistedItemID = null;

    /**
     * @var ItemIDType|null
     */
    protected $SecondChanceOriginalItemID = null;

    /**
     * @var string|null
     */
    protected $StartTime = null;

    /**
     * @var string|null
     */
    protected $EndTime = null;

    /**
     * @var string|null
     */
    protected $ViewItemURL = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $HasUnansweredQuestions = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $HasPublicMessages = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $BuyItNowAvailable = null;

    /**
     * @var SellerBusinessCodeType|null
     */
    protected $SellerBusinessType = null;

    /**
     * @var AmountType|null
     */
    protected $MinimumBestOfferPrice = null;

    /**
     * @var string|null
     */
    protected $MinimumBestOfferMessage = null;

    /**
     * @var string|null
     */
    protected $LocalListingDistance = null;

    /**
     * @var ItemIDType|null
     */
    protected $TCROriginalItemID = null;

    /**
     * @var string|null
     */
    protected $ViewItemURLForNaturalSearch = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $PayPerLeadEnabled = null;

    /**
     * @var AmountType|null
     */
    protected $BestOfferAutoAcceptPrice = null;

    /**
     * @var EndReasonCodeType|null
     */
    protected $EndingReason = null;


    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getAdult()
    {
        return $this->_dc($this->Adult === 'true', 'Adult');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setAdult($value)
    {
        $this->Adult = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBindingAuction()
    {
        return $this->_dc($this->BindingAuction === 'true', 'BindingAuction');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setBindingAuction($value)
    {
        $this->BindingAuction = self::_bool($value);
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
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getConvertedBuyItNowPrice()
    {
        return $this->_dc($this->ConvertedBuyItNowPrice, 'ConvertedBuyItNowPrice');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setConvertedBuyItNowPrice($value)
    {
        $this->ConvertedBuyItNowPrice = $value;
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getConvertedStartPrice()
    {
        return $this->_dc($this->ConvertedStartPrice, 'ConvertedStartPrice');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setConvertedStartPrice($value)
    {
        $this->ConvertedStartPrice = $value;
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getConvertedReservePrice()
    {
        return $this->_dc($this->ConvertedReservePrice, 'ConvertedReservePrice');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setConvertedReservePrice($value)
    {
        $this->ConvertedReservePrice = $value;
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getHasReservePrice()
    {
        return $this->_dc($this->HasReservePrice === 'true', 'HasReservePrice');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setHasReservePrice($value)
    {
        $this->HasReservePrice = self::_bool($value);
    }

    /**
     * @return ItemIDType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getRelistedItemID()
    {
        return $this->_dc($this->RelistedItemID, 'RelistedItemID');
    }

    /**
     * @param ItemIDType|null $value
     * @return void
     */
    public function setRelistedItemID($value)
    {
        $this->RelistedItemID = $value;
    }

    /**
     * @return ItemIDType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSecondChanceOriginalItemID()
    {
        return $this->_dc($this->SecondChanceOriginalItemID, 'SecondChanceOriginalItemID');
    }

    /**
     * @param ItemIDType|null $value
     * @return void
     */
    public function setSecondChanceOriginalItemID($value)
    {
        $this->SecondChanceOriginalItemID = $value;
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getStartTime()
    {
        return $this->_dc($this->StartTime, 'StartTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setStartTime($value)
    {
        $this->StartTime = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEndTime()
    {
        return $this->_dc($this->EndTime, 'EndTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setEndTime($value)
    {
        $this->EndTime = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getViewItemURL()
    {
        return $this->_dc($this->ViewItemURL, 'ViewItemURL');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setViewItemURL($value)
    {
        $this->ViewItemURL = self::_string($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getHasUnansweredQuestions()
    {
        return $this->_dc($this->HasUnansweredQuestions === 'true', 'HasUnansweredQuestions');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setHasUnansweredQuestions($value)
    {
        $this->HasUnansweredQuestions = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getHasPublicMessages()
    {
        return $this->_dc($this->HasPublicMessages === 'true', 'HasPublicMessages');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setHasPublicMessages($value)
    {
        $this->HasPublicMessages = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBuyItNowAvailable()
    {
        return $this->_dc($this->BuyItNowAvailable === 'true', 'BuyItNowAvailable');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setBuyItNowAvailable($value)
    {
        $this->BuyItNowAvailable = self::_bool($value);
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
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMinimumBestOfferPrice()
    {
        return $this->_dc($this->MinimumBestOfferPrice, 'MinimumBestOfferPrice');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setMinimumBestOfferPrice($value)
    {
        $this->MinimumBestOfferPrice = $value;
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMinimumBestOfferMessage()
    {
        return $this->_dc($this->MinimumBestOfferMessage, 'MinimumBestOfferMessage');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setMinimumBestOfferMessage($value)
    {
        $this->MinimumBestOfferMessage = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getLocalListingDistance()
    {
        return $this->_dc($this->LocalListingDistance, 'LocalListingDistance');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setLocalListingDistance($value)
    {
        $this->LocalListingDistance = self::_string($value);
    }

    /**
     * @return ItemIDType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTCROriginalItemID()
    {
        return $this->_dc($this->TCROriginalItemID, 'TCROriginalItemID');
    }

    /**
     * @param ItemIDType|null $value
     * @return void
     */
    public function setTCROriginalItemID($value)
    {
        $this->TCROriginalItemID = $value;
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getViewItemURLForNaturalSearch()
    {
        return $this->_dc($this->ViewItemURLForNaturalSearch, 'ViewItemURLForNaturalSearch');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setViewItemURLForNaturalSearch($value)
    {
        $this->ViewItemURLForNaturalSearch = self::_string($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPayPerLeadEnabled()
    {
        return $this->_dc($this->PayPerLeadEnabled === 'true', 'PayPerLeadEnabled');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setPayPerLeadEnabled($value)
    {
        $this->PayPerLeadEnabled = self::_bool($value);
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBestOfferAutoAcceptPrice()
    {
        return $this->_dc($this->BestOfferAutoAcceptPrice, 'BestOfferAutoAcceptPrice');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setBestOfferAutoAcceptPrice($value)
    {
        $this->BestOfferAutoAcceptPrice = $value;
    }

    /**
     * @return EndReasonCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEndingReason()
    {
        return $this->_dc($this->EndingReason);
    }

    /**
     * @param EndReasonCodeType|null $value
     * @return void
     */
    public function setEndingReason($value)
    {
        $this->EndingReason = $this->_enum($value, EndReasonCodeType::class);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'Adult' => ['type' => 'bool'],
            'BindingAuction' => ['type' => 'bool'],
            'CheckoutEnabled' => ['type' => 'bool'],
            'ConvertedBuyItNowPrice' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'ConvertedStartPrice' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'ConvertedReservePrice' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'HasReservePrice' => ['type' => 'bool'],
            'RelistedItemID' => ['type' => 'ItemIDType', 'xmlns' => self::XMLNS],
            'SecondChanceOriginalItemID' => ['type' => 'ItemIDType', 'xmlns' => self::XMLNS],
            'StartTime' => [],
            'EndTime' => [],
            'ViewItemURL' => [],
            'HasUnansweredQuestions' => ['type' => 'bool'],
            'HasPublicMessages' => ['type' => 'bool'],
            'BuyItNowAvailable' => ['type' => 'bool'],
            'SellerBusinessType' => ['type' => 'SellerBusinessCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'MinimumBestOfferPrice' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'MinimumBestOfferMessage' => [],
            'LocalListingDistance' => [],
            'TCROriginalItemID' => ['type' => 'ItemIDType', 'xmlns' => self::XMLNS],
            'ViewItemURLForNaturalSearch' => [],
            'PayPerLeadEnabled' => ['type' => 'bool'],
            'BestOfferAutoAcceptPrice' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'EndingReason' => ['type' => 'EndReasonCodeType', 'enum' => true, 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

ListingDetailsType::_register();

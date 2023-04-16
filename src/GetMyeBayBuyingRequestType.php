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
 * Retrieves information regarding a user's buying activity, such as items they are watching, bidding on, have won,
 * did not win, and have made Best Offers on.
 **/
class GetMyeBayBuyingRequestType extends AbstractRequestType
{
    const TAG = 'GetMyeBayBuyingRequest';
    const NAME = 'GetMyeBayBuyingRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'GetMyeBayBuying';

    /**
     * @var ItemListCustomizationType|null
     */
    protected $WatchList = null;

    /**
     * @var ItemListCustomizationType|null
     */
    protected $BidList = null;

    /**
     * @var ItemListCustomizationType|null
     */
    protected $BestOfferList = null;

    /**
     * @var ItemListCustomizationType|null
     */
    protected $WonList = null;

    /**
     * @var ItemListCustomizationType|null
     */
    protected $LostList = null;

    /**
     * @var MyeBaySelectionType|null
     */
    protected $FavoriteSearches = null;

    /**
     * @var MyeBaySelectionType|null
     */
    protected $FavoriteSellers = null;

    /**
     * @var MyeBaySelectionType|null
     */
    protected $SecondChanceOffer = null;

    /**
     * @var BidAssistantListType|null
     */
    protected $BidAssistantList = null;

    /**
     * @var ItemListCustomizationType|null
     */
    protected $DeletedFromWonList = null;

    /**
     * @var ItemListCustomizationType|null
     */
    protected $DeletedFromLostList = null;

    /**
     * @var ItemListCustomizationType|null
     */
    protected $BuyingSummary = null;

    /**
     * @var MyeBaySelectionType|null
     */
    protected $UserDefinedLists = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $HideVariations = null;


    /**
     * @return ItemListCustomizationType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getWatchList()
    {
        return $this->_dc($this->WatchList, 'WatchList');
    }

    /**
     * @param ItemListCustomizationType|null $value
     * @return void
     */
    public function setWatchList($value)
    {
        $this->WatchList = $value;
    }

    /**
     * @return ItemListCustomizationType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBidList()
    {
        return $this->_dc($this->BidList, 'BidList');
    }

    /**
     * @param ItemListCustomizationType|null $value
     * @return void
     */
    public function setBidList($value)
    {
        $this->BidList = $value;
    }

    /**
     * @return ItemListCustomizationType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBestOfferList()
    {
        return $this->_dc($this->BestOfferList, 'BestOfferList');
    }

    /**
     * @param ItemListCustomizationType|null $value
     * @return void
     */
    public function setBestOfferList($value)
    {
        $this->BestOfferList = $value;
    }

    /**
     * @return ItemListCustomizationType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getWonList()
    {
        return $this->_dc($this->WonList, 'WonList');
    }

    /**
     * @param ItemListCustomizationType|null $value
     * @return void
     */
    public function setWonList($value)
    {
        $this->WonList = $value;
    }

    /**
     * @return ItemListCustomizationType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getLostList()
    {
        return $this->_dc($this->LostList, 'LostList');
    }

    /**
     * @param ItemListCustomizationType|null $value
     * @return void
     */
    public function setLostList($value)
    {
        $this->LostList = $value;
    }

    /**
     * @return MyeBaySelectionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getFavoriteSearches()
    {
        return $this->_dc($this->FavoriteSearches, 'FavoriteSearches');
    }

    /**
     * @param MyeBaySelectionType|null $value
     * @return void
     */
    public function setFavoriteSearches($value)
    {
        $this->FavoriteSearches = $value;
    }

    /**
     * @return MyeBaySelectionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getFavoriteSellers()
    {
        return $this->_dc($this->FavoriteSellers, 'FavoriteSellers');
    }

    /**
     * @param MyeBaySelectionType|null $value
     * @return void
     */
    public function setFavoriteSellers($value)
    {
        $this->FavoriteSellers = $value;
    }

    /**
     * @return MyeBaySelectionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSecondChanceOffer()
    {
        return $this->_dc($this->SecondChanceOffer, 'SecondChanceOffer');
    }

    /**
     * @param MyeBaySelectionType|null $value
     * @return void
     */
    public function setSecondChanceOffer($value)
    {
        $this->SecondChanceOffer = $value;
    }

    /**
     * @return BidAssistantListType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBidAssistantList()
    {
        return $this->_dc($this->BidAssistantList, 'BidAssistantList');
    }

    /**
     * @param BidAssistantListType|null $value
     * @return void
     */
    public function setBidAssistantList($value)
    {
        $this->BidAssistantList = $value;
    }

    /**
     * @return ItemListCustomizationType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDeletedFromWonList()
    {
        return $this->_dc($this->DeletedFromWonList, 'DeletedFromWonList');
    }

    /**
     * @param ItemListCustomizationType|null $value
     * @return void
     */
    public function setDeletedFromWonList($value)
    {
        $this->DeletedFromWonList = $value;
    }

    /**
     * @return ItemListCustomizationType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDeletedFromLostList()
    {
        return $this->_dc($this->DeletedFromLostList, 'DeletedFromLostList');
    }

    /**
     * @param ItemListCustomizationType|null $value
     * @return void
     */
    public function setDeletedFromLostList($value)
    {
        $this->DeletedFromLostList = $value;
    }

    /**
     * @return ItemListCustomizationType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBuyingSummary()
    {
        return $this->_dc($this->BuyingSummary, 'BuyingSummary');
    }

    /**
     * @param ItemListCustomizationType|null $value
     * @return void
     */
    public function setBuyingSummary($value)
    {
        $this->BuyingSummary = $value;
    }

    /**
     * @return MyeBaySelectionType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getUserDefinedLists()
    {
        return $this->_dc($this->UserDefinedLists, 'UserDefinedLists');
    }

    /**
     * @param MyeBaySelectionType|null $value
     * @return void
     */
    public function setUserDefinedLists($value)
    {
        $this->UserDefinedLists = $value;
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getHideVariations()
    {
        return $this->_dc($this->HideVariations === 'true', 'HideVariations');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setHideVariations($value)
    {
        $this->HideVariations = self::_bool($value);
    }

    /**
     * @return GetMyeBayBuyingResponseType|EbatNs_ResponseError
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
            'WatchList' => ['type' => 'ItemListCustomizationType', 'xmlns' => self::XMLNS],
            'BidList' => ['type' => 'ItemListCustomizationType', 'xmlns' => self::XMLNS],
            'BestOfferList' => ['type' => 'ItemListCustomizationType', 'xmlns' => self::XMLNS],
            'WonList' => ['type' => 'ItemListCustomizationType', 'xmlns' => self::XMLNS],
            'LostList' => ['type' => 'ItemListCustomizationType', 'xmlns' => self::XMLNS],
            'FavoriteSearches' => ['type' => 'MyeBaySelectionType', 'xmlns' => self::XMLNS],
            'FavoriteSellers' => ['type' => 'MyeBaySelectionType', 'xmlns' => self::XMLNS],
            'SecondChanceOffer' => ['type' => 'MyeBaySelectionType', 'xmlns' => self::XMLNS],
            'BidAssistantList' => ['type' => 'BidAssistantListType', 'xmlns' => self::XMLNS],
            'DeletedFromWonList' => ['type' => 'ItemListCustomizationType', 'xmlns' => self::XMLNS],
            'DeletedFromLostList' => ['type' => 'ItemListCustomizationType', 'xmlns' => self::XMLNS],
            'BuyingSummary' => ['type' => 'ItemListCustomizationType', 'xmlns' => self::XMLNS],
            'UserDefinedLists' => ['type' => 'MyeBaySelectionType', 'xmlns' => self::XMLNS],
            'HideVariations' => ['type' => 'bool']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

GetMyeBayBuyingRequestType::_register();

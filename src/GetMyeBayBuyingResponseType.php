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
 * Returns information regarding a user's buying activity, such as items they are watching, bidding on, have won,
 * did not win, and have made Best Offers on.
 **/
class GetMyeBayBuyingResponseType extends EbatNs_Response
{
    const TAG = 'GetMyeBayBuyingResponseType';
    const NAME = 'GetMyeBayBuyingResponseType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var BuyingSummaryType|null
     */
    protected $BuyingSummary = null;

    /**
     * @var PaginatedItemArrayType|null
     */
    protected $WatchList = null;

    /**
     * @var PaginatedItemArrayType|null
     */
    protected $BidList = null;

    /**
     * @var PaginatedItemArrayType|null
     */
    protected $BestOfferList = null;

    /**
     * @var PaginatedOrderTransactionArrayType|null
     */
    protected $WonList = null;

    /**
     * @var PaginatedItemArrayType|null
     */
    protected $LostList = null;

    /**
     * @var MyeBayFavoriteSearchListType|null
     */
    protected $FavoriteSearches = null;

    /**
     * @var MyeBayFavoriteSellerListType|null
     */
    protected $FavoriteSellers = null;

    /**
     * @var ItemType[]|null
     */
    protected $SecondChanceOffer = [];

    /**
     * @var BidGroupArrayType|null
     */
    protected $BidAssistantList = null;

    /**
     * @var PaginatedOrderTransactionArrayType|null
     */
    protected $DeletedFromWonList = null;

    /**
     * @var PaginatedItemArrayType|null
     */
    protected $DeletedFromLostList = null;

    /**
     * @var UserDefinedListType[]|null
     */
    protected $UserDefinedList = [];


    /**
     * @return BuyingSummaryType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBuyingSummary()
    {
        return $this->_dc($this->BuyingSummary, 'BuyingSummary');
    }

    /**
     * @param BuyingSummaryType|null $value
     * @return void
     */
    public function setBuyingSummary($value)
    {
        $this->BuyingSummary = $value;
    }

    /**
     * @return PaginatedItemArrayType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getWatchList()
    {
        return $this->_dc($this->WatchList, 'WatchList');
    }

    /**
     * @param PaginatedItemArrayType|null $value
     * @return void
     */
    public function setWatchList($value)
    {
        $this->WatchList = $value;
    }

    /**
     * @return PaginatedItemArrayType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBidList()
    {
        return $this->_dc($this->BidList, 'BidList');
    }

    /**
     * @param PaginatedItemArrayType|null $value
     * @return void
     */
    public function setBidList($value)
    {
        $this->BidList = $value;
    }

    /**
     * @return PaginatedItemArrayType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBestOfferList()
    {
        return $this->_dc($this->BestOfferList, 'BestOfferList');
    }

    /**
     * @param PaginatedItemArrayType|null $value
     * @return void
     */
    public function setBestOfferList($value)
    {
        $this->BestOfferList = $value;
    }

    /**
     * @return PaginatedOrderTransactionArrayType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getWonList()
    {
        return $this->_dc($this->WonList, 'WonList');
    }

    /**
     * @param PaginatedOrderTransactionArrayType|null $value
     * @return void
     */
    public function setWonList($value)
    {
        $this->WonList = $value;
    }

    /**
     * @return PaginatedItemArrayType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getLostList()
    {
        return $this->_dc($this->LostList, 'LostList');
    }

    /**
     * @param PaginatedItemArrayType|null $value
     * @return void
     */
    public function setLostList($value)
    {
        $this->LostList = $value;
    }

    /**
     * @return MyeBayFavoriteSearchListType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getFavoriteSearches()
    {
        return $this->_dc($this->FavoriteSearches, 'FavoriteSearches');
    }

    /**
     * @param MyeBayFavoriteSearchListType|null $value
     * @return void
     */
    public function setFavoriteSearches($value)
    {
        $this->FavoriteSearches = $value;
    }

    /**
     * @return MyeBayFavoriteSellerListType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getFavoriteSellers()
    {
        return $this->_dc($this->FavoriteSellers, 'FavoriteSellers');
    }

    /**
     * @param MyeBayFavoriteSellerListType|null $value
     * @return void
     */
    public function setFavoriteSellers($value)
    {
        $this->FavoriteSellers = $value;
    }

    /**
     * @return ItemType[]|ItemType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getSecondChanceOffer($index = null)
    {
        return $this->_dc($index === null
            ? $this->SecondChanceOffer
            : (count($this->SecondChanceOffer) > $index
                ? $this->SecondChanceOffer[$index]
                : null), 'SecondChanceOffer');
    }

    /**
     * @param ItemType|null|ItemType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setSecondChanceOffer($value, $index = null)
    {
        if ($index === null) {
            $this->SecondChanceOffer = $value;
        } else {
            $this->SecondChanceOffer[$index] = [];
            
            foreach ($value as $item) {
                $this->addSecondChanceOffer($item);
            }
        }
    }

    /**
     * @param ItemType|null $value
     * @return void
     */
    public function addSecondChanceOffer($value)
    {
        $this->SecondChanceOffer[] = $value;
    }

    /**
     * @return BidGroupArrayType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBidAssistantList()
    {
        return $this->_dc($this->BidAssistantList, 'BidAssistantList');
    }

    /**
     * @param BidGroupArrayType|null $value
     * @return void
     */
    public function setBidAssistantList($value)
    {
        $this->BidAssistantList = $value;
    }

    /**
     * @return PaginatedOrderTransactionArrayType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDeletedFromWonList()
    {
        return $this->_dc($this->DeletedFromWonList, 'DeletedFromWonList');
    }

    /**
     * @param PaginatedOrderTransactionArrayType|null $value
     * @return void
     */
    public function setDeletedFromWonList($value)
    {
        $this->DeletedFromWonList = $value;
    }

    /**
     * @return PaginatedItemArrayType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDeletedFromLostList()
    {
        return $this->_dc($this->DeletedFromLostList, 'DeletedFromLostList');
    }

    /**
     * @param PaginatedItemArrayType|null $value
     * @return void
     */
    public function setDeletedFromLostList($value)
    {
        $this->DeletedFromLostList = $value;
    }

    /**
     * @return UserDefinedListType[]|UserDefinedListType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getUserDefinedList($index = null)
    {
        return $this->_dc($index === null
            ? $this->UserDefinedList
            : (count($this->UserDefinedList) > $index
                ? $this->UserDefinedList[$index]
                : null), 'UserDefinedList');
    }

    /**
     * @param UserDefinedListType|null|UserDefinedListType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setUserDefinedList($value, $index = null)
    {
        if ($index === null) {
            $this->UserDefinedList = $value;
        } else {
            $this->UserDefinedList[$index] = [];
            
            foreach ($value as $item) {
                $this->addUserDefinedList($item);
            }
        }
    }

    /**
     * @param UserDefinedListType|null $value
     * @return void
     */
    public function addUserDefinedList($value)
    {
        $this->UserDefinedList[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'BuyingSummary' => ['type' => 'BuyingSummaryType', 'xmlns' => self::XMLNS],
            'WatchList' => ['type' => 'PaginatedItemArrayType', 'xmlns' => self::XMLNS],
            'BidList' => ['type' => 'PaginatedItemArrayType', 'xmlns' => self::XMLNS],
            'BestOfferList' => ['type' => 'PaginatedItemArrayType', 'xmlns' => self::XMLNS],
            'WonList' => ['type' => 'PaginatedOrderTransactionArrayType', 'xmlns' => self::XMLNS],
            'LostList' => ['type' => 'PaginatedItemArrayType', 'xmlns' => self::XMLNS],
            'FavoriteSearches' => ['type' => 'MyeBayFavoriteSearchListType', 'xmlns' => self::XMLNS],
            'FavoriteSellers' => ['type' => 'MyeBayFavoriteSellerListType', 'xmlns' => self::XMLNS],
            'SecondChanceOffer' => ['type' => 'ItemType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'BidAssistantList' => ['type' => 'BidGroupArrayType', 'xmlns' => self::XMLNS],
            'DeletedFromWonList' => ['type' => 'PaginatedOrderTransactionArrayType', 'xmlns' => self::XMLNS],
            'DeletedFromLostList' => ['type' => 'PaginatedItemArrayType', 'xmlns' => self::XMLNS],
            'UserDefinedList' => ['type' => 'UserDefinedListType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

GetMyeBayBuyingResponseType::_register();

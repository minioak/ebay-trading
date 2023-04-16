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
 * Contains the data for the seller favorite item preferences, i.e.  the manual or automatic selection criteria to
 * display items for buyer's favourite seller opt in email marketing.
 **/
class SellerFavoriteItemPreferencesType extends EbatNs_ComplexType
{
    const TAG = 'SellerFavoriteItemPreferencesType';
    const NAME = 'SellerFavoriteItemPreferencesType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $SearchKeywords = null;

    /**
     * @var int|null
     */
    protected $StoreCategoryID = null;

    /**
     * @var ListingTypeCodeType|null
     */
    protected $ListingType = null;

    /**
     * @var StoreItemListSortOrderCodeType|null
     */
    protected $SearchSortOrder = null;

    /**
     * @var AmountType|null
     */
    protected $MinPrice = null;

    /**
     * @var AmountType|null
     */
    protected $MaxPrice = null;

    /**
     * @var ItemIDType[]|null
     */
    protected $FavoriteItemID = [];


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSearchKeywords()
    {
        return $this->_dc($this->SearchKeywords, 'SearchKeywords');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setSearchKeywords($value)
    {
        $this->SearchKeywords = self::_string($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getStoreCategoryID()
    {
        return $this->_dc($this->StoreCategoryID, 'StoreCategoryID');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setStoreCategoryID($value)
    {
        $this->StoreCategoryID = self::_int($value);
    }

    /**
     * @return ListingTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getListingType()
    {
        return $this->_dc($this->ListingType);
    }

    /**
     * @param ListingTypeCodeType|null $value
     * @return void
     */
    public function setListingType($value)
    {
        $this->ListingType = $this->_enum($value, ListingTypeCodeType::class);
    }

    /**
     * @return StoreItemListSortOrderCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSearchSortOrder()
    {
        return $this->_dc($this->SearchSortOrder);
    }

    /**
     * @param StoreItemListSortOrderCodeType|null $value
     * @return void
     */
    public function setSearchSortOrder($value)
    {
        $this->SearchSortOrder = $this->_enum($value, StoreItemListSortOrderCodeType::class);
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMinPrice()
    {
        return $this->_dc($this->MinPrice, 'MinPrice');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setMinPrice($value)
    {
        $this->MinPrice = $value;
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMaxPrice()
    {
        return $this->_dc($this->MaxPrice, 'MaxPrice');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setMaxPrice($value)
    {
        $this->MaxPrice = $value;
    }

    /**
     * @return ItemIDType[]|ItemIDType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getFavoriteItemID($index = null)
    {
        return $this->_dc($index === null
            ? $this->FavoriteItemID
            : (count($this->FavoriteItemID) > $index
                ? $this->FavoriteItemID[$index]
                : null), 'FavoriteItemID');
    }

    /**
     * @param ItemIDType|null|ItemIDType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setFavoriteItemID($value, $index = null)
    {
        if ($index === null) {
            $this->FavoriteItemID = $value;
        } else {
            $this->FavoriteItemID[$index] = [];
            
            foreach ($value as $item) {
                $this->addFavoriteItemID($item);
            }
        }
    }

    /**
     * @param ItemIDType|null $value
     * @return void
     */
    public function addFavoriteItemID($value)
    {
        $this->FavoriteItemID[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'SearchKeywords' => [],
            'StoreCategoryID' => ['type' => 'int'],
            'ListingType' => ['type' => 'ListingTypeCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'SearchSortOrder' => ['type' => 'StoreItemListSortOrderCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'MinPrice' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'MaxPrice' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'FavoriteItemID' => ['type' => 'ItemIDType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

SellerFavoriteItemPreferencesType::_register();

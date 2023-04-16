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
 * FavoriteSearch
 * container returned in
 * 
 * GetMyeBayBuying
 * . The
 * FavoriteSearch
 * container
 * consists of options and filtering used in a buyer's Saved Search on My eBay, and is
 * only returned in
 * GetMyeBayBuying
 * if the
 * FavoriteSearches
 * container is included the request, and if there is at least one Saved Search for
 * the buyer.
 **/
class MyeBayFavoriteSearchType extends EbatNs_ComplexType
{
    const TAG = 'MyeBayFavoriteSearchType';
    const NAME = 'MyeBayFavoriteSearchType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $SearchName = null;

    /**
     * @var string|null
     */
    protected $SearchQuery = null;

    /**
     * @var string|null
     */
    protected $QueryKeywords = null;

    /**
     * @var string|null
     */
    protected $CategoryID = null;

    /**
     * @var SimpleItemSortCodeType|null
     */
    protected $ItemSort = null;

    /**
     * @var SortOrderCodeType|null
     */
    protected $SortOrder = null;

    /**
     * @var string|null
     */
    protected $EndTimeFrom = null;

    /**
     * @var string|null
     */
    protected $EndTimeTo = null;

    /**
     * @var int|null
     */
    protected $MaxDistance = null;

    /**
     * @var string|null
     */
    protected $PostalCode = null;

    /**
     * @var ItemTypeCodeType|null
     */
    protected $ItemType = null;

    /**
     * @var AmountType|null
     */
    protected $PriceMax = null;

    /**
     * @var AmountType|null
     */
    protected $PriceMin = null;

    /**
     * @var CurrencyCodeType|null
     */
    protected $Currency = null;

    /**
     * @var int|null
     */
    protected $BidCountMax = null;

    /**
     * @var int|null
     */
    protected $BidCountMin = null;

    /**
     * @var SearchFlagCodeType[]|null
     */
    protected $SearchFlag = [];

    /**
     * @var PaymentMethodSearchCodeType|null
     */
    protected $PaymentMethod = null;

    /**
     * @var PreferredLocationCodeType|null
     */
    protected $PreferredLocation = null;

    /**
     * @var string[]|null
     */
    protected $SellerID = [];

    /**
     * @var string[]|null
     */
    protected $SellerIDExclude = [];

    /**
     * @var CountryCodeType|null
     */
    protected $ItemsAvailableTo = null;

    /**
     * @var CountryCodeType|null
     */
    protected $ItemsLocatedIn = null;

    /**
     * @var SellerBusinessCodeType|null
     */
    protected $SellerBusinessType = null;

    /**
     * @var ItemConditionCodeType|null
     */
    protected $Condition = null;

    /**
     * @var int|null
     */
    protected $Quantity = null;

    /**
     * @var QuantityOperatorCodeType|null
     */
    protected $QuantityOperator = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSearchName()
    {
        return $this->_dc($this->SearchName, 'SearchName');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setSearchName($value)
    {
        $this->SearchName = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSearchQuery()
    {
        return $this->_dc($this->SearchQuery, 'SearchQuery');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setSearchQuery($value)
    {
        $this->SearchQuery = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getQueryKeywords()
    {
        return $this->_dc($this->QueryKeywords, 'QueryKeywords');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setQueryKeywords($value)
    {
        $this->QueryKeywords = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCategoryID()
    {
        return $this->_dc($this->CategoryID, 'CategoryID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setCategoryID($value)
    {
        $this->CategoryID = self::_string($value);
    }

    /**
     * @return SimpleItemSortCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getItemSort()
    {
        return $this->_dc($this->ItemSort);
    }

    /**
     * @param SimpleItemSortCodeType|null $value
     * @return void
     */
    public function setItemSort($value)
    {
        $this->ItemSort = $this->_enum($value, SimpleItemSortCodeType::class);
    }

    /**
     * @return SortOrderCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSortOrder()
    {
        return $this->_dc($this->SortOrder);
    }

    /**
     * @param SortOrderCodeType|null $value
     * @return void
     */
    public function setSortOrder($value)
    {
        $this->SortOrder = $this->_enum($value, SortOrderCodeType::class);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEndTimeFrom()
    {
        return $this->_dc($this->EndTimeFrom, 'EndTimeFrom');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setEndTimeFrom($value)
    {
        $this->EndTimeFrom = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEndTimeTo()
    {
        return $this->_dc($this->EndTimeTo, 'EndTimeTo');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setEndTimeTo($value)
    {
        $this->EndTimeTo = self::_string($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMaxDistance()
    {
        return $this->_dc($this->MaxDistance, 'MaxDistance');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setMaxDistance($value)
    {
        $this->MaxDistance = self::_int($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPostalCode()
    {
        return $this->_dc($this->PostalCode, 'PostalCode');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setPostalCode($value)
    {
        $this->PostalCode = self::_string($value);
    }

    /**
     * @return ItemTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getItemType()
    {
        return $this->_dc($this->ItemType);
    }

    /**
     * @param ItemTypeCodeType|null $value
     * @return void
     */
    public function setItemType($value)
    {
        $this->ItemType = $this->_enum($value, ItemTypeCodeType::class);
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPriceMax()
    {
        return $this->_dc($this->PriceMax, 'PriceMax');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setPriceMax($value)
    {
        $this->PriceMax = $value;
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPriceMin()
    {
        return $this->_dc($this->PriceMin, 'PriceMin');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setPriceMin($value)
    {
        $this->PriceMin = $value;
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
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBidCountMax()
    {
        return $this->_dc($this->BidCountMax, 'BidCountMax');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setBidCountMax($value)
    {
        $this->BidCountMax = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBidCountMin()
    {
        return $this->_dc($this->BidCountMin, 'BidCountMin');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setBidCountMin($value)
    {
        $this->BidCountMin = self::_int($value);
    }

    /**
     * @return string[]|SearchFlagCodeType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getSearchFlag($index = null)
    {
        return $this->_dc($index === null
            ? $this->SearchFlag
            : (count($this->SearchFlag) > $index
                ? $this->SearchFlag[$index]
                : null));
    }

    /**
     * @param SearchFlagCodeType|null|string[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setSearchFlag($value, $index = null)
    {
        if ($index === null) {
            $this->SearchFlag = $value;
        } else {
            $this->SearchFlag[$index] = [];
            
            foreach ($value as $item) {
                $this->addSearchFlag($item);
            }
        }
    }

    /**
     * @param SearchFlagCodeType|null $value
     * @return void
     */
    public function addSearchFlag($value)
    {
        $this->SearchFlag[] = $this->_enum($value, SearchFlagCodeType::class);
    }

    /**
     * @return PaymentMethodSearchCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPaymentMethod()
    {
        return $this->_dc($this->PaymentMethod);
    }

    /**
     * @param PaymentMethodSearchCodeType|null $value
     * @return void
     */
    public function setPaymentMethod($value)
    {
        $this->PaymentMethod = $this->_enum($value, PaymentMethodSearchCodeType::class);
    }

    /**
     * @return PreferredLocationCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPreferredLocation()
    {
        return $this->_dc($this->PreferredLocation);
    }

    /**
     * @param PreferredLocationCodeType|null $value
     * @return void
     */
    public function setPreferredLocation($value)
    {
        $this->PreferredLocation = $this->_enum($value, PreferredLocationCodeType::class);
    }

    /**
     * @return string[]|string|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getSellerID($index = null)
    {
        return $this->_dc($index === null
            ? $this->SellerID
            : (count($this->SellerID) > $index
                ? $this->SellerID[$index]
                : null), 'SellerID');
    }

    /**
     * @param string|null|string[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setSellerID($value, $index = null)
    {
        if ($index === null) {
            $this->SellerID = $value;
        } else {
            $this->SellerID[$index] = [];
            
            foreach ($value as $item) {
                $this->addSellerID($item);
            }
        }
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function addSellerID($value)
    {
        $this->SellerID[] = self::_string($value);
    }

    /**
     * @return string[]|string|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getSellerIDExclude($index = null)
    {
        return $this->_dc($index === null
            ? $this->SellerIDExclude
            : (count($this->SellerIDExclude) > $index
                ? $this->SellerIDExclude[$index]
                : null), 'SellerIDExclude');
    }

    /**
     * @param string|null|string[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setSellerIDExclude($value, $index = null)
    {
        if ($index === null) {
            $this->SellerIDExclude = $value;
        } else {
            $this->SellerIDExclude[$index] = [];
            
            foreach ($value as $item) {
                $this->addSellerIDExclude($item);
            }
        }
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function addSellerIDExclude($value)
    {
        $this->SellerIDExclude[] = self::_string($value);
    }

    /**
     * @return CountryCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getItemsAvailableTo()
    {
        return $this->_dc($this->ItemsAvailableTo);
    }

    /**
     * @param CountryCodeType|null $value
     * @return void
     */
    public function setItemsAvailableTo($value)
    {
        $this->ItemsAvailableTo = $this->_enum($value, CountryCodeType::class);
    }

    /**
     * @return CountryCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getItemsLocatedIn()
    {
        return $this->_dc($this->ItemsLocatedIn);
    }

    /**
     * @param CountryCodeType|null $value
     * @return void
     */
    public function setItemsLocatedIn($value)
    {
        $this->ItemsLocatedIn = $this->_enum($value, CountryCodeType::class);
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
     * @return ItemConditionCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCondition()
    {
        return $this->_dc($this->Condition);
    }

    /**
     * @param ItemConditionCodeType|null $value
     * @return void
     */
    public function setCondition($value)
    {
        $this->Condition = $this->_enum($value, ItemConditionCodeType::class);
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
     * @return QuantityOperatorCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getQuantityOperator()
    {
        return $this->_dc($this->QuantityOperator);
    }

    /**
     * @param QuantityOperatorCodeType|null $value
     * @return void
     */
    public function setQuantityOperator($value)
    {
        $this->QuantityOperator = $this->_enum($value, QuantityOperatorCodeType::class);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'SearchName' => [],
            'SearchQuery' => [],
            'QueryKeywords' => [],
            'CategoryID' => [],
            'ItemSort' => ['type' => 'SimpleItemSortCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'SortOrder' => ['type' => 'SortOrderCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'EndTimeFrom' => [],
            'EndTimeTo' => [],
            'MaxDistance' => ['type' => 'int'],
            'PostalCode' => [],
            'ItemType' => ['type' => 'ItemTypeCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'PriceMax' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'PriceMin' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'Currency' => ['type' => 'CurrencyCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'BidCountMax' => ['type' => 'int'],
            'BidCountMin' => ['type' => 'int'],
            'SearchFlag' => ['type' => 'SearchFlagCodeType', 'enum' => true, 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'PaymentMethod' => ['type' => 'PaymentMethodSearchCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'PreferredLocation' => ['type' => 'PreferredLocationCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'SellerID' => ['cardinality' => '0..*'],
            'SellerIDExclude' => ['cardinality' => '0..*'],
            'ItemsAvailableTo' => ['type' => 'CountryCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'ItemsLocatedIn' => ['type' => 'CountryCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'SellerBusinessType' => ['type' => 'SellerBusinessCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'Condition' => ['type' => 'ItemConditionCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'Quantity' => ['type' => 'int'],
            'QuantityOperator' => ['type' => 'QuantityOperatorCodeType', 'enum' => true, 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

MyeBayFavoriteSearchType::_register();

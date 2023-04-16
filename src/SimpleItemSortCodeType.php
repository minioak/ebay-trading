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
 * This enumerated type defines the sort values that can be used in the
 * 
 * FavoriteSearch.ItemSort
 * filter in a
 * GetMyeBayBuying
 * 
 * request.
 **/
class SimpleItemSortCodeType extends EbatNs_EnumType
{
    const TAG = 'SimpleItemSortCodeType';
    const NAME = 'SimpleItemSortCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * Sorts items by Best Match, and no sort order applies. If specified,
     * then Best Match sort also applies to CategoryHistogram.
     **/
    const CodeType_BestMatch = 'BestMatch';

    /**
     * This value is reserved for future or internal use.
     **/
    const CodeType_CustomCode = 'CustomCode';

    /**
     * Sorts by the end time of the listing, in ascending or descending order according to the
     * 
     * SortOrder
     * value.
     **/
    const CodeType_EndTime = 'EndTime';

    /**
     * Sorts by number of bids on the item, in ascending or descending order according to the
     * 
     * SortOrder
     * value.
     **/
    const CodeType_BidCount = 'BidCount';

    /**
     * Sorts by country; no sort order can be specified.
     **/
    const CodeType_Country = 'Country';

    /**
     * Sorts by current bid; descending order only.
     **/
    const CodeType_CurrentBid = 'CurrentBid';

    /**
     * Sorts by distance; ascending order only.
     **/
    const CodeType_Distance = 'Distance';

    /**
     * Sorts by the start time of the listing; recently-listed first.
     **/
    const CodeType_StartDate = 'StartDate';

    /**
     * Sorts by BestMatchCategoryGroup, so results are grouped by Best Match within a category.
     **/
    const CodeType_BestMatchCategoryGroup = 'BestMatchCategoryGroup';

    /**
     * Sorts by total cost, which is item cost plus shipping cost. If
     * 
     * SortOrder
     * is included and set to 'Ascending', items are sorted
     * in the following order: Lowest total cost (for items where shipping was
     * properly specified); then freight-shipping items (lowest to highest); and finally,
     * items for which shipping was not specified (lowest to highest).
     **/
    const CodeType_PricePlusShipping = 'PricePlusShipping';
    
    /**
     * @var string|null
     */
    protected $_value = null;


    /**
     * @param string|null $value
     */
    public function __construct($value = null)
    {
        $this->setTypeValue($value);
    }

    /**
     * @return SimpleItemSortCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param SimpleItemSortCodeType|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $const = 'self::CodeType_' . $value;
        $this->_value = $value !== null && defined($const) ? constant($const) : null;
    }

    /**
     * @return bool
     */
    public function isBestMatch()
    {
        return $this->_value === self::CodeType_BestMatch;
    }

    /**
     * @return bool
     */
    public function isCustomCode()
    {
        return $this->_value === self::CodeType_CustomCode;
    }

    /**
     * @return bool
     */
    public function isEndTime()
    {
        return $this->_value === self::CodeType_EndTime;
    }

    /**
     * @return bool
     */
    public function isBidCount()
    {
        return $this->_value === self::CodeType_BidCount;
    }

    /**
     * @return bool
     */
    public function isCountry()
    {
        return $this->_value === self::CodeType_Country;
    }

    /**
     * @return bool
     */
    public function isCurrentBid()
    {
        return $this->_value === self::CodeType_CurrentBid;
    }

    /**
     * @return bool
     */
    public function isDistance()
    {
        return $this->_value === self::CodeType_Distance;
    }

    /**
     * @return bool
     */
    public function isStartDate()
    {
        return $this->_value === self::CodeType_StartDate;
    }

    /**
     * @return bool
     */
    public function isBestMatchCategoryGroup()
    {
        return $this->_value === self::CodeType_BestMatchCategoryGroup;
    }

    /**
     * @return bool
     */
    public function isPricePlusShipping()
    {
        return $this->_value === self::CodeType_PricePlusShipping;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([], parent::NAME);
        self::assignAttributes([]);
    }

}

SimpleItemSortCodeType::_register();

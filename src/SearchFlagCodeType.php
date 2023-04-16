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
 * This enumerated type lists the possible values that can be returned under the
 * 
 * FavoriteSearch.SearchFlag
 * field of a
 * 
 * GetMyeBayBuying
 * response. These values are output only and are
 * controlled by the filter types used in a buyer's Saved Search.
 **/
class SearchFlagCodeType extends EbatNs_EnumType
{
    const TAG = 'SearchFlagCodeType';
    const NAME = 'SearchFlagCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This value being returned in the
     * FavoriteSearch.SearchFlag
     * field indicates that the buyer selected the
     * eBay for Charity
     * option in the Saved Search.
     **/
    const CodeType_Charity = 'Charity';

    /**
     * This value is no longer applicable as Gift Icon and Gift Services are deprecated.
     **/
    const CodeType_Gift = 'Gift';

    /**
     * This value is no longer applicable as the Now and New feature is deprecated.
     **/
    const CodeType_NowAndNew = 'NowAndNew';

    /**
     * This value being returned in the
     * FavoriteSearch.SearchFlag
     * field indicates that the buyer selected the
     * Local pickup
     * option in the Saved Search. A buyer would select the
     * Local Pickup
     * filter in a Saved Search to restrict retrieved listings to those that offer 'local pickup'
     * as an option to buyers.
     **/
    const CodeType_LocalSearch = 'LocalSearch';

    /**
     * This value being returned in the
     * FavoriteSearch.SearchFlag
     * field indicates that the buyer selected the
     * Free shipping
     * option in the Saved Search. A buyer would select the
     * Free shipping
     * filter in a Saved Search to restrict retrieved listings to those that offer a free
     * shipping option to that specific buyer (the availability of free shipping may
     * be dependent on the buyer's location).
     **/
    const CodeType_FreeShipping = 'FreeShipping';

    /**
     * This value is no longer applicable as there is always a gallery picture by
     * default since all listings must have at least one picture.
     **/
    const CodeType_Gallery = 'Gallery';

    /**
     * This value is no longer applicable as there is now a requirement that all
     * listings have at least one picture.
     **/
    const CodeType_Picture = 'Picture';

    /**
     * This value is no longer applicable as the Get It Fast feature is deprecated.
     **/
    const CodeType_GetItFast = 'GetItFast';

    /**
     * This value being returned in the
     * FavoriteSearch.SearchFlag
     * field indicates that the buyer selected the
     * Items listed as lots
     * option in the Saved Search. A buyer would select the
     * Items listed as lots
     * filter in a Saved Search to restrict retrieved listings to those that are offering
     * a "lot" of items in one listing. Specifically, a "lot" is defined as, "a group of
     * similar or identical items that are sold together to one buyer."
     **/
    const CodeType_Lot = 'Lot';

    /**
     * This value is only applicable to the German site and if the user is searching for
     * motor vehicle listings. This value being returned in the
     * 
     * FavoriteSearch.SearchFlag
     * field indicates that the buyer
     * selected a filter in a Saved Search to restrict retrieved eBay Germany motor
     * vehicle listings that are also being displayed on the mobile.de vehicle
     * marketplace.
     **/
    const CodeType_GermanMotorsSearchable = 'GermanMotorsSearchable';

    /**
     * This value is no longer applicable as the World of Good site no longer exists.
     **/
    const CodeType_WorldOfGood = 'WorldOfGood';

    /**
     * This value is no longer applicable.
     **/
    const CodeType_DigitalDelivery = 'DigitalDelivery';

    /**
     * Reserved for internal or future use.
     **/
    const CodeType_CustomCode = 'CustomCode';
    
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
     * @return SearchFlagCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param SearchFlagCodeType|null $value
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
    public function isCharity()
    {
        return $this->_value === self::CodeType_Charity;
    }

    /**
     * @return bool
     */
    public function isGift()
    {
        return $this->_value === self::CodeType_Gift;
    }

    /**
     * @return bool
     */
    public function isNowAndNew()
    {
        return $this->_value === self::CodeType_NowAndNew;
    }

    /**
     * @return bool
     */
    public function isLocalSearch()
    {
        return $this->_value === self::CodeType_LocalSearch;
    }

    /**
     * @return bool
     */
    public function isFreeShipping()
    {
        return $this->_value === self::CodeType_FreeShipping;
    }

    /**
     * @return bool
     */
    public function isGallery()
    {
        return $this->_value === self::CodeType_Gallery;
    }

    /**
     * @return bool
     */
    public function isPicture()
    {
        return $this->_value === self::CodeType_Picture;
    }

    /**
     * @return bool
     */
    public function isGetItFast()
    {
        return $this->_value === self::CodeType_GetItFast;
    }

    /**
     * @return bool
     */
    public function isLot()
    {
        return $this->_value === self::CodeType_Lot;
    }

    /**
     * @return bool
     */
    public function isGermanMotorsSearchable()
    {
        return $this->_value === self::CodeType_GermanMotorsSearchable;
    }

    /**
     * @return bool
     */
    public function isWorldOfGood()
    {
        return $this->_value === self::CodeType_WorldOfGood;
    }

    /**
     * @return bool
     */
    public function isDigitalDelivery()
    {
        return $this->_value === self::CodeType_DigitalDelivery;
    }

    /**
     * @return bool
     */
    public function isCustomCode()
    {
        return $this->_value === self::CodeType_CustomCode;
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

SearchFlagCodeType::_register();

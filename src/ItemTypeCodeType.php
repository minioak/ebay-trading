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
 * Enumerated type containing values that provide more information on the type of
 * filtering the buyer used when setting up a Saved Search in My eBay.
 **/
class ItemTypeCodeType extends EbatNs_EnumType
{
    const TAG = 'ItemTypeCodeType';
    const NAME = 'ItemTypeCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * When setting up filtering for the Saved Search, the buyer was only looking for
     * auction items (with or without the Buy It Now option), so only selected the
     * Auction
     * checkbox in the
     * 
     * Format
     * dialog box. When this filter is used in a Saved Search,
     * fixed-price items and classified ad listings are not retrieved for the buyer.
     **/
    const CodeType_AuctionItemsOnly = 'AuctionItemsOnly';

    /**
     * When setting up filtering for the Saved Search, the buyer was looking for all
     * fixed-price items and auction items with Buy It Now available, so only selected the
     * 
     * Buy It Now
     * checkbox in the
     * Format
     * dialog box.
     * When this filter is used in a Saved Search, auction items (without the Buy It Now
     * option) and classified ad listings are not retrieved for the buyer.
     **/
    const CodeType_FixedPricedItem = 'FixedPricedItem';

    /**
     * When setting up filtering for the Saved Search, the buyer was looking for all
     * items closely associated with the search term, so selected all buying formats
     * (Auction, Buy It Now, and Classified Ads). All items are retrieved for the buyer,
     * including auction items (with or without the Buy It Now option), fixed-price
     * items, and classified ad listings.
     **/
    const CodeType_AllItems = 'AllItems';

    /**
     * When setting up filtering for the Saved Search, the buyer was only looking for
     * items sold by sellers with eBay stores, so selected the
     * 
     * Sellers with eBay stores
     * checkbox in the
     * 
     * Seller
     * dialog box. When this filter is used in a Saved Search,
     * only items for sale in an eBay store are retrieved for the buyer.
     **/
    const CodeType_StoreInventoryOnly = 'StoreInventoryOnly';

    /**
     * Excludes listings that have listing type set to StoresFixedPrice.
     * Excludes listings that have listing type set to AdType.
     * Excludes auction listings in which BuyItNowEnabled is false.
     **/
    const CodeType_FixedPriceExcludeStoreInventory = 'FixedPriceExcludeStoreInventory';

    /**
     * Excludes listings that have listing type set to StoresFixedPrice.
     **/
    const CodeType_ExcludeStoreInventory = 'ExcludeStoreInventory';

    /**
     * Retrieves listings whether or not listing type is set to StoresFixedPrice;
     * include auction items.
     **/
    const CodeType_AllItemTypes = 'AllItemTypes';

    /**
     * Retrieves fixed-price items.
     * Whether StoresFixedPrice items are retrieved does not depend on the site default.
     * The StoresFixedPrice items are retrieved after the basic fixed price items.
     * Items are retrieved whether or not listing type is set to StoresFixedPrice.
     * Does not retrieve items for which listing type is AdType.
     * Does not retrieve auction items for which BuyItNowEnabled is false.
     **/
    const CodeType_AllFixedPriceItemTypes = 'AllFixedPriceItemTypes';

    /**
     * Reserved for internal or future use.
     **/
    const CodeType_CustomCode = 'CustomCode';

    /**
     * When setting up filtering for the Saved Search, the buyer was only looking for
     * classified ad listings, so only selected the
     * Classified ads
     * checkbox in the
     * 
     * Format
     * dialog box. When this filter is used in a Saved Search,
     * auction (with or without the Buy It Now option) and fixed-price items
     * are not retrieved for the buyer.
     **/
    const CodeType_ClassifiedItemsOnly = 'ClassifiedItemsOnly';

    /**
     * Restricts listings to return only items that have the Ad Format feature.
     **/
    const CodeType_AdFormat = 'AdFormat';
    
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
     * @return ItemTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param ItemTypeCodeType|null $value
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
    public function isAuctionItemsOnly()
    {
        return $this->_value === self::CodeType_AuctionItemsOnly;
    }

    /**
     * @return bool
     */
    public function isFixedPricedItem()
    {
        return $this->_value === self::CodeType_FixedPricedItem;
    }

    /**
     * @return bool
     */
    public function isAllItems()
    {
        return $this->_value === self::CodeType_AllItems;
    }

    /**
     * @return bool
     */
    public function isStoreInventoryOnly()
    {
        return $this->_value === self::CodeType_StoreInventoryOnly;
    }

    /**
     * @return bool
     */
    public function isFixedPriceExcludeStoreInventory()
    {
        return $this->_value === self::CodeType_FixedPriceExcludeStoreInventory;
    }

    /**
     * @return bool
     */
    public function isExcludeStoreInventory()
    {
        return $this->_value === self::CodeType_ExcludeStoreInventory;
    }

    /**
     * @return bool
     */
    public function isAllItemTypes()
    {
        return $this->_value === self::CodeType_AllItemTypes;
    }

    /**
     * @return bool
     */
    public function isAllFixedPriceItemTypes()
    {
        return $this->_value === self::CodeType_AllFixedPriceItemTypes;
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
    public function isClassifiedItemsOnly()
    {
        return $this->_value === self::CodeType_ClassifiedItemsOnly;
    }

    /**
     * @return bool
     */
    public function isAdFormat()
    {
        return $this->_value === self::CodeType_AdFormat;
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

ItemTypeCodeType::_register();

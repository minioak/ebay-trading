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
 * Defines options to track a listing by the eBay item ID or the seller's SKU.
 * In some calls, elements of this type are only returned in the response when
 * the value is set to SKU on the item.
 **/
class InventoryTrackingMethodCodeType extends EbatNs_EnumType
{
    const TAG = 'InventoryTrackingMethodCodeType';
    const NAME = 'InventoryTrackingMethodCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * Indicates the seller prefers to track the listing by its eBay item ID.
     * This is the default for all listings.
     **/
    const CodeType_ItemID = 'ItemID';

    /**
     * Indicates the seller prefers to track the listing by their own SKU.
     * 
     * When you track by SKU, it means you can pass in your SKU instead of
     * the eBay item ID in other calls that support SKU as an input field.
     * If you choose SKU as your tracking preference for a listing,
     * the value in
     * Item.SKU
     * must be unique across your active listings.
     * You cannot create new listings with the same
     * Item.SKU
     * value while
     * the listing is active (that is, until the existing listing with that
     * SKU has ended).
     * 
     * However, you can use
     * ReviseInventoryStatus
     * to update the quantity
     * and/or price for the existing SKU as needed. When revising a listing
     * where the
     * InventoryTrackingMethod
     * was set to SKU, you must pass in both
     * the
     * InventoryTrackingMethod
     * tag (with the value set to SKU) and the SKU
     * tag with the SKU value from your original listing.
     **/
    const CodeType_SKU = 'SKU';

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
     * @return InventoryTrackingMethodCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param InventoryTrackingMethodCodeType|null $value
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
    public function isItemID()
    {
        return $this->_value === self::CodeType_ItemID;
    }

    /**
     * @return bool
     */
    public function isSKU()
    {
        return $this->_value === self::CodeType_SKU;
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

InventoryTrackingMethodCodeType::_register();

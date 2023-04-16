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
 * This enumerated type is used by
 * GetItem
 * , and indicates the source for an Item Specific.
 **/
class ItemSpecificSourceCodeType extends EbatNs_EnumType
{
    const TAG = 'ItemSpecificSourceCodeType';
    const NAME = 'ItemSpecificSourceCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This enumeration value indicates that the corresponding Item Specific was specified by the seller in
     * Add/Revise/Relist call or flow. In an Add/Revise/Relist API call, Item Specifics for a listing are specified
     * through the
     * ItemSpecifics.NameValueList
     * or
     * VariationSpecifics.NameValueList
     * (for a variation in a multiple-variation listing) containers.
     **/
    const CodeType_ItemSpecific = 'ItemSpecific';

    /**
     * This value is no longer applicable and should not be returned.
     **/
    const CodeType_Attribute = 'Attribute';

    /**
     * This enumeration value indicates that the corresponding Item Specific was derived from a product in the eBay
     * Catalog, and was automatically picked up by the listing when the seller created, revised, or relisted an item
     * referencing and matching an eBay catalog product through the use of an ePID or GTIN value in the
     * ProductListingDetails
     * container.
     **/
    const CodeType_Product = 'Product';

    /**
     * Reserved for future use.
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
     * @return ItemSpecificSourceCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param ItemSpecificSourceCodeType|null $value
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
    public function isItemSpecific()
    {
        return $this->_value === self::CodeType_ItemSpecific;
    }

    /**
     * @return bool
     */
    public function isAttribute()
    {
        return $this->_value === self::CodeType_Attribute;
    }

    /**
     * @return bool
     */
    public function isProduct()
    {
        return $this->_value === self::CodeType_Product;
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

ItemSpecificSourceCodeType::_register();

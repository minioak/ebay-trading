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
 * This type defines the reasons that a seller can end an item listing early. This value is required if the seller
 * ends a listing early. This can be on an item that hasn't
 * sold and has no bids or on an item that has bids and the seller wants to sell the item to the high bidder
 * now.
 **/
class EndReasonCodeType extends EbatNs_EnumType
{
    const TAG = 'EndReasonCodeType';
    const NAME = 'EndReasonCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * Use this enumeration value in an End listing call if the seller is ending a listing because the item was lost or
     * is broken.
     **/
    const CodeType_LostOrBroken = 'LostOrBroken';

    /**
     * Use this enumeration value in an End listing call if the seller is ending a listing because the item is no longer
     * available for sale.
     **/
    const CodeType_NotAvailable = 'NotAvailable';

    /**
     * Use this enumeration value in an End listing call if the seller is ending a listing because the start price or
     * reserve price is incorrect.
     **/
    const CodeType_Incorrect = 'Incorrect';

    /**
     * Use this enumeration value in an End listing call if the seller is ending a listing because the listing contained
     * an error (other than start price or reserve price).
     **/
    const CodeType_OtherListingError = 'OtherListingError';

    /**
     * Reserved for internal or future use.
     **/
    const CodeType_CustomCode = 'CustomCode';

    /**
     * Use this enumeration value in an End listing call if the seller is ending a listing because they want to sell an
     * auction item to the current high bidder. A seller can end a listing early in order to sell to the current high
     * bidder when the listing has qualifying bids (i.e., there is a current high bid that,
     * when applicable, meets the minimum reserve price) and there is more than 12 hours before the listing ends.
     * 
     * 
     * Note
     * : In the last 12 hours of an item listing, you cannot end an item early if it has bids.
     **/
    const CodeType_SellToHighBidder = 'SellToHighBidder';

    /**
     * The vehicle was sold. Applies to local classified listings for vehicles only.
     **/
    const CodeType_Sold = 'Sold';

    /**
     * For internal use only. This enumeration value cannot be used by the seller in an End listing call, but it will
     * get returned in
     * GetItem
     * if a listing was administratively ended by eBay if the item in a listing becomes unpurchasable due to the eBay
     * Catalog product associated with the listing being removed from the catalog.
     **/
    const CodeType_ProductDeleted = 'ProductDeleted';
    
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
     * @return EndReasonCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param EndReasonCodeType|null $value
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
    public function isLostOrBroken()
    {
        return $this->_value === self::CodeType_LostOrBroken;
    }

    /**
     * @return bool
     */
    public function isNotAvailable()
    {
        return $this->_value === self::CodeType_NotAvailable;
    }

    /**
     * @return bool
     */
    public function isIncorrect()
    {
        return $this->_value === self::CodeType_Incorrect;
    }

    /**
     * @return bool
     */
    public function isOtherListingError()
    {
        return $this->_value === self::CodeType_OtherListingError;
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
    public function isSellToHighBidder()
    {
        return $this->_value === self::CodeType_SellToHighBidder;
    }

    /**
     * @return bool
     */
    public function isSold()
    {
        return $this->_value === self::CodeType_Sold;
    }

    /**
     * @return bool
     */
    public function isProductDeleted()
    {
        return $this->_value === self::CodeType_ProductDeleted;
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

EndReasonCodeType::_register();

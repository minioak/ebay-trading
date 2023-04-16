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
 * Enumerated type that defines the possible reasons why a listing
 * is being hidden from search on the eBay site.
 **/
class ReasonHideFromSearchCodeType extends EbatNs_EnumType
{
    const TAG = 'ReasonHideFromSearchCodeType';
    const NAME = 'ReasonHideFromSearchCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This value indicates that the listing is being hidden from search on the eBay site because the listing has been
     * determined by eBay to be a duplicate listing.
     * 
     * This enumeration value is associated with eBay Duplicate Listings Policy, which is applicable on the US,
     * CA, CA-FR, and eBay Motors (Parts and Accessories only) sites. Event Tickets, Real Estate, and Motor Vehicle
     * categories are excluded from this policy. For more information, read <a
     * href="http://pages.ebay.com/help/policies/listing-multi.html">eBay's Duplicate Listings Policy</a> help page.
     **/
    const CodeType_DuplicateListing = 'DuplicateListing';

    /**
     * This value indicates that the listing is currently hidden from search because the quantity in the listing is
     * zero. However, the listing is still alive and will reappear in the search results when the quantity is set to
     * something greater than zero. The 'Out-of-stock' option is set by the seller at the account level. This option can
     * be enabled in My eBay Site Preferences, or the seller can use the <a
     * href="https://developer.ebay.com/DevZone/XML/docs/Reference/ebay/SetUserPreferences.html#Request.OutOfStockControlPreference">OutOfStockControlPreference</a>
     * field in the
     * SetUserPreferences
     * call.
     **/
    const CodeType_OutOfStock = 'OutOfStock';
    
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
     * @return ReasonHideFromSearchCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param ReasonHideFromSearchCodeType|null $value
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
    public function isDuplicateListing()
    {
        return $this->_value === self::CodeType_DuplicateListing;
    }

    /**
     * @return bool
     */
    public function isOutOfStock()
    {
        return $this->_value === self::CodeType_OutOfStock;
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

ReasonHideFromSearchCodeType::_register();

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
 * This enumerated type is deprecated.
 **/
class PurchasePurposeTypeCodeType extends EbatNs_EnumType
{
    const TAG = 'PurchasePurposeTypeCodeType';
    const NAME = 'PurchasePurposeTypeCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This value is not used.
     **/
    const CodeType_Other = 'Other';

    /**
     * This value is not used.
     **/
    const CodeType_BuyNowItem = 'BuyNowItem';

    /**
     * This value is not used.
     **/
    const CodeType_ShoppingCart = 'ShoppingCart';

    /**
     * This value is not used.
     **/
    const CodeType_AuctionItem = 'AuctionItem';

    /**
     * This value is not used.
     **/
    const CodeType_GiftCertificates = 'GiftCertificates';

    /**
     * This value is not used.
     **/
    const CodeType_Subscription = 'Subscription';

    /**
     * This value is not used.
     **/
    const CodeType_Donation = 'Donation';

    /**
     * This value is not used.
     **/
    const CodeType_eBayBilling = 'eBayBilling';

    /**
     * This value is not used.
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
     * @return PurchasePurposeTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param PurchasePurposeTypeCodeType|null $value
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
    public function isOther()
    {
        return $this->_value === self::CodeType_Other;
    }

    /**
     * @return bool
     */
    public function isBuyNowItem()
    {
        return $this->_value === self::CodeType_BuyNowItem;
    }

    /**
     * @return bool
     */
    public function isShoppingCart()
    {
        return $this->_value === self::CodeType_ShoppingCart;
    }

    /**
     * @return bool
     */
    public function isAuctionItem()
    {
        return $this->_value === self::CodeType_AuctionItem;
    }

    /**
     * @return bool
     */
    public function isGiftCertificates()
    {
        return $this->_value === self::CodeType_GiftCertificates;
    }

    /**
     * @return bool
     */
    public function isSubscription()
    {
        return $this->_value === self::CodeType_Subscription;
    }

    /**
     * @return bool
     */
    public function isDonation()
    {
        return $this->_value === self::CodeType_Donation;
    }

    /**
     * @return bool
     */
    public function isEBayBilling()
    {
        return $this->_value === self::CodeType_eBayBilling;
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

PurchasePurposeTypeCodeType::_register();

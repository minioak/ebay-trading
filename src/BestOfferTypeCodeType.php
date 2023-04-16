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
 * Enumerated type that defines the possible offer types for the Best Offer feature.
 **/
class BestOfferTypeCodeType extends EbatNs_EnumType
{
    const TAG = 'BestOfferTypeCodeType';
    const NAME = 'BestOfferTypeCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This value indicates that the offer is an original Best Offer made by a prospective buyer to the seller.
     **/
    const CodeType_BuyerBestOffer = 'BuyerBestOffer';

    /**
     * This value indicates that the offer is a prospective buyer's counter offer against the seller's counter offer.
     **/
    const CodeType_BuyerCounterOffer = 'BuyerCounterOffer';

    /**
     * This value indicates that the offer is a seller's counter offer against the seller's original Best Offer.
     **/
    const CodeType_SellerCounterOffer = 'SellerCounterOffer';

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
     * @return BestOfferTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param BestOfferTypeCodeType|null $value
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
    public function isBuyerBestOffer()
    {
        return $this->_value === self::CodeType_BuyerBestOffer;
    }

    /**
     * @return bool
     */
    public function isBuyerCounterOffer()
    {
        return $this->_value === self::CodeType_BuyerCounterOffer;
    }

    /**
     * @return bool
     */
    public function isSellerCounterOffer()
    {
        return $this->_value === self::CodeType_SellerCounterOffer;
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

BestOfferTypeCodeType::_register();

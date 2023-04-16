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
 * Enumerated type that defines the possible values for the status of a Best Offer or a buyer's/seller's counter
 * offer.
 **/
class BestOfferStatusCodeType extends EbatNs_EnumType
{
    const TAG = 'BestOfferStatusCodeType';
    const NAME = 'BestOfferStatusCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This value indicates that the buyer's Best Offer on an item is awaiting the
     * seller's response (accept, decline, counter offer). A buyer's Best Offer expires
     * after 48 hours without a seller's response.
     **/
    const CodeType_Pending = 'Pending';

    /**
     * Depending on context, this value can indicate that the buyer's Best Offer was
     * accepted by the seller, or that the seller's or buyer's counter offer was accepted by the other party.
     **/
    const CodeType_Accepted = 'Accepted';

    /**
     * Depending on context, this value can indicate that the buyer's Best Offer was
     * declined by the seller, or that the seller's or buyer's counter offer was declined by the other party.
     **/
    const CodeType_Declined = 'Declined';

    /**
     * Depending on context, this value can indicate that the buyer's Best Offer expired due to the passing of 48 hours
     * with no seller response (accept, decline, counter offer), or that the seller's or buyer's counter offer expired
     * due to the passing of 48 hours with no response from other party.
     **/
    const CodeType_Expired = 'Expired';

    /**
     * Depending on context, this value can indicate that the buyer has retracted the Best Offer, or that the seller's
     * or buyer's counter offer has been retracted.
     **/
    const CodeType_Retracted = 'Retracted';

    /**
     * This value indicates that the Best Offer was ended by an eBay administrator.
     **/
    const CodeType_AdminEnded = 'AdminEnded';

    /**
     * Depending on context, this value can indicate that a buyer's Best Offer or that the seller's or buyer's counter
     * offer is in the active state. The <code>Active</code> value can also be used in the
     * GetBestOffers
     * request to retrieve only active Best Offers.
     **/
    const CodeType_Active = 'Active';

    /**
     * Depending on context, this value can indicate that a buyer's Best Offer has been countered by the seller, or that
     * the seller's or buyer's counter offer has been countered by the other party.
     **/
    const CodeType_Countered = 'Countered';

    /**
     * This value is used in the
     * GetBestOffers
     * request to retrieve all Best Offers in all states. This value is only applicable to the
     * GetBestOffers
     * call.
     **/
    const CodeType_All = 'All';

    /**
     * This value indicates that the buyer and seller have come to agreement on a Best Offer price, but the seller is
     * still waiting for payment from the buyer. If the buyer does not pay within 48 hours, the Best Offer will expire.
     **/
    const CodeType_PendingBuyerPayment = 'PendingBuyerPayment';

    /**
     * This value indicates that the seller is waiting on the buyer to commit to buying the item at the counter offer
     * price.
     **/
    const CodeType_PendingBuyerConfirmation = 'PendingBuyerConfirmation';

    /**
     * (out) Reserved for internal or future use.
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
     * @return BestOfferStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param BestOfferStatusCodeType|null $value
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
    public function isPending()
    {
        return $this->_value === self::CodeType_Pending;
    }

    /**
     * @return bool
     */
    public function isAccepted()
    {
        return $this->_value === self::CodeType_Accepted;
    }

    /**
     * @return bool
     */
    public function isDeclined()
    {
        return $this->_value === self::CodeType_Declined;
    }

    /**
     * @return bool
     */
    public function isExpired()
    {
        return $this->_value === self::CodeType_Expired;
    }

    /**
     * @return bool
     */
    public function isRetracted()
    {
        return $this->_value === self::CodeType_Retracted;
    }

    /**
     * @return bool
     */
    public function isAdminEnded()
    {
        return $this->_value === self::CodeType_AdminEnded;
    }

    /**
     * @return bool
     */
    public function isActive()
    {
        return $this->_value === self::CodeType_Active;
    }

    /**
     * @return bool
     */
    public function isCountered()
    {
        return $this->_value === self::CodeType_Countered;
    }

    /**
     * @return bool
     */
    public function isAll()
    {
        return $this->_value === self::CodeType_All;
    }

    /**
     * @return bool
     */
    public function isPendingBuyerPayment()
    {
        return $this->_value === self::CodeType_PendingBuyerPayment;
    }

    /**
     * @return bool
     */
    public function isPendingBuyerConfirmation()
    {
        return $this->_value === self::CodeType_PendingBuyerConfirmation;
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

BestOfferStatusCodeType::_register();

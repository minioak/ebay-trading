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
 * This enumerated type lists the possible actions that can be made on a listing or Best Offer and the possible
 * states of a bid or Best Offer.
 **/
class BidActionCodeType extends EbatNs_EnumType
{
    const TAG = 'BidActionCodeType';
    const NAME = 'BidActionCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This value indicates that the action or state is unknown.
     **/
    const CodeType_Unknown = 'Unknown';

    /**
     * This value is used in a
     * PlaceOffer
     * call if the buyer wants to bid on an auction listing. If this value is used, the prospective buyer must also
     * include the
     * Offer.MaxBid
     * field in the
     * PlaceOffer
     * call and specify the maximum amount that they are willing to bid in an attempt to win the auction. eBay will
     * automatically rebid on behalf of the buyer each time the buyer is outbid up until the time when their
     * Offer.MaxBid
     * value threshold is met. The
     * GetAllBidders
     * call will return this value as well if the buyer has set up automatic bidding using a maximum bid threshold.
     **/
    const CodeType_Bid = 'Bid';

    /**
     * This value is no longer applicable.
     **/
    const CodeType_NotUsed = 'NotUsed';

    /**
     * This value indicates that a buyer's Best Offer or a seller's or buyer's counter offer was retracted. This value
     * cannot be used with the
     * PlaceOffer
     * call.
     **/
    const CodeType_Retraction = 'Retraction';

    /**
     * This value indicates that a buyer's Best Offer or a seller's or buyer's counter offer was automatically
     * retracted. This value cannot be used with the
     * PlaceOffer
     * call.
     **/
    const CodeType_AutoRetraction = 'AutoRetraction';

    /**
     * This value indicates that a buyer's Best Offer or a seller's or buyer's counter offer was cancelled. This value
     * cannot be used with the
     * PlaceOffer
     * call.
     **/
    const CodeType_Cancelled = 'Cancelled';

    /**
     * This value indicates that a buyer's Best Offer or a seller's or buyer's counter offer was automatically
     * cancelled. This value cannot be used with the
     * PlaceOffer
     * call.
     **/
    const CodeType_AutoCancel = 'AutoCancel';

    /**
     * This value is returned in the
     * GetAllBidders
     * call if an absentee bid was made, which means that eBay made a bid on the auction listing on behalf of the
     * buyer, who has set a maximum bid threshold. This value is not applicable for the
     * PlaceOffer
     * call, as the buyer would use the <code>Bid</code> value instead, as well as setting a
     * Offer.MaxBid
     * value that would specify the maxium amount that the buyer is willing to bid in an attempt to win the auction.
     **/
    const CodeType_Absentee = 'Absentee';

    /**
     * This value is returned in the
     * GetAllBidders
     * call if the buyer purchased an item in an auction listing using the Buy It Now feature. This value is not
     * applicable for the
     * PlaceOffer
     * call, as the buyer would use the <code>Purchase</code> value instead.
     **/
    const CodeType_BuyItNow = 'BuyItNow';

    /**
     * This value is used in a
     * PlaceOffer
     * call if the buyer wants to purchase a fixed-price item or purchase an auction item enabled with the Buy It Now
     * feature. Note that this call cannot be used to purchase items that require immediate payment.  The
     * GetAllBidders
     * call will return this value as well if the buyer purchased the item. For items requiring immediate payment, the
     * PlaceOffer
     * call cannot be used for purchase.
     **/
    const CodeType_Purchase = 'Purchase';

    /**
     * Reserved for future or internal use.
     **/
    const CodeType_CustomCode = 'CustomCode';

    /**
     * This value is used in a
     * PlaceOffer
     * call if the buyer is proposing a Best Offer to the seller. The
     * GetAllBidders
     * call will return this value as well if the buyer proposed a Best Offer to the seller.
     **/
    const CodeType_Offer = 'Offer';

    /**
     * This value is used in a
     * PlaceOffer
     * call if the buyer is proposing a counter offer to the seller's proposed counter offer. The
     * GetAllBidders
     * call will return this value as well if the buyer proposed a counter offer to the seller's counter offer.
     **/
    const CodeType_Counter = 'Counter';

    /**
     * This value is used in a
     * PlaceOffer
     * call if the buyer is accepting a counter offer proposed by the seller. The
     * GetAllBidders
     * call will return this value as well if the buyer accepted a counter offer.
     **/
    const CodeType_Accept = 'Accept';

    /**
     * This value is used in a
     * PlaceOffer
     * call if the buyer is declining a counter offer proposed by the seller. The
     * GetAllBidders
     * call will return this value as well if the buyer declined a counter offer.
     **/
    const CodeType_Decline = 'Decline';
    
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
     * @return BidActionCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param BidActionCodeType|null $value
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
    public function isUnknown()
    {
        return $this->_value === self::CodeType_Unknown;
    }

    /**
     * @return bool
     */
    public function isBid()
    {
        return $this->_value === self::CodeType_Bid;
    }

    /**
     * @return bool
     */
    public function isNotUsed()
    {
        return $this->_value === self::CodeType_NotUsed;
    }

    /**
     * @return bool
     */
    public function isRetraction()
    {
        return $this->_value === self::CodeType_Retraction;
    }

    /**
     * @return bool
     */
    public function isAutoRetraction()
    {
        return $this->_value === self::CodeType_AutoRetraction;
    }

    /**
     * @return bool
     */
    public function isCancelled()
    {
        return $this->_value === self::CodeType_Cancelled;
    }

    /**
     * @return bool
     */
    public function isAutoCancel()
    {
        return $this->_value === self::CodeType_AutoCancel;
    }

    /**
     * @return bool
     */
    public function isAbsentee()
    {
        return $this->_value === self::CodeType_Absentee;
    }

    /**
     * @return bool
     */
    public function isBuyItNow()
    {
        return $this->_value === self::CodeType_BuyItNow;
    }

    /**
     * @return bool
     */
    public function isPurchase()
    {
        return $this->_value === self::CodeType_Purchase;
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
    public function isOffer()
    {
        return $this->_value === self::CodeType_Offer;
    }

    /**
     * @return bool
     */
    public function isCounter()
    {
        return $this->_value === self::CodeType_Counter;
    }

    /**
     * @return bool
     */
    public function isAccept()
    {
        return $this->_value === self::CodeType_Accept;
    }

    /**
     * @return bool
     */
    public function isDecline()
    {
        return $this->_value === self::CodeType_Decline;
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

BidActionCodeType::_register();

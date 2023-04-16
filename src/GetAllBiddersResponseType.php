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
 * Includes detailed bidding data for the auction listing that was specified in the request. Unless the listing is
 * private, the actual eBay user IDs of all bidders are returned if the listing's seller makes this API call. If a
 * bidder makes this API call, only that bidder's eBay user ID is returned, and the rest of the bidder's user IDs
 * are anonymized.
 **/
class GetAllBiddersResponseType extends EbatNs_Response
{
    const TAG = 'GetAllBiddersResponseType';
    const NAME = 'GetAllBiddersResponseType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var OfferArrayType|null
     */
    protected $BidArray = null;

    /**
     * @var UserIDType|null
     */
    protected $HighBidder = null;

    /**
     * @var AmountType|null
     */
    protected $HighestBid = null;

    /**
     * @var ListingStatusCodeType|null
     */
    protected $ListingStatus = null;


    /**
     * @return OfferArrayType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBidArray()
    {
        return $this->_dc($this->BidArray, 'BidArray');
    }

    /**
     * @param OfferArrayType|null $value
     * @return void
     */
    public function setBidArray($value)
    {
        $this->BidArray = $value;
    }

    /**
     * @return UserIDType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getHighBidder()
    {
        return $this->_dc($this->HighBidder, 'HighBidder');
    }

    /**
     * @param UserIDType|null $value
     * @return void
     */
    public function setHighBidder($value)
    {
        $this->HighBidder = $value;
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getHighestBid()
    {
        return $this->_dc($this->HighestBid, 'HighestBid');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setHighestBid($value)
    {
        $this->HighestBid = $value;
    }

    /**
     * @return ListingStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getListingStatus()
    {
        return $this->_dc($this->ListingStatus);
    }

    /**
     * @param ListingStatusCodeType|null $value
     * @return void
     */
    public function setListingStatus($value)
    {
        $this->ListingStatus = $this->_enum($value, ListingStatusCodeType::class);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'BidArray' => ['type' => 'OfferArrayType', 'xmlns' => self::XMLNS],
            'HighBidder' => ['type' => 'UserIDType', 'xmlns' => self::XMLNS],
            'HighestBid' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'ListingStatus' => ['type' => 'ListingStatusCodeType', 'enum' => true, 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

GetAllBiddersResponseType::_register();

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
 * This is the base request type of the
 * GetBestOffers
 * call. Depending on the input parameters that are used, this call can be used by a seller to retrieve all active
 * Best Offers, all Best Offers on a specific listing, a specific Best Offer for a specific listing, or Best Offers
 * in a specific state.
 * 
 * <span class="tablenote">
 * Note:
 * The Best Offer feature is now available for auction listings on the following sites: US, Canada, UK, Germany,
 * Australia, France, Italy, and Spain. However, sellers must choose between offering Best Offer or Buy It Now on an
 * auction listing, as both features cannot be enabled on the same auction listing.
 * </span>
 **/
class GetBestOffersRequestType extends AbstractRequestType
{
    const TAG = 'GetBestOffersRequest';
    const NAME = 'GetBestOffersRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'GetBestOffers';

    /**
     * @var ItemIDType|null
     */
    protected $ItemID = null;

    /**
     * @var BestOfferIDType|null
     */
    protected $BestOfferID = null;

    /**
     * @var BestOfferStatusCodeType|null
     */
    protected $BestOfferStatus = null;

    /**
     * @var PaginationType|null
     */
    protected $Pagination = null;


    /**
     * @return ItemIDType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getItemID()
    {
        return $this->_dc($this->ItemID, 'ItemID');
    }

    /**
     * @param ItemIDType|null $value
     * @return void
     */
    public function setItemID($value)
    {
        $this->ItemID = $value;
    }

    /**
     * @return BestOfferIDType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBestOfferID()
    {
        return $this->_dc($this->BestOfferID, 'BestOfferID');
    }

    /**
     * @param BestOfferIDType|null $value
     * @return void
     */
    public function setBestOfferID($value)
    {
        $this->BestOfferID = $value;
    }

    /**
     * @return BestOfferStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBestOfferStatus()
    {
        return $this->_dc($this->BestOfferStatus);
    }

    /**
     * @param BestOfferStatusCodeType|null $value
     * @return void
     */
    public function setBestOfferStatus($value)
    {
        $this->BestOfferStatus = $this->_enum($value, BestOfferStatusCodeType::class);
    }

    /**
     * @return PaginationType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPagination()
    {
        return $this->_dc($this->Pagination, 'Pagination');
    }

    /**
     * @param PaginationType|null $value
     * @return void
     */
    public function setPagination($value)
    {
        $this->Pagination = $value;
    }

    /**
     * @return GetBestOffersResponseType|EbatNs_ResponseError
     * @param EbatNs_Client
     **/
    function call($client)
    {
        return $client->call(self::REQUEST, $this);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'ItemID' => ['type' => 'ItemIDType', 'xmlns' => self::XMLNS],
            'BestOfferID' => ['type' => 'BestOfferIDType', 'xmlns' => self::XMLNS],
            'BestOfferStatus' => ['type' => 'BestOfferStatusCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'Pagination' => ['type' => 'PaginationType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

GetBestOffersRequestType::_register();

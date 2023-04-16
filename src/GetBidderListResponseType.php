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
 * Response to a
 * GetBidderList
 * call, which retrieves all items the
 * user is currently bidding on, or has won or purchased.
 * 
 * Response to GetBidderListRequest.
 **/
class GetBidderListResponseType extends EbatNs_Response
{
    const TAG = 'GetBidderListResponseType';
    const NAME = 'GetBidderListResponseType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var UserType|null
     */
    protected $Bidder = null;

    /**
     * @var ItemArrayType|null
     */
    protected $BidItemArray = null;


    /**
     * @return UserType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBidder()
    {
        return $this->_dc($this->Bidder, 'Bidder');
    }

    /**
     * @param UserType|null $value
     * @return void
     */
    public function setBidder($value)
    {
        $this->Bidder = $value;
    }

    /**
     * @return ItemArrayType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBidItemArray()
    {
        return $this->_dc($this->BidItemArray, 'BidItemArray');
    }

    /**
     * @param ItemArrayType|null $value
     * @return void
     */
    public function setBidItemArray($value)
    {
        $this->BidItemArray = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'Bidder' => ['type' => 'UserType', 'xmlns' => self::XMLNS],
            'BidItemArray' => ['type' => 'ItemArrayType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

GetBidderListResponseType::_register();

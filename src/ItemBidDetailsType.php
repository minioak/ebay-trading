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
 * This type is used by the
 * ItemBidDetails
 * container that is returned in
 * GetAllBidders
 * . The
 * ItemBidDetails
 * container shows a few details about a user's bid on an auction listing. An
 * ItemBidDetails
 * container is returned for each bid that a user makes during the life of an auction listing. An
 * ItemBidDetails
 * container will only be returned to the seller of the auction listing or to an actual bidder for the listing.
 **/
class ItemBidDetailsType extends EbatNs_ComplexType
{
    const TAG = 'ItemBidDetailsType';
    const NAME = 'ItemBidDetailsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var ItemIDType|null
     */
    protected $ItemID = null;

    /**
     * @var string|null
     */
    protected $CategoryID = null;

    /**
     * @var int|null
     */
    protected $BidCount = null;

    /**
     * @var UserIDType|null
     */
    protected $SellerID = null;

    /**
     * @var string|null
     */
    protected $LastBidTime = null;


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
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCategoryID()
    {
        return $this->_dc($this->CategoryID, 'CategoryID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setCategoryID($value)
    {
        $this->CategoryID = self::_string($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBidCount()
    {
        return $this->_dc($this->BidCount, 'BidCount');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setBidCount($value)
    {
        $this->BidCount = self::_int($value);
    }

    /**
     * @return UserIDType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSellerID()
    {
        return $this->_dc($this->SellerID, 'SellerID');
    }

    /**
     * @param UserIDType|null $value
     * @return void
     */
    public function setSellerID($value)
    {
        $this->SellerID = $value;
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getLastBidTime()
    {
        return $this->_dc($this->LastBidTime, 'LastBidTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setLastBidTime($value)
    {
        $this->LastBidTime = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'ItemID' => ['type' => 'ItemIDType', 'xmlns' => self::XMLNS],
            'CategoryID' => [],
            'BidCount' => ['type' => 'int'],
            'SellerID' => ['type' => 'UserIDType', 'xmlns' => self::XMLNS],
            'LastBidTime' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

ItemBidDetailsType::_register();

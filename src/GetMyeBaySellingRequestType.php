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
 * Retrieves information regarding the user's selling activity, such as items that the user is currently selling
 * (the Active list), auction listings that have bids, sold items, and unsold items.
 **/
class GetMyeBaySellingRequestType extends AbstractRequestType
{
    const TAG = 'GetMyeBaySellingRequest';
    const NAME = 'GetMyeBaySellingRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'GetMyeBaySelling';

    /**
     * @var ItemListCustomizationType|null
     */
    protected $ScheduledList = null;

    /**
     * @var ItemListCustomizationType|null
     */
    protected $ActiveList = null;

    /**
     * @var ItemListCustomizationType|null
     */
    protected $SoldList = null;

    /**
     * @var ItemListCustomizationType|null
     */
    protected $UnsoldList = null;

    /**
     * @var ItemListCustomizationType|null
     */
    protected $BidList = null;

    /**
     * @var ItemListCustomizationType|null
     */
    protected $DeletedFromSoldList = null;

    /**
     * @var ItemListCustomizationType|null
     */
    protected $DeletedFromUnsoldList = null;

    /**
     * @var ItemListCustomizationType|null
     */
    protected $SellingSummary = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $HideVariations = null;


    /**
     * @return ItemListCustomizationType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getScheduledList()
    {
        return $this->_dc($this->ScheduledList, 'ScheduledList');
    }

    /**
     * @param ItemListCustomizationType|null $value
     * @return void
     */
    public function setScheduledList($value)
    {
        $this->ScheduledList = $value;
    }

    /**
     * @return ItemListCustomizationType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getActiveList()
    {
        return $this->_dc($this->ActiveList, 'ActiveList');
    }

    /**
     * @param ItemListCustomizationType|null $value
     * @return void
     */
    public function setActiveList($value)
    {
        $this->ActiveList = $value;
    }

    /**
     * @return ItemListCustomizationType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSoldList()
    {
        return $this->_dc($this->SoldList, 'SoldList');
    }

    /**
     * @param ItemListCustomizationType|null $value
     * @return void
     */
    public function setSoldList($value)
    {
        $this->SoldList = $value;
    }

    /**
     * @return ItemListCustomizationType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getUnsoldList()
    {
        return $this->_dc($this->UnsoldList, 'UnsoldList');
    }

    /**
     * @param ItemListCustomizationType|null $value
     * @return void
     */
    public function setUnsoldList($value)
    {
        $this->UnsoldList = $value;
    }

    /**
     * @return ItemListCustomizationType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBidList()
    {
        return $this->_dc($this->BidList, 'BidList');
    }

    /**
     * @param ItemListCustomizationType|null $value
     * @return void
     */
    public function setBidList($value)
    {
        $this->BidList = $value;
    }

    /**
     * @return ItemListCustomizationType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDeletedFromSoldList()
    {
        return $this->_dc($this->DeletedFromSoldList, 'DeletedFromSoldList');
    }

    /**
     * @param ItemListCustomizationType|null $value
     * @return void
     */
    public function setDeletedFromSoldList($value)
    {
        $this->DeletedFromSoldList = $value;
    }

    /**
     * @return ItemListCustomizationType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDeletedFromUnsoldList()
    {
        return $this->_dc($this->DeletedFromUnsoldList, 'DeletedFromUnsoldList');
    }

    /**
     * @param ItemListCustomizationType|null $value
     * @return void
     */
    public function setDeletedFromUnsoldList($value)
    {
        $this->DeletedFromUnsoldList = $value;
    }

    /**
     * @return ItemListCustomizationType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSellingSummary()
    {
        return $this->_dc($this->SellingSummary, 'SellingSummary');
    }

    /**
     * @param ItemListCustomizationType|null $value
     * @return void
     */
    public function setSellingSummary($value)
    {
        $this->SellingSummary = $value;
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getHideVariations()
    {
        return $this->_dc($this->HideVariations === 'true', 'HideVariations');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setHideVariations($value)
    {
        $this->HideVariations = self::_bool($value);
    }

    /**
     * @return GetMyeBaySellingResponseType|EbatNs_ResponseError
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
            'ScheduledList' => ['type' => 'ItemListCustomizationType', 'xmlns' => self::XMLNS],
            'ActiveList' => ['type' => 'ItemListCustomizationType', 'xmlns' => self::XMLNS],
            'SoldList' => ['type' => 'ItemListCustomizationType', 'xmlns' => self::XMLNS],
            'UnsoldList' => ['type' => 'ItemListCustomizationType', 'xmlns' => self::XMLNS],
            'BidList' => ['type' => 'ItemListCustomizationType', 'xmlns' => self::XMLNS],
            'DeletedFromSoldList' => ['type' => 'ItemListCustomizationType', 'xmlns' => self::XMLNS],
            'DeletedFromUnsoldList' => ['type' => 'ItemListCustomizationType', 'xmlns' => self::XMLNS],
            'SellingSummary' => ['type' => 'ItemListCustomizationType', 'xmlns' => self::XMLNS],
            'HideVariations' => ['type' => 'bool']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

GetMyeBaySellingRequestType::_register();

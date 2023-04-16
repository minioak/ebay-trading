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
 * This type is deprecated.
 **/
class BidGroupItemType extends EbatNs_ComplexType
{
    const TAG = 'BidGroupItemType';
    const NAME = 'BidGroupItemType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var ItemType|null
     */
    protected $Item = null;

    /**
     * @var BidGroupItemStatusCodeType|null
     */
    protected $BidGroupItemStatus = null;

    /**
     * @var AmountType|null
     */
    protected $MaxBidAmount = null;


    /**
     * @return ItemType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getItem()
    {
        return $this->_dc($this->Item, 'Item');
    }

    /**
     * @param ItemType|null $value
     * @return void
     */
    public function setItem($value)
    {
        $this->Item = $value;
    }

    /**
     * @return BidGroupItemStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBidGroupItemStatus()
    {
        return $this->_dc($this->BidGroupItemStatus);
    }

    /**
     * @param BidGroupItemStatusCodeType|null $value
     * @return void
     */
    public function setBidGroupItemStatus($value)
    {
        $this->BidGroupItemStatus = $this->_enum($value, BidGroupItemStatusCodeType::class);
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMaxBidAmount()
    {
        return $this->_dc($this->MaxBidAmount, 'MaxBidAmount');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setMaxBidAmount($value)
    {
        $this->MaxBidAmount = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'Item' => ['type' => 'ItemType', 'xmlns' => self::XMLNS],
            'BidGroupItemStatus' => ['type' => 'BidGroupItemStatusCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'MaxBidAmount' => ['type' => 'AmountType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

BidGroupItemType::_register();

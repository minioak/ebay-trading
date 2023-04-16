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
 * All Best Offers for the item according to the filter or Best Offer
 * ID (or both) used in the input.
 * For the notification client usage, this response includes a
 * single Best Offer.
 **/
class ItemBestOffersType extends EbatNs_ComplexType
{
    const TAG = 'ItemBestOffersType';
    const NAME = 'ItemBestOffersType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var TradingRoleCodeType|null
     */
    protected $Role = null;

    /**
     * @var BestOfferArrayType|null
     */
    protected $BestOfferArray = null;

    /**
     * @var ItemType|null
     */
    protected $Item = null;


    /**
     * @return TradingRoleCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getRole()
    {
        return $this->_dc($this->Role);
    }

    /**
     * @param TradingRoleCodeType|null $value
     * @return void
     */
    public function setRole($value)
    {
        $this->Role = $this->_enum($value, TradingRoleCodeType::class);
    }

    /**
     * @return BestOfferArrayType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBestOfferArray()
    {
        return $this->_dc($this->BestOfferArray, 'BestOfferArray');
    }

    /**
     * @param BestOfferArrayType|null $value
     * @return void
     */
    public function setBestOfferArray($value)
    {
        $this->BestOfferArray = $value;
    }

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
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'Role' => ['type' => 'TradingRoleCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'BestOfferArray' => ['type' => 'BestOfferArrayType', 'xmlns' => self::XMLNS],
            'Item' => ['type' => 'ItemType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

ItemBestOffersType::_register();

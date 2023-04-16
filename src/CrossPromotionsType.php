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
class CrossPromotionsType extends EbatNs_ComplexType
{
    const TAG = 'CrossPromotionsType';
    const NAME = 'CrossPromotionsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var ItemIDType|null
     */
    protected $ItemID = null;

    /**
     * @var PromotionSchemeCodeType|null
     */
    protected $PrimaryScheme = null;

    /**
     * @var PromotionMethodCodeType|null
     */
    protected $PromotionMethod = null;

    /**
     * @var string|null
     */
    protected $SellerID = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $ShippingDiscount = null;

    /**
     * @var string|null
     */
    protected $StoreName = null;

    /**
     * @var PromotedItemType[]|null
     */
    protected $PromotedItem = [];


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
     * @return PromotionSchemeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPrimaryScheme()
    {
        return $this->_dc($this->PrimaryScheme);
    }

    /**
     * @param PromotionSchemeCodeType|null $value
     * @return void
     */
    public function setPrimaryScheme($value)
    {
        $this->PrimaryScheme = $this->_enum($value, PromotionSchemeCodeType::class);
    }

    /**
     * @return PromotionMethodCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPromotionMethod()
    {
        return $this->_dc($this->PromotionMethod);
    }

    /**
     * @param PromotionMethodCodeType|null $value
     * @return void
     */
    public function setPromotionMethod($value)
    {
        $this->PromotionMethod = $this->_enum($value, PromotionMethodCodeType::class);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSellerID()
    {
        return $this->_dc($this->SellerID, 'SellerID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setSellerID($value)
    {
        $this->SellerID = self::_string($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShippingDiscount()
    {
        return $this->_dc($this->ShippingDiscount === 'true', 'ShippingDiscount');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setShippingDiscount($value)
    {
        $this->ShippingDiscount = self::_bool($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getStoreName()
    {
        return $this->_dc($this->StoreName, 'StoreName');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setStoreName($value)
    {
        $this->StoreName = self::_string($value);
    }

    /**
     * @return PromotedItemType[]|PromotedItemType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getPromotedItem($index = null)
    {
        return $this->_dc($index === null
            ? $this->PromotedItem
            : (count($this->PromotedItem) > $index
                ? $this->PromotedItem[$index]
                : null), 'PromotedItem');
    }

    /**
     * @param PromotedItemType|null|PromotedItemType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setPromotedItem($value, $index = null)
    {
        if ($index === null) {
            $this->PromotedItem = $value;
        } else {
            $this->PromotedItem[$index] = [];
            
            foreach ($value as $item) {
                $this->addPromotedItem($item);
            }
        }
    }

    /**
     * @param PromotedItemType|null $value
     * @return void
     */
    public function addPromotedItem($value)
    {
        $this->PromotedItem[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'ItemID' => ['type' => 'ItemIDType', 'xmlns' => self::XMLNS],
            'PrimaryScheme' => ['type' => 'PromotionSchemeCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'PromotionMethod' => ['type' => 'PromotionMethodCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'SellerID' => [],
            'ShippingDiscount' => ['type' => 'bool'],
            'StoreName' => [],
            'PromotedItem' => ['type' => 'PromotedItemType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

CrossPromotionsType::_register();

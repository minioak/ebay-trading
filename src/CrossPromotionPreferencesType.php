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
class CrossPromotionPreferencesType extends EbatNs_ComplexType
{
    const TAG = 'CrossPromotionPreferencesType';
    const NAME = 'CrossPromotionPreferencesType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var bool|null "true" or "false"
     */
    protected $CrossPromotionEnabled = null;

    /**
     * @var ItemFormatSortFilterCodeType|null
     */
    protected $CrossSellItemFormatSortFilter = null;

    /**
     * @var GallerySortFilterCodeType|null
     */
    protected $CrossSellGallerySortFilter = null;

    /**
     * @var ItemSortFilterCodeType|null
     */
    protected $CrossSellItemSortFilter = null;

    /**
     * @var ItemFormatSortFilterCodeType|null
     */
    protected $UpSellItemFormatSortFilter = null;

    /**
     * @var GallerySortFilterCodeType|null
     */
    protected $UpSellGallerySortFilter = null;

    /**
     * @var ItemSortFilterCodeType|null
     */
    protected $UpSellItemSortFilter = null;


    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCrossPromotionEnabled()
    {
        return $this->_dc($this->CrossPromotionEnabled === 'true', 'CrossPromotionEnabled');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setCrossPromotionEnabled($value)
    {
        $this->CrossPromotionEnabled = self::_bool($value);
    }

    /**
     * @return ItemFormatSortFilterCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCrossSellItemFormatSortFilter()
    {
        return $this->_dc($this->CrossSellItemFormatSortFilter);
    }

    /**
     * @param ItemFormatSortFilterCodeType|null $value
     * @return void
     */
    public function setCrossSellItemFormatSortFilter($value)
    {
        $this->CrossSellItemFormatSortFilter = $this->_enum($value, ItemFormatSortFilterCodeType::class);
    }

    /**
     * @return GallerySortFilterCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCrossSellGallerySortFilter()
    {
        return $this->_dc($this->CrossSellGallerySortFilter);
    }

    /**
     * @param GallerySortFilterCodeType|null $value
     * @return void
     */
    public function setCrossSellGallerySortFilter($value)
    {
        $this->CrossSellGallerySortFilter = $this->_enum($value, GallerySortFilterCodeType::class);
    }

    /**
     * @return ItemSortFilterCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCrossSellItemSortFilter()
    {
        return $this->_dc($this->CrossSellItemSortFilter);
    }

    /**
     * @param ItemSortFilterCodeType|null $value
     * @return void
     */
    public function setCrossSellItemSortFilter($value)
    {
        $this->CrossSellItemSortFilter = $this->_enum($value, ItemSortFilterCodeType::class);
    }

    /**
     * @return ItemFormatSortFilterCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getUpSellItemFormatSortFilter()
    {
        return $this->_dc($this->UpSellItemFormatSortFilter);
    }

    /**
     * @param ItemFormatSortFilterCodeType|null $value
     * @return void
     */
    public function setUpSellItemFormatSortFilter($value)
    {
        $this->UpSellItemFormatSortFilter = $this->_enum($value, ItemFormatSortFilterCodeType::class);
    }

    /**
     * @return GallerySortFilterCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getUpSellGallerySortFilter()
    {
        return $this->_dc($this->UpSellGallerySortFilter);
    }

    /**
     * @param GallerySortFilterCodeType|null $value
     * @return void
     */
    public function setUpSellGallerySortFilter($value)
    {
        $this->UpSellGallerySortFilter = $this->_enum($value, GallerySortFilterCodeType::class);
    }

    /**
     * @return ItemSortFilterCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getUpSellItemSortFilter()
    {
        return $this->_dc($this->UpSellItemSortFilter);
    }

    /**
     * @param ItemSortFilterCodeType|null $value
     * @return void
     */
    public function setUpSellItemSortFilter($value)
    {
        $this->UpSellItemSortFilter = $this->_enum($value, ItemSortFilterCodeType::class);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'CrossPromotionEnabled' => ['type' => 'bool'],
            'CrossSellItemFormatSortFilter' => ['type' => 'ItemFormatSortFilterCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'CrossSellGallerySortFilter' => ['type' => 'GallerySortFilterCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'CrossSellItemSortFilter' => ['type' => 'ItemSortFilterCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'UpSellItemFormatSortFilter' => ['type' => 'ItemFormatSortFilterCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'UpSellGallerySortFilter' => ['type' => 'GallerySortFilterCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'UpSellItemSortFilter' => ['type' => 'ItemSortFilterCodeType', 'enum' => true, 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

CrossPromotionPreferencesType::_register();

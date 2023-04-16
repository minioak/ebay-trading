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
 * ListingFeatureDetails
 * container in the
 * GeteBayDetails
 * response. This container indicates the listing features that are enabled or disabled for an eBay site.
 **/
class ListingFeatureDetailsType extends EbatNs_ComplexType
{
    const TAG = 'ListingFeatureDetailsType';
    const NAME = 'ListingFeatureDetailsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var BoldTitleCodeType|null
     */
    protected $BoldTitle = null;

    /**
     * @var BorderCodeType|null
     */
    protected $Border = null;

    /**
     * @var HighlightCodeType|null
     */
    protected $Highlight = null;

    /**
     * @var GiftIconCodeType|null
     */
    protected $GiftIcon = null;

    /**
     * @var HomePageFeaturedCodeType|null
     */
    protected $HomePageFeatured = null;

    /**
     * @var FeaturedFirstCodeType|null
     */
    protected $FeaturedFirst = null;

    /**
     * @var FeaturedPlusCodeType|null
     */
    protected $FeaturedPlus = null;

    /**
     * @var ProPackCodeType|null
     */
    protected $ProPack = null;

    /**
     * @var string|null
     */
    protected $DetailVersion = null;

    /**
     * @var string|null
     */
    protected $UpdateTime = null;


    /**
     * @return BoldTitleCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBoldTitle()
    {
        return $this->_dc($this->BoldTitle);
    }

    /**
     * @param BoldTitleCodeType|null $value
     * @return void
     */
    public function setBoldTitle($value)
    {
        $this->BoldTitle = $this->_enum($value, BoldTitleCodeType::class);
    }

    /**
     * @return BorderCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBorder()
    {
        return $this->_dc($this->Border);
    }

    /**
     * @param BorderCodeType|null $value
     * @return void
     */
    public function setBorder($value)
    {
        $this->Border = $this->_enum($value, BorderCodeType::class);
    }

    /**
     * @return HighlightCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getHighlight()
    {
        return $this->_dc($this->Highlight);
    }

    /**
     * @param HighlightCodeType|null $value
     * @return void
     */
    public function setHighlight($value)
    {
        $this->Highlight = $this->_enum($value, HighlightCodeType::class);
    }

    /**
     * @return GiftIconCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getGiftIcon()
    {
        return $this->_dc($this->GiftIcon);
    }

    /**
     * @param GiftIconCodeType|null $value
     * @return void
     */
    public function setGiftIcon($value)
    {
        $this->GiftIcon = $this->_enum($value, GiftIconCodeType::class);
    }

    /**
     * @return HomePageFeaturedCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getHomePageFeatured()
    {
        return $this->_dc($this->HomePageFeatured);
    }

    /**
     * @param HomePageFeaturedCodeType|null $value
     * @return void
     */
    public function setHomePageFeatured($value)
    {
        $this->HomePageFeatured = $this->_enum($value, HomePageFeaturedCodeType::class);
    }

    /**
     * @return FeaturedFirstCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getFeaturedFirst()
    {
        return $this->_dc($this->FeaturedFirst);
    }

    /**
     * @param FeaturedFirstCodeType|null $value
     * @return void
     */
    public function setFeaturedFirst($value)
    {
        $this->FeaturedFirst = $this->_enum($value, FeaturedFirstCodeType::class);
    }

    /**
     * @return FeaturedPlusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getFeaturedPlus()
    {
        return $this->_dc($this->FeaturedPlus);
    }

    /**
     * @param FeaturedPlusCodeType|null $value
     * @return void
     */
    public function setFeaturedPlus($value)
    {
        $this->FeaturedPlus = $this->_enum($value, FeaturedPlusCodeType::class);
    }

    /**
     * @return ProPackCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getProPack()
    {
        return $this->_dc($this->ProPack);
    }

    /**
     * @param ProPackCodeType|null $value
     * @return void
     */
    public function setProPack($value)
    {
        $this->ProPack = $this->_enum($value, ProPackCodeType::class);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDetailVersion()
    {
        return $this->_dc($this->DetailVersion, 'DetailVersion');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setDetailVersion($value)
    {
        $this->DetailVersion = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getUpdateTime()
    {
        return $this->_dc($this->UpdateTime, 'UpdateTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setUpdateTime($value)
    {
        $this->UpdateTime = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'BoldTitle' => ['type' => 'BoldTitleCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'Border' => ['type' => 'BorderCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'Highlight' => ['type' => 'HighlightCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'GiftIcon' => ['type' => 'GiftIconCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'HomePageFeatured' => ['type' => 'HomePageFeaturedCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'FeaturedFirst' => ['type' => 'FeaturedFirstCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'FeaturedPlus' => ['type' => 'FeaturedPlusCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'ProPack' => ['type' => 'ProPackCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'DetailVersion' => [],
            'UpdateTime' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

ListingFeatureDetailsType::_register();

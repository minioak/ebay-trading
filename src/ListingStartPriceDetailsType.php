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
 * Type defining the
 * ListingStartPriceDetails
 * container returned in
 * 
 * GeteBayDetails
 * . The
 * ListingStartPriceDetails
 * container lists the minimum start price for auction listings, the minimum sale price
 * for fixed-price listings, and the minimum percentage value that a Buy It Now price for
 * an auction listing must be above the minimum start price for that same listing.
 * 
 * The
 * ListingStartPriceDetails
 * container is returned if
 * 
 * ListingStartPriceDetails
 * is included as a
 * DetailName
 * filter in the request, or if no lt;b>DetailName
 * filters are used in the request.
 **/
class ListingStartPriceDetailsType extends EbatNs_ComplexType
{
    const TAG = 'ListingStartPriceDetailsType';
    const NAME = 'ListingStartPriceDetailsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $Description = null;

    /**
     * @var ListingTypeCodeType|null
     */
    protected $ListingType = null;

    /**
     * @var AmountType|null
     */
    protected $StartPrice = null;

    /**
     * @var string|null
     */
    protected $DetailVersion = null;

    /**
     * @var string|null
     */
    protected $UpdateTime = null;

    /**
     * @var float|null
     */
    protected $MinBuyItNowPricePercent = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDescription()
    {
        return $this->_dc($this->Description, 'Description');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setDescription($value)
    {
        $this->Description = self::_string($value);
    }

    /**
     * @return ListingTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getListingType()
    {
        return $this->_dc($this->ListingType);
    }

    /**
     * @param ListingTypeCodeType|null $value
     * @return void
     */
    public function setListingType($value)
    {
        $this->ListingType = $this->_enum($value, ListingTypeCodeType::class);
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getStartPrice()
    {
        return $this->_dc($this->StartPrice, 'StartPrice');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setStartPrice($value)
    {
        $this->StartPrice = $value;
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
     * @return float|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMinBuyItNowPricePercent()
    {
        return $this->_dc($this->MinBuyItNowPricePercent, 'MinBuyItNowPricePercent');
    }

    /**
     * @param float|null $value
     * @return void
     */
    public function setMinBuyItNowPricePercent($value)
    {
        $this->MinBuyItNowPricePercent = self::_float($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'Description' => [],
            'ListingType' => ['type' => 'ListingTypeCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'StartPrice' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'DetailVersion' => [],
            'UpdateTime' => [],
            'MinBuyItNowPricePercent' => ['type' => 'float']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

ListingStartPriceDetailsType::_register();

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
class PromotionDetailsType extends EbatNs_ComplexType
{
    const TAG = 'PromotionDetailsType';
    const NAME = 'PromotionDetailsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var AmountType|null
     */
    protected $PromotionPrice = null;

    /**
     * @var PromotionItemPriceTypeCodeType|null
     */
    protected $PromotionPriceType = null;

    /**
     * @var int|null
     */
    protected $BidCount = null;

    /**
     * @var AmountType|null
     */
    protected $ConvertedPromotionPrice = null;


    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPromotionPrice()
    {
        return $this->_dc($this->PromotionPrice, 'PromotionPrice');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setPromotionPrice($value)
    {
        $this->PromotionPrice = $value;
    }

    /**
     * @return PromotionItemPriceTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPromotionPriceType()
    {
        return $this->_dc($this->PromotionPriceType);
    }

    /**
     * @param PromotionItemPriceTypeCodeType|null $value
     * @return void
     */
    public function setPromotionPriceType($value)
    {
        $this->PromotionPriceType = $this->_enum($value, PromotionItemPriceTypeCodeType::class);
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
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getConvertedPromotionPrice()
    {
        return $this->_dc($this->ConvertedPromotionPrice, 'ConvertedPromotionPrice');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setConvertedPromotionPrice($value)
    {
        $this->ConvertedPromotionPrice = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'PromotionPrice' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'PromotionPriceType' => ['type' => 'PromotionItemPriceTypeCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'BidCount' => ['type' => 'int'],
            'ConvertedPromotionPrice' => ['type' => 'AmountType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

PromotionDetailsType::_register();

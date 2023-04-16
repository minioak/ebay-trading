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
class ProductInfoType extends EbatNs_ComplexType
{
    const TAG = 'ProductInfoType';
    const NAME = 'ProductInfoType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var AmountType|null
     */
    protected $AverageStartPrice = null;

    /**
     * @var AmountType|null
     */
    protected $AverageSoldPrice = null;

    /**
     * @var string|null
     */
    protected $Title = null;

    /**
     * @var ProductStateCodeType|null
     */
    protected $ProductState = null;


    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getAverageStartPrice()
    {
        return $this->_dc($this->AverageStartPrice, 'AverageStartPrice');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setAverageStartPrice($value)
    {
        $this->AverageStartPrice = $value;
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getAverageSoldPrice()
    {
        return $this->_dc($this->AverageSoldPrice, 'AverageSoldPrice');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setAverageSoldPrice($value)
    {
        $this->AverageSoldPrice = $value;
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTitle()
    {
        return $this->_dc($this->Title, 'Title');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setTitle($value)
    {
        $this->Title = self::_string($value);
    }

    /**
     * @return ProductStateCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getProductState()
    {
        return $this->_dc($this->ProductState);
    }

    /**
     * @param ProductStateCodeType|null $value
     * @return void
     */
    public function setProductState($value)
    {
        $this->ProductState = $this->_enum($value, ProductStateCodeType::class);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'AverageStartPrice' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'AverageSoldPrice' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'Title' => [],
            'ProductState' => ['type' => 'ProductStateCodeType', 'enum' => true, 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes(['productInfoID' => ['type' => 'string']]);
    }

}

ProductInfoType::_register();

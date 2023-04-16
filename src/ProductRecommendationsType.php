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
class ProductRecommendationsType extends EbatNs_ComplexType
{
    const TAG = 'ProductRecommendationsType';
    const NAME = 'ProductRecommendationsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var ProductInfoType[]|null
     */
    protected $Product = [];


    /**
     * @return ProductInfoType[]|ProductInfoType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getProduct($index = null)
    {
        return $this->_dc($index === null
            ? $this->Product
            : (count($this->Product) > $index
                ? $this->Product[$index]
                : null), 'Product');
    }

    /**
     * @param ProductInfoType|null|ProductInfoType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setProduct($value, $index = null)
    {
        if ($index === null) {
            $this->Product = $value;
        } else {
            $this->Product[$index] = [];
            
            foreach ($value as $item) {
                $this->addProduct($item);
            }
        }
    }

    /**
     * @param ProductInfoType|null $value
     * @return void
     */
    public function addProduct($value)
    {
        $this->Product[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['Product' => ['type' => 'ProductInfoType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']], parent::NAME);
        self::assignAttributes([]);
    }

}

ProductRecommendationsType::_register();

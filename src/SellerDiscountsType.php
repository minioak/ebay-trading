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
 * SellerDiscounts
 * container, which consists of one or
 * more
 * SellerDiscount
 * nodes, as well as the original purchase price and
 * shipping cost of the order line item.
 **/
class SellerDiscountsType extends EbatNs_ComplexType
{
    const TAG = 'SellerDiscountsType';
    const NAME = 'SellerDiscountsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var AmountType|null
     */
    protected $OriginalItemPrice = null;

    /**
     * @var AmountType|null
     */
    protected $OriginalItemShippingCost = null;

    /**
     * @var string|null
     */
    protected $OriginalShippingService = null;

    /**
     * @var SellerDiscountType[]|null
     */
    protected $SellerDiscount = [];


    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getOriginalItemPrice()
    {
        return $this->_dc($this->OriginalItemPrice, 'OriginalItemPrice');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setOriginalItemPrice($value)
    {
        $this->OriginalItemPrice = $value;
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getOriginalItemShippingCost()
    {
        return $this->_dc($this->OriginalItemShippingCost, 'OriginalItemShippingCost');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setOriginalItemShippingCost($value)
    {
        $this->OriginalItemShippingCost = $value;
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getOriginalShippingService()
    {
        return $this->_dc($this->OriginalShippingService, 'OriginalShippingService');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setOriginalShippingService($value)
    {
        $this->OriginalShippingService = self::_string($value);
    }

    /**
     * @return SellerDiscountType[]|SellerDiscountType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getSellerDiscount($index = null)
    {
        return $this->_dc($index === null
            ? $this->SellerDiscount
            : (count($this->SellerDiscount) > $index
                ? $this->SellerDiscount[$index]
                : null), 'SellerDiscount');
    }

    /**
     * @param SellerDiscountType|null|SellerDiscountType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setSellerDiscount($value, $index = null)
    {
        if ($index === null) {
            $this->SellerDiscount = $value;
        } else {
            $this->SellerDiscount[$index] = [];
            
            foreach ($value as $item) {
                $this->addSellerDiscount($item);
            }
        }
    }

    /**
     * @param SellerDiscountType|null $value
     * @return void
     */
    public function addSellerDiscount($value)
    {
        $this->SellerDiscount[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'OriginalItemPrice' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'OriginalItemShippingCost' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'OriginalShippingService' => [],
            'SellerDiscount' => ['type' => 'SellerDiscountType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

SellerDiscountsType::_register();

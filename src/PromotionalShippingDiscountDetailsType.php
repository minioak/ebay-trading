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
 * Details of a promotional shipping discount.
 **/
class PromotionalShippingDiscountDetailsType extends EbatNs_ComplexType
{
    const TAG = 'PromotionalShippingDiscountDetailsType';
    const NAME = 'PromotionalShippingDiscountDetailsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var DiscountNameCodeType|null
     */
    protected $DiscountName = null;

    /**
     * @var AmountType|null
     */
    protected $ShippingCost = null;

    /**
     * @var AmountType|null
     */
    protected $OrderAmount = null;

    /**
     * @var int|null
     */
    protected $ItemCount = null;


    /**
     * @return DiscountNameCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDiscountName()
    {
        return $this->_dc($this->DiscountName);
    }

    /**
     * @param DiscountNameCodeType|null $value
     * @return void
     */
    public function setDiscountName($value)
    {
        $this->DiscountName = $this->_enum($value, DiscountNameCodeType::class);
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShippingCost()
    {
        return $this->_dc($this->ShippingCost, 'ShippingCost');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setShippingCost($value)
    {
        $this->ShippingCost = $value;
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getOrderAmount()
    {
        return $this->_dc($this->OrderAmount, 'OrderAmount');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setOrderAmount($value)
    {
        $this->OrderAmount = $value;
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getItemCount()
    {
        return $this->_dc($this->ItemCount, 'ItemCount');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setItemCount($value)
    {
        $this->ItemCount = self::_int($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'DiscountName' => ['type' => 'DiscountNameCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'ShippingCost' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'OrderAmount' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'ItemCount' => ['type' => 'int']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

PromotionalShippingDiscountDetailsType::_register();

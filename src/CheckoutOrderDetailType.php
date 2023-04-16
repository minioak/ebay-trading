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
class CheckoutOrderDetailType extends EbatNs_ComplexType
{
    const TAG = 'CheckoutOrderDetailType';
    const NAME = 'CheckoutOrderDetailType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var AmountType|null
     */
    protected $TotalCartMerchandiseCost = null;

    /**
     * @var AmountType|null
     */
    protected $TotalCartShippingCost = null;

    /**
     * @var AmountType|null
     */
    protected $TotalTaxAmount = null;

    /**
     * @var AmountType|null
     */
    protected $TotalAmount = null;


    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTotalCartMerchandiseCost()
    {
        return $this->_dc($this->TotalCartMerchandiseCost, 'TotalCartMerchandiseCost');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setTotalCartMerchandiseCost($value)
    {
        $this->TotalCartMerchandiseCost = $value;
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTotalCartShippingCost()
    {
        return $this->_dc($this->TotalCartShippingCost, 'TotalCartShippingCost');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setTotalCartShippingCost($value)
    {
        $this->TotalCartShippingCost = $value;
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTotalTaxAmount()
    {
        return $this->_dc($this->TotalTaxAmount, 'TotalTaxAmount');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setTotalTaxAmount($value)
    {
        $this->TotalTaxAmount = $value;
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTotalAmount()
    {
        return $this->_dc($this->TotalAmount, 'TotalAmount');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setTotalAmount($value)
    {
        $this->TotalAmount = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'TotalCartMerchandiseCost' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'TotalCartShippingCost' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'TotalTaxAmount' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'TotalAmount' => ['type' => 'AmountType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

CheckoutOrderDetailType::_register();

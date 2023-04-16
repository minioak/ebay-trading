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
 * This type is used to show sales tax-related details for a tax jurisdiction. The concept of 'sales tax' is only
 * applicable to eBay US and Canada (English and French) sites.
 **/
class SalesTaxType extends EbatNs_ComplexType
{
    const TAG = 'SalesTaxType';
    const NAME = 'SalesTaxType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var float|null
     */
    protected $SalesTaxPercent = null;

    /**
     * @var string|null
     */
    protected $SalesTaxState = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $ShippingIncludedInTax = null;

    /**
     * @var AmountType|null
     */
    protected $SalesTaxAmount = null;


    /**
     * @return float|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSalesTaxPercent()
    {
        return $this->_dc($this->SalesTaxPercent, 'SalesTaxPercent');
    }

    /**
     * @param float|null $value
     * @return void
     */
    public function setSalesTaxPercent($value)
    {
        $this->SalesTaxPercent = self::_float($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSalesTaxState()
    {
        return $this->_dc($this->SalesTaxState, 'SalesTaxState');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setSalesTaxState($value)
    {
        $this->SalesTaxState = self::_string($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShippingIncludedInTax()
    {
        return $this->_dc($this->ShippingIncludedInTax === 'true', 'ShippingIncludedInTax');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setShippingIncludedInTax($value)
    {
        $this->ShippingIncludedInTax = self::_bool($value);
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSalesTaxAmount()
    {
        return $this->_dc($this->SalesTaxAmount, 'SalesTaxAmount');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setSalesTaxAmount($value)
    {
        $this->SalesTaxAmount = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'SalesTaxPercent' => ['type' => 'float'],
            'SalesTaxState' => [],
            'ShippingIncludedInTax' => ['type' => 'bool'],
            'SalesTaxAmount' => ['type' => 'AmountType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

SalesTaxType::_register();

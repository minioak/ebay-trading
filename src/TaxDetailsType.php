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
 * Type used by the
 * TaxDetails
 * container, which consists of detailed tax information for an order line item, including the tax type and
 * description, tax on the item cost, and tax related to shipping and handling. The information in this container
 * supercedes/overrides the sales tax information in the
 * ShippingDetails.SalesTax
 * container (if returned).
 * 
 * A separate
 * TaxDetails
 * container will be returned for each type of tax that applied to an order line item. For tax that is subject to
 * 'eBay collect and remit', such as US sales tax or 'Goods and Services tax' for Australia or New Zealand, the
 * TaxDetails
 * container will be returned under the
 * eBayCollectAndRemitTaxes
 * container. For all other tax, the tax details will be returned under the
 * Taxes
 * container.
 **/
class TaxDetailsType extends EbatNs_ComplexType
{
    const TAG = 'TaxDetailsType';
    const NAME = 'TaxDetailsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var TaxTypeCodeType|null
     */
    protected $Imposition = null;

    /**
     * @var TaxDescriptionCodeType|null
     */
    protected $TaxDescription = null;

    /**
     * @var AmountType|null
     */
    protected $TaxAmount = null;

    /**
     * @var AmountType|null
     */
    protected $TaxOnSubtotalAmount = null;

    /**
     * @var AmountType|null
     */
    protected $TaxOnShippingAmount = null;

    /**
     * @var AmountType|null
     */
    protected $TaxOnHandlingAmount = null;

    /**
     * @var string|null
     */
    protected $TaxCode = null;

    /**
     * @var CollectionMethodCodeType|null
     */
    protected $CollectionMethod = null;


    /**
     * @return TaxTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getImposition()
    {
        return $this->_dc($this->Imposition);
    }

    /**
     * @param TaxTypeCodeType|null $value
     * @return void
     */
    public function setImposition($value)
    {
        $this->Imposition = $this->_enum($value, TaxTypeCodeType::class);
    }

    /**
     * @return TaxDescriptionCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTaxDescription()
    {
        return $this->_dc($this->TaxDescription);
    }

    /**
     * @param TaxDescriptionCodeType|null $value
     * @return void
     */
    public function setTaxDescription($value)
    {
        $this->TaxDescription = $this->_enum($value, TaxDescriptionCodeType::class);
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTaxAmount()
    {
        return $this->_dc($this->TaxAmount, 'TaxAmount');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setTaxAmount($value)
    {
        $this->TaxAmount = $value;
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTaxOnSubtotalAmount()
    {
        return $this->_dc($this->TaxOnSubtotalAmount, 'TaxOnSubtotalAmount');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setTaxOnSubtotalAmount($value)
    {
        $this->TaxOnSubtotalAmount = $value;
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTaxOnShippingAmount()
    {
        return $this->_dc($this->TaxOnShippingAmount, 'TaxOnShippingAmount');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setTaxOnShippingAmount($value)
    {
        $this->TaxOnShippingAmount = $value;
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTaxOnHandlingAmount()
    {
        return $this->_dc($this->TaxOnHandlingAmount, 'TaxOnHandlingAmount');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setTaxOnHandlingAmount($value)
    {
        $this->TaxOnHandlingAmount = $value;
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTaxCode()
    {
        return $this->_dc($this->TaxCode, 'TaxCode');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setTaxCode($value)
    {
        $this->TaxCode = self::_string($value);
    }

    /**
     * @return CollectionMethodCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCollectionMethod()
    {
        return $this->_dc($this->CollectionMethod);
    }

    /**
     * @param CollectionMethodCodeType|null $value
     * @return void
     */
    public function setCollectionMethod($value)
    {
        $this->CollectionMethod = $this->_enum($value, CollectionMethodCodeType::class);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'Imposition' => ['type' => 'TaxTypeCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'TaxDescription' => ['type' => 'TaxDescriptionCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'TaxAmount' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'TaxOnSubtotalAmount' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'TaxOnShippingAmount' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'TaxOnHandlingAmount' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'TaxCode' => [],
            'CollectionMethod' => ['type' => 'CollectionMethodCodeType', 'enum' => true, 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

TaxDetailsType::_register();

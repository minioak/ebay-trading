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
 * Taxes
 * container, which contains detailed tax information (sales tax and VAT) for an order line item. The information
 * in this container supercedes/overrides the sales tax information in the
 * ShippingDetails.SalesTax
 * container.
 **/
class TaxesType extends EbatNs_ComplexType
{
    const TAG = 'TaxesType';
    const NAME = 'TaxesType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var EBayTaxReferenceValue|null
     */
    protected $eBayReference = null;

    /**
     * @var AmountType|null
     */
    protected $TotalTaxAmount = null;

    /**
     * @var TaxDetailsType[]|null
     */
    protected $TaxDetails = [];


    /**
     * @return EBayTaxReferenceValue|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEBayReference()
    {
        return $this->_dc($this->eBayReference, 'eBayReference');
    }

    /**
     * @param EBayTaxReferenceValue|null $value
     * @return void
     */
    public function setEBayReference($value)
    {
        $this->eBayReference = $value;
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
     * @return TaxDetailsType[]|TaxDetailsType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getTaxDetails($index = null)
    {
        return $this->_dc($index === null
            ? $this->TaxDetails
            : (count($this->TaxDetails) > $index
                ? $this->TaxDetails[$index]
                : null), 'TaxDetails');
    }

    /**
     * @param TaxDetailsType|null|TaxDetailsType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setTaxDetails($value, $index = null)
    {
        if ($index === null) {
            $this->TaxDetails = $value;
        } else {
            $this->TaxDetails[$index] = [];
            
            foreach ($value as $item) {
                $this->addTaxDetails($item);
            }
        }
    }

    /**
     * @param TaxDetailsType|null $value
     * @return void
     */
    public function addTaxDetails($value)
    {
        $this->TaxDetails[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'eBayReference' => ['type' => 'EBayTaxReferenceValue', 'xmlns' => self::XMLNS],
            'TotalTaxAmount' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'TaxDetails' => ['type' => 'TaxDetailsType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

TaxesType::_register();

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
 * A list of stock-keeping unit (SKU) identifiers that a seller uses in listings.
 **/
class SKUArrayType extends EbatNs_ComplexType
{
    const TAG = 'SKUArrayType';
    const NAME = 'SKUArrayType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var SKUType[]|null
     */
    protected $SKU = [];


    /**
     * @return SKUType[]|SKUType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getSKU($index = null)
    {
        return $this->_dc($index === null
            ? $this->SKU
            : (count($this->SKU) > $index
                ? $this->SKU[$index]
                : null), 'SKU');
    }

    /**
     * @param SKUType|null|SKUType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setSKU($value, $index = null)
    {
        if ($index === null) {
            $this->SKU = $value;
        } else {
            $this->SKU[$index] = [];
            
            foreach ($value as $item) {
                $this->addSKU($item);
            }
        }
    }

    /**
     * @param SKUType|null $value
     * @return void
     */
    public function addSKU($value)
    {
        $this->SKU[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['SKU' => ['type' => 'SKUType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']], parent::NAME);
        self::assignAttributes([]);
    }

}

SKUArrayType::_register();

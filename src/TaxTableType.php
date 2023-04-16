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
 * This type is used to express sales tax details for one or more tax jurisdictions. The concept of 'sales tax' is
 * only applicable to eBay US and Canada (English and French) sites.
 **/
class TaxTableType extends EbatNs_ComplexType
{
    const TAG = 'TaxTableType';
    const NAME = 'TaxTableType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var TaxJurisdictionType[]|null
     */
    protected $TaxJurisdiction = [];


    /**
     * @return TaxJurisdictionType[]|TaxJurisdictionType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getTaxJurisdiction($index = null)
    {
        return $this->_dc($index === null
            ? $this->TaxJurisdiction
            : (count($this->TaxJurisdiction) > $index
                ? $this->TaxJurisdiction[$index]
                : null), 'TaxJurisdiction');
    }

    /**
     * @param TaxJurisdictionType|null|TaxJurisdictionType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setTaxJurisdiction($value, $index = null)
    {
        if ($index === null) {
            $this->TaxJurisdiction = $value;
        } else {
            $this->TaxJurisdiction[$index] = [];
            
            foreach ($value as $item) {
                $this->addTaxJurisdiction($item);
            }
        }
    }

    /**
     * @param TaxJurisdictionType|null $value
     * @return void
     */
    public function addTaxJurisdiction($value)
    {
        $this->TaxJurisdiction[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['TaxJurisdiction' => ['type' => 'TaxJurisdictionType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']], parent::NAME);
        self::assignAttributes([]);
    }

}

TaxTableType::_register();

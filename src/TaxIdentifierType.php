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
 * This type defines the
 * BuyerTaxIdentifier
 * container that is returned in order management calls. This container will either consist of VAT or Codice
 * Fiscale taxpayer identification information for the buyer.
 **/
class TaxIdentifierType extends EbatNs_ComplexType
{
    const TAG = 'TaxIdentifierType';
    const NAME = 'TaxIdentifierType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var ValueTypeCodeType|null
     */
    protected $Type = null;

    /**
     * @var string|null
     */
    protected $ID = null;

    /**
     * @var TaxIdentifierAttributeType[]|null
     */
    protected $Attribute = [];


    /**
     * @return ValueTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getType()
    {
        return $this->_dc($this->Type);
    }

    /**
     * @param ValueTypeCodeType|null $value
     * @return void
     */
    public function setType($value)
    {
        $this->Type = $this->_enum($value, ValueTypeCodeType::class);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getID()
    {
        return $this->_dc($this->ID, 'ID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setID($value)
    {
        $this->ID = self::_string($value);
    }

    /**
     * @return TaxIdentifierAttributeType[]|TaxIdentifierAttributeType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getAttribute($index = null)
    {
        return $this->_dc($index === null
            ? $this->Attribute
            : (count($this->Attribute) > $index
                ? $this->Attribute[$index]
                : null), 'Attribute');
    }

    /**
     * @param TaxIdentifierAttributeType|null|TaxIdentifierAttributeType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setAttribute($value, $index = null)
    {
        if ($index === null) {
            $this->Attribute = $value;
        } else {
            $this->Attribute[$index] = [];
            
            foreach ($value as $item) {
                $this->addAttribute($item);
            }
        }
    }

    /**
     * @param TaxIdentifierAttributeType|null $value
     * @return void
     */
    public function addAttribute($value)
    {
        $this->Attribute[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'Type' => ['type' => 'ValueTypeCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'ID' => [],
            'Attribute' => ['type' => 'TaxIdentifierAttributeType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

TaxIdentifierType::_register();

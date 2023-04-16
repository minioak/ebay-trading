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
class AttributeSetType extends EbatNs_ComplexType
{
    const TAG = 'AttributeSetType';
    const NAME = 'AttributeSetType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var AttributeType[]|null
     */
    protected $Attribute = [];


    /**
     * @return AttributeType[]|AttributeType|null|mixed Depending on the assigned data converter: mixed
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
     * @param AttributeType|null|AttributeType[] $value
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
     * @param AttributeType|null $value
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
        self::assignElements(['Attribute' => ['type' => 'AttributeType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']], parent::NAME);
        self::assignAttributes([
            'attributeSetID' => ['type' => 'int'],
            'attributeSetVersion' => ['type' => 'string']]);
    }

}

AttributeSetType::_register();

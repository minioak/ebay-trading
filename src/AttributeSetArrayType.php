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
class AttributeSetArrayType extends EbatNs_ComplexType
{
    const TAG = 'AttributeSetArrayType';
    const NAME = 'AttributeSetArrayType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var AttributeSetType[]|null
     */
    protected $AttributeSet = [];


    /**
     * @return AttributeSetType[]|AttributeSetType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getAttributeSet($index = null)
    {
        return $this->_dc($index === null
            ? $this->AttributeSet
            : (count($this->AttributeSet) > $index
                ? $this->AttributeSet[$index]
                : null), 'AttributeSet');
    }

    /**
     * @param AttributeSetType|null|AttributeSetType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setAttributeSet($value, $index = null)
    {
        if ($index === null) {
            $this->AttributeSet = $value;
        } else {
            $this->AttributeSet[$index] = [];
            
            foreach ($value as $item) {
                $this->addAttributeSet($item);
            }
        }
    }

    /**
     * @param AttributeSetType|null $value
     * @return void
     */
    public function addAttributeSet($value)
    {
        $this->AttributeSet[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['AttributeSet' => ['type' => 'AttributeSetType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']], parent::NAME);
        self::assignAttributes([]);
    }

}

AttributeSetArrayType::_register();

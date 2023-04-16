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
 * This type is only applicable for Half.com listings, and since the Half.com site was taken down, this type is no
 * longer applicable.
 **/
class AttributeType extends EbatNs_ComplexType
{
    const TAG = 'AttributeType';
    const NAME = 'AttributeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var ValType[]|null
     */
    protected $Value = [];


    /**
     * @return ValType[]|ValType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getValue($index = null)
    {
        return $this->_dc($index === null
            ? $this->Value
            : (count($this->Value) > $index
                ? $this->Value[$index]
                : null), 'Value');
    }

    /**
     * @param ValType|null|ValType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setValue($value, $index = null)
    {
        if ($index === null) {
            $this->Value = $value;
        } else {
            $this->Value[$index] = [];
            
            foreach ($value as $item) {
                $this->addValue($item);
            }
        }
    }

    /**
     * @param ValType|null $value
     * @return void
     */
    public function addValue($value)
    {
        $this->Value[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['Value' => ['type' => 'ValType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']], parent::NAME);
        self::assignAttributes([
            'attributeID' => ['type' => 'int'],
            'attributeLabel' => ['type' => 'string']]);
    }

}

AttributeType::_register();

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
 * This type is used to set or identify either an Item Specific name/value pair for a category/item/variation, or to
 * identify a Parts Compatibility name/value pair.
 **/
class NameValueListType extends EbatNs_ComplexType
{
    const TAG = 'NameValueListType';
    const NAME = 'NameValueListType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $Name = null;

    /**
     * @var string[]|null
     */
    protected $Value = [];

    /**
     * @var ItemSpecificSourceCodeType|null
     */
    protected $Source = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getName()
    {
        return $this->_dc($this->Name, 'Name');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setName($value)
    {
        $this->Name = self::_string($value);
    }

    /**
     * @return string[]|string|null|mixed Depending on the assigned data converter: mixed
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
     * @param string|null|string[] $value
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
     * @param string|null $value
     * @return void
     */
    public function addValue($value)
    {
        $this->Value[] = self::_string($value);
    }

    /**
     * @return ItemSpecificSourceCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSource()
    {
        return $this->_dc($this->Source);
    }

    /**
     * @param ItemSpecificSourceCodeType|null $value
     * @return void
     */
    public function setSource($value)
    {
        $this->Source = $this->_enum($value, ItemSpecificSourceCodeType::class);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'Name' => [],
            'Value' => ['cardinality' => '0..*'],
            'Source' => ['type' => 'ItemSpecificSourceCodeType', 'enum' => true, 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

NameValueListType::_register();

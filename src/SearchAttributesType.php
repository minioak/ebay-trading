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
class SearchAttributesType extends EbatNs_ComplexType
{
    const TAG = 'SearchAttributesType';
    const NAME = 'SearchAttributesType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var int|null
     */
    protected $AttributeID = null;

    /**
     * @var DateSpecifierCodeType|null
     */
    protected $DateSpecifier = null;

    /**
     * @var RangeCodeType|null
     */
    protected $RangeSpecifier = null;

    /**
     * @var ValType[]|null
     */
    protected $ValueList = [];


    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getAttributeID()
    {
        return $this->_dc($this->AttributeID, 'AttributeID');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setAttributeID($value)
    {
        $this->AttributeID = self::_int($value);
    }

    /**
     * @return DateSpecifierCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDateSpecifier()
    {
        return $this->_dc($this->DateSpecifier);
    }

    /**
     * @param DateSpecifierCodeType|null $value
     * @return void
     */
    public function setDateSpecifier($value)
    {
        $this->DateSpecifier = $this->_enum($value, DateSpecifierCodeType::class);
    }

    /**
     * @return RangeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getRangeSpecifier()
    {
        return $this->_dc($this->RangeSpecifier);
    }

    /**
     * @param RangeCodeType|null $value
     * @return void
     */
    public function setRangeSpecifier($value)
    {
        $this->RangeSpecifier = $this->_enum($value, RangeCodeType::class);
    }

    /**
     * @return ValType[]|ValType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getValueList($index = null)
    {
        return $this->_dc($index === null
            ? $this->ValueList
            : (count($this->ValueList) > $index
                ? $this->ValueList[$index]
                : null), 'ValueList');
    }

    /**
     * @param ValType|null|ValType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setValueList($value, $index = null)
    {
        if ($index === null) {
            $this->ValueList = $value;
        } else {
            $this->ValueList[$index] = [];
            
            foreach ($value as $item) {
                $this->addValueList($item);
            }
        }
    }

    /**
     * @param ValType|null $value
     * @return void
     */
    public function addValueList($value)
    {
        $this->ValueList[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'AttributeID' => ['type' => 'int'],
            'DateSpecifier' => ['type' => 'DateSpecifierCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'RangeSpecifier' => ['type' => 'RangeCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'ValueList' => ['type' => 'ValType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

SearchAttributesType::_register();

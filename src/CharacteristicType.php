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
class CharacteristicType extends EbatNs_ComplexType
{
    const TAG = 'CharacteristicType';
    const NAME = 'CharacteristicType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var int|null
     */
    protected $AttributeID = null;

    /**
     * @var string|null
     */
    protected $DateFormat = null;

    /**
     * @var string|null
     */
    protected $DisplaySequence = null;

    /**
     * @var string|null
     */
    protected $DisplayUOM = null;

    /**
     * @var LabelType|null
     */
    protected $Label = null;

    /**
     * @var SortOrderCodeType|null
     */
    protected $SortOrder = null;

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
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDateFormat()
    {
        return $this->_dc($this->DateFormat, 'DateFormat');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setDateFormat($value)
    {
        $this->DateFormat = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDisplaySequence()
    {
        return $this->_dc($this->DisplaySequence, 'DisplaySequence');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setDisplaySequence($value)
    {
        $this->DisplaySequence = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDisplayUOM()
    {
        return $this->_dc($this->DisplayUOM, 'DisplayUOM');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setDisplayUOM($value)
    {
        $this->DisplayUOM = self::_string($value);
    }

    /**
     * @return LabelType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getLabel()
    {
        return $this->_dc($this->Label, 'Label');
    }

    /**
     * @param LabelType|null $value
     * @return void
     */
    public function setLabel($value)
    {
        $this->Label = $value;
    }

    /**
     * @return SortOrderCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSortOrder()
    {
        return $this->_dc($this->SortOrder);
    }

    /**
     * @param SortOrderCodeType|null $value
     * @return void
     */
    public function setSortOrder($value)
    {
        $this->SortOrder = $this->_enum($value, SortOrderCodeType::class);
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
            'DateFormat' => [],
            'DisplaySequence' => [],
            'DisplayUOM' => [],
            'Label' => ['type' => 'LabelType', 'xmlns' => self::XMLNS],
            'SortOrder' => ['type' => 'SortOrderCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'ValueList' => ['type' => 'ValType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

CharacteristicType::_register();

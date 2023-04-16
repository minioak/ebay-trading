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
class CharacteristicsSetType extends EbatNs_ComplexType
{
    const TAG = 'CharacteristicsSetType';
    const NAME = 'CharacteristicsSetType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $Name = null;

    /**
     * @var int|null
     */
    protected $AttributeSetID = null;

    /**
     * @var string|null
     */
    protected $AttributeSetVersion = null;

    /**
     * @var CharacteristicType[]|null
     */
    protected $Characteristics = [];


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
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getAttributeSetID()
    {
        return $this->_dc($this->AttributeSetID, 'AttributeSetID');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setAttributeSetID($value)
    {
        $this->AttributeSetID = self::_int($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getAttributeSetVersion()
    {
        return $this->_dc($this->AttributeSetVersion, 'AttributeSetVersion');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setAttributeSetVersion($value)
    {
        $this->AttributeSetVersion = self::_string($value);
    }

    /**
     * @return CharacteristicType[]|CharacteristicType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getCharacteristics($index = null)
    {
        return $this->_dc($index === null
            ? $this->Characteristics
            : (count($this->Characteristics) > $index
                ? $this->Characteristics[$index]
                : null), 'Characteristics');
    }

    /**
     * @param CharacteristicType|null|CharacteristicType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setCharacteristics($value, $index = null)
    {
        if ($index === null) {
            $this->Characteristics = $value;
        } else {
            $this->Characteristics[$index] = [];
            
            foreach ($value as $item) {
                $this->addCharacteristics($item);
            }
        }
    }

    /**
     * @param CharacteristicType|null $value
     * @return void
     */
    public function addCharacteristics($value)
    {
        $this->Characteristics[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'Name' => [],
            'AttributeSetID' => ['type' => 'int'],
            'AttributeSetVersion' => [],
            'Characteristics' => ['type' => 'CharacteristicType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

CharacteristicsSetType::_register();

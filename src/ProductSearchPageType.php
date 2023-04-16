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
class ProductSearchPageType extends EbatNs_ComplexType
{
    const TAG = 'ProductSearchPageType';
    const NAME = 'ProductSearchPageType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var CharacteristicsSetType|null
     */
    protected $SearchCharacteristicsSet = null;

    /**
     * @var CharacteristicsSearchCodeType|null
     */
    protected $SearchType = null;

    /**
     * @var CharacteristicType[]|null
     */
    protected $SortCharacteristics = [];

    /**
     * @var DataElementSetType[]|null
     */
    protected $DataElementSet = [];


    /**
     * @return CharacteristicsSetType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSearchCharacteristicsSet()
    {
        return $this->_dc($this->SearchCharacteristicsSet, 'SearchCharacteristicsSet');
    }

    /**
     * @param CharacteristicsSetType|null $value
     * @return void
     */
    public function setSearchCharacteristicsSet($value)
    {
        $this->SearchCharacteristicsSet = $value;
    }

    /**
     * @return CharacteristicsSearchCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSearchType()
    {
        return $this->_dc($this->SearchType);
    }

    /**
     * @param CharacteristicsSearchCodeType|null $value
     * @return void
     */
    public function setSearchType($value)
    {
        $this->SearchType = $this->_enum($value, CharacteristicsSearchCodeType::class);
    }

    /**
     * @return CharacteristicType[]|CharacteristicType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getSortCharacteristics($index = null)
    {
        return $this->_dc($index === null
            ? $this->SortCharacteristics
            : (count($this->SortCharacteristics) > $index
                ? $this->SortCharacteristics[$index]
                : null), 'SortCharacteristics');
    }

    /**
     * @param CharacteristicType|null|CharacteristicType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setSortCharacteristics($value, $index = null)
    {
        if ($index === null) {
            $this->SortCharacteristics = $value;
        } else {
            $this->SortCharacteristics[$index] = [];
            
            foreach ($value as $item) {
                $this->addSortCharacteristics($item);
            }
        }
    }

    /**
     * @param CharacteristicType|null $value
     * @return void
     */
    public function addSortCharacteristics($value)
    {
        $this->SortCharacteristics[] = $value;
    }

    /**
     * @return DataElementSetType[]|DataElementSetType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getDataElementSet($index = null)
    {
        return $this->_dc($index === null
            ? $this->DataElementSet
            : (count($this->DataElementSet) > $index
                ? $this->DataElementSet[$index]
                : null), 'DataElementSet');
    }

    /**
     * @param DataElementSetType|null|DataElementSetType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setDataElementSet($value, $index = null)
    {
        if ($index === null) {
            $this->DataElementSet = $value;
        } else {
            $this->DataElementSet[$index] = [];
            
            foreach ($value as $item) {
                $this->addDataElementSet($item);
            }
        }
    }

    /**
     * @param DataElementSetType|null $value
     * @return void
     */
    public function addDataElementSet($value)
    {
        $this->DataElementSet[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'SearchCharacteristicsSet' => ['type' => 'CharacteristicsSetType', 'xmlns' => self::XMLNS],
            'SearchType' => ['type' => 'CharacteristicsSearchCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'SortCharacteristics' => ['type' => 'CharacteristicType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'DataElementSet' => ['type' => 'DataElementSetType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

ProductSearchPageType::_register();

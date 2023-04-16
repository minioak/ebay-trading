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
class SiteWideCharacteristicsType extends EbatNs_ComplexType
{
    const TAG = 'SiteWideCharacteristicsType';
    const NAME = 'SiteWideCharacteristicsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var CharacteristicsSetType|null
     */
    protected $CharacteristicsSet = null;

    /**
     * @var string[]|null
     */
    protected $ExcludeCategoryID = [];


    /**
     * @return CharacteristicsSetType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCharacteristicsSet()
    {
        return $this->_dc($this->CharacteristicsSet, 'CharacteristicsSet');
    }

    /**
     * @param CharacteristicsSetType|null $value
     * @return void
     */
    public function setCharacteristicsSet($value)
    {
        $this->CharacteristicsSet = $value;
    }

    /**
     * @return string[]|string|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getExcludeCategoryID($index = null)
    {
        return $this->_dc($index === null
            ? $this->ExcludeCategoryID
            : (count($this->ExcludeCategoryID) > $index
                ? $this->ExcludeCategoryID[$index]
                : null), 'ExcludeCategoryID');
    }

    /**
     * @param string|null|string[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setExcludeCategoryID($value, $index = null)
    {
        if ($index === null) {
            $this->ExcludeCategoryID = $value;
        } else {
            $this->ExcludeCategoryID[$index] = [];
            
            foreach ($value as $item) {
                $this->addExcludeCategoryID($item);
            }
        }
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function addExcludeCategoryID($value)
    {
        $this->ExcludeCategoryID[] = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'CharacteristicsSet' => ['type' => 'CharacteristicsSetType', 'xmlns' => self::XMLNS],
            'ExcludeCategoryID' => ['cardinality' => '0..*']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

SiteWideCharacteristicsType::_register();

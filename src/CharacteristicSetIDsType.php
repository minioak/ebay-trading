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
class CharacteristicSetIDsType extends EbatNs_ComplexType
{
    const TAG = 'CharacteristicSetIDsType';
    const NAME = 'CharacteristicSetIDsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string[]|null
     */
    protected $ID = [];


    /**
     * @return string[]|string|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getID($index = null)
    {
        return $this->_dc($index === null
            ? $this->ID
            : (count($this->ID) > $index
                ? $this->ID[$index]
                : null), 'ID');
    }

    /**
     * @param string|null|string[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setID($value, $index = null)
    {
        if ($index === null) {
            $this->ID = $value;
        } else {
            $this->ID[$index] = [];
            
            foreach ($value as $item) {
                $this->addID($item);
            }
        }
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function addID($value)
    {
        $this->ID[] = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['ID' => ['cardinality' => '0..*']], parent::NAME);
        self::assignAttributes([]);
    }

}

CharacteristicSetIDsType::_register();

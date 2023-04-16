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
 * A list of compatible applications specified as name and value pairs. Describes an
 * assembly with which a part is compatible (i.e., parts compatibility by application). For
 * example, to specify a part's compatibility with a vehicle, the name would map to
 * standard vehicle characteristics (e.g., Year, Make, Model, Trim, and Engine). The
 * values would desribe the specific vehicle, such as a 2006 Honda Accord.
 **/
class ItemCompatibilityListType extends EbatNs_ComplexType
{
    const TAG = 'ItemCompatibilityListType';
    const NAME = 'ItemCompatibilityListType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var ItemCompatibilityType[]|null
     */
    protected $Compatibility = [];

    /**
     * @var bool|null "true" or "false"
     */
    protected $ReplaceAll = null;


    /**
     * @return ItemCompatibilityType[]|ItemCompatibilityType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getCompatibility($index = null)
    {
        return $this->_dc($index === null
            ? $this->Compatibility
            : (count($this->Compatibility) > $index
                ? $this->Compatibility[$index]
                : null), 'Compatibility');
    }

    /**
     * @param ItemCompatibilityType|null|ItemCompatibilityType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setCompatibility($value, $index = null)
    {
        if ($index === null) {
            $this->Compatibility = $value;
        } else {
            $this->Compatibility[$index] = [];
            
            foreach ($value as $item) {
                $this->addCompatibility($item);
            }
        }
    }

    /**
     * @param ItemCompatibilityType|null $value
     * @return void
     */
    public function addCompatibility($value)
    {
        $this->Compatibility[] = $value;
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getReplaceAll()
    {
        return $this->_dc($this->ReplaceAll === 'true', 'ReplaceAll');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setReplaceAll($value)
    {
        $this->ReplaceAll = self::_bool($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'Compatibility' => ['type' => 'ItemCompatibilityType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'ReplaceAll' => ['type' => 'bool']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

ItemCompatibilityListType::_register();

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
 * This type is used by the
 * ModifyNameList
 * container in a
 * ReviseFixedPriceItem
 * or
 * RelistFixedPriceItem
 * call to rename one or more Variation Specific names for a multiple-variation listing.
 **/
class ModifyNameArrayType extends EbatNs_ComplexType
{
    const TAG = 'ModifyNameArrayType';
    const NAME = 'ModifyNameArrayType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var ModifyNameType[]|null
     */
    protected $ModifyName = [];


    /**
     * @return ModifyNameType[]|ModifyNameType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getModifyName($index = null)
    {
        return $this->_dc($index === null
            ? $this->ModifyName
            : (count($this->ModifyName) > $index
                ? $this->ModifyName[$index]
                : null), 'ModifyName');
    }

    /**
     * @param ModifyNameType|null|ModifyNameType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setModifyName($value, $index = null)
    {
        if ($index === null) {
            $this->ModifyName = $value;
        } else {
            $this->ModifyName[$index] = [];
            
            foreach ($value as $item) {
                $this->addModifyName($item);
            }
        }
    }

    /**
     * @param ModifyNameType|null $value
     * @return void
     */
    public function addModifyName($value)
    {
        $this->ModifyName[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['ModifyName' => ['type' => 'ModifyNameType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']], parent::NAME);
        self::assignAttributes([]);
    }

}

ModifyNameArrayType::_register();

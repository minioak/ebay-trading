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
class ProductFamilyType extends EbatNs_ComplexType
{
    const TAG = 'ProductFamilyType';
    const NAME = 'ProductFamilyType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var ProductType|null
     */
    protected $ParentProduct = null;

    /**
     * @var ProductType[]|null
     */
    protected $FamilyMembers = [];


    /**
     * @return ProductType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getParentProduct()
    {
        return $this->_dc($this->ParentProduct, 'ParentProduct');
    }

    /**
     * @param ProductType|null $value
     * @return void
     */
    public function setParentProduct($value)
    {
        $this->ParentProduct = $value;
    }

    /**
     * @return ProductType[]|ProductType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getFamilyMembers($index = null)
    {
        return $this->_dc($index === null
            ? $this->FamilyMembers
            : (count($this->FamilyMembers) > $index
                ? $this->FamilyMembers[$index]
                : null), 'FamilyMembers');
    }

    /**
     * @param ProductType|null|ProductType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setFamilyMembers($value, $index = null)
    {
        if ($index === null) {
            $this->FamilyMembers = $value;
        } else {
            $this->FamilyMembers[$index] = [];
            
            foreach ($value as $item) {
                $this->addFamilyMembers($item);
            }
        }
    }

    /**
     * @param ProductType|null $value
     * @return void
     */
    public function addFamilyMembers($value)
    {
        $this->FamilyMembers[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'ParentProduct' => ['type' => 'ProductType', 'xmlns' => self::XMLNS],
            'FamilyMembers' => ['type' => 'ProductType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']
        ], parent::NAME);

        self::assignAttributes(['hasMoreChildren' => ['type' => 'boolean']]);
    }

}

ProductFamilyType::_register();

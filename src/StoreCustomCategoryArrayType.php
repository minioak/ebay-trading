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
 * This type holds an array of custom categories set up by a seller for their eBay Store.
 **/
class StoreCustomCategoryArrayType extends EbatNs_ComplexType
{
    const TAG = 'StoreCustomCategoryArrayType';
    const NAME = 'StoreCustomCategoryArrayType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var StoreCustomCategoryType[]|null
     */
    protected $CustomCategory = [];


    /**
     * @return StoreCustomCategoryType[]|StoreCustomCategoryType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getCustomCategory($index = null)
    {
        return $this->_dc($index === null
            ? $this->CustomCategory
            : (count($this->CustomCategory) > $index
                ? $this->CustomCategory[$index]
                : null), 'CustomCategory');
    }

    /**
     * @param StoreCustomCategoryType|null|StoreCustomCategoryType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setCustomCategory($value, $index = null)
    {
        if ($index === null) {
            $this->CustomCategory = $value;
        } else {
            $this->CustomCategory[$index] = [];
            
            foreach ($value as $item) {
                $this->addCustomCategory($item);
            }
        }
    }

    /**
     * @param StoreCustomCategoryType|null $value
     * @return void
     */
    public function addCustomCategory($value)
    {
        $this->CustomCategory[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['CustomCategory' => ['type' => 'StoreCustomCategoryType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']], parent::NAME);
        self::assignAttributes([]);
    }

}

StoreCustomCategoryArrayType::_register();

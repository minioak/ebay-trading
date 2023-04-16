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
 * Type used by the
 * CategoryArray
 * container that is returned in
 * GetCategories
 * . All categories that match the input criteria of the
 * GetCategories
 * request payload are returned under the
 * CategoryArray
 * container
 **/
class CategoryArrayType extends EbatNs_ComplexType
{
    const TAG = 'CategoryArrayType';
    const NAME = 'CategoryArrayType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var CategoryType[]|null
     */
    protected $Category = [];


    /**
     * @return CategoryType[]|CategoryType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getCategory($index = null)
    {
        return $this->_dc($index === null
            ? $this->Category
            : (count($this->Category) > $index
                ? $this->Category[$index]
                : null), 'Category');
    }

    /**
     * @param CategoryType|null|CategoryType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setCategory($value, $index = null)
    {
        if ($index === null) {
            $this->Category = $value;
        } else {
            $this->Category[$index] = [];
            
            foreach ($value as $item) {
                $this->addCategory($item);
            }
        }
    }

    /**
     * @param CategoryType|null $value
     * @return void
     */
    public function addCategory($value)
    {
        $this->Category[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['Category' => ['type' => 'CategoryType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']], parent::NAME);
        self::assignAttributes([]);
    }

}

CategoryArrayType::_register();

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
 * This type is used to express details about a customized eBay Store category.
 **/
class StoreCustomCategoryType extends EbatNs_ComplexType
{
    const TAG = 'StoreCustomCategoryType';
    const NAME = 'StoreCustomCategoryType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var int|null
     */
    protected $CategoryID = null;

    /**
     * @var string|null
     */
    protected $Name = null;

    /**
     * @var int|null
     */
    protected $Order = null;

    /**
     * @var StoreCustomCategoryType[]|null
     */
    protected $ChildCategory = [];


    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCategoryID()
    {
        return $this->_dc($this->CategoryID, 'CategoryID');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setCategoryID($value)
    {
        $this->CategoryID = self::_int($value);
    }

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
    public function getOrder()
    {
        return $this->_dc($this->Order, 'Order');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setOrder($value)
    {
        $this->Order = self::_int($value);
    }

    /**
     * @return StoreCustomCategoryType[]|StoreCustomCategoryType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getChildCategory($index = null)
    {
        return $this->_dc($index === null
            ? $this->ChildCategory
            : (count($this->ChildCategory) > $index
                ? $this->ChildCategory[$index]
                : null), 'ChildCategory');
    }

    /**
     * @param StoreCustomCategoryType|null|StoreCustomCategoryType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setChildCategory($value, $index = null)
    {
        if ($index === null) {
            $this->ChildCategory = $value;
        } else {
            $this->ChildCategory[$index] = [];
            
            foreach ($value as $item) {
                $this->addChildCategory($item);
            }
        }
    }

    /**
     * @param StoreCustomCategoryType|null $value
     * @return void
     */
    public function addChildCategory($value)
    {
        $this->ChildCategory[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'CategoryID' => ['type' => 'int'],
            'Name' => [],
            'Order' => ['type' => 'int'],
            'ChildCategory' => ['type' => 'StoreCustomCategoryType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

StoreCustomCategoryType::_register();

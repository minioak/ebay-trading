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
class ProductSearchType extends EbatNs_ComplexType
{
    const TAG = 'ProductSearchType';
    const NAME = 'ProductSearchType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $ProductSearchID = null;

    /**
     * @var int|null
     */
    protected $AttributeSetID = null;

    /**
     * @var int|null
     */
    protected $ProductFinderID = null;

    /**
     * @var string|null
     */
    protected $ProductID = null;

    /**
     * @var int|null
     */
    protected $SortAttributeID = null;

    /**
     * @var int|null
     */
    protected $MaxChildrenPerFamily = null;

    /**
     * @var SearchAttributesType[]|null
     */
    protected $SearchAttributes = [];

    /**
     * @var PaginationType|null
     */
    protected $Pagination = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $AvailableItemsOnly = null;

    /**
     * @var string|null
     */
    protected $QueryKeywords = null;

    /**
     * @var CharacteristicSetIDsType|null
     */
    protected $CharacteristicSetIDs = null;

    /**
     * @var string|null
     */
    protected $ProductReferenceID = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getProductSearchID()
    {
        return $this->_dc($this->ProductSearchID, 'ProductSearchID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setProductSearchID($value)
    {
        $this->ProductSearchID = self::_string($value);
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
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getProductFinderID()
    {
        return $this->_dc($this->ProductFinderID, 'ProductFinderID');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setProductFinderID($value)
    {
        $this->ProductFinderID = self::_int($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getProductID()
    {
        return $this->_dc($this->ProductID, 'ProductID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setProductID($value)
    {
        $this->ProductID = self::_string($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSortAttributeID()
    {
        return $this->_dc($this->SortAttributeID, 'SortAttributeID');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setSortAttributeID($value)
    {
        $this->SortAttributeID = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMaxChildrenPerFamily()
    {
        return $this->_dc($this->MaxChildrenPerFamily, 'MaxChildrenPerFamily');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setMaxChildrenPerFamily($value)
    {
        $this->MaxChildrenPerFamily = self::_int($value);
    }

    /**
     * @return SearchAttributesType[]|SearchAttributesType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getSearchAttributes($index = null)
    {
        return $this->_dc($index === null
            ? $this->SearchAttributes
            : (count($this->SearchAttributes) > $index
                ? $this->SearchAttributes[$index]
                : null), 'SearchAttributes');
    }

    /**
     * @param SearchAttributesType|null|SearchAttributesType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setSearchAttributes($value, $index = null)
    {
        if ($index === null) {
            $this->SearchAttributes = $value;
        } else {
            $this->SearchAttributes[$index] = [];
            
            foreach ($value as $item) {
                $this->addSearchAttributes($item);
            }
        }
    }

    /**
     * @param SearchAttributesType|null $value
     * @return void
     */
    public function addSearchAttributes($value)
    {
        $this->SearchAttributes[] = $value;
    }

    /**
     * @return PaginationType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPagination()
    {
        return $this->_dc($this->Pagination, 'Pagination');
    }

    /**
     * @param PaginationType|null $value
     * @return void
     */
    public function setPagination($value)
    {
        $this->Pagination = $value;
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getAvailableItemsOnly()
    {
        return $this->_dc($this->AvailableItemsOnly === 'true', 'AvailableItemsOnly');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setAvailableItemsOnly($value)
    {
        $this->AvailableItemsOnly = self::_bool($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getQueryKeywords()
    {
        return $this->_dc($this->QueryKeywords, 'QueryKeywords');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setQueryKeywords($value)
    {
        $this->QueryKeywords = self::_string($value);
    }

    /**
     * @return CharacteristicSetIDsType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCharacteristicSetIDs()
    {
        return $this->_dc($this->CharacteristicSetIDs, 'CharacteristicSetIDs');
    }

    /**
     * @param CharacteristicSetIDsType|null $value
     * @return void
     */
    public function setCharacteristicSetIDs($value)
    {
        $this->CharacteristicSetIDs = $value;
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getProductReferenceID()
    {
        return $this->_dc($this->ProductReferenceID, 'ProductReferenceID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setProductReferenceID($value)
    {
        $this->ProductReferenceID = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'ProductSearchID' => [],
            'AttributeSetID' => ['type' => 'int'],
            'ProductFinderID' => ['type' => 'int'],
            'ProductID' => [],
            'SortAttributeID' => ['type' => 'int'],
            'MaxChildrenPerFamily' => ['type' => 'int'],
            'SearchAttributes' => ['type' => 'SearchAttributesType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'Pagination' => ['type' => 'PaginationType', 'xmlns' => self::XMLNS],
            'AvailableItemsOnly' => ['type' => 'bool'],
            'QueryKeywords' => [],
            'CharacteristicSetIDs' => ['type' => 'CharacteristicSetIDsType', 'xmlns' => self::XMLNS],
            'ProductReferenceID' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

ProductSearchType::_register();

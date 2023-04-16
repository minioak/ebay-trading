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
 * Container for data on one listing category. Many of the
 * CategoryType
 * fields are only returned in the
 * GetCategories
 * response. Add/Revise/Relist calls only use the
 * CategoryID
 * field to specify which eBay category in which to list the item.
 **/
class CategoryType extends EbatNs_ComplexType
{
    const TAG = 'CategoryType';
    const NAME = 'CategoryType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var bool|null "true" or "false"
     */
    protected $BestOfferEnabled = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $AutoPayEnabled = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $B2BVATEnabled = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $CatalogEnabled = null;

    /**
     * @var string|null
     */
    protected $CategoryID = null;

    /**
     * @var int|null
     */
    protected $CategoryLevel = null;

    /**
     * @var string|null
     */
    protected $CategoryName = null;

    /**
     * @var string[]|null
     */
    protected $CategoryParentID = [];

    /**
     * @var string[]|null
     */
    protected $CategoryParentName = [];

    /**
     * @var bool|null "true" or "false"
     */
    protected $ProductSearchPageAvailable = null;

    /**
     * @var ExtendedProductFinderIDType[]|null
     */
    protected $ProductFinderIDs = [];

    /**
     * @var CharacteristicsSetType[]|null
     */
    protected $CharacteristicsSets = [];

    /**
     * @var bool|null "true" or "false"
     */
    protected $Expired = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $IntlAutosFixedCat = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $LeafCategory = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $Virtual = null;

    /**
     * @var int|null
     */
    protected $NumOfItems = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $SellerGuaranteeEligible = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $ORPA = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $ORRA = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $LSD = null;

    /**
     * @var string|null
     */
    protected $Keywords = null;


    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBestOfferEnabled()
    {
        return $this->_dc($this->BestOfferEnabled === 'true', 'BestOfferEnabled');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setBestOfferEnabled($value)
    {
        $this->BestOfferEnabled = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getAutoPayEnabled()
    {
        return $this->_dc($this->AutoPayEnabled === 'true', 'AutoPayEnabled');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setAutoPayEnabled($value)
    {
        $this->AutoPayEnabled = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getB2BVATEnabled()
    {
        return $this->_dc($this->B2BVATEnabled === 'true', 'B2BVATEnabled');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setB2BVATEnabled($value)
    {
        $this->B2BVATEnabled = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCatalogEnabled()
    {
        return $this->_dc($this->CatalogEnabled === 'true', 'CatalogEnabled');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setCatalogEnabled($value)
    {
        $this->CatalogEnabled = self::_bool($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCategoryID()
    {
        return $this->_dc($this->CategoryID, 'CategoryID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setCategoryID($value)
    {
        $this->CategoryID = self::_string($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCategoryLevel()
    {
        return $this->_dc($this->CategoryLevel, 'CategoryLevel');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setCategoryLevel($value)
    {
        $this->CategoryLevel = self::_int($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCategoryName()
    {
        return $this->_dc($this->CategoryName, 'CategoryName');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setCategoryName($value)
    {
        $this->CategoryName = self::_string($value);
    }

    /**
     * @return string[]|string|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getCategoryParentID($index = null)
    {
        return $this->_dc($index === null
            ? $this->CategoryParentID
            : (count($this->CategoryParentID) > $index
                ? $this->CategoryParentID[$index]
                : null), 'CategoryParentID');
    }

    /**
     * @param string|null|string[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setCategoryParentID($value, $index = null)
    {
        if ($index === null) {
            $this->CategoryParentID = $value;
        } else {
            $this->CategoryParentID[$index] = [];
            
            foreach ($value as $item) {
                $this->addCategoryParentID($item);
            }
        }
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function addCategoryParentID($value)
    {
        $this->CategoryParentID[] = self::_string($value);
    }

    /**
     * @return string[]|string|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getCategoryParentName($index = null)
    {
        return $this->_dc($index === null
            ? $this->CategoryParentName
            : (count($this->CategoryParentName) > $index
                ? $this->CategoryParentName[$index]
                : null), 'CategoryParentName');
    }

    /**
     * @param string|null|string[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setCategoryParentName($value, $index = null)
    {
        if ($index === null) {
            $this->CategoryParentName = $value;
        } else {
            $this->CategoryParentName[$index] = [];
            
            foreach ($value as $item) {
                $this->addCategoryParentName($item);
            }
        }
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function addCategoryParentName($value)
    {
        $this->CategoryParentName[] = self::_string($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getProductSearchPageAvailable()
    {
        return $this->_dc($this->ProductSearchPageAvailable === 'true', 'ProductSearchPageAvailable');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setProductSearchPageAvailable($value)
    {
        $this->ProductSearchPageAvailable = self::_bool($value);
    }

    /**
     * @return ExtendedProductFinderIDType[]|ExtendedProductFinderIDType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getProductFinderIDs($index = null)
    {
        return $this->_dc($index === null
            ? $this->ProductFinderIDs
            : (count($this->ProductFinderIDs) > $index
                ? $this->ProductFinderIDs[$index]
                : null), 'ProductFinderIDs');
    }

    /**
     * @param ExtendedProductFinderIDType|null|ExtendedProductFinderIDType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setProductFinderIDs($value, $index = null)
    {
        if ($index === null) {
            $this->ProductFinderIDs = $value;
        } else {
            $this->ProductFinderIDs[$index] = [];
            
            foreach ($value as $item) {
                $this->addProductFinderIDs($item);
            }
        }
    }

    /**
     * @param ExtendedProductFinderIDType|null $value
     * @return void
     */
    public function addProductFinderIDs($value)
    {
        $this->ProductFinderIDs[] = $value;
    }

    /**
     * @return CharacteristicsSetType[]|CharacteristicsSetType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getCharacteristicsSets($index = null)
    {
        return $this->_dc($index === null
            ? $this->CharacteristicsSets
            : (count($this->CharacteristicsSets) > $index
                ? $this->CharacteristicsSets[$index]
                : null), 'CharacteristicsSets');
    }

    /**
     * @param CharacteristicsSetType|null|CharacteristicsSetType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setCharacteristicsSets($value, $index = null)
    {
        if ($index === null) {
            $this->CharacteristicsSets = $value;
        } else {
            $this->CharacteristicsSets[$index] = [];
            
            foreach ($value as $item) {
                $this->addCharacteristicsSets($item);
            }
        }
    }

    /**
     * @param CharacteristicsSetType|null $value
     * @return void
     */
    public function addCharacteristicsSets($value)
    {
        $this->CharacteristicsSets[] = $value;
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getExpired()
    {
        return $this->_dc($this->Expired === 'true', 'Expired');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setExpired($value)
    {
        $this->Expired = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getIntlAutosFixedCat()
    {
        return $this->_dc($this->IntlAutosFixedCat === 'true', 'IntlAutosFixedCat');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setIntlAutosFixedCat($value)
    {
        $this->IntlAutosFixedCat = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getLeafCategory()
    {
        return $this->_dc($this->LeafCategory === 'true', 'LeafCategory');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setLeafCategory($value)
    {
        $this->LeafCategory = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getVirtual()
    {
        return $this->_dc($this->Virtual === 'true', 'Virtual');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setVirtual($value)
    {
        $this->Virtual = self::_bool($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getNumOfItems()
    {
        return $this->_dc($this->NumOfItems, 'NumOfItems');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setNumOfItems($value)
    {
        $this->NumOfItems = self::_int($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSellerGuaranteeEligible()
    {
        return $this->_dc($this->SellerGuaranteeEligible === 'true', 'SellerGuaranteeEligible');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setSellerGuaranteeEligible($value)
    {
        $this->SellerGuaranteeEligible = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getORPA()
    {
        return $this->_dc($this->ORPA === 'true', 'ORPA');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setORPA($value)
    {
        $this->ORPA = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getORRA()
    {
        return $this->_dc($this->ORRA === 'true', 'ORRA');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setORRA($value)
    {
        $this->ORRA = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getLSD()
    {
        return $this->_dc($this->LSD === 'true', 'LSD');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setLSD($value)
    {
        $this->LSD = self::_bool($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getKeywords()
    {
        return $this->_dc($this->Keywords, 'Keywords');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setKeywords($value)
    {
        $this->Keywords = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'BestOfferEnabled' => ['type' => 'bool'],
            'AutoPayEnabled' => ['type' => 'bool'],
            'B2BVATEnabled' => ['type' => 'bool'],
            'CatalogEnabled' => ['type' => 'bool'],
            'CategoryID' => [],
            'CategoryLevel' => ['type' => 'int'],
            'CategoryName' => [],
            'CategoryParentID' => ['cardinality' => '0..*'],
            'CategoryParentName' => ['cardinality' => '0..*'],
            'ProductSearchPageAvailable' => ['type' => 'bool'],
            'ProductFinderIDs' => ['type' => 'ExtendedProductFinderIDType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'CharacteristicsSets' => ['type' => 'CharacteristicsSetType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'Expired' => ['type' => 'bool'],
            'IntlAutosFixedCat' => ['type' => 'bool'],
            'LeafCategory' => ['type' => 'bool'],
            'Virtual' => ['type' => 'bool'],
            'NumOfItems' => ['type' => 'int'],
            'SellerGuaranteeEligible' => ['type' => 'bool'],
            'ORPA' => ['type' => 'bool'],
            'ORRA' => ['type' => 'bool'],
            'LSD' => ['type' => 'bool'],
            'Keywords' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

CategoryType::_register();

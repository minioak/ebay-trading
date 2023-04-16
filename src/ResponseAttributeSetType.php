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
class ResponseAttributeSetType extends EbatNs_ComplexType
{
    const TAG = 'ResponseAttributeSetType';
    const NAME = 'ResponseAttributeSetType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var int|null
     */
    protected $ApproximatePages = null;

    /**
     * @var int|null
     */
    protected $AttributeSetID = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $HasMore = null;

    /**
     * @var ProductFamilyType[]|null
     */
    protected $ProductFamilies = [];

    /**
     * @var ProductFinderConstraintType[]|null
     */
    protected $ProductFinderConstraints = [];

    /**
     * @var bool|null "true" or "false"
     */
    protected $TooManyMatchesFound = null;

    /**
     * @var int|null
     */
    protected $TotalProducts = null;


    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getApproximatePages()
    {
        return $this->_dc($this->ApproximatePages, 'ApproximatePages');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setApproximatePages($value)
    {
        $this->ApproximatePages = self::_int($value);
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
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getHasMore()
    {
        return $this->_dc($this->HasMore === 'true', 'HasMore');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setHasMore($value)
    {
        $this->HasMore = self::_bool($value);
    }

    /**
     * @return ProductFamilyType[]|ProductFamilyType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getProductFamilies($index = null)
    {
        return $this->_dc($index === null
            ? $this->ProductFamilies
            : (count($this->ProductFamilies) > $index
                ? $this->ProductFamilies[$index]
                : null), 'ProductFamilies');
    }

    /**
     * @param ProductFamilyType|null|ProductFamilyType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setProductFamilies($value, $index = null)
    {
        if ($index === null) {
            $this->ProductFamilies = $value;
        } else {
            $this->ProductFamilies[$index] = [];
            
            foreach ($value as $item) {
                $this->addProductFamilies($item);
            }
        }
    }

    /**
     * @param ProductFamilyType|null $value
     * @return void
     */
    public function addProductFamilies($value)
    {
        $this->ProductFamilies[] = $value;
    }

    /**
     * @return ProductFinderConstraintType[]|ProductFinderConstraintType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getProductFinderConstraints($index = null)
    {
        return $this->_dc($index === null
            ? $this->ProductFinderConstraints
            : (count($this->ProductFinderConstraints) > $index
                ? $this->ProductFinderConstraints[$index]
                : null), 'ProductFinderConstraints');
    }

    /**
     * @param ProductFinderConstraintType|null|ProductFinderConstraintType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setProductFinderConstraints($value, $index = null)
    {
        if ($index === null) {
            $this->ProductFinderConstraints = $value;
        } else {
            $this->ProductFinderConstraints[$index] = [];
            
            foreach ($value as $item) {
                $this->addProductFinderConstraints($item);
            }
        }
    }

    /**
     * @param ProductFinderConstraintType|null $value
     * @return void
     */
    public function addProductFinderConstraints($value)
    {
        $this->ProductFinderConstraints[] = $value;
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTooManyMatchesFound()
    {
        return $this->_dc($this->TooManyMatchesFound === 'true', 'TooManyMatchesFound');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setTooManyMatchesFound($value)
    {
        $this->TooManyMatchesFound = self::_bool($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTotalProducts()
    {
        return $this->_dc($this->TotalProducts, 'TotalProducts');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setTotalProducts($value)
    {
        $this->TotalProducts = self::_int($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'ApproximatePages' => ['type' => 'int'],
            'AttributeSetID' => ['type' => 'int'],
            'HasMore' => ['type' => 'bool'],
            'ProductFamilies' => ['type' => 'ProductFamilyType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'ProductFinderConstraints' => ['type' => 'ProductFinderConstraintType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'TooManyMatchesFound' => ['type' => 'bool'],
            'TotalProducts' => ['type' => 'int']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

ResponseAttributeSetType::_register();

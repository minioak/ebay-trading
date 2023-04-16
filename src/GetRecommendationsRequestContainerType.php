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
class GetRecommendationsRequestContainerType extends EbatNs_ComplexType
{
    const TAG = 'GetRecommendationsRequestContainerType';
    const NAME = 'GetRecommendationsRequestContainerType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var ListingFlowCodeType|null
     */
    protected $ListingFlow = null;

    /**
     * @var ItemType|null
     */
    protected $Item = null;

    /**
     * @var RecommendationEngineCodeType[]|null
     */
    protected $RecommendationEngine = [];

    /**
     * @var string|null
     */
    protected $Query = null;

    /**
     * @var string|null
     */
    protected $CorrelationID = null;

    /**
     * @var string[]|null
     */
    protected $DeletedField = [];

    /**
     * @var bool|null "true" or "false"
     */
    protected $ExcludeRelationships = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $IncludeConfidence = null;


    /**
     * @return ListingFlowCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getListingFlow()
    {
        return $this->_dc($this->ListingFlow);
    }

    /**
     * @param ListingFlowCodeType|null $value
     * @return void
     */
    public function setListingFlow($value)
    {
        $this->ListingFlow = $this->_enum($value, ListingFlowCodeType::class);
    }

    /**
     * @return ItemType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getItem()
    {
        return $this->_dc($this->Item, 'Item');
    }

    /**
     * @param ItemType|null $value
     * @return void
     */
    public function setItem($value)
    {
        $this->Item = $value;
    }

    /**
     * @return string[]|RecommendationEngineCodeType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getRecommendationEngine($index = null)
    {
        return $this->_dc($index === null
            ? $this->RecommendationEngine
            : (count($this->RecommendationEngine) > $index
                ? $this->RecommendationEngine[$index]
                : null));
    }

    /**
     * @param RecommendationEngineCodeType|null|string[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setRecommendationEngine($value, $index = null)
    {
        if ($index === null) {
            $this->RecommendationEngine = $value;
        } else {
            $this->RecommendationEngine[$index] = [];
            
            foreach ($value as $item) {
                $this->addRecommendationEngine($item);
            }
        }
    }

    /**
     * @param RecommendationEngineCodeType|null $value
     * @return void
     */
    public function addRecommendationEngine($value)
    {
        $this->RecommendationEngine[] = $this->_enum($value, RecommendationEngineCodeType::class);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getQuery()
    {
        return $this->_dc($this->Query, 'Query');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setQuery($value)
    {
        $this->Query = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCorrelationID()
    {
        return $this->_dc($this->CorrelationID, 'CorrelationID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setCorrelationID($value)
    {
        $this->CorrelationID = self::_string($value);
    }

    /**
     * @return string[]|string|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getDeletedField($index = null)
    {
        return $this->_dc($index === null
            ? $this->DeletedField
            : (count($this->DeletedField) > $index
                ? $this->DeletedField[$index]
                : null), 'DeletedField');
    }

    /**
     * @param string|null|string[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setDeletedField($value, $index = null)
    {
        if ($index === null) {
            $this->DeletedField = $value;
        } else {
            $this->DeletedField[$index] = [];
            
            foreach ($value as $item) {
                $this->addDeletedField($item);
            }
        }
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function addDeletedField($value)
    {
        $this->DeletedField[] = self::_string($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getExcludeRelationships()
    {
        return $this->_dc($this->ExcludeRelationships === 'true', 'ExcludeRelationships');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setExcludeRelationships($value)
    {
        $this->ExcludeRelationships = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getIncludeConfidence()
    {
        return $this->_dc($this->IncludeConfidence === 'true', 'IncludeConfidence');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setIncludeConfidence($value)
    {
        $this->IncludeConfidence = self::_bool($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'ListingFlow' => ['type' => 'ListingFlowCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'Item' => ['type' => 'ItemType', 'xmlns' => self::XMLNS],
            'RecommendationEngine' => ['type' => 'RecommendationEngineCodeType', 'enum' => true, 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'Query' => [],
            'CorrelationID' => [],
            'DeletedField' => ['cardinality' => '0..*'],
            'ExcludeRelationships' => ['type' => 'bool'],
            'IncludeConfidence' => ['type' => 'bool']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

GetRecommendationsRequestContainerType::_register();

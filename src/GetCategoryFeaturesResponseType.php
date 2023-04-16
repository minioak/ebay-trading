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


class GetCategoryFeaturesResponseType extends EbatNs_Response
{
    const TAG = 'GetCategoryFeaturesResponseType';
    const NAME = 'GetCategoryFeaturesResponseType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $CategoryVersion = null;

    /**
     * @var string|null
     */
    protected $UpdateTime = null;

    /**
     * @var CategoryFeatureType[]|null
     */
    protected $Category = [];

    /**
     * @var SiteDefaultsType|null
     */
    protected $SiteDefaults = null;

    /**
     * @var FeatureDefinitionsType|null
     */
    protected $FeatureDefinitions = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCategoryVersion()
    {
        return $this->_dc($this->CategoryVersion, 'CategoryVersion');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setCategoryVersion($value)
    {
        $this->CategoryVersion = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getUpdateTime()
    {
        return $this->_dc($this->UpdateTime, 'UpdateTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setUpdateTime($value)
    {
        $this->UpdateTime = self::_string($value);
    }

    /**
     * @return CategoryFeatureType[]|CategoryFeatureType|null|mixed Depending on the assigned data converter: mixed
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
     * @param CategoryFeatureType|null|CategoryFeatureType[] $value
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
     * @param CategoryFeatureType|null $value
     * @return void
     */
    public function addCategory($value)
    {
        $this->Category[] = $value;
    }

    /**
     * @return SiteDefaultsType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSiteDefaults()
    {
        return $this->_dc($this->SiteDefaults, 'SiteDefaults');
    }

    /**
     * @param SiteDefaultsType|null $value
     * @return void
     */
    public function setSiteDefaults($value)
    {
        $this->SiteDefaults = $value;
    }

    /**
     * @return FeatureDefinitionsType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getFeatureDefinitions()
    {
        return $this->_dc($this->FeatureDefinitions, 'FeatureDefinitions');
    }

    /**
     * @param FeatureDefinitionsType|null $value
     * @return void
     */
    public function setFeatureDefinitions($value)
    {
        $this->FeatureDefinitions = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'CategoryVersion' => [],
            'UpdateTime' => [],
            'Category' => ['type' => 'CategoryFeatureType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'SiteDefaults' => ['type' => 'SiteDefaultsType', 'xmlns' => self::XMLNS],
            'FeatureDefinitions' => ['type' => 'FeatureDefinitionsType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

GetCategoryFeaturesResponseType::_register();

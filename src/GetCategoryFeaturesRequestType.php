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
 * Returns information about the features that are applicable to different categories,
 * such as listing durations, shipping term requirements, and Best Offer support.
 **/
class GetCategoryFeaturesRequestType extends AbstractRequestType
{
    const TAG = 'GetCategoryFeaturesRequest';
    const NAME = 'GetCategoryFeaturesRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'GetCategoryFeatures';

    /**
     * @var string|null
     */
    protected $CategoryID = null;

    /**
     * @var int|null
     */
    protected $LevelLimit = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $ViewAllNodes = null;

    /**
     * @var FeatureIDCodeType[]|null
     */
    protected $FeatureID = [];

    /**
     * @var bool|null "true" or "false"
     */
    protected $AllFeaturesForCategory = null;


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
    public function getLevelLimit()
    {
        return $this->_dc($this->LevelLimit, 'LevelLimit');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setLevelLimit($value)
    {
        $this->LevelLimit = self::_int($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getViewAllNodes()
    {
        return $this->_dc($this->ViewAllNodes === 'true', 'ViewAllNodes');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setViewAllNodes($value)
    {
        $this->ViewAllNodes = self::_bool($value);
    }

    /**
     * @return string[]|FeatureIDCodeType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getFeatureID($index = null)
    {
        return $this->_dc($index === null
            ? $this->FeatureID
            : (count($this->FeatureID) > $index
                ? $this->FeatureID[$index]
                : null));
    }

    /**
     * @param FeatureIDCodeType|null|string[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setFeatureID($value, $index = null)
    {
        if ($index === null) {
            $this->FeatureID = $value;
        } else {
            $this->FeatureID[$index] = [];
            
            foreach ($value as $item) {
                $this->addFeatureID($item);
            }
        }
    }

    /**
     * @param FeatureIDCodeType|null $value
     * @return void
     */
    public function addFeatureID($value)
    {
        $this->FeatureID[] = $this->_enum($value, FeatureIDCodeType::class);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getAllFeaturesForCategory()
    {
        return $this->_dc($this->AllFeaturesForCategory === 'true', 'AllFeaturesForCategory');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setAllFeaturesForCategory($value)
    {
        $this->AllFeaturesForCategory = self::_bool($value);
    }

    /**
     * @return GetCategoryFeaturesResponseType|EbatNs_ResponseError
     * @param EbatNs_Client
     **/
    function call($client)
    {
        return $client->call(self::REQUEST, $this);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'CategoryID' => [],
            'LevelLimit' => ['type' => 'int'],
            'ViewAllNodes' => ['type' => 'bool'],
            'FeatureID' => ['type' => 'FeatureIDCodeType', 'enum' => true, 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'AllFeaturesForCategory' => ['type' => 'bool']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

GetCategoryFeaturesRequestType::_register();

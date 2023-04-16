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
 * Retrieves the latest eBay category hierarchy for a given eBay site.
 * Information returned for each category includes the category name
 * and the unique ID for the category (unique within the eBay site for which
 * categories are retrieved). A category ID is a required input when you list most items.
 **/
class GetCategoriesRequestType extends AbstractRequestType
{
    const TAG = 'GetCategoriesRequest';
    const NAME = 'GetCategoriesRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'GetCategories';

    /**
     * @var string|null
     */
    protected $CategorySiteID = null;

    /**
     * @var string[]|null
     */
    protected $CategoryParent = [];

    /**
     * @var int|null
     */
    protected $LevelLimit = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $ViewAllNodes = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCategorySiteID()
    {
        return $this->_dc($this->CategorySiteID, 'CategorySiteID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setCategorySiteID($value)
    {
        $this->CategorySiteID = self::_string($value);
    }

    /**
     * @return string[]|string|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getCategoryParent($index = null)
    {
        return $this->_dc($index === null
            ? $this->CategoryParent
            : (count($this->CategoryParent) > $index
                ? $this->CategoryParent[$index]
                : null), 'CategoryParent');
    }

    /**
     * @param string|null|string[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setCategoryParent($value, $index = null)
    {
        if ($index === null) {
            $this->CategoryParent = $value;
        } else {
            $this->CategoryParent[$index] = [];
            
            foreach ($value as $item) {
                $this->addCategoryParent($item);
            }
        }
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function addCategoryParent($value)
    {
        $this->CategoryParent[] = self::_string($value);
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
     * @return GetCategoriesResponseType|EbatNs_ResponseError
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
            'CategorySiteID' => [],
            'CategoryParent' => ['cardinality' => '0..*'],
            'LevelLimit' => ['type' => 'int'],
            'ViewAllNodes' => ['type' => 'bool']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

GetCategoriesRequestType::_register();

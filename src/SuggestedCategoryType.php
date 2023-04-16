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
 * Defines a suggested category, returned
 * in response to a search for categories that contain
 * listings with certain keywords in their titles and descriptions.
 **/
class SuggestedCategoryType extends EbatNs_ComplexType
{
    const TAG = 'SuggestedCategoryType';
    const NAME = 'SuggestedCategoryType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var CategoryType|null
     */
    protected $Category = null;

    /**
     * @var int|null
     */
    protected $PercentItemFound = null;


    /**
     * @return CategoryType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCategory()
    {
        return $this->_dc($this->Category, 'Category');
    }

    /**
     * @param CategoryType|null $value
     * @return void
     */
    public function setCategory($value)
    {
        $this->Category = $value;
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPercentItemFound()
    {
        return $this->_dc($this->PercentItemFound, 'PercentItemFound');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setPercentItemFound($value)
    {
        $this->PercentItemFound = self::_int($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'Category' => ['type' => 'CategoryType', 'xmlns' => self::XMLNS],
            'PercentItemFound' => ['type' => 'int']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

SuggestedCategoryType::_register();

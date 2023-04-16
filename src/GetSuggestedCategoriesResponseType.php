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
 * The base response of a
 * GetSuggestedCategories
 * call. This response includes an array of categories with the highest number
 * of listings whose listing titles or descriptions contain the keywords
 * specified in the
 * Query
 * field of the call request.
 **/
class GetSuggestedCategoriesResponseType extends EbatNs_Response
{
    const TAG = 'GetSuggestedCategoriesResponseType';
    const NAME = 'GetSuggestedCategoriesResponseType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var SuggestedCategoryArrayType|null
     */
    protected $SuggestedCategoryArray = null;

    /**
     * @var int|null
     */
    protected $CategoryCount = null;


    /**
     * @return SuggestedCategoryArrayType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSuggestedCategoryArray()
    {
        return $this->_dc($this->SuggestedCategoryArray, 'SuggestedCategoryArray');
    }

    /**
     * @param SuggestedCategoryArrayType|null $value
     * @return void
     */
    public function setSuggestedCategoryArray($value)
    {
        $this->SuggestedCategoryArray = $value;
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCategoryCount()
    {
        return $this->_dc($this->CategoryCount, 'CategoryCount');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setCategoryCount($value)
    {
        $this->CategoryCount = self::_int($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'SuggestedCategoryArray' => ['type' => 'SuggestedCategoryArrayType', 'xmlns' => self::XMLNS],
            'CategoryCount' => ['type' => 'int']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

GetSuggestedCategoriesResponseType::_register();

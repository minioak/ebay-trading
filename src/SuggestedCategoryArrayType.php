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
 * Contains an array of categories that contain listings with
 * specified keywords in their titles or descriptions. The array
 * can contain up to 10 categories.
 **/
class SuggestedCategoryArrayType extends EbatNs_ComplexType
{
    const TAG = 'SuggestedCategoryArrayType';
    const NAME = 'SuggestedCategoryArrayType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var SuggestedCategoryType[]|null
     */
    protected $SuggestedCategory = [];


    /**
     * @return SuggestedCategoryType[]|SuggestedCategoryType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getSuggestedCategory($index = null)
    {
        return $this->_dc($index === null
            ? $this->SuggestedCategory
            : (count($this->SuggestedCategory) > $index
                ? $this->SuggestedCategory[$index]
                : null), 'SuggestedCategory');
    }

    /**
     * @param SuggestedCategoryType|null|SuggestedCategoryType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setSuggestedCategory($value, $index = null)
    {
        if ($index === null) {
            $this->SuggestedCategory = $value;
        } else {
            $this->SuggestedCategory[$index] = [];
            
            foreach ($value as $item) {
                $this->addSuggestedCategory($item);
            }
        }
    }

    /**
     * @param SuggestedCategoryType|null $value
     * @return void
     */
    public function addSuggestedCategory($value)
    {
        $this->SuggestedCategory[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['SuggestedCategory' => ['type' => 'SuggestedCategoryType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']], parent::NAME);
        self::assignAttributes([]);
    }

}

SuggestedCategoryArrayType::_register();

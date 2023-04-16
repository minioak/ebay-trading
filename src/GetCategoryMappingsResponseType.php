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
 * Returns a map of old category IDs and corresponding active category IDs defined
 * for the site to which the request was sent. Typically used to update an older item
 * definition with a new category ID prior to listing the item.
 **/
class GetCategoryMappingsResponseType extends EbatNs_Response
{
    const TAG = 'GetCategoryMappingsResponseType';
    const NAME = 'GetCategoryMappingsResponseType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var CategoryMappingType[]|null
     */
    protected $CategoryMapping = [];

    /**
     * @var string|null
     */
    protected $CategoryVersion = null;


    /**
     * @return CategoryMappingType[]|CategoryMappingType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getCategoryMapping($index = null)
    {
        return $this->_dc($index === null
            ? $this->CategoryMapping
            : (count($this->CategoryMapping) > $index
                ? $this->CategoryMapping[$index]
                : null), 'CategoryMapping');
    }

    /**
     * @param CategoryMappingType|null|CategoryMappingType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setCategoryMapping($value, $index = null)
    {
        if ($index === null) {
            $this->CategoryMapping = $value;
        } else {
            $this->CategoryMapping[$index] = [];
            
            foreach ($value as $item) {
                $this->addCategoryMapping($item);
            }
        }
    }

    /**
     * @param CategoryMappingType|null $value
     * @return void
     */
    public function addCategoryMapping($value)
    {
        $this->CategoryMapping[] = $value;
    }

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
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'CategoryMapping' => ['type' => 'CategoryMappingType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'CategoryVersion' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

GetCategoryMappingsResponseType::_register();

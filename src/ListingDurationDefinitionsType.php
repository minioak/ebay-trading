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
 * A type used by the
 * ListingDurations
 * container node that is returned in the response of
 * GetCategoryFeatures
 * call. A
 * ListingDurations
 * container is returned for each listing type supported for the eBay site, and the supported listing duration
 * times for those listing types.
 **/
class ListingDurationDefinitionsType extends EbatNs_ComplexType
{
    const TAG = 'ListingDurationDefinitionsType';
    const NAME = 'ListingDurationDefinitionsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var ListingDurationDefinitionType[]|null
     */
    protected $ListingDuration = [];


    /**
     * @return ListingDurationDefinitionType[]|ListingDurationDefinitionType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getListingDuration($index = null)
    {
        return $this->_dc($index === null
            ? $this->ListingDuration
            : (count($this->ListingDuration) > $index
                ? $this->ListingDuration[$index]
                : null), 'ListingDuration');
    }

    /**
     * @param ListingDurationDefinitionType|null|ListingDurationDefinitionType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setListingDuration($value, $index = null)
    {
        if ($index === null) {
            $this->ListingDuration = $value;
        } else {
            $this->ListingDuration[$index] = [];
            
            foreach ($value as $item) {
                $this->addListingDuration($item);
            }
        }
    }

    /**
     * @param ListingDurationDefinitionType|null $value
     * @return void
     */
    public function addListingDuration($value)
    {
        $this->ListingDuration[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['ListingDuration' => ['type' => 'ListingDurationDefinitionType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']], parent::NAME);
        self::assignAttributes(['Version' => ['type' => 'int']]);
    }

}

ListingDurationDefinitionsType::_register();

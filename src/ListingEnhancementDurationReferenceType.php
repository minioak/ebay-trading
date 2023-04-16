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
 * <span class="tablenote">
 * Note:
 * This type is no longer applicable, as the Featured Gallery listing feature is being deprecated for all
 * sites. If a seller attempts to add Featured Gallery as a listing enhancement, it is allowed, but a warning will
 * be returned announcing the deprecation of the feature. This feature was wired off in September 2019.
 * </span>
 * 
 * Type used by the
 * GalleryFeaturedDurations
 * container that is returned at the
 * SiteDefaults
 * and
 * Category
 * level in a
 * GetCategoryFeatures
 * response.
 * GalleryFeaturedDurations
 * container consists of the supported time durations that a picture gallery can be featured
 **/
class ListingEnhancementDurationReferenceType extends EbatNs_ComplexType
{
    const TAG = 'ListingEnhancementDurationReferenceType';
    const NAME = 'ListingEnhancementDurationReferenceType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string[]|null
     */
    protected $Duration = [];


    /**
     * @return string[]|string|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getDuration($index = null)
    {
        return $this->_dc($index === null
            ? $this->Duration
            : (count($this->Duration) > $index
                ? $this->Duration[$index]
                : null), 'Duration');
    }

    /**
     * @param string|null|string[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setDuration($value, $index = null)
    {
        if ($index === null) {
            $this->Duration = $value;
        } else {
            $this->Duration[$index] = [];
            
            foreach ($value as $item) {
                $this->addDuration($item);
            }
        }
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function addDuration($value)
    {
        $this->Duration[] = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['Duration' => ['cardinality' => '0..*']], parent::NAME);
        self::assignAttributes([]);
    }

}

ListingEnhancementDurationReferenceType::_register();

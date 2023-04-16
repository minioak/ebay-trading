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
 * This type is used to specify the additional listing durations that are available to sellers who have eBay Store
 * subscriptions. The
 * StoreOwnerExtendedListingDurations
 * container is only returned under the
 * SiteDefaults
 * node if the eBay marketplace supports additional listing durations for eBay Store owners, and this container is
 * only returned under a
 * Category
 * node if this eBay category supports additional listing durations for eBay Store owners (other than the durations
 * that are already supported for the category).
 **/
class StoreOwnerExtendedListingDurationsType extends EbatNs_ComplexType
{
    const TAG = 'StoreOwnerExtendedListingDurationsType';
    const NAME = 'StoreOwnerExtendedListingDurationsType';
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

StoreOwnerExtendedListingDurationsType::_register();

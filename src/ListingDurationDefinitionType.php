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
 * Type used by the
 * ListingDurations
 * container that is returned for each listing type supported for the eBay site.
 * ListingDurations
 * container shows the supported listing duration times for each listing type.
 **/
class ListingDurationDefinitionType extends EbatNs_ComplexType
{
    const TAG = 'ListingDurationDefinitionType';
    const NAME = 'ListingDurationDefinitionType';
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
        self::assignAttributes(['durationSetID' => ['type' => 'int']]);
    }

}

ListingDurationDefinitionType::_register();

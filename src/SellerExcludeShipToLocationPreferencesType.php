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
 * SellerExcludeShipToLocationPreferences
 * container which is returned in the
 * GetUserPreferences
 * response to indicate which geographical regions and/or individual countries the seller has added as excluded
 * ship-to locations.
 **/
class SellerExcludeShipToLocationPreferencesType extends EbatNs_ComplexType
{
    const TAG = 'SellerExcludeShipToLocationPreferencesType';
    const NAME = 'SellerExcludeShipToLocationPreferencesType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string[]|null
     */
    protected $ExcludeShipToLocation = [];


    /**
     * @return string[]|string|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getExcludeShipToLocation($index = null)
    {
        return $this->_dc($index === null
            ? $this->ExcludeShipToLocation
            : (count($this->ExcludeShipToLocation) > $index
                ? $this->ExcludeShipToLocation[$index]
                : null), 'ExcludeShipToLocation');
    }

    /**
     * @param string|null|string[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setExcludeShipToLocation($value, $index = null)
    {
        if ($index === null) {
            $this->ExcludeShipToLocation = $value;
        } else {
            $this->ExcludeShipToLocation[$index] = [];
            
            foreach ($value as $item) {
                $this->addExcludeShipToLocation($item);
            }
        }
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function addExcludeShipToLocation($value)
    {
        $this->ExcludeShipToLocation[] = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['ExcludeShipToLocation' => ['cardinality' => '0..*']], parent::NAME);
        self::assignAttributes([]);
    }

}

SellerExcludeShipToLocationPreferencesType::_register();

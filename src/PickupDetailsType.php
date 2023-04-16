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
 * This type defines the <strong>PickupDetails</strong> container, which contains an array of
 * <strong>PickupOptions</strong> containers. Each <strong>PickupOptions</strong> container consists of the pickup
 * method and its priority.
 * 
 * <span class="tablenote">
 * <strong>Note:</strong> At this time, the In-Store Pickup and Click and Collect features are generally only
 * available to large retail merchants, and can only be applied to multi-quantity, fixed-price listings. In-Store
 * Pickup is only applicable to the US site, and Click and Collect is only applicable to the UK, Germany, and
 * Australia sites.
 * </span>
 **/
class PickupDetailsType extends EbatNs_ComplexType
{
    const TAG = 'PickupDetailsType';
    const NAME = 'PickupDetailsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var PickupOptionsType[]|null
     */
    protected $PickupOptions = [];


    /**
     * @return PickupOptionsType[]|PickupOptionsType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getPickupOptions($index = null)
    {
        return $this->_dc($index === null
            ? $this->PickupOptions
            : (count($this->PickupOptions) > $index
                ? $this->PickupOptions[$index]
                : null), 'PickupOptions');
    }

    /**
     * @param PickupOptionsType|null|PickupOptionsType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setPickupOptions($value, $index = null)
    {
        if ($index === null) {
            $this->PickupOptions = $value;
        } else {
            $this->PickupOptions[$index] = [];
            
            foreach ($value as $item) {
                $this->addPickupOptions($item);
            }
        }
    }

    /**
     * @param PickupOptionsType|null $value
     * @return void
     */
    public function addPickupOptions($value)
    {
        $this->PickupOptions[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['PickupOptions' => ['type' => 'PickupOptionsType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']], parent::NAME);
        self::assignAttributes([]);
    }

}

PickupDetailsType::_register();

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
 * Type defining the <strong>PickupOptions</strong> container, which consists of a pickup method and the priority of
 * the pickup method.
 * 
 * <span class="tablenote">
 * <strong>Note:</strong> At this time, the In-Store Pickup and Click and Collect features are generally only
 * available to large retail merchants in US, and can only be applied to multi-quantity, fixed-price listings.
 * </span>
 **/
class PickupOptionsType extends EbatNs_ComplexType
{
    const TAG = 'PickupOptionsType';
    const NAME = 'PickupOptionsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $PickupMethod = null;

    /**
     * @var int|null
     */
    protected $PickupPriority = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPickupMethod()
    {
        return $this->_dc($this->PickupMethod, 'PickupMethod');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setPickupMethod($value)
    {
        $this->PickupMethod = self::_string($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPickupPriority()
    {
        return $this->_dc($this->PickupPriority, 'PickupPriority');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setPickupPriority($value)
    {
        $this->PickupPriority = self::_int($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'PickupMethod' => [],
            'PickupPriority' => ['type' => 'int']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

PickupOptionsType::_register();

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
 * Simple type defining all possible local pickup methods for buyers. A <strong>PickupMethodCodeType</strong> value
 * is always returned under the <strong>PickupOptions</strong> and <strong>PickupMethodSelected</strong> containers.
 **/
class PickupMethodCodeType extends EbatNs_EnumType
{
    const TAG = 'PickupMethodCodeType';
    const NAME = 'PickupMethodCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This value indicates that the buyer will pick up the In-Store Pickup item at the merchant's physical store.
     * 
     * <span class="tablenote">
     * <strong>Note:</strong> A merchant must be eligible for the In-Store Pickup feature to list an item that is
     * eligible for In-Store Pickup. At this time, the In-Store Pickup feature is generally only available to large
     * retail merchants in US, and can only be applied to multi-quantity, fixed-price listings.
     * </span>
     **/
    const CodeType_InStorePickup = 'InStorePickup';

    /**
     * This value indicates that the buyer will pick up the "Click and Collect" item at the merchant's physical store.
     * 
     * <span class="tablenote">
     * <strong>Note:</strong> A merchant must be eligible for the "Click and Collect" feature to list an item that
     * is eligible for "Click and Collect". At this time, the "Click and Collect" feature is only available to large
     * merchants on the eBay UK (site ID - 3), eBay Australia (Site ID - 15), and eBay Germany (Site ID - 77) sites.
     * sites.
     **/
    const CodeType_PickUpDropOff = 'PickUpDropOff';

    /**
     * Reserved for internal or future use.
     **/
    const CodeType_CustomCode = 'CustomCode';
    
    /**
     * @var string|null
     */
    protected $_value = null;


    /**
     * @param string|null $value
     */
    public function __construct($value = null)
    {
        $this->setTypeValue($value);
    }

    /**
     * @return PickupMethodCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param PickupMethodCodeType|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $const = 'self::CodeType_' . $value;
        $this->_value = $value !== null && defined($const) ? constant($const) : null;
    }

    /**
     * @return bool
     */
    public function isInStorePickup()
    {
        return $this->_value === self::CodeType_InStorePickup;
    }

    /**
     * @return bool
     */
    public function isPickUpDropOff()
    {
        return $this->_value === self::CodeType_PickUpDropOff;
    }

    /**
     * @return bool
     */
    public function isCustomCode()
    {
        return $this->_value === self::CodeType_CustomCode;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([], parent::NAME);
        self::assignAttributes([]);
    }

}

PickupMethodCodeType::_register();

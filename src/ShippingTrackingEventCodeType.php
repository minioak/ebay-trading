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
 * This type is no longer applicable as it only pertained to eBay Now orders, and eBay Now has been discontinued.
 **/
class ShippingTrackingEventCodeType extends EbatNs_EnumType
{
    const TAG = 'ShippingTrackingEventCodeType';
    const NAME = 'ShippingTrackingEventCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This value indicates that the eBay Now order is ready for pickup by the eBay Now valet at the store.
     **/
    const CodeType_ValetReadyForPickup = 'ValetReadyForPickup';

    /**
     * This value indicates that the eBay Now order was picked up by the eBay Now valet.
     **/
    const CodeType_ValetPickedUpOrder = 'ValetPickedUpOrder';

    /**
     * This value is reserved for internal or future use.
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
     * @return ShippingTrackingEventCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param ShippingTrackingEventCodeType|null $value
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
    public function isValetReadyForPickup()
    {
        return $this->_value === self::CodeType_ValetReadyForPickup;
    }

    /**
     * @return bool
     */
    public function isValetPickedUpOrder()
    {
        return $this->_value === self::CodeType_ValetPickedUpOrder;
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

ShippingTrackingEventCodeType::_register();

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
 * This type details the shipping carrier and shipment tracking number associated with a
 * package shipment. It also contains information about the line items shipped through the Global Shipping
 * program.
 **/
class ShipmentTrackingDetailsType extends EbatNs_ComplexType
{
    const TAG = 'ShipmentTrackingDetailsType';
    const NAME = 'ShipmentTrackingDetailsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $ShippingCarrierUsed = null;

    /**
     * @var string|null
     */
    protected $ShipmentTrackingNumber = null;

    /**
     * @var ShipmentLineItemType|null
     */
    protected $ShipmentLineItem = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShippingCarrierUsed()
    {
        return $this->_dc($this->ShippingCarrierUsed, 'ShippingCarrierUsed');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setShippingCarrierUsed($value)
    {
        $this->ShippingCarrierUsed = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShipmentTrackingNumber()
    {
        return $this->_dc($this->ShipmentTrackingNumber, 'ShipmentTrackingNumber');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setShipmentTrackingNumber($value)
    {
        $this->ShipmentTrackingNumber = self::_string($value);
    }

    /**
     * @return ShipmentLineItemType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShipmentLineItem()
    {
        return $this->_dc($this->ShipmentLineItem, 'ShipmentLineItem');
    }

    /**
     * @param ShipmentLineItemType|null $value
     * @return void
     */
    public function setShipmentLineItem($value)
    {
        $this->ShipmentLineItem = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'ShippingCarrierUsed' => [],
            'ShipmentTrackingNumber' => [],
            'ShipmentLineItem' => ['type' => 'ShipmentLineItemType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

ShipmentTrackingDetailsType::_register();

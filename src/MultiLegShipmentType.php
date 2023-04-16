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
 * This type provides information about the shipping service, cost, address, and delivery estimates for the domestic
 * leg of international shipments. This type is only applicable for international shipments using either the Global
 * Shipping Program or eBay International Shipping.
 **/
class MultiLegShipmentType extends EbatNs_ComplexType
{
    const TAG = 'MultiLegShipmentType';
    const NAME = 'MultiLegShipmentType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var MultiLegShippingServiceType|null
     */
    protected $ShippingServiceDetails = null;

    /**
     * @var AddressType|null
     */
    protected $ShipToAddress = null;

    /**
     * @var int|null
     */
    protected $ShippingTimeMin = null;

    /**
     * @var int|null
     */
    protected $ShippingTimeMax = null;


    /**
     * @return MultiLegShippingServiceType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShippingServiceDetails()
    {
        return $this->_dc($this->ShippingServiceDetails, 'ShippingServiceDetails');
    }

    /**
     * @param MultiLegShippingServiceType|null $value
     * @return void
     */
    public function setShippingServiceDetails($value)
    {
        $this->ShippingServiceDetails = $value;
    }

    /**
     * @return AddressType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShipToAddress()
    {
        return $this->_dc($this->ShipToAddress, 'ShipToAddress');
    }

    /**
     * @param AddressType|null $value
     * @return void
     */
    public function setShipToAddress($value)
    {
        $this->ShipToAddress = $value;
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShippingTimeMin()
    {
        return $this->_dc($this->ShippingTimeMin, 'ShippingTimeMin');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setShippingTimeMin($value)
    {
        $this->ShippingTimeMin = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShippingTimeMax()
    {
        return $this->_dc($this->ShippingTimeMax, 'ShippingTimeMax');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setShippingTimeMax($value)
    {
        $this->ShippingTimeMax = self::_int($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'ShippingServiceDetails' => ['type' => 'MultiLegShippingServiceType', 'xmlns' => self::XMLNS],
            'ShipToAddress' => ['type' => 'AddressType', 'xmlns' => self::XMLNS],
            'ShippingTimeMin' => ['type' => 'int'],
            'ShippingTimeMax' => ['type' => 'int']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

MultiLegShipmentType::_register();

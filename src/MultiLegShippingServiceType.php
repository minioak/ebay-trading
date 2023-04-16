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
 * This type specifies the shipping service and cost of the domestic leg of a Global Shipping Program shipment or an
 * eBay International Shipping shipment.
 **/
class MultiLegShippingServiceType extends EbatNs_ComplexType
{
    const TAG = 'MultiLegShippingServiceType';
    const NAME = 'MultiLegShippingServiceType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $ShippingService = null;

    /**
     * @var AmountType|null
     */
    protected $TotalShippingCost = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShippingService()
    {
        return $this->_dc($this->ShippingService, 'ShippingService');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setShippingService($value)
    {
        $this->ShippingService = self::_string($value);
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTotalShippingCost()
    {
        return $this->_dc($this->TotalShippingCost, 'TotalShippingCost');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setTotalShippingCost($value)
    {
        $this->TotalShippingCost = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'ShippingService' => [],
            'TotalShippingCost' => ['type' => 'AmountType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

MultiLegShippingServiceType::_register();

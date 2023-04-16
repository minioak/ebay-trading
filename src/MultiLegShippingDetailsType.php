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
 * This type provides information about the domestic leg of a Global Shipping Program shipment or an eBay
 * International Shipping shipment.
 * 
 * <span class="tablenote">
 * <strong>Note:</strong> The <strong>LogisticsProviderShipmentToBuyer</strong> field is reserved for the
 * exclusive use of the international shipping provider.
 * </span>
 **/
class MultiLegShippingDetailsType extends EbatNs_ComplexType
{
    const TAG = 'MultiLegShippingDetailsType';
    const NAME = 'MultiLegShippingDetailsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var MultiLegShipmentType|null
     */
    protected $SellerShipmentToLogisticsProvider = null;

    /**
     * @var MultiLegShipmentType|null
     */
    protected $LogisticsProviderShipmentToBuyer = null;


    /**
     * @return MultiLegShipmentType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSellerShipmentToLogisticsProvider()
    {
        return $this->_dc($this->SellerShipmentToLogisticsProvider, 'SellerShipmentToLogisticsProvider');
    }

    /**
     * @param MultiLegShipmentType|null $value
     * @return void
     */
    public function setSellerShipmentToLogisticsProvider($value)
    {
        $this->SellerShipmentToLogisticsProvider = $value;
    }

    /**
     * @return MultiLegShipmentType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getLogisticsProviderShipmentToBuyer()
    {
        return $this->_dc($this->LogisticsProviderShipmentToBuyer, 'LogisticsProviderShipmentToBuyer');
    }

    /**
     * @param MultiLegShipmentType|null $value
     * @return void
     */
    public function setLogisticsProviderShipmentToBuyer($value)
    {
        $this->LogisticsProviderShipmentToBuyer = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'SellerShipmentToLogisticsProvider' => ['type' => 'MultiLegShipmentType', 'xmlns' => self::XMLNS],
            'LogisticsProviderShipmentToBuyer' => ['type' => 'MultiLegShipmentType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

MultiLegShippingDetailsType::_register();

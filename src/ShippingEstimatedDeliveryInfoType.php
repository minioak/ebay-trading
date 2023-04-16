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
 * This type is not currently in use.
 **/
class ShippingEstimatedDeliveryInfoType extends EbatNs_ComplexType
{
    const TAG = 'ShippingEstimatedDeliveryInfoType';
    const NAME = 'ShippingEstimatedDeliveryInfoType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $OriginalDeliveryEstimatedTimeMin = null;

    /**
     * @var string|null
     */
    protected $OriginalDeliveryEstimatedTimeMax = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getOriginalDeliveryEstimatedTimeMin()
    {
        return $this->_dc($this->OriginalDeliveryEstimatedTimeMin, 'OriginalDeliveryEstimatedTimeMin');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setOriginalDeliveryEstimatedTimeMin($value)
    {
        $this->OriginalDeliveryEstimatedTimeMin = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getOriginalDeliveryEstimatedTimeMax()
    {
        return $this->_dc($this->OriginalDeliveryEstimatedTimeMax, 'OriginalDeliveryEstimatedTimeMax');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setOriginalDeliveryEstimatedTimeMax($value)
    {
        $this->OriginalDeliveryEstimatedTimeMax = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'OriginalDeliveryEstimatedTimeMin' => [],
            'OriginalDeliveryEstimatedTimeMax' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

ShippingEstimatedDeliveryInfoType::_register();

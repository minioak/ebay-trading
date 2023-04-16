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
 * This type is reserved for internal or future use.
 **/
class ShippingOverrideType extends EbatNs_ComplexType
{
    const TAG = 'ShippingOverrideType';
    const NAME = 'ShippingOverrideType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var ShippingServiceCostOverrideListType|null
     */
    protected $ShippingServiceCostOverrideList = null;

    /**
     * @var int|null
     */
    protected $DispatchTimeMaxOverride = null;


    /**
     * @return ShippingServiceCostOverrideListType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShippingServiceCostOverrideList()
    {
        return $this->_dc($this->ShippingServiceCostOverrideList, 'ShippingServiceCostOverrideList');
    }

    /**
     * @param ShippingServiceCostOverrideListType|null $value
     * @return void
     */
    public function setShippingServiceCostOverrideList($value)
    {
        $this->ShippingServiceCostOverrideList = $value;
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDispatchTimeMaxOverride()
    {
        return $this->_dc($this->DispatchTimeMaxOverride, 'DispatchTimeMaxOverride');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setDispatchTimeMaxOverride($value)
    {
        $this->DispatchTimeMaxOverride = self::_int($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'ShippingServiceCostOverrideList' => ['type' => 'ShippingServiceCostOverrideListType', 'xmlns' => self::XMLNS],
            'DispatchTimeMaxOverride' => ['type' => 'int']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

ShippingOverrideType::_register();

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
 * Type defining the <strong>ShippingServiceCostOverride</strong> container, which is used to override the flat
 * shipping costs for a domestic and/or international shipping service option that is defined in the
 * <strong>domesticShippingPolicyInfoService</strong> and <strong>intlShippingPolicyInfoService</strong> containers
 * of the Business Policies shipping profile. Shipping costs include the cost to ship one item, the cost to ship
 * each additional identical item, and any shipping surcharges applicable to domestic shipping services. A
 * <strong>ShippingServiceCostOverride</strong> container is required for each domestic and/or international
 * shipping service option whose costs the seller wishes to override.
 **/
class ShippingServiceCostOverrideType extends EbatNs_ComplexType
{
    const TAG = 'ShippingServiceCostOverrideType';
    const NAME = 'ShippingServiceCostOverrideType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var int|null
     */
    protected $ShippingServicePriority = null;

    /**
     * @var ShippingServiceType|null
     */
    protected $ShippingServiceType = null;

    /**
     * @var AmountType|null
     */
    protected $ShippingServiceCost = null;

    /**
     * @var AmountType|null
     */
    protected $ShippingServiceAdditionalCost = null;


    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShippingServicePriority()
    {
        return $this->_dc($this->ShippingServicePriority, 'ShippingServicePriority');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setShippingServicePriority($value)
    {
        $this->ShippingServicePriority = self::_int($value);
    }

    /**
     * @return ShippingServiceType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShippingServiceType()
    {
        return $this->_dc($this->ShippingServiceType);
    }

    /**
     * @param ShippingServiceType|null $value
     * @return void
     */
    public function setShippingServiceType($value)
    {
        $this->ShippingServiceType = $this->_enum($value, ShippingServiceType::class);
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShippingServiceCost()
    {
        return $this->_dc($this->ShippingServiceCost, 'ShippingServiceCost');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setShippingServiceCost($value)
    {
        $this->ShippingServiceCost = $value;
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShippingServiceAdditionalCost()
    {
        return $this->_dc($this->ShippingServiceAdditionalCost, 'ShippingServiceAdditionalCost');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setShippingServiceAdditionalCost($value)
    {
        $this->ShippingServiceAdditionalCost = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'ShippingServicePriority' => ['type' => 'int'],
            'ShippingServiceType' => ['type' => 'ShippingServiceType', 'enum' => true, 'xmlns' => self::XMLNS],
            'ShippingServiceCost' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'ShippingServiceAdditionalCost' => ['type' => 'AmountType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

ShippingServiceCostOverrideType::_register();

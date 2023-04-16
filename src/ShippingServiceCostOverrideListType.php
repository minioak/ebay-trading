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
 * Type defining the
 * ShippingServiceCostOverrideList
 * container, which is used when the seller wants to override flat-rate shipping costs for one or more domestic
 * and/or international shipping service options defined in the Business Policies shipping profile referenced in the
 * SellerProfiles.SellerShippingProfile.ShippingProfileID
 * field of an Add/Revise/Relist call.
 * 
 * Shipping service cost overrides are a listing-level concept, and the shipping costs specified through each
 * ShippingServiceCostOverrideList.ShippingServiceCostOverride
 * container will not change the shipping costs defined for the same shipping services in the Business Policies
 * shipping profile.
 **/
class ShippingServiceCostOverrideListType extends EbatNs_ComplexType
{
    const TAG = 'ShippingServiceCostOverrideListType';
    const NAME = 'ShippingServiceCostOverrideListType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var ShippingServiceCostOverrideType[]|null
     */
    protected $ShippingServiceCostOverride = [];


    /**
     * @return ShippingServiceCostOverrideType[]|ShippingServiceCostOverrideType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getShippingServiceCostOverride($index = null)
    {
        return $this->_dc($index === null
            ? $this->ShippingServiceCostOverride
            : (count($this->ShippingServiceCostOverride) > $index
                ? $this->ShippingServiceCostOverride[$index]
                : null), 'ShippingServiceCostOverride');
    }

    /**
     * @param ShippingServiceCostOverrideType|null|ShippingServiceCostOverrideType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setShippingServiceCostOverride($value, $index = null)
    {
        if ($index === null) {
            $this->ShippingServiceCostOverride = $value;
        } else {
            $this->ShippingServiceCostOverride[$index] = [];
            
            foreach ($value as $item) {
                $this->addShippingServiceCostOverride($item);
            }
        }
    }

    /**
     * @param ShippingServiceCostOverrideType|null $value
     * @return void
     */
    public function addShippingServiceCostOverride($value)
    {
        $this->ShippingServiceCostOverride[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['ShippingServiceCostOverride' => ['type' => 'ShippingServiceCostOverrideType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']], parent::NAME);
        self::assignAttributes([]);
    }

}

ShippingServiceCostOverrideListType::_register();

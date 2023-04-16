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
 * Complex type defining the
 * PickupInStoreDetails
 * container, that is used in Add/Revise/Relist calls to enable the listing for In-Store Pickup or Click and
 * Collect.
 * 
 * <span class="tablenote">
 * <strong>Note:</strong> At this time, In-Store Pickup as a fulfillment method is only available to a limited
 * number of large retail merchants in the US, Canada, UK, Germany, and Australia marketplaces, and can only be
 * applied to multiple-quantity, fixed-price listings. The Click and Collect feature is only available to large
 * merchants on the UK, Australia, and Germany marketplaces.
 * </span>
 **/
class PickupInStoreDetailsType extends EbatNs_ComplexType
{
    const TAG = 'PickupInStoreDetailsType';
    const NAME = 'PickupInStoreDetailsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var bool|null "true" or "false"
     */
    protected $EligibleForPickupInStore = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $EligibleForPickupDropOff = null;


    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEligibleForPickupInStore()
    {
        return $this->_dc($this->EligibleForPickupInStore === 'true', 'EligibleForPickupInStore');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setEligibleForPickupInStore($value)
    {
        $this->EligibleForPickupInStore = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEligibleForPickupDropOff()
    {
        return $this->_dc($this->EligibleForPickupDropOff === 'true', 'EligibleForPickupDropOff');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setEligibleForPickupDropOff($value)
    {
        $this->EligibleForPickupDropOff = self::_bool($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'EligibleForPickupInStore' => ['type' => 'bool'],
            'EligibleForPickupDropOff' => ['type' => 'bool']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

PickupInStoreDetailsType::_register();

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
 * This is the base response type of the
 * GetItemShipping
 * call. This call takes an
 * ItemID
 * value for an item that has yet to be shipped, and then returns estimated shipping costs for every shipping
 * service that the seller has offered with the listing. This call will also return the
 * PickUpInStoreDetails.EligibleForPickupInStore
 * flag if the item is available for buyer pick-up through the In-Store Pickup feature.
 **/
class GetItemShippingResponseType extends EbatNs_Response
{
    const TAG = 'GetItemShippingResponseType';
    const NAME = 'GetItemShippingResponseType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var ShippingDetailsType|null
     */
    protected $ShippingDetails = null;

    /**
     * @var PickupInStoreDetailsType|null
     */
    protected $PickUpInStoreDetails = null;


    /**
     * @return ShippingDetailsType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShippingDetails()
    {
        return $this->_dc($this->ShippingDetails, 'ShippingDetails');
    }

    /**
     * @param ShippingDetailsType|null $value
     * @return void
     */
    public function setShippingDetails($value)
    {
        $this->ShippingDetails = $value;
    }

    /**
     * @return PickupInStoreDetailsType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPickUpInStoreDetails()
    {
        return $this->_dc($this->PickUpInStoreDetails, 'PickUpInStoreDetails');
    }

    /**
     * @param PickupInStoreDetailsType|null $value
     * @return void
     */
    public function setPickUpInStoreDetails($value)
    {
        $this->PickUpInStoreDetails = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'ShippingDetails' => ['type' => 'ShippingDetailsType', 'xmlns' => self::XMLNS],
            'PickUpInStoreDetails' => ['type' => 'PickupInStoreDetailsType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

GetItemShippingResponseType::_register();

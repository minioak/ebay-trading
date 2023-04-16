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
 * Indicates category support for listing of Local Market items by sellers
 * subscribed to Local Market for Premium Vehicles.
 * Each of the subscriptions will have following options, which will define
 * "National" vs "Local" ad format listing.
 * "LocalOptional" : This will allow national and local listing.
 * "LocalOnly" : Seller can have Local listings only.
 * "NationalOnly" : Seller can not opt into local only exposure. It has to be
 * national listing.
 **/
class PremiumSubscriptionDefinitionType extends EbatNs_ComplexType
{
    const TAG = 'PremiumSubscriptionDefinitionType';
    const NAME = 'PremiumSubscriptionDefinitionType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([], parent::NAME);
        self::assignAttributes([]);
    }

}

PremiumSubscriptionDefinitionType::_register();

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
 * The
 * PickupDropOffEnabled
 * field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites
 * support the "Click and Collect" feature. This field will be returned as long as 'PickupDropOffEnabled' is
 * included as a
 * FeatureID
 * value in the call request or no
 * FeatureID
 * values are passed into the call request.
 * 
 * The 'Click and Collect' feature is only available to large merchants on the eBay UK (site ID - 3), eBay
 * Australia (Site ID - 15), and eBay Germany (Site ID - 77) sites.
 * 
 * To verify if a specific category supports the the "Click and Collect" feature, pass in a
 * CategoryID
 * value in the request, and then look for a 'true' value in the
 * PickupDropOffEnabled
 * field of the corresponding Category node (match up the
 * CategoryID
 * values if more than one Category IDs were passed in the request).
 * 
 * 
 * <span class="tablenote">
 * Note:
 * For Click and Collect eligible sellers, the Click and Collect feature can only be enabled at the account level,
 * and then each of the seller's listings within an Click and Collect enabled category will be automatically
 * evaluated for Click and Collect eligibility.
 * </span>
 **/
class PickupDropOffEnabledDefinitionType extends EbatNs_ComplexType
{
    const TAG = 'PickupDropOffEnabledDefinitionType';
    const NAME = 'PickupDropOffEnabledDefinitionType';
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

PickupDropOffEnabledDefinitionType::_register();

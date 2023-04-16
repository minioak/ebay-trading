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
 * EpidSupported
 * field that is returned under the
 * FeatureDefinitions
 * container of the
 * GetCategoryFeatures
 * response (as long as
 * EpidSupported
 * is included as a
 * FeatureID
 * value in the call request, or no
 * FeatureID
 * values are passed into the call request). The
 * EpidSupported
 * field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites
 * support specifying parts compatibility through an eBay product ID (ePID).
 * 
 * At this time, this feature is only supported for motorcycle and scooter listings on the Germany and UK sites.
 * 
 * To verify if a specific category supports specifying parts compatibility through an ePID, pass in a
 * EpidSupported
 * value in the request, and then look for a <code>true</code> value in the
 * EpidSupported
 * field of the corresponding
 * Category
 * node (match up the
 * CategoryID
 * values if more than one category ID was passed in the request).
 **/
class EpidSupportedDefinitionType extends EbatNs_ComplexType
{
    const TAG = 'EpidSupportedDefinitionType';
    const NAME = 'EpidSupportedDefinitionType';
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

EpidSupportedDefinitionType::_register();

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
 * ClassifiedAdAutoDeclineEnabled
 * field that is
 * returned under the
 * FeatureDefinitions
 * container of the
 * 
 * GetCategoryFeatures
 * response (as long as
 * 'ClassifiedAdAutoDeclineEnabled' or 'ClassifiedAdAutoAcceptEnabled' is included as a
 * FeatureID
 * value in
 * the call request or no
 * FeatureID
 * values are passed into the call
 * request). This field is returned as an
 * empty element (a boolean value is not returned) if one or more eBay API-enabled sites
 * support the Classified Ad Auto Decline feature.
 * 
 * To verify if a specific eBay site supports the Classified Ad Auto Decline feature (for most
 * categories), look for a 'true' value in the
 * 
 * SiteDefaults.ClassifiedAdAutoDeclineEnabled
 * field.
 * 
 * To verify if a specific category on a specific eBay site supports the Classified Ad Auto Decline feature,
 * pass in a
 * CategoryID
 * value in the request, and then
 * look for a 'true' value in the
 * ClassifiedAdAutoDeclineEnabled
 * field
 * of the corresponding Category node (match up the
 * CategoryID
 * values
 * if more than one Category IDs were passed in the request).
 **/
class ClassifiedAdAutoDeclineEnabledDefinitionType extends EbatNs_ComplexType
{
    const TAG = 'ClassifiedAdAutoDeclineEnabledDefinitionType';
    const NAME = 'ClassifiedAdAutoDeclineEnabledDefinitionType';
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

ClassifiedAdAutoDeclineEnabledDefinitionType::_register();

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
 * AdditionalCompatibilityEnabled
 * field that is
 * returned under the
 * FeatureDefinitions
 * container of the
 * 
 * GetCategoryFeatures
 * response (as long as
 * <code>AdditionalCompatibilityEnabled</code> is included as a
 * FeatureID
 * value in
 * the call request or no
 * FeatureID
 * values are passed into the call
 * request). This field is returned as an
 * empty element (a boolean value is not returned) if one or more eBay API-enabled sites
 * support the Boats Parts Compatibility feature.
 * 
 * To verify if a specific eBay site supports Boats Parts Compatibility (for most
 * categories), look for a <code>true</code> value in the
 * 
 * SiteDefaults.AdditionalCompatibilityEnabled
 * field.
 * 
 * To verify if a specific category on a specific eBay site supports Boats Parts
 * Compatibility, pass in a
 * CategoryID
 * value in the request, and then
 * look for a <code>true</code> value in the
 * AdditionalCompatibilityEnabled
 * field
 * of the corresponding Category node (match up the
 * CategoryID
 * values
 * if more than one Category IDs were passed in the request).
 **/
class AdditionalCompatibilityEnabledDefinitionType extends EbatNs_ComplexType
{
    const TAG = 'AdditionalCompatibilityEnabledDefinitionType';
    const NAME = 'AdditionalCompatibilityEnabledDefinitionType';
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

AdditionalCompatibilityEnabledDefinitionType::_register();

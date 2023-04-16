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
 * KTypeSupported
 * field that is returned under the
 * FeatureDefinitions
 * container of the
 * GetCategoryFeatures
 * response (as long as
 * KTypeSupported
 * is included as a
 * FeatureID
 * value in the call request, or no
 * FeatureID
 * values are passed into the call request). The
 * KTypeSupported
 * field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites
 * support specifying parts compatibility through a K Type vehicle number.
 * 
 * At this time, this feature is only supported for car and truck listings on the Germany site.
 * 
 * To verify if a specific category supports specifying parts compatibility through a K Type vehicle number,
 * pass in a
 * KTypeSupported
 * value in the request, and then look for a <code>true</code> value in the
 * KTypeSupported
 * field of the corresponding
 * Category
 * node (match up the
 * CategoryID
 * values if more than one category ID was passed in the request).
 **/
class KTypeSupportedDefinitionType extends EbatNs_ComplexType
{
    const TAG = 'KTypeSupportedDefinitionType';
    const NAME = 'KTypeSupportedDefinitionType';
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

KTypeSupportedDefinitionType::_register();

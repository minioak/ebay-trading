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
 * FreeGalleryPlusEnabled
 * field that is returned under the
 * FeatureDefinitions
 * container of the
 * GetCategoryFeatures
 * response (as long as <code>FreeGalleryPlusEnabled</code> is included as a
 * FeatureID
 * value in the call request, or no
 * FeatureID
 * values are passed into the call request). This field is returned as an empty element (a boolean value is not
 * returned) if one or more eBay API-enabled sites support the Free Gallery Plus feature for one or multiple
 * categories.
 **/
class FreeGalleryPlusEnabledDefinitionType extends EbatNs_ComplexType
{
    const TAG = 'FreeGalleryPlusEnabledDefinitionType';
    const NAME = 'FreeGalleryPlusEnabledDefinitionType';
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

FreeGalleryPlusEnabledDefinitionType::_register();

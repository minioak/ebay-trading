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
 * DigitalGoodDeliveryEnabled
 * field that is returned under the
 * FeatureDefinitions
 * container of the
 * GetCategoryFeatures
 * response (as long as
 * DigitalGoodDeliveryEnabled
 * is included as a
 * FeatureID
 * value in the call request or no
 * FeatureID
 * values are passed into the call request). The
 * DigitalGoodDeliveryEnabled
 * field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites
 * support digital gift card listings.
 * 
 * To verify if a specific eBay site supports digital gift card listings (for most categories), look for a
 * <code>true</code> value in the
 * SiteDefaults.DigitalGoodDeliveryEnabled
 * field.
 * 
 * To verify if a specific category on a specific eBay site supports digital gift card listings, pass in a
 * DigitalGoodDeliveryEnabled
 * value in the request, and then look for a <code>true</code> value in the
 * DigitalGoodDeliveryEnabled
 * field of the corresponding
 * Category
 * node (match up the
 * CategoryID
 * values if more than one category ID was passed in the request).
 **/
class DigitalGoodDeliveryEnabledDefinitionType extends EbatNs_ComplexType
{
    const TAG = 'DigitalGoodDeliveryEnabledDefinitionType';
    const NAME = 'DigitalGoodDeliveryEnabledDefinitionType';
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

DigitalGoodDeliveryEnabledDefinitionType::_register();

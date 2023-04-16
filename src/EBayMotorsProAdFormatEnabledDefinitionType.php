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
 * eBayMotorsProAdFormatEnabled
 * field that is returned under the
 * FeatureDefinitions
 * container if <code>eBayMotorsProAdFormatEnabled</code> is used as a
 * FeatureID
 * value in the request, or if no
 * FeatureID
 * values are used in the request. This field is returned as an empty element (a boolean value is not returned) if
 * one or more eBay API-enabled sites support Classified Ad listings for eBay Motors Pro users.
 * 
 * To verify if a specific eBay site supports Classified Ad listings for eBay Motors Pro users (for most
 * categories), look for a <code>true</code> value in the
 * SiteDefaults.eBayMotorsProAdFormatEnabled
 * field.
 * 
 * To verify if a specific category on a specific eBay site supports Classified Ad listings for eBay Motors Pro
 * users, pass in a
 * CategoryID
 * value in the request, and then look for a <code>true</code> value in the
 * eBayMotorsProAdFormatEnabled
 * field of the corresponding
 * Category
 * node (match up the
 * CategoryID
 * values if more than one Category IDs were passed in the request).
 **/
class EBayMotorsProAdFormatEnabledDefinitionType extends EbatNs_ComplexType
{
    const TAG = 'eBayMotorsProAdFormatEnabledDefinitionType';
    const NAME = 'EBayMotorsProAdFormatEnabledDefinitionType';
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

EBayMotorsProAdFormatEnabledDefinitionType::_register();

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
 * eBayMotorsProPaymentMethodCheckOutEnabled
 * field that is returned under the
 * FeatureDefinitions
 * container if <code>eBayMotorsProPaymentMethodCheckOutEnabled</code> is used as a
 * FeatureID
 * value in the request, or if no
 * FeatureID
 * values are used in the request. This field is returned as an empty element (a boolean value is not returned) if
 * one or more eBay API-enabled sites support the display of accepted payment methods for eBay Motors Classified Ad
 * listings. Only eBay Motors Pro users are eligible to use eBay Motors Classified Ad listings.
 **/
class EBayMotorsProPaymentMethodCheckOutEnabledDefinitionType extends EbatNs_ComplexType
{
    const TAG = 'eBayMotorsProPaymentMethodCheckOutEnabledDefinitionType';
    const NAME = 'EBayMotorsProPaymentMethodCheckOutEnabledDefinitionType';
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

EBayMotorsProPaymentMethodCheckOutEnabledDefinitionType::_register();

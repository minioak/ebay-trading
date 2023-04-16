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
 * In some EU countries, sellers are legally required to describe the return policy they offer. The value returned
 * by this field indicates if sellers can provide such description within the given marketplace and category.
 * The values returned in this field are pertinent only if
 * ReturnPolicyEnabled
 * in GetCategoryFeatures is set to <code>true</code> for the associated category, which indicates that items
 * listed in the category must include a return policy. The values returned in this field are valid in AddItem and
 * its related family of calls, and in the return policies you configure for use with the Account API.
 **/
class ReturnPolicyDescriptionEnabledDefinitionType extends EbatNs_ComplexType
{
    const TAG = 'ReturnPolicyDescriptionEnabledDefinitionType';
    const NAME = 'ReturnPolicyDescriptionEnabledDefinitionType';
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

ReturnPolicyDescriptionEnabledDefinitionType::_register();

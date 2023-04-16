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
 * The values returned in this field indicate whether or not the seller accepts domestic returns for items listed in
 * the associated marketplace and category.
 * While most categories return the
 * ReturnsAccepted
 * flag (indicating the category supports returns), some categories will also return the
 * ReturnsNotAccepted
 * flag to indicate the seller can choose to not accept returns for an item listed in that category.
 * The values returned in this field are pertinent only if
 * ReturnPolicyEnabled
 * in GetCategoryFeatures is set to <code>true</code> for the associated category, which indicates that items
 * listed in the category must include a return policy. Here, it's worth noting that not accepting returns is a
 * return policy. The values returned in this field are valid in AddItem and its related family of calls, and in the
 * return policies you configure for use with the Account API.
 **/
class DomesticReturnsAcceptedDefinitionType extends EbatNs_ComplexType
{
    const TAG = 'DomesticReturnsAcceptedDefinitionType';
    const NAME = 'DomesticReturnsAcceptedDefinitionType';
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

DomesticReturnsAcceptedDefinitionType::_register();

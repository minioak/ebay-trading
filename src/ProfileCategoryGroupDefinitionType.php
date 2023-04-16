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
 * PaymentProfileCategoryGroup
 * ,
 * ReturnPolicyProfileCategoryGroup
 * , and
 * ShippingProfileCategoryGroup
 * fields, which are all returned in the
 * GetCategoryFeature
 * response if these Business Policies profile types apply to the category. Each of these fields is returned as an
 * empty element.
 **/
class ProfileCategoryGroupDefinitionType extends EbatNs_ComplexType
{
    const TAG = 'ProfileCategoryGroupDefinitionType';
    const NAME = 'ProfileCategoryGroupDefinitionType';
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

ProfileCategoryGroupDefinitionType::_register();

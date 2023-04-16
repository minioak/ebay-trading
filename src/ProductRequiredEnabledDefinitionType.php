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
 * ProductRequiredEnabled
 * field that is returned under the
 * FeatureDefinitions
 * container of the
 * GetCategoryFeatures
 * response (as long as
 * ProductRequiredEnabled
 * is included as a <a href="types/FeatureIDCodeType.html">FeatureID</a> value in the call request or no
 * FeatureID
 * values are passed into the call request). The
 * ProductRequiredEnabled
 * field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites
 * support the Product-Based Shopping Experience.
 * 
 * 
 * <span class="tablenote">
 * Note:
 * Due to the rollback of the Product-Based Shopping Experience mandate for all eBay categories, the
 * FeatureDefinitions.ProductRequiredEnabled
 * field no longer has any practical use. Due to this fact, the
 * ProductRequiredEnabledDefinitionType
 * is currently not applicable.
 * </span>
 **/
class ProductRequiredEnabledDefinitionType extends EbatNs_ComplexType
{
    const TAG = 'ProductRequiredEnabledDefinitionType';
    const NAME = 'ProductRequiredEnabledDefinitionType';
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

ProductRequiredEnabledDefinitionType::_register();

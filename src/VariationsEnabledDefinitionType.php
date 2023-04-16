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
 * Defines the multi-variation listing feature. If the field is present,
 * the  corresponding feature applies to the site. The field is returned as
 * an empty element (e.g., a boolean value is not returned).
 * 
 * Multi-variation listings contain items that are logically the same
 * product, but that vary in their manufacturing details or packaging.
 * For example, a particular brand and style of shirt could be
 * available in different sizes and colors, such as "large blue" and
 * "medium black" variations.
 **/
class VariationsEnabledDefinitionType extends EbatNs_ComplexType
{
    const TAG = 'VariationsEnabledDefinitionType';
    const NAME = 'VariationsEnabledDefinitionType';
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

VariationsEnabledDefinitionType::_register();

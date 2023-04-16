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
 * Defines the maximum limit on compatible applications as part of the parts
 * compatibility feature. If the field is present, the corresponding feature applies
 * to the site. The field is returned as an empty element (e.g., a boolean value is
 * not returned).
 * 
 * Parts compatibility listings contain information to determine the assemblies with
 * which a part is compatible. For example, an automotive part or accessory listed
 * witih parts compatibility can be matched with vehicles (e.g., specific years,
 * makes, and models) with which the part or accessory can  be used.
 * 
 * There are two ways to enter parts compatibility: by application and by
 * specification.
 * <ul>
 * <li> Entering parts compatibility by application specifies the assemblies
 * (e.g., a specific year, make, and model of car) to which the item applies. This can
 * be done automatically by listing with a catalog product that supports parts
 * compatibility, or manually, using <b
 * class="con">Item.ItemCompatibilityList
 * when listing or revising an
 * item. </li>
 * <li>Entering parts compatibility by specification involves specifying the
 * part's relevant dimensions and characteristics necessary to determine the
 * assemblies with which the part is compatible (e.g., Section Width, Aspect Ratio,
 * Rim Diammeter, Load Index, and Speed Rating values for a tire) using
 * attributes.</li>
 * </ul>
 **/
class MaxItemCompatibilityDefinitionType extends EbatNs_ComplexType
{
    const TAG = 'MaxItemCompatibilityDefinitionType';
    const NAME = 'MaxItemCompatibilityDefinitionType';
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

MaxItemCompatibilityDefinitionType::_register();

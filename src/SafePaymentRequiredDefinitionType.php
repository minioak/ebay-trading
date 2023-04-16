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
 * For the US, Canada and Australia sites, users are
 * required to offer at least one safe payment method.
 * 
 * If a seller has a 'SafePaymentExempt' status, they are exempt from the category
 * requirement to offer at least one safe payment method when listing an item on a
 * site that has the safe payment requirement.
 * 
 * <span class="tablenote">
 * Note:
 * Although the
 * SafePaymentRequired
 * field is still being returned for now, sellers never need to set the available electronic payments, so this
 * requirement is no longer applicable.
 * </span>
 **/
class SafePaymentRequiredDefinitionType extends EbatNs_ComplexType
{
    const TAG = 'SafePaymentRequiredDefinitionType';
    const NAME = 'SafePaymentRequiredDefinitionType';
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

SafePaymentRequiredDefinitionType::_register();

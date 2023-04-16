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
 * On the EBAY_US marketplace only, sellers can offer item replacement in addition to offering money back returns.
 * This flag defines the availability of such options for the given US marketplace category. Sellers can offer item
 * replacements only if returns are enabled (
 * returnPolicyEnabled
 * is set to <code>true</code>) for the item. You can specify item replacement in the AddItem family of calls and
 * in the return policy settings of the Account API.
 **/
class DomesticRefundMethodDefinitionType extends EbatNs_ComplexType
{
    const TAG = 'DomesticRefundMethodDefinitionType';
    const NAME = 'DomesticRefundMethodDefinitionType';
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

DomesticRefundMethodDefinitionType::_register();

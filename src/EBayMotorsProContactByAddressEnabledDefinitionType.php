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
 * Indicates whether the site supports the use of a company address when contacting the
 * seller about eBay Motors Classified Ad listings. This feature is only
 * applicable for eBay Motors Pro users.
 **/
class EBayMotorsProContactByAddressEnabledDefinitionType extends EbatNs_ComplexType
{
    const TAG = 'eBayMotorsProContactByAddressEnabledDefinitionType';
    const NAME = 'EBayMotorsProContactByAddressEnabledDefinitionType';
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

EBayMotorsProContactByAddressEnabledDefinitionType::_register();

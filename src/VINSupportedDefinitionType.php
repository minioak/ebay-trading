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
 * If present, the site defines category settings for when the seller
 * can provide a Vehicle Identification Number (VIN) for
 * US, CA, and CAFR eBay Motors sites. VIN is required for cars and trucks
 * from model year 1981 and later. (The US developed national standards for VIN
 * values as of 1981.)
 **/
class VINSupportedDefinitionType extends EbatNs_ComplexType
{
    const TAG = 'VINSupportedDefinitionType';
    const NAME = 'VINSupportedDefinitionType';
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

VINSupportedDefinitionType::_register();

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
 * This type defines the response of the
 * CompleteSale
 * call. There are no call-specific fields in this response, but the seller should look for an
 * Ack
 * value of <code>true</code> in the response, as this value will indicate that the action(s) in the
 * CompleteSale
 * call were successful. If any other
 * Ack
 * value besides <code>true</code> is returned, the seller should look for any returned error messages or warnings.
 **/
class CompleteSaleResponseType extends EbatNs_Response
{
    const TAG = 'CompleteSaleResponseType';
    const NAME = 'CompleteSaleResponseType';
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

CompleteSaleResponseType::_register();

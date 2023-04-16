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
 * The response of a
 * SetUserNotes
 * call only includes the standard response fields for Trading API calls, such as the
 * Ack
 * field (to indicate the success or failure of the call), the timestamp, and an
 * Errors
 * container (if there were any errors and/or warnings).
 **/
class SetUserNotesResponseType extends EbatNs_Response
{
    const TAG = 'SetUserNotesResponseType';
    const NAME = 'SetUserNotesResponseType';
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

SetUserNotesResponseType::_register();

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
 * AddToItemDescription
 * call. There are no call-specific fields in this response. The seller should look for an
 * Ack
 * value of <code>true</code> in the response, that will indicate that the additional text in the item description
 * was added successfully.
 **/
class AddToItemDescriptionResponseType extends EbatNs_Response
{
    const TAG = 'AddToItemDescriptionResponseType';
    const NAME = 'AddToItemDescriptionResponseType';
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

AddToItemDescriptionResponseType::_register();

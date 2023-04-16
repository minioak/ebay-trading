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
 * This type is no longer applicable/used, as the the Paisa Pay Escrow payment feature was only applicable to the
 * eBay India site, and this site is no longer a functional eBay marketplace for sellers.
 **/
class PaisaPayFullEscrowEnabledDefinitionType extends EbatNs_ComplexType
{
    const TAG = 'PaisaPayFullEscrowEnabledDefinitionType';
    const NAME = 'PaisaPayFullEscrowEnabledDefinitionType';
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

PaisaPayFullEscrowEnabledDefinitionType::_register();

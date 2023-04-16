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
 * Defines the LocalMarketRegularSubscription feature. If this field
 * is present, the corresponding feature applies to the category. The
 * field is returned as an empty element (i.e., a boolean value is not
 * returned). A subscription for Local Market for Vehicles will be
 * returned by GetUser if a dealer has subscribed to any of the following
 * Local Market Regular sub-types: Vehicles Regular Six Months,
 * Vehicles Regular Special Promotion, Vehicles Regular Multistore
 * Level S, Vehicles Regular Multistore Level M, or Vehicles Regular
 * Multistore Level L. Each of these sub-types has a separate discount
 * and billing cycle.
 **/
class LocalMarketRegularSubscriptionDefinitionType extends EbatNs_ComplexType
{
    const TAG = 'LocalMarketRegularSubscriptionDefinitionType';
    const NAME = 'LocalMarketRegularSubscriptionDefinitionType';
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

LocalMarketRegularSubscriptionDefinitionType::_register();

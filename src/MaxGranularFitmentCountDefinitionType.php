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
 * Type used by the
 * MaxGranularFitmentCount
 * field that is returned under the
 * FeatureDefinitions
 * container. The
 * MaxGranularFitmentCount
 * field is returned as empty and indicates that a maximum parts compatibility threshold is applicable to some
 * motor vehicle parts and accessory categories on the corresponding eBay site. This field will not be returned if
 * one or more
 * FeatureID
 * fields are included in the call request and
 * MaxGranularFitmentCount
 * is not one of the values passed into those
 * FeatureID
 * fields.
 **/
class MaxGranularFitmentCountDefinitionType extends EbatNs_ComplexType
{
    const TAG = 'MaxGranularFitmentCountDefinitionType';
    const NAME = 'MaxGranularFitmentCountDefinitionType';
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

MaxGranularFitmentCountDefinitionType::_register();

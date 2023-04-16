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
 * This type specifies variation-specific Extended Producer Responsibility information, specifically the
 * <strong>EcoParticipationFee</strong>. For multiple-variation listings, this type's
 * EcoParticipationFee
 * is used and not the
 * EcoParticipationFee
 * in the
 * ExtendedProducerResponsibility
 * type. This type is supported by a limited number of sites and specific categories. Use the <a
 * href="../../../../../api-docs/sell/metadata/resources/marketplace/methods/getExtendedProducerResponsibilityPolicies"
 * target="_blank">getExtendedProducerResponsibilityPolicies</a> method of the
 * Sell Metadata API
 * to retrieve valid categories for a site.
 * For
 * GetItem
 * calls, this container is only returned to the listing owner, if the container is available.
 **/
class VariationExtendedProducerResponsibilityType extends EbatNs_ComplexType
{
    const TAG = 'VariationExtendedProducerResponsibilityType';
    const NAME = 'VariationExtendedProducerResponsibilityType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var AmountType|null
     */
    protected $EcoParticipationFee = null;


    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEcoParticipationFee()
    {
        return $this->_dc($this->EcoParticipationFee, 'EcoParticipationFee');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setEcoParticipationFee($value)
    {
        $this->EcoParticipationFee = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['EcoParticipationFee' => ['type' => 'AmountType', 'xmlns' => self::XMLNS]], parent::NAME);
        self::assignAttributes([]);
    }

}

VariationExtendedProducerResponsibilityType::_register();

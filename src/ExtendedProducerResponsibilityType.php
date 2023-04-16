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
 * This type is used by the
 * ExtendedProducerResponsibility
 * container, which provides IDs for the producer or importer related to the new item, packaging, added
 * documentation, or an eco-participation fee. In some markets, such as in France, this may be the importer of the
 * item. For more information, see the
 * Extended Producer Responsibility for business sellers
 * page for your site (for example, <a
 * href="https://www.ebay.com/help/selling/all-about-selling/selling-internationally/extended-producer-responsibility-for-business-sellers?id=5314"
 * target="_blank">https://www.ebay.com/help/selling/all-about-selling/selling-internationally/extended-producer-responsibility-for-business-sellers?id=5314</a>).
 * 
 * For
 * GetItem
 * calls, this container is only returned to the listing owner, if the container is available.
 **/
class ExtendedProducerResponsibilityType extends EbatNs_ComplexType
{
    const TAG = 'ExtendedProducerResponsibilityType';
    const NAME = 'ExtendedProducerResponsibilityType';
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

ExtendedProducerResponsibilityType::_register();

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
 * This is the base response type for the
 * RespondToBestOffer
 * call. Along with the standard output fields for Trading API calls, this type contains a
 * RespondToBestOffer
 * container that indicates whether or not the action specified in the call request (accept, decline, or counter
 * offer) was successful.
 **/
class RespondToBestOfferResponseType extends EbatNs_Response
{
    const TAG = 'RespondToBestOfferResponseType';
    const NAME = 'RespondToBestOfferResponseType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var BestOfferArrayType|null
     */
    protected $RespondToBestOffer = null;


    /**
     * @return BestOfferArrayType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getRespondToBestOffer()
    {
        return $this->_dc($this->RespondToBestOffer, 'RespondToBestOffer');
    }

    /**
     * @param BestOfferArrayType|null $value
     * @return void
     */
    public function setRespondToBestOffer($value)
    {
        $this->RespondToBestOffer = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['RespondToBestOffer' => ['type' => 'BestOfferArrayType', 'xmlns' => self::XMLNS]], parent::NAME);
        self::assignAttributes([]);
    }

}

RespondToBestOfferResponseType::_register();

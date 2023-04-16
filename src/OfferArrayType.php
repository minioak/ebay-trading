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
 * BidArray
 * container that is returned in the
 * GetAllBidders
 * response. The
 * BidArray
 * container is an array of all bids made on an auction listing that is specified in the call request.
 **/
class OfferArrayType extends EbatNs_ComplexType
{
    const TAG = 'OfferArrayType';
    const NAME = 'OfferArrayType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var OfferType[]|null
     */
    protected $Offer = [];


    /**
     * @return OfferType[]|OfferType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getOffer($index = null)
    {
        return $this->_dc($index === null
            ? $this->Offer
            : (count($this->Offer) > $index
                ? $this->Offer[$index]
                : null), 'Offer');
    }

    /**
     * @param OfferType|null|OfferType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setOffer($value, $index = null)
    {
        if ($index === null) {
            $this->Offer = $value;
        } else {
            $this->Offer[$index] = [];
            
            foreach ($value as $item) {
                $this->addOffer($item);
            }
        }
    }

    /**
     * @param OfferType|null $value
     * @return void
     */
    public function addOffer($value)
    {
        $this->Offer[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['Offer' => ['type' => 'OfferType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']], parent::NAME);
        self::assignAttributes([]);
    }

}

OfferArrayType::_register();

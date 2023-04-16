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
 * An array of one or more Best Offers. This type is used in the responses of the
 * GetBestOffers
 * and
 * RespondToBestOffer
 * calls.
 **/
class BestOfferArrayType extends EbatNs_ComplexType
{
    const TAG = 'BestOfferArrayType';
    const NAME = 'BestOfferArrayType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var BestOfferType[]|null
     */
    protected $BestOffer = [];


    /**
     * @return BestOfferType[]|BestOfferType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getBestOffer($index = null)
    {
        return $this->_dc($index === null
            ? $this->BestOffer
            : (count($this->BestOffer) > $index
                ? $this->BestOffer[$index]
                : null), 'BestOffer');
    }

    /**
     * @param BestOfferType|null|BestOfferType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setBestOffer($value, $index = null)
    {
        if ($index === null) {
            $this->BestOffer = $value;
        } else {
            $this->BestOffer[$index] = [];
            
            foreach ($value as $item) {
                $this->addBestOffer($item);
            }
        }
    }

    /**
     * @param BestOfferType|null $value
     * @return void
     */
    public function addBestOffer($value)
    {
        $this->BestOffer[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['BestOffer' => ['type' => 'BestOfferType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']], parent::NAME);
        self::assignAttributes([]);
    }

}

BestOfferArrayType::_register();

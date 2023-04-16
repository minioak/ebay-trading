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
 * This type is deprecated.
 **/
class CancelOfferArrayType extends EbatNs_ComplexType
{
    const TAG = 'CancelOfferArrayType';
    const NAME = 'CancelOfferArrayType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var CancelOfferType[]|null
     */
    protected $CancelOffer = [];


    /**
     * @return CancelOfferType[]|CancelOfferType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getCancelOffer($index = null)
    {
        return $this->_dc($index === null
            ? $this->CancelOffer
            : (count($this->CancelOffer) > $index
                ? $this->CancelOffer[$index]
                : null), 'CancelOffer');
    }

    /**
     * @param CancelOfferType|null|CancelOfferType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setCancelOffer($value, $index = null)
    {
        if ($index === null) {
            $this->CancelOffer = $value;
        } else {
            $this->CancelOffer[$index] = [];
            
            foreach ($value as $item) {
                $this->addCancelOffer($item);
            }
        }
    }

    /**
     * @param CancelOfferType|null $value
     * @return void
     */
    public function addCancelOffer($value)
    {
        $this->CancelOffer[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['CancelOffer' => ['type' => 'CancelOfferType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']], parent::NAME);
        self::assignAttributes([]);
    }

}

CancelOfferArrayType::_register();

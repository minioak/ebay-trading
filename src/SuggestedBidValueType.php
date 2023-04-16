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
 * SuggestedBidValues
 * container that is returned if the buyer is attempting to bid on an auction item through the
 * PlaceOffer
 * call.
 **/
class SuggestedBidValueType extends EbatNs_ComplexType
{
    const TAG = 'SuggestedBidValueType';
    const NAME = 'SuggestedBidValueType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var AmountType[]|null
     */
    protected $BidValue = [];


    /**
     * @return AmountType[]|AmountType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getBidValue($index = null)
    {
        return $this->_dc($index === null
            ? $this->BidValue
            : (count($this->BidValue) > $index
                ? $this->BidValue[$index]
                : null), 'BidValue');
    }

    /**
     * @param AmountType|null|AmountType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setBidValue($value, $index = null)
    {
        if ($index === null) {
            $this->BidValue = $value;
        } else {
            $this->BidValue[$index] = [];
            
            foreach ($value as $item) {
                $this->addBidValue($item);
            }
        }
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function addBidValue($value)
    {
        $this->BidValue[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['BidValue' => ['type' => 'AmountType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']], parent::NAME);
        self::assignAttributes([]);
    }

}

SuggestedBidValueType::_register();

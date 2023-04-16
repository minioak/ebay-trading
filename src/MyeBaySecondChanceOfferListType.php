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
 * A list of possible My eBay Second Chance Offers.
 **/
class MyeBaySecondChanceOfferListType extends EbatNs_ComplexType
{
    const TAG = 'MyeBaySecondChanceOfferListType';
    const NAME = 'MyeBaySecondChanceOfferListType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var int|null
     */
    protected $TotalAvailable = null;

    /**
     * @var ItemType[]|null
     */
    protected $SecondChanceOffer = [];


    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTotalAvailable()
    {
        return $this->_dc($this->TotalAvailable, 'TotalAvailable');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setTotalAvailable($value)
    {
        $this->TotalAvailable = self::_int($value);
    }

    /**
     * @return ItemType[]|ItemType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getSecondChanceOffer($index = null)
    {
        return $this->_dc($index === null
            ? $this->SecondChanceOffer
            : (count($this->SecondChanceOffer) > $index
                ? $this->SecondChanceOffer[$index]
                : null), 'SecondChanceOffer');
    }

    /**
     * @param ItemType|null|ItemType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setSecondChanceOffer($value, $index = null)
    {
        if ($index === null) {
            $this->SecondChanceOffer = $value;
        } else {
            $this->SecondChanceOffer[$index] = [];
            
            foreach ($value as $item) {
                $this->addSecondChanceOffer($item);
            }
        }
    }

    /**
     * @param ItemType|null $value
     * @return void
     */
    public function addSecondChanceOffer($value)
    {
        $this->SecondChanceOffer[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'TotalAvailable' => ['type' => 'int'],
            'SecondChanceOffer' => ['type' => 'ItemType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

MyeBaySecondChanceOfferListType::_register();

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
 * A collection of details about the Best Offers received for a specific item. Empty if there are no Best Offers.
 * Includes the buyer and seller messages only if
 * the <code>ReturnAll</code> detail level is used.
 **/
class ItemBestOffersArrayType extends EbatNs_ComplexType
{
    const TAG = 'ItemBestOffersArrayType';
    const NAME = 'ItemBestOffersArrayType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var ItemBestOffersType[]|null
     */
    protected $ItemBestOffers = [];


    /**
     * @return ItemBestOffersType[]|ItemBestOffersType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getItemBestOffers($index = null)
    {
        return $this->_dc($index === null
            ? $this->ItemBestOffers
            : (count($this->ItemBestOffers) > $index
                ? $this->ItemBestOffers[$index]
                : null), 'ItemBestOffers');
    }

    /**
     * @param ItemBestOffersType|null|ItemBestOffersType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setItemBestOffers($value, $index = null)
    {
        if ($index === null) {
            $this->ItemBestOffers = $value;
        } else {
            $this->ItemBestOffers[$index] = [];
            
            foreach ($value as $item) {
                $this->addItemBestOffers($item);
            }
        }
    }

    /**
     * @param ItemBestOffersType|null $value
     * @return void
     */
    public function addItemBestOffers($value)
    {
        $this->ItemBestOffers[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['ItemBestOffers' => ['type' => 'ItemBestOffersType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']], parent::NAME);
        self::assignAttributes([]);
    }

}

ItemBestOffersArrayType::_register();

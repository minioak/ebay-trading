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
class ListingTipArrayType extends EbatNs_ComplexType
{
    const TAG = 'ListingTipArrayType';
    const NAME = 'ListingTipArrayType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var ListingTipType[]|null
     */
    protected $ListingTip = [];


    /**
     * @return ListingTipType[]|ListingTipType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getListingTip($index = null)
    {
        return $this->_dc($index === null
            ? $this->ListingTip
            : (count($this->ListingTip) > $index
                ? $this->ListingTip[$index]
                : null), 'ListingTip');
    }

    /**
     * @param ListingTipType|null|ListingTipType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setListingTip($value, $index = null)
    {
        if ($index === null) {
            $this->ListingTip = $value;
        } else {
            $this->ListingTip[$index] = [];
            
            foreach ($value as $item) {
                $this->addListingTip($item);
            }
        }
    }

    /**
     * @param ListingTipType|null $value
     * @return void
     */
    public function addListingTip($value)
    {
        $this->ListingTip[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['ListingTip' => ['type' => 'ListingTipType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']], parent::NAME);
        self::assignAttributes([]);
    }

}

ListingTipArrayType::_register();

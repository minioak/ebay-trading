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
class BidGroupArrayType extends EbatNs_ComplexType
{
    const TAG = 'BidGroupArrayType';
    const NAME = 'BidGroupArrayType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var BidGroupType[]|null
     */
    protected $BidGroup = [];


    /**
     * @return BidGroupType[]|BidGroupType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getBidGroup($index = null)
    {
        return $this->_dc($index === null
            ? $this->BidGroup
            : (count($this->BidGroup) > $index
                ? $this->BidGroup[$index]
                : null), 'BidGroup');
    }

    /**
     * @param BidGroupType|null|BidGroupType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setBidGroup($value, $index = null)
    {
        if ($index === null) {
            $this->BidGroup = $value;
        } else {
            $this->BidGroup[$index] = [];
            
            foreach ($value as $item) {
                $this->addBidGroup($item);
            }
        }
    }

    /**
     * @param BidGroupType|null $value
     * @return void
     */
    public function addBidGroup($value)
    {
        $this->BidGroup[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['BidGroup' => ['type' => 'BidGroupType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']], parent::NAME);
        self::assignAttributes([]);
    }

}

BidGroupArrayType::_register();

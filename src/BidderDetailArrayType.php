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
class BidderDetailArrayType extends EbatNs_ComplexType
{
    const TAG = 'BidderDetailArrayType';
    const NAME = 'BidderDetailArrayType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var BidderDetailType[]|null
     */
    protected $BidderDetail = [];


    /**
     * @return BidderDetailType[]|BidderDetailType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getBidderDetail($index = null)
    {
        return $this->_dc($index === null
            ? $this->BidderDetail
            : (count($this->BidderDetail) > $index
                ? $this->BidderDetail[$index]
                : null), 'BidderDetail');
    }

    /**
     * @param BidderDetailType|null|BidderDetailType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setBidderDetail($value, $index = null)
    {
        if ($index === null) {
            $this->BidderDetail = $value;
        } else {
            $this->BidderDetail[$index] = [];
            
            foreach ($value as $item) {
                $this->addBidderDetail($item);
            }
        }
    }

    /**
     * @param BidderDetailType|null $value
     * @return void
     */
    public function addBidderDetail($value)
    {
        $this->BidderDetail[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['BidderDetail' => ['type' => 'BidderDetailType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']], parent::NAME);
        self::assignAttributes([]);
    }

}

BidderDetailArrayType::_register();

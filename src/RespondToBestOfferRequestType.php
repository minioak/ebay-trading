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
 * This call enables the seller to accept or decline a buyer's Best Offer on an item, or make a counter offer to the
 * buyer's Best Offer. A seller can decline multiple Best Offers with one call, but the seller cannot accept or
 * counter offer multiple Best Offers with one call. Best Offers are not applicable to auction listings.
 * 
 * <span class="tablenote">
 * Note:
 * Historically, the Best Offer feature has not been available for auction listings, but beginning with Version
 * 1027, sellers in the US, UK, and DE sites are able to offer the Best Offer feature in auction listings. The
 * seller can offer Buy It Now or Best Offer in an auction listing, but not both.
 * </span>
 **/
class RespondToBestOfferRequestType extends AbstractRequestType
{
    const TAG = 'RespondToBestOfferRequest';
    const NAME = 'RespondToBestOfferRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'RespondToBestOffer';

    /**
     * @var ItemIDType|null
     */
    protected $ItemID = null;

    /**
     * @var BestOfferIDType[]|null
     */
    protected $BestOfferID = [];

    /**
     * @var BestOfferActionCodeType|null
     */
    protected $Action = null;

    /**
     * @var string|null
     */
    protected $SellerResponse = null;

    /**
     * @var AmountType|null
     */
    protected $CounterOfferPrice = null;

    /**
     * @var int|null
     */
    protected $CounterOfferQuantity = null;


    /**
     * @return ItemIDType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getItemID()
    {
        return $this->_dc($this->ItemID, 'ItemID');
    }

    /**
     * @param ItemIDType|null $value
     * @return void
     */
    public function setItemID($value)
    {
        $this->ItemID = $value;
    }

    /**
     * @return BestOfferIDType[]|BestOfferIDType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getBestOfferID($index = null)
    {
        return $this->_dc($index === null
            ? $this->BestOfferID
            : (count($this->BestOfferID) > $index
                ? $this->BestOfferID[$index]
                : null), 'BestOfferID');
    }

    /**
     * @param BestOfferIDType|null|BestOfferIDType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setBestOfferID($value, $index = null)
    {
        if ($index === null) {
            $this->BestOfferID = $value;
        } else {
            $this->BestOfferID[$index] = [];
            
            foreach ($value as $item) {
                $this->addBestOfferID($item);
            }
        }
    }

    /**
     * @param BestOfferIDType|null $value
     * @return void
     */
    public function addBestOfferID($value)
    {
        $this->BestOfferID[] = $value;
    }

    /**
     * @return BestOfferActionCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getAction()
    {
        return $this->_dc($this->Action);
    }

    /**
     * @param BestOfferActionCodeType|null $value
     * @return void
     */
    public function setAction($value)
    {
        $this->Action = $this->_enum($value, BestOfferActionCodeType::class);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSellerResponse()
    {
        return $this->_dc($this->SellerResponse, 'SellerResponse');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setSellerResponse($value)
    {
        $this->SellerResponse = self::_string($value);
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCounterOfferPrice()
    {
        return $this->_dc($this->CounterOfferPrice, 'CounterOfferPrice');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setCounterOfferPrice($value)
    {
        $this->CounterOfferPrice = $value;
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCounterOfferQuantity()
    {
        return $this->_dc($this->CounterOfferQuantity, 'CounterOfferQuantity');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setCounterOfferQuantity($value)
    {
        $this->CounterOfferQuantity = self::_int($value);
    }

    /**
     * @return RespondToBestOfferResponseType|EbatNs_ResponseError
     * @param EbatNs_Client
     **/
    function call($client)
    {
        return $client->call(self::REQUEST, $this);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'ItemID' => ['type' => 'ItemIDType', 'xmlns' => self::XMLNS],
            'BestOfferID' => ['type' => 'BestOfferIDType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'Action' => ['type' => 'BestOfferActionCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'SellerResponse' => [],
            'CounterOfferPrice' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'CounterOfferQuantity' => ['type' => 'int']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

RespondToBestOfferRequestType::_register();

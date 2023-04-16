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
 * Simulates the creation of a new Second Chance Offer
 * listing of an item without actually creating a listing.
 **/
class VerifyAddSecondChanceItemRequestType extends AbstractRequestType
{
    const TAG = 'VerifyAddSecondChanceItemRequest';
    const NAME = 'VerifyAddSecondChanceItemRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'VerifyAddSecondChanceItem';

    /**
     * @var UserIDType|null
     */
    protected $RecipientBidderUserID = null;

    /**
     * @var AmountType|null
     */
    protected $BuyItNowPrice = null;

    /**
     * @var SecondChanceOfferDurationCodeType|null
     */
    protected $Duration = null;

    /**
     * @var ItemIDType|null
     */
    protected $ItemID = null;

    /**
     * @var string|null
     */
    protected $SellerMessage = null;


    /**
     * @return UserIDType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getRecipientBidderUserID()
    {
        return $this->_dc($this->RecipientBidderUserID, 'RecipientBidderUserID');
    }

    /**
     * @param UserIDType|null $value
     * @return void
     */
    public function setRecipientBidderUserID($value)
    {
        $this->RecipientBidderUserID = $value;
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBuyItNowPrice()
    {
        return $this->_dc($this->BuyItNowPrice, 'BuyItNowPrice');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setBuyItNowPrice($value)
    {
        $this->BuyItNowPrice = $value;
    }

    /**
     * @return SecondChanceOfferDurationCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDuration()
    {
        return $this->_dc($this->Duration);
    }

    /**
     * @param SecondChanceOfferDurationCodeType|null $value
     * @return void
     */
    public function setDuration($value)
    {
        $this->Duration = $this->_enum($value, SecondChanceOfferDurationCodeType::class);
    }

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
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSellerMessage()
    {
        return $this->_dc($this->SellerMessage, 'SellerMessage');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setSellerMessage($value)
    {
        $this->SellerMessage = self::_string($value);
    }

    /**
     * @return VerifyAddSecondChanceItemResponseType|EbatNs_ResponseError
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
            'RecipientBidderUserID' => ['type' => 'UserIDType', 'xmlns' => self::XMLNS],
            'BuyItNowPrice' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'Duration' => ['type' => 'SecondChanceOfferDurationCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'ItemID' => ['type' => 'ItemIDType', 'xmlns' => self::XMLNS],
            'SellerMessage' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

VerifyAddSecondChanceItemRequestType::_register();

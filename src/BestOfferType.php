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
 * Type defining the
 * BestOffer
 * container, which consists of information on one Best Offer or counter offer. This information includes the price
 * of the offer, the expiration of the offer, and any messaging provided by the prospective buyer or seller.
 **/
class BestOfferType extends EbatNs_ComplexType
{
    const TAG = 'BestOfferType';
    const NAME = 'BestOfferType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var BestOfferIDType|null
     */
    protected $BestOfferID = null;

    /**
     * @var string|null
     */
    protected $ExpirationTime = null;

    /**
     * @var UserType|null
     */
    protected $Buyer = null;

    /**
     * @var AmountType|null
     */
    protected $Price = null;

    /**
     * @var BestOfferStatusCodeType|null
     */
    protected $Status = null;

    /**
     * @var int|null
     */
    protected $Quantity = null;

    /**
     * @var string|null
     */
    protected $BuyerMessage = null;

    /**
     * @var string|null
     */
    protected $SellerMessage = null;

    /**
     * @var BestOfferTypeCodeType|null
     */
    protected $BestOfferCodeType = null;

    /**
     * @var string|null
     */
    protected $CallStatus = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $NewBestOffer = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $ImmediatePayEligible = null;


    /**
     * @return BestOfferIDType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBestOfferID()
    {
        return $this->_dc($this->BestOfferID, 'BestOfferID');
    }

    /**
     * @param BestOfferIDType|null $value
     * @return void
     */
    public function setBestOfferID($value)
    {
        $this->BestOfferID = $value;
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getExpirationTime()
    {
        return $this->_dc($this->ExpirationTime, 'ExpirationTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setExpirationTime($value)
    {
        $this->ExpirationTime = self::_string($value);
    }

    /**
     * @return UserType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBuyer()
    {
        return $this->_dc($this->Buyer, 'Buyer');
    }

    /**
     * @param UserType|null $value
     * @return void
     */
    public function setBuyer($value)
    {
        $this->Buyer = $value;
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPrice()
    {
        return $this->_dc($this->Price, 'Price');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setPrice($value)
    {
        $this->Price = $value;
    }

    /**
     * @return BestOfferStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getStatus()
    {
        return $this->_dc($this->Status);
    }

    /**
     * @param BestOfferStatusCodeType|null $value
     * @return void
     */
    public function setStatus($value)
    {
        $this->Status = $this->_enum($value, BestOfferStatusCodeType::class);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getQuantity()
    {
        return $this->_dc($this->Quantity, 'Quantity');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setQuantity($value)
    {
        $this->Quantity = self::_int($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBuyerMessage()
    {
        return $this->_dc($this->BuyerMessage, 'BuyerMessage');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setBuyerMessage($value)
    {
        $this->BuyerMessage = self::_string($value);
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
     * @return BestOfferTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBestOfferCodeType()
    {
        return $this->_dc($this->BestOfferCodeType);
    }

    /**
     * @param BestOfferTypeCodeType|null $value
     * @return void
     */
    public function setBestOfferCodeType($value)
    {
        $this->BestOfferCodeType = $this->_enum($value, BestOfferTypeCodeType::class);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCallStatus()
    {
        return $this->_dc($this->CallStatus, 'CallStatus');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setCallStatus($value)
    {
        $this->CallStatus = self::_string($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getNewBestOffer()
    {
        return $this->_dc($this->NewBestOffer === 'true', 'NewBestOffer');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setNewBestOffer($value)
    {
        $this->NewBestOffer = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getImmediatePayEligible()
    {
        return $this->_dc($this->ImmediatePayEligible === 'true', 'ImmediatePayEligible');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setImmediatePayEligible($value)
    {
        $this->ImmediatePayEligible = self::_bool($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'BestOfferID' => ['type' => 'BestOfferIDType', 'xmlns' => self::XMLNS],
            'ExpirationTime' => [],
            'Buyer' => ['type' => 'UserType', 'xmlns' => self::XMLNS],
            'Price' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'Status' => ['type' => 'BestOfferStatusCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'Quantity' => ['type' => 'int'],
            'BuyerMessage' => [],
            'SellerMessage' => [],
            'BestOfferCodeType' => ['type' => 'BestOfferTypeCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'CallStatus' => [],
            'NewBestOffer' => ['type' => 'bool'],
            'ImmediatePayEligible' => ['type' => 'bool']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

BestOfferType::_register();

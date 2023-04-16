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
 * BiddingDetails
 * container, which consists of
 * information about the buyer's bidding history on a single auction item.
 **/
class BiddingDetailsType extends EbatNs_ComplexType
{
    const TAG = 'BiddingDetailsType';
    const NAME = 'BiddingDetailsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var AmountType|null
     */
    protected $ConvertedMaxBid = null;

    /**
     * @var AmountType|null
     */
    protected $MaxBid = null;

    /**
     * @var int|null
     */
    protected $QuantityBid = null;

    /**
     * @var int|null
     */
    protected $QuantityWon = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $Winning = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $BidAssistant = null;


    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getConvertedMaxBid()
    {
        return $this->_dc($this->ConvertedMaxBid, 'ConvertedMaxBid');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setConvertedMaxBid($value)
    {
        $this->ConvertedMaxBid = $value;
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMaxBid()
    {
        return $this->_dc($this->MaxBid, 'MaxBid');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setMaxBid($value)
    {
        $this->MaxBid = $value;
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getQuantityBid()
    {
        return $this->_dc($this->QuantityBid, 'QuantityBid');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setQuantityBid($value)
    {
        $this->QuantityBid = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getQuantityWon()
    {
        return $this->_dc($this->QuantityWon, 'QuantityWon');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setQuantityWon($value)
    {
        $this->QuantityWon = self::_int($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getWinning()
    {
        return $this->_dc($this->Winning === 'true', 'Winning');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setWinning($value)
    {
        $this->Winning = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBidAssistant()
    {
        return $this->_dc($this->BidAssistant === 'true', 'BidAssistant');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setBidAssistant($value)
    {
        $this->BidAssistant = self::_bool($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'ConvertedMaxBid' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'MaxBid' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'QuantityBid' => ['type' => 'int'],
            'QuantityWon' => ['type' => 'int'],
            'Winning' => ['type' => 'bool'],
            'BidAssistant' => ['type' => 'bool']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

BiddingDetailsType::_register();

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
 * Contains summary information about the items the seller is selling.
 **/
class SellingSummaryType extends EbatNs_ComplexType
{
    const TAG = 'SellingSummaryType';
    const NAME = 'SellingSummaryType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var int|null
     */
    protected $ActiveAuctionCount = null;

    /**
     * @var int|null
     */
    protected $AuctionSellingCount = null;

    /**
     * @var int|null
     */
    protected $AuctionBidCount = null;

    /**
     * @var AmountType|null
     */
    protected $TotalAuctionSellingValue = null;

    /**
     * @var int|null
     */
    protected $TotalSoldCount = null;

    /**
     * @var AmountType|null
     */
    protected $TotalSoldValue = null;

    /**
     * @var int|null
     */
    protected $SoldDurationInDays = null;


    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getActiveAuctionCount()
    {
        return $this->_dc($this->ActiveAuctionCount, 'ActiveAuctionCount');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setActiveAuctionCount($value)
    {
        $this->ActiveAuctionCount = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getAuctionSellingCount()
    {
        return $this->_dc($this->AuctionSellingCount, 'AuctionSellingCount');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setAuctionSellingCount($value)
    {
        $this->AuctionSellingCount = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getAuctionBidCount()
    {
        return $this->_dc($this->AuctionBidCount, 'AuctionBidCount');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setAuctionBidCount($value)
    {
        $this->AuctionBidCount = self::_int($value);
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTotalAuctionSellingValue()
    {
        return $this->_dc($this->TotalAuctionSellingValue, 'TotalAuctionSellingValue');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setTotalAuctionSellingValue($value)
    {
        $this->TotalAuctionSellingValue = $value;
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTotalSoldCount()
    {
        return $this->_dc($this->TotalSoldCount, 'TotalSoldCount');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setTotalSoldCount($value)
    {
        $this->TotalSoldCount = self::_int($value);
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTotalSoldValue()
    {
        return $this->_dc($this->TotalSoldValue, 'TotalSoldValue');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setTotalSoldValue($value)
    {
        $this->TotalSoldValue = $value;
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSoldDurationInDays()
    {
        return $this->_dc($this->SoldDurationInDays, 'SoldDurationInDays');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setSoldDurationInDays($value)
    {
        $this->SoldDurationInDays = self::_int($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'ActiveAuctionCount' => ['type' => 'int'],
            'AuctionSellingCount' => ['type' => 'int'],
            'AuctionBidCount' => ['type' => 'int'],
            'TotalAuctionSellingValue' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'TotalSoldCount' => ['type' => 'int'],
            'TotalSoldValue' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'SoldDurationInDays' => ['type' => 'int']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

SellingSummaryType::_register();

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
 * BuyingSummary
 * container returned in
 * 
 * GetMyeBayBuying
 * . The
 * BuyingSummary
 * container
 * consists of data that summarizes the buyer's recent buying activity, including the
 * number of items the user has bid on, the number of items the user is winning, and the number of items
 * the user has won. The
 * BuyingSummary
 * container is only returned if
 * the
 * BuyingSummary.Include
 * field is included in the
 * GetMyeBayBuying
 * request and set to
 * <code>true</code>.
 **/
class BuyingSummaryType extends EbatNs_ComplexType
{
    const TAG = 'BuyingSummaryType';
    const NAME = 'BuyingSummaryType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var int|null
     */
    protected $BiddingCount = null;

    /**
     * @var int|null
     */
    protected $WinningCount = null;

    /**
     * @var AmountType|null
     */
    protected $TotalWinningCost = null;

    /**
     * @var int|null
     */
    protected $WonCount = null;

    /**
     * @var AmountType|null
     */
    protected $TotalWonCost = null;

    /**
     * @var int|null
     */
    protected $WonDurationInDays = null;

    /**
     * @var int|null
     */
    protected $BestOfferCount = null;


    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBiddingCount()
    {
        return $this->_dc($this->BiddingCount, 'BiddingCount');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setBiddingCount($value)
    {
        $this->BiddingCount = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getWinningCount()
    {
        return $this->_dc($this->WinningCount, 'WinningCount');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setWinningCount($value)
    {
        $this->WinningCount = self::_int($value);
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTotalWinningCost()
    {
        return $this->_dc($this->TotalWinningCost, 'TotalWinningCost');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setTotalWinningCost($value)
    {
        $this->TotalWinningCost = $value;
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getWonCount()
    {
        return $this->_dc($this->WonCount, 'WonCount');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setWonCount($value)
    {
        $this->WonCount = self::_int($value);
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTotalWonCost()
    {
        return $this->_dc($this->TotalWonCost, 'TotalWonCost');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setTotalWonCost($value)
    {
        $this->TotalWonCost = $value;
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getWonDurationInDays()
    {
        return $this->_dc($this->WonDurationInDays, 'WonDurationInDays');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setWonDurationInDays($value)
    {
        $this->WonDurationInDays = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBestOfferCount()
    {
        return $this->_dc($this->BestOfferCount, 'BestOfferCount');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setBestOfferCount($value)
    {
        $this->BestOfferCount = self::_int($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'BiddingCount' => ['type' => 'int'],
            'WinningCount' => ['type' => 'int'],
            'TotalWinningCost' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'WonCount' => ['type' => 'int'],
            'TotalWonCost' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'WonDurationInDays' => ['type' => 'int'],
            'BestOfferCount' => ['type' => 'int']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

BuyingSummaryType::_register();

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
 * Specifies all feedback summary information (except Score). Contains
 * FeedbackPeriodArrayType objects that each convey feedback counts for positive,
 * negative, neutral, and total feedback counts - for various time periods each. Also
 * conveys counts of bid retractions for the predefined time periods.
 **/
class FeedbackSummaryType extends EbatNs_ComplexType
{
    const TAG = 'FeedbackSummaryType';
    const NAME = 'FeedbackSummaryType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var FeedbackPeriodArrayType|null
     */
    protected $BidRetractionFeedbackPeriodArray = null;

    /**
     * @var FeedbackPeriodArrayType|null
     */
    protected $NegativeFeedbackPeriodArray = null;

    /**
     * @var FeedbackPeriodArrayType|null
     */
    protected $NeutralFeedbackPeriodArray = null;

    /**
     * @var FeedbackPeriodArrayType|null
     */
    protected $PositiveFeedbackPeriodArray = null;

    /**
     * @var FeedbackPeriodArrayType|null
     */
    protected $TotalFeedbackPeriodArray = null;

    /**
     * @var int|null
     */
    protected $NeutralCommentCountFromSuspendedUsers = null;

    /**
     * @var int|null
     */
    protected $UniqueNegativeFeedbackCount = null;

    /**
     * @var int|null
     */
    protected $UniquePositiveFeedbackCount = null;

    /**
     * @var int|null
     */
    protected $UniqueNeutralFeedbackCount = null;

    /**
     * @var SellerRatingSummaryArrayType|null
     */
    protected $SellerRatingSummaryArray = null;

    /**
     * @var SellerRoleMetricsType|null
     */
    protected $SellerRoleMetrics = null;

    /**
     * @var BuyerRoleMetricsType|null
     */
    protected $BuyerRoleMetrics = null;


    /**
     * @return FeedbackPeriodArrayType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBidRetractionFeedbackPeriodArray()
    {
        return $this->_dc($this->BidRetractionFeedbackPeriodArray, 'BidRetractionFeedbackPeriodArray');
    }

    /**
     * @param FeedbackPeriodArrayType|null $value
     * @return void
     */
    public function setBidRetractionFeedbackPeriodArray($value)
    {
        $this->BidRetractionFeedbackPeriodArray = $value;
    }

    /**
     * @return FeedbackPeriodArrayType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getNegativeFeedbackPeriodArray()
    {
        return $this->_dc($this->NegativeFeedbackPeriodArray, 'NegativeFeedbackPeriodArray');
    }

    /**
     * @param FeedbackPeriodArrayType|null $value
     * @return void
     */
    public function setNegativeFeedbackPeriodArray($value)
    {
        $this->NegativeFeedbackPeriodArray = $value;
    }

    /**
     * @return FeedbackPeriodArrayType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getNeutralFeedbackPeriodArray()
    {
        return $this->_dc($this->NeutralFeedbackPeriodArray, 'NeutralFeedbackPeriodArray');
    }

    /**
     * @param FeedbackPeriodArrayType|null $value
     * @return void
     */
    public function setNeutralFeedbackPeriodArray($value)
    {
        $this->NeutralFeedbackPeriodArray = $value;
    }

    /**
     * @return FeedbackPeriodArrayType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPositiveFeedbackPeriodArray()
    {
        return $this->_dc($this->PositiveFeedbackPeriodArray, 'PositiveFeedbackPeriodArray');
    }

    /**
     * @param FeedbackPeriodArrayType|null $value
     * @return void
     */
    public function setPositiveFeedbackPeriodArray($value)
    {
        $this->PositiveFeedbackPeriodArray = $value;
    }

    /**
     * @return FeedbackPeriodArrayType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTotalFeedbackPeriodArray()
    {
        return $this->_dc($this->TotalFeedbackPeriodArray, 'TotalFeedbackPeriodArray');
    }

    /**
     * @param FeedbackPeriodArrayType|null $value
     * @return void
     */
    public function setTotalFeedbackPeriodArray($value)
    {
        $this->TotalFeedbackPeriodArray = $value;
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getNeutralCommentCountFromSuspendedUsers()
    {
        return $this->_dc($this->NeutralCommentCountFromSuspendedUsers, 'NeutralCommentCountFromSuspendedUsers');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setNeutralCommentCountFromSuspendedUsers($value)
    {
        $this->NeutralCommentCountFromSuspendedUsers = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getUniqueNegativeFeedbackCount()
    {
        return $this->_dc($this->UniqueNegativeFeedbackCount, 'UniqueNegativeFeedbackCount');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setUniqueNegativeFeedbackCount($value)
    {
        $this->UniqueNegativeFeedbackCount = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getUniquePositiveFeedbackCount()
    {
        return $this->_dc($this->UniquePositiveFeedbackCount, 'UniquePositiveFeedbackCount');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setUniquePositiveFeedbackCount($value)
    {
        $this->UniquePositiveFeedbackCount = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getUniqueNeutralFeedbackCount()
    {
        return $this->_dc($this->UniqueNeutralFeedbackCount, 'UniqueNeutralFeedbackCount');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setUniqueNeutralFeedbackCount($value)
    {
        $this->UniqueNeutralFeedbackCount = self::_int($value);
    }

    /**
     * @return SellerRatingSummaryArrayType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSellerRatingSummaryArray()
    {
        return $this->_dc($this->SellerRatingSummaryArray, 'SellerRatingSummaryArray');
    }

    /**
     * @param SellerRatingSummaryArrayType|null $value
     * @return void
     */
    public function setSellerRatingSummaryArray($value)
    {
        $this->SellerRatingSummaryArray = $value;
    }

    /**
     * @return SellerRoleMetricsType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSellerRoleMetrics()
    {
        return $this->_dc($this->SellerRoleMetrics, 'SellerRoleMetrics');
    }

    /**
     * @param SellerRoleMetricsType|null $value
     * @return void
     */
    public function setSellerRoleMetrics($value)
    {
        $this->SellerRoleMetrics = $value;
    }

    /**
     * @return BuyerRoleMetricsType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBuyerRoleMetrics()
    {
        return $this->_dc($this->BuyerRoleMetrics, 'BuyerRoleMetrics');
    }

    /**
     * @param BuyerRoleMetricsType|null $value
     * @return void
     */
    public function setBuyerRoleMetrics($value)
    {
        $this->BuyerRoleMetrics = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'BidRetractionFeedbackPeriodArray' => ['type' => 'FeedbackPeriodArrayType', 'xmlns' => self::XMLNS],
            'NegativeFeedbackPeriodArray' => ['type' => 'FeedbackPeriodArrayType', 'xmlns' => self::XMLNS],
            'NeutralFeedbackPeriodArray' => ['type' => 'FeedbackPeriodArrayType', 'xmlns' => self::XMLNS],
            'PositiveFeedbackPeriodArray' => ['type' => 'FeedbackPeriodArrayType', 'xmlns' => self::XMLNS],
            'TotalFeedbackPeriodArray' => ['type' => 'FeedbackPeriodArrayType', 'xmlns' => self::XMLNS],
            'NeutralCommentCountFromSuspendedUsers' => ['type' => 'int'],
            'UniqueNegativeFeedbackCount' => ['type' => 'int'],
            'UniquePositiveFeedbackCount' => ['type' => 'int'],
            'UniqueNeutralFeedbackCount' => ['type' => 'int'],
            'SellerRatingSummaryArray' => ['type' => 'SellerRatingSummaryArrayType', 'xmlns' => self::XMLNS],
            'SellerRoleMetrics' => ['type' => 'SellerRoleMetricsType', 'xmlns' => self::XMLNS],
            'BuyerRoleMetrics' => ['type' => 'BuyerRoleMetricsType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

FeedbackSummaryType::_register();

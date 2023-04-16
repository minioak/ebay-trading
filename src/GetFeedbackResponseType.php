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
 * The
 * GetFeedback
 * response contains the feedback summary if a
 * TransactionID
 * or
 * ItemID
 * is specified, and contains the specified user's total feedback score and feedback summary data if a
 * UserID
 * is specified. If no value is supplied, the feedback score and feedback summary for the requesting user will be
 * returned.
 * 
 * If a detail level value of
 * ReturnAll
 * is specified, an array of all feedback records will be returned.
 **/
class GetFeedbackResponseType extends EbatNs_Response
{
    const TAG = 'GetFeedbackResponseType';
    const NAME = 'GetFeedbackResponseType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var FeedbackDetailArrayType|null
     */
    protected $FeedbackDetailArray = null;

    /**
     * @var int|null
     */
    protected $FeedbackDetailItemTotal = null;

    /**
     * @var FeedbackSummaryType|null
     */
    protected $FeedbackSummary = null;

    /**
     * @var int|null
     */
    protected $FeedbackScore = null;

    /**
     * @var PaginationResultType|null
     */
    protected $PaginationResult = null;

    /**
     * @var int|null
     */
    protected $EntriesPerPage = null;

    /**
     * @var int|null
     */
    protected $PageNumber = null;


    /**
     * @return FeedbackDetailArrayType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getFeedbackDetailArray()
    {
        return $this->_dc($this->FeedbackDetailArray, 'FeedbackDetailArray');
    }

    /**
     * @param FeedbackDetailArrayType|null $value
     * @return void
     */
    public function setFeedbackDetailArray($value)
    {
        $this->FeedbackDetailArray = $value;
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getFeedbackDetailItemTotal()
    {
        return $this->_dc($this->FeedbackDetailItemTotal, 'FeedbackDetailItemTotal');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setFeedbackDetailItemTotal($value)
    {
        $this->FeedbackDetailItemTotal = self::_int($value);
    }

    /**
     * @return FeedbackSummaryType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getFeedbackSummary()
    {
        return $this->_dc($this->FeedbackSummary, 'FeedbackSummary');
    }

    /**
     * @param FeedbackSummaryType|null $value
     * @return void
     */
    public function setFeedbackSummary($value)
    {
        $this->FeedbackSummary = $value;
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getFeedbackScore()
    {
        return $this->_dc($this->FeedbackScore, 'FeedbackScore');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setFeedbackScore($value)
    {
        $this->FeedbackScore = self::_int($value);
    }

    /**
     * @return PaginationResultType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPaginationResult()
    {
        return $this->_dc($this->PaginationResult, 'PaginationResult');
    }

    /**
     * @param PaginationResultType|null $value
     * @return void
     */
    public function setPaginationResult($value)
    {
        $this->PaginationResult = $value;
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEntriesPerPage()
    {
        return $this->_dc($this->EntriesPerPage, 'EntriesPerPage');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setEntriesPerPage($value)
    {
        $this->EntriesPerPage = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPageNumber()
    {
        return $this->_dc($this->PageNumber, 'PageNumber');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setPageNumber($value)
    {
        $this->PageNumber = self::_int($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'FeedbackDetailArray' => ['type' => 'FeedbackDetailArrayType', 'xmlns' => self::XMLNS],
            'FeedbackDetailItemTotal' => ['type' => 'int'],
            'FeedbackSummary' => ['type' => 'FeedbackSummaryType', 'xmlns' => self::XMLNS],
            'FeedbackScore' => ['type' => 'int'],
            'PaginationResult' => ['type' => 'PaginationResultType', 'xmlns' => self::XMLNS],
            'EntriesPerPage' => ['type' => 'int'],
            'PageNumber' => ['type' => 'int']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

GetFeedbackResponseType::_register();

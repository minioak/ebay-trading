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
 * Type used by the
 * FeedbackDetail
 * containers that are returned in the
 * GetFeedback
 * response. Each
 * FeedbackDetail
 * container consists of detailed information on one Feedback entry for a specific
 * order line item. This container will only be returned if uses the
 * DetailLevel
 * field and sets its value to <code>ReturnAll</code>.
 * 
 * <span class="tablenote">
 * Note:
 * Although it is possible for users to retrieve Feedback entries for order line items in which they are not the
 * buyer or seller, some of the fields of the
 * FeedbackDetail
 * container will not be returned or masked. More details on the fields that will not be returned or masked are
 * discussed in this type's individual fields.
 * </span>
 **/
class FeedbackDetailType extends EbatNs_ComplexType
{
    const TAG = 'FeedbackDetailType';
    const NAME = 'FeedbackDetailType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var UserIDType|null
     */
    protected $CommentingUser = null;

    /**
     * @var FeedbackRatingStarCodeType|null
     */
    protected $FeedbackRatingStar = null;

    /**
     * @var int|null
     */
    protected $CommentingUserScore = null;

    /**
     * @var string|null
     */
    protected $CommentText = null;

    /**
     * @var string|null
     */
    protected $CommentTime = null;

    /**
     * @var CommentTypeCodeType|null
     */
    protected $CommentType = null;

    /**
     * @var string|null
     */
    protected $FeedbackResponse = null;

    /**
     * @var string|null
     */
    protected $Followup = null;

    /**
     * @var ItemIDType|null
     */
    protected $ItemID = null;

    /**
     * @var TradingRoleCodeType|null
     */
    protected $Role = null;

    /**
     * @var string|null
     */
    protected $ItemTitle = null;

    /**
     * @var AmountType|null
     */
    protected $ItemPrice = null;

    /**
     * @var string|null
     */
    protected $FeedbackID = null;

    /**
     * @var string|null
     */
    protected $TransactionID = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $CommentReplaced = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $ResponseReplaced = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $FollowUpReplaced = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $Countable = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $FeedbackRevised = null;

    /**
     * @var string|null
     */
    protected $OrderLineItemID = null;


    /**
     * @return UserIDType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCommentingUser()
    {
        return $this->_dc($this->CommentingUser, 'CommentingUser');
    }

    /**
     * @param UserIDType|null $value
     * @return void
     */
    public function setCommentingUser($value)
    {
        $this->CommentingUser = $value;
    }

    /**
     * @return FeedbackRatingStarCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getFeedbackRatingStar()
    {
        return $this->_dc($this->FeedbackRatingStar);
    }

    /**
     * @param FeedbackRatingStarCodeType|null $value
     * @return void
     */
    public function setFeedbackRatingStar($value)
    {
        $this->FeedbackRatingStar = $this->_enum($value, FeedbackRatingStarCodeType::class);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCommentingUserScore()
    {
        return $this->_dc($this->CommentingUserScore, 'CommentingUserScore');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setCommentingUserScore($value)
    {
        $this->CommentingUserScore = self::_int($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCommentText()
    {
        return $this->_dc($this->CommentText, 'CommentText');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setCommentText($value)
    {
        $this->CommentText = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCommentTime()
    {
        return $this->_dc($this->CommentTime, 'CommentTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setCommentTime($value)
    {
        $this->CommentTime = self::_string($value);
    }

    /**
     * @return CommentTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCommentType()
    {
        return $this->_dc($this->CommentType);
    }

    /**
     * @param CommentTypeCodeType|null $value
     * @return void
     */
    public function setCommentType($value)
    {
        $this->CommentType = $this->_enum($value, CommentTypeCodeType::class);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getFeedbackResponse()
    {
        return $this->_dc($this->FeedbackResponse, 'FeedbackResponse');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setFeedbackResponse($value)
    {
        $this->FeedbackResponse = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getFollowup()
    {
        return $this->_dc($this->Followup, 'Followup');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setFollowup($value)
    {
        $this->Followup = self::_string($value);
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
     * @return TradingRoleCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getRole()
    {
        return $this->_dc($this->Role);
    }

    /**
     * @param TradingRoleCodeType|null $value
     * @return void
     */
    public function setRole($value)
    {
        $this->Role = $this->_enum($value, TradingRoleCodeType::class);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getItemTitle()
    {
        return $this->_dc($this->ItemTitle, 'ItemTitle');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setItemTitle($value)
    {
        $this->ItemTitle = self::_string($value);
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getItemPrice()
    {
        return $this->_dc($this->ItemPrice, 'ItemPrice');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setItemPrice($value)
    {
        $this->ItemPrice = $value;
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getFeedbackID()
    {
        return $this->_dc($this->FeedbackID, 'FeedbackID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setFeedbackID($value)
    {
        $this->FeedbackID = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTransactionID()
    {
        return $this->_dc($this->TransactionID, 'TransactionID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setTransactionID($value)
    {
        $this->TransactionID = self::_string($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCommentReplaced()
    {
        return $this->_dc($this->CommentReplaced === 'true', 'CommentReplaced');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setCommentReplaced($value)
    {
        $this->CommentReplaced = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getResponseReplaced()
    {
        return $this->_dc($this->ResponseReplaced === 'true', 'ResponseReplaced');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setResponseReplaced($value)
    {
        $this->ResponseReplaced = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getFollowUpReplaced()
    {
        return $this->_dc($this->FollowUpReplaced === 'true', 'FollowUpReplaced');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setFollowUpReplaced($value)
    {
        $this->FollowUpReplaced = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCountable()
    {
        return $this->_dc($this->Countable === 'true', 'Countable');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setCountable($value)
    {
        $this->Countable = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getFeedbackRevised()
    {
        return $this->_dc($this->FeedbackRevised === 'true', 'FeedbackRevised');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setFeedbackRevised($value)
    {
        $this->FeedbackRevised = self::_bool($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getOrderLineItemID()
    {
        return $this->_dc($this->OrderLineItemID, 'OrderLineItemID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setOrderLineItemID($value)
    {
        $this->OrderLineItemID = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'CommentingUser' => ['type' => 'UserIDType', 'xmlns' => self::XMLNS],
            'FeedbackRatingStar' => ['type' => 'FeedbackRatingStarCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'CommentingUserScore' => ['type' => 'int'],
            'CommentText' => [],
            'CommentTime' => [],
            'CommentType' => ['type' => 'CommentTypeCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'FeedbackResponse' => [],
            'Followup' => [],
            'ItemID' => ['type' => 'ItemIDType', 'xmlns' => self::XMLNS],
            'Role' => ['type' => 'TradingRoleCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'ItemTitle' => [],
            'ItemPrice' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'FeedbackID' => [],
            'TransactionID' => [],
            'CommentReplaced' => ['type' => 'bool'],
            'ResponseReplaced' => ['type' => 'bool'],
            'FollowUpReplaced' => ['type' => 'bool'],
            'Countable' => ['type' => 'bool'],
            'FeedbackRevised' => ['type' => 'bool'],
            'OrderLineItemID' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

FeedbackDetailType::_register();

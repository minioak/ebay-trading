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
 * Retrieves one, many, or all Feedback records for a specific eBay user. There is a filter option in the call
 * request to limit Feedback records to those that are received, or to those that are left for other buyers, as well
 * as a filter option to limit Feedback records to those that are received as a buyer or seller.
 **/
class GetFeedbackRequestType extends AbstractRequestType
{
    const TAG = 'GetFeedbackRequest';
    const NAME = 'GetFeedbackRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'GetFeedback';

    /**
     * @var UserIDType|null
     */
    protected $UserID = null;

    /**
     * @var string|null
     */
    protected $FeedbackID = null;

    /**
     * @var ItemIDType|null
     */
    protected $ItemID = null;

    /**
     * @var string|null
     */
    protected $TransactionID = null;

    /**
     * @var CommentTypeCodeType[]|null
     */
    protected $CommentType = [];

    /**
     * @var FeedbackTypeCodeType|null
     */
    protected $FeedbackType = null;

    /**
     * @var PaginationType|null
     */
    protected $Pagination = null;

    /**
     * @var string|null
     */
    protected $OrderLineItemID = null;


    /**
     * @return UserIDType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getUserID()
    {
        return $this->_dc($this->UserID, 'UserID');
    }

    /**
     * @param UserIDType|null $value
     * @return void
     */
    public function setUserID($value)
    {
        $this->UserID = $value;
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
     * @return string[]|CommentTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getCommentType($index = null)
    {
        return $this->_dc($index === null
            ? $this->CommentType
            : (count($this->CommentType) > $index
                ? $this->CommentType[$index]
                : null));
    }

    /**
     * @param CommentTypeCodeType|null|string[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setCommentType($value, $index = null)
    {
        if ($index === null) {
            $this->CommentType = $value;
        } else {
            $this->CommentType[$index] = [];
            
            foreach ($value as $item) {
                $this->addCommentType($item);
            }
        }
    }

    /**
     * @param CommentTypeCodeType|null $value
     * @return void
     */
    public function addCommentType($value)
    {
        $this->CommentType[] = $this->_enum($value, CommentTypeCodeType::class);
    }

    /**
     * @return FeedbackTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getFeedbackType()
    {
        return $this->_dc($this->FeedbackType);
    }

    /**
     * @param FeedbackTypeCodeType|null $value
     * @return void
     */
    public function setFeedbackType($value)
    {
        $this->FeedbackType = $this->_enum($value, FeedbackTypeCodeType::class);
    }

    /**
     * @return PaginationType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPagination()
    {
        return $this->_dc($this->Pagination, 'Pagination');
    }

    /**
     * @param PaginationType|null $value
     * @return void
     */
    public function setPagination($value)
    {
        $this->Pagination = $value;
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
     * @return GetFeedbackResponseType|EbatNs_ResponseError
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
            'UserID' => ['type' => 'UserIDType', 'xmlns' => self::XMLNS],
            'FeedbackID' => [],
            'ItemID' => ['type' => 'ItemIDType', 'xmlns' => self::XMLNS],
            'TransactionID' => [],
            'CommentType' => ['type' => 'CommentTypeCodeType', 'enum' => true, 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'FeedbackType' => ['type' => 'FeedbackTypeCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'Pagination' => ['type' => 'PaginationType', 'xmlns' => self::XMLNS],
            'OrderLineItemID' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

GetFeedbackRequestType::_register();

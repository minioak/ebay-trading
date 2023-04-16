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
 * Enables a buyer and seller to leave Feedback for their order partner at the
 * conclusion of a successful order.
 **/
class LeaveFeedbackRequestType extends AbstractRequestType
{
    const TAG = 'LeaveFeedbackRequest';
    const NAME = 'LeaveFeedbackRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'LeaveFeedback';

    /**
     * @var ItemIDType|null
     */
    protected $ItemID = null;

    /**
     * @var string|null
     */
    protected $CommentText = null;

    /**
     * @var CommentTypeCodeType|null
     */
    protected $CommentType = null;

    /**
     * @var string|null
     */
    protected $TransactionID = null;

    /**
     * @var UserIDType|null
     */
    protected $TargetUser = null;

    /**
     * @var ItemRatingDetailArrayType|null
     */
    protected $SellerItemRatingDetailArray = null;

    /**
     * @var string|null
     */
    protected $OrderLineItemID = null;

    /**
     * @var ItemArrivedWithinEDDCodeType|null
     */
    protected $ItemArrivedWithinEDDType = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $ItemDeliveredWithinEDD = null;


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
     * @return UserIDType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTargetUser()
    {
        return $this->_dc($this->TargetUser, 'TargetUser');
    }

    /**
     * @param UserIDType|null $value
     * @return void
     */
    public function setTargetUser($value)
    {
        $this->TargetUser = $value;
    }

    /**
     * @return ItemRatingDetailArrayType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSellerItemRatingDetailArray()
    {
        return $this->_dc($this->SellerItemRatingDetailArray, 'SellerItemRatingDetailArray');
    }

    /**
     * @param ItemRatingDetailArrayType|null $value
     * @return void
     */
    public function setSellerItemRatingDetailArray($value)
    {
        $this->SellerItemRatingDetailArray = $value;
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
     * @return ItemArrivedWithinEDDCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getItemArrivedWithinEDDType()
    {
        return $this->_dc($this->ItemArrivedWithinEDDType);
    }

    /**
     * @param ItemArrivedWithinEDDCodeType|null $value
     * @return void
     */
    public function setItemArrivedWithinEDDType($value)
    {
        $this->ItemArrivedWithinEDDType = $this->_enum($value, ItemArrivedWithinEDDCodeType::class);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getItemDeliveredWithinEDD()
    {
        return $this->_dc($this->ItemDeliveredWithinEDD === 'true', 'ItemDeliveredWithinEDD');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setItemDeliveredWithinEDD($value)
    {
        $this->ItemDeliveredWithinEDD = self::_bool($value);
    }

    /**
     * @return LeaveFeedbackResponseType|EbatNs_ResponseError
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
            'CommentText' => [],
            'CommentType' => ['type' => 'CommentTypeCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'TransactionID' => [],
            'TargetUser' => ['type' => 'UserIDType', 'xmlns' => self::XMLNS],
            'SellerItemRatingDetailArray' => ['type' => 'ItemRatingDetailArrayType', 'xmlns' => self::XMLNS],
            'OrderLineItemID' => [],
            'ItemArrivedWithinEDDType' => ['type' => 'ItemArrivedWithinEDDCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'ItemDeliveredWithinEDD' => ['type' => 'bool']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

LeaveFeedbackRequestType::_register();

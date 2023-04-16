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
 * Enables a seller to reply to Feedback that has been left for a user, or to post a
 * follow-up comment to a Feedback comment the user has left for someone else.
 **/
class RespondToFeedbackRequestType extends AbstractRequestType
{
    const TAG = 'RespondToFeedbackRequest';
    const NAME = 'RespondToFeedbackRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'RespondToFeedback';

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
     * @var UserIDType|null
     */
    protected $TargetUserID = null;

    /**
     * @var FeedbackResponseCodeType|null
     */
    protected $ResponseType = null;

    /**
     * @var string|null
     */
    protected $ResponseText = null;

    /**
     * @var string|null
     */
    protected $OrderLineItemID = null;


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
     * @return UserIDType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTargetUserID()
    {
        return $this->_dc($this->TargetUserID, 'TargetUserID');
    }

    /**
     * @param UserIDType|null $value
     * @return void
     */
    public function setTargetUserID($value)
    {
        $this->TargetUserID = $value;
    }

    /**
     * @return FeedbackResponseCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getResponseType()
    {
        return $this->_dc($this->ResponseType);
    }

    /**
     * @param FeedbackResponseCodeType|null $value
     * @return void
     */
    public function setResponseType($value)
    {
        $this->ResponseType = $this->_enum($value, FeedbackResponseCodeType::class);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getResponseText()
    {
        return $this->_dc($this->ResponseText, 'ResponseText');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setResponseText($value)
    {
        $this->ResponseText = self::_string($value);
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
     * @return RespondToFeedbackResponseType|EbatNs_ResponseError
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
            'FeedbackID' => [],
            'ItemID' => ['type' => 'ItemIDType', 'xmlns' => self::XMLNS],
            'TransactionID' => [],
            'TargetUserID' => ['type' => 'UserIDType', 'xmlns' => self::XMLNS],
            'ResponseType' => ['type' => 'FeedbackResponseCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'ResponseText' => [],
            'OrderLineItemID' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

RespondToFeedbackRequestType::_register();

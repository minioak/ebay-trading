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
 * Retrieves a list of the messages buyers have posted about your
 * active item listings.
 **/
class GetMemberMessagesRequestType extends AbstractRequestType
{
    const TAG = 'GetMemberMessagesRequest';
    const NAME = 'GetMemberMessagesRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'GetMemberMessages';

    /**
     * @var ItemIDType|null
     */
    protected $ItemID = null;

    /**
     * @var MessageTypeCodeType|null
     */
    protected $MailMessageType = null;

    /**
     * @var MessageStatusTypeCodeType|null
     */
    protected $MessageStatus = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $DisplayToPublic = null;

    /**
     * @var string|null
     */
    protected $StartCreationTime = null;

    /**
     * @var string|null
     */
    protected $EndCreationTime = null;

    /**
     * @var PaginationType|null
     */
    protected $Pagination = null;

    /**
     * @var string|null
     */
    protected $MemberMessageID = null;

    /**
     * @var UserIDType|null
     */
    protected $SenderID = null;


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
     * @return MessageTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMailMessageType()
    {
        return $this->_dc($this->MailMessageType);
    }

    /**
     * @param MessageTypeCodeType|null $value
     * @return void
     */
    public function setMailMessageType($value)
    {
        $this->MailMessageType = $this->_enum($value, MessageTypeCodeType::class);
    }

    /**
     * @return MessageStatusTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMessageStatus()
    {
        return $this->_dc($this->MessageStatus);
    }

    /**
     * @param MessageStatusTypeCodeType|null $value
     * @return void
     */
    public function setMessageStatus($value)
    {
        $this->MessageStatus = $this->_enum($value, MessageStatusTypeCodeType::class);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDisplayToPublic()
    {
        return $this->_dc($this->DisplayToPublic === 'true', 'DisplayToPublic');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setDisplayToPublic($value)
    {
        $this->DisplayToPublic = self::_bool($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getStartCreationTime()
    {
        return $this->_dc($this->StartCreationTime, 'StartCreationTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setStartCreationTime($value)
    {
        $this->StartCreationTime = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEndCreationTime()
    {
        return $this->_dc($this->EndCreationTime, 'EndCreationTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setEndCreationTime($value)
    {
        $this->EndCreationTime = self::_string($value);
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
    public function getMemberMessageID()
    {
        return $this->_dc($this->MemberMessageID, 'MemberMessageID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setMemberMessageID($value)
    {
        $this->MemberMessageID = self::_string($value);
    }

    /**
     * @return UserIDType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSenderID()
    {
        return $this->_dc($this->SenderID, 'SenderID');
    }

    /**
     * @param UserIDType|null $value
     * @return void
     */
    public function setSenderID($value)
    {
        $this->SenderID = $value;
    }

    /**
     * @return GetMemberMessagesResponseType|EbatNs_ResponseError
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
            'MailMessageType' => ['type' => 'MessageTypeCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'MessageStatus' => ['type' => 'MessageStatusTypeCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'DisplayToPublic' => ['type' => 'bool'],
            'StartCreationTime' => [],
            'EndCreationTime' => [],
            'Pagination' => ['type' => 'PaginationType', 'xmlns' => self::XMLNS],
            'MemberMessageID' => [],
            'SenderID' => ['type' => 'UserIDType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

GetMemberMessagesRequestType::_register();

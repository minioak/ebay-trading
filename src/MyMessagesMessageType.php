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
 * Container for the message information for each message specified in
 * MessageIDs. The amount and type of information returned varies based on
 * the requested detail level.
 **/
class MyMessagesMessageType extends EbatNs_ComplexType
{
    const TAG = 'MyMessagesMessageType';
    const NAME = 'MyMessagesMessageType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $Sender = null;

    /**
     * @var string|null
     */
    protected $RecipientUserID = null;

    /**
     * @var string|null
     */
    protected $SendToName = null;

    /**
     * @var string|null
     */
    protected $Subject = null;

    /**
     * @var MyMessagesMessageIDType|null
     */
    protected $MessageID = null;

    /**
     * @var string|null
     */
    protected $ExternalMessageID = null;

    /**
     * @var string|null
     */
    protected $ContentType = null;

    /**
     * @var string|null
     */
    protected $Text = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $Flagged = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $Read = null;

    /**
     * @var string|null
     */
    protected $CreationDate = null;

    /**
     * @var string|null
     */
    protected $ReceiveDate = null;

    /**
     * @var string|null
     */
    protected $ExpirationDate = null;

    /**
     * @var ItemIDType|null
     */
    protected $ItemID = null;

    /**
     * @var MyMessagesResponseDetailsType|null
     */
    protected $ResponseDetails = null;

    /**
     * @var MyMessagesForwardDetailsType|null
     */
    protected $ForwardDetails = null;

    /**
     * @var MyMessagesFolderType|null
     */
    protected $Folder = null;

    /**
     * @var string|null
     */
    protected $Content = null;

    /**
     * @var MessageTypeCodeType|null
     */
    protected $MessageType = null;

    /**
     * @var ListingStatusCodeType|null
     */
    protected $ListingStatus = null;

    /**
     * @var QuestionTypeCodeType|null
     */
    protected $QuestionType = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $Replied = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $HighPriority = null;

    /**
     * @var string|null
     */
    protected $ItemEndTime = null;

    /**
     * @var string|null
     */
    protected $ItemTitle = null;

    /**
     * @var MessageMediaType[]|null
     */
    protected $MessageMedia = [];


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSender()
    {
        return $this->_dc($this->Sender, 'Sender');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setSender($value)
    {
        $this->Sender = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getRecipientUserID()
    {
        return $this->_dc($this->RecipientUserID, 'RecipientUserID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setRecipientUserID($value)
    {
        $this->RecipientUserID = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSendToName()
    {
        return $this->_dc($this->SendToName, 'SendToName');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setSendToName($value)
    {
        $this->SendToName = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSubject()
    {
        return $this->_dc($this->Subject, 'Subject');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setSubject($value)
    {
        $this->Subject = self::_string($value);
    }

    /**
     * @return MyMessagesMessageIDType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMessageID()
    {
        return $this->_dc($this->MessageID, 'MessageID');
    }

    /**
     * @param MyMessagesMessageIDType|null $value
     * @return void
     */
    public function setMessageID($value)
    {
        $this->MessageID = $value;
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getExternalMessageID()
    {
        return $this->_dc($this->ExternalMessageID, 'ExternalMessageID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setExternalMessageID($value)
    {
        $this->ExternalMessageID = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getContentType()
    {
        return $this->_dc($this->ContentType, 'ContentType');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setContentType($value)
    {
        $this->ContentType = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getText()
    {
        return $this->_dc($this->Text, 'Text');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setText($value)
    {
        $this->Text = self::_string($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getFlagged()
    {
        return $this->_dc($this->Flagged === 'true', 'Flagged');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setFlagged($value)
    {
        $this->Flagged = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getRead()
    {
        return $this->_dc($this->Read === 'true', 'Read');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setRead($value)
    {
        $this->Read = self::_bool($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCreationDate()
    {
        return $this->_dc($this->CreationDate, 'CreationDate');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setCreationDate($value)
    {
        $this->CreationDate = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getReceiveDate()
    {
        return $this->_dc($this->ReceiveDate, 'ReceiveDate');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setReceiveDate($value)
    {
        $this->ReceiveDate = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getExpirationDate()
    {
        return $this->_dc($this->ExpirationDate, 'ExpirationDate');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setExpirationDate($value)
    {
        $this->ExpirationDate = self::_string($value);
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
     * @return MyMessagesResponseDetailsType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getResponseDetails()
    {
        return $this->_dc($this->ResponseDetails, 'ResponseDetails');
    }

    /**
     * @param MyMessagesResponseDetailsType|null $value
     * @return void
     */
    public function setResponseDetails($value)
    {
        $this->ResponseDetails = $value;
    }

    /**
     * @return MyMessagesForwardDetailsType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getForwardDetails()
    {
        return $this->_dc($this->ForwardDetails, 'ForwardDetails');
    }

    /**
     * @param MyMessagesForwardDetailsType|null $value
     * @return void
     */
    public function setForwardDetails($value)
    {
        $this->ForwardDetails = $value;
    }

    /**
     * @return MyMessagesFolderType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getFolder()
    {
        return $this->_dc($this->Folder, 'Folder');
    }

    /**
     * @param MyMessagesFolderType|null $value
     * @return void
     */
    public function setFolder($value)
    {
        $this->Folder = $value;
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getContent()
    {
        return $this->_dc($this->Content, 'Content');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setContent($value)
    {
        $this->Content = self::_string($value);
    }

    /**
     * @return MessageTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMessageType()
    {
        return $this->_dc($this->MessageType);
    }

    /**
     * @param MessageTypeCodeType|null $value
     * @return void
     */
    public function setMessageType($value)
    {
        $this->MessageType = $this->_enum($value, MessageTypeCodeType::class);
    }

    /**
     * @return ListingStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getListingStatus()
    {
        return $this->_dc($this->ListingStatus);
    }

    /**
     * @param ListingStatusCodeType|null $value
     * @return void
     */
    public function setListingStatus($value)
    {
        $this->ListingStatus = $this->_enum($value, ListingStatusCodeType::class);
    }

    /**
     * @return QuestionTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getQuestionType()
    {
        return $this->_dc($this->QuestionType);
    }

    /**
     * @param QuestionTypeCodeType|null $value
     * @return void
     */
    public function setQuestionType($value)
    {
        $this->QuestionType = $this->_enum($value, QuestionTypeCodeType::class);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getReplied()
    {
        return $this->_dc($this->Replied === 'true', 'Replied');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setReplied($value)
    {
        $this->Replied = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getHighPriority()
    {
        return $this->_dc($this->HighPriority === 'true', 'HighPriority');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setHighPriority($value)
    {
        $this->HighPriority = self::_bool($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getItemEndTime()
    {
        return $this->_dc($this->ItemEndTime, 'ItemEndTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setItemEndTime($value)
    {
        $this->ItemEndTime = self::_string($value);
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
     * @return MessageMediaType[]|MessageMediaType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getMessageMedia($index = null)
    {
        return $this->_dc($index === null
            ? $this->MessageMedia
            : (count($this->MessageMedia) > $index
                ? $this->MessageMedia[$index]
                : null), 'MessageMedia');
    }

    /**
     * @param MessageMediaType|null|MessageMediaType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setMessageMedia($value, $index = null)
    {
        if ($index === null) {
            $this->MessageMedia = $value;
        } else {
            $this->MessageMedia[$index] = [];
            
            foreach ($value as $item) {
                $this->addMessageMedia($item);
            }
        }
    }

    /**
     * @param MessageMediaType|null $value
     * @return void
     */
    public function addMessageMedia($value)
    {
        $this->MessageMedia[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'Sender' => [],
            'RecipientUserID' => [],
            'SendToName' => [],
            'Subject' => [],
            'MessageID' => ['type' => 'MyMessagesMessageIDType', 'xmlns' => self::XMLNS],
            'ExternalMessageID' => [],
            'ContentType' => [],
            'Text' => [],
            'Flagged' => ['type' => 'bool'],
            'Read' => ['type' => 'bool'],
            'CreationDate' => [],
            'ReceiveDate' => [],
            'ExpirationDate' => [],
            'ItemID' => ['type' => 'ItemIDType', 'xmlns' => self::XMLNS],
            'ResponseDetails' => ['type' => 'MyMessagesResponseDetailsType', 'xmlns' => self::XMLNS],
            'ForwardDetails' => ['type' => 'MyMessagesForwardDetailsType', 'xmlns' => self::XMLNS],
            'Folder' => ['type' => 'MyMessagesFolderType', 'xmlns' => self::XMLNS],
            'Content' => [],
            'MessageType' => ['type' => 'MessageTypeCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'ListingStatus' => ['type' => 'ListingStatusCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'QuestionType' => ['type' => 'QuestionTypeCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'Replied' => ['type' => 'bool'],
            'HighPriority' => ['type' => 'bool'],
            'ItemEndTime' => [],
            'ItemTitle' => [],
            'MessageMedia' => ['type' => 'MessageMediaType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

MyMessagesMessageType::_register();

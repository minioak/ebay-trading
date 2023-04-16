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
 * Container for individual message information.
 **/
class MemberMessageType extends EbatNs_ComplexType
{
    const TAG = 'MemberMessageType';
    const NAME = 'MemberMessageType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var MessageTypeCodeType|null
     */
    protected $MessageType = null;

    /**
     * @var QuestionTypeCodeType|null
     */
    protected $QuestionType = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $EmailCopyToSender = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $HideSendersEmailAddress = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $DisplayToPublic = null;

    /**
     * @var string|null
     */
    protected $SenderID = null;

    /**
     * @var string|null
     */
    protected $SenderEmail = null;

    /**
     * @var string[]|null
     */
    protected $RecipientID = [];

    /**
     * @var string|null
     */
    protected $Subject = null;

    /**
     * @var string|null
     */
    protected $Body = null;

    /**
     * @var string|null
     */
    protected $MessageID = null;

    /**
     * @var string|null
     */
    protected $ParentMessageID = null;

    /**
     * @var MessageMediaType[]|null
     */
    protected $MessageMedia = [];


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
    public function getEmailCopyToSender()
    {
        return $this->_dc($this->EmailCopyToSender === 'true', 'EmailCopyToSender');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setEmailCopyToSender($value)
    {
        $this->EmailCopyToSender = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getHideSendersEmailAddress()
    {
        return $this->_dc($this->HideSendersEmailAddress === 'true', 'HideSendersEmailAddress');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setHideSendersEmailAddress($value)
    {
        $this->HideSendersEmailAddress = self::_bool($value);
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
    public function getSenderID()
    {
        return $this->_dc($this->SenderID, 'SenderID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setSenderID($value)
    {
        $this->SenderID = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSenderEmail()
    {
        return $this->_dc($this->SenderEmail, 'SenderEmail');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setSenderEmail($value)
    {
        $this->SenderEmail = self::_string($value);
    }

    /**
     * @return string[]|string|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getRecipientID($index = null)
    {
        return $this->_dc($index === null
            ? $this->RecipientID
            : (count($this->RecipientID) > $index
                ? $this->RecipientID[$index]
                : null), 'RecipientID');
    }

    /**
     * @param string|null|string[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setRecipientID($value, $index = null)
    {
        if ($index === null) {
            $this->RecipientID = $value;
        } else {
            $this->RecipientID[$index] = [];
            
            foreach ($value as $item) {
                $this->addRecipientID($item);
            }
        }
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function addRecipientID($value)
    {
        $this->RecipientID[] = self::_string($value);
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
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBody()
    {
        return $this->_dc($this->Body, 'Body');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setBody($value)
    {
        $this->Body = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMessageID()
    {
        return $this->_dc($this->MessageID, 'MessageID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setMessageID($value)
    {
        $this->MessageID = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getParentMessageID()
    {
        return $this->_dc($this->ParentMessageID, 'ParentMessageID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setParentMessageID($value)
    {
        $this->ParentMessageID = self::_string($value);
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
            'MessageType' => ['type' => 'MessageTypeCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'QuestionType' => ['type' => 'QuestionTypeCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'EmailCopyToSender' => ['type' => 'bool'],
            'HideSendersEmailAddress' => ['type' => 'bool'],
            'DisplayToPublic' => ['type' => 'bool'],
            'SenderID' => [],
            'SenderEmail' => [],
            'RecipientID' => ['cardinality' => '0..*'],
            'Subject' => [],
            'Body' => [],
            'MessageID' => [],
            'ParentMessageID' => [],
            'MessageMedia' => ['type' => 'MessageMediaType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

MemberMessageType::_register();

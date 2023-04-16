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
 * This type is deprecated.
 **/
class MyMessagesAlertType extends EbatNs_ComplexType
{
    const TAG = 'MyMessagesAlertType';
    const NAME = 'MyMessagesAlertType';
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
    protected $Subject = null;

    /**
     * @var string|null
     */
    protected $Priority = null;

    /**
     * @var MyMessagesAlertIDType|null
     */
    protected $AlertID = null;

    /**
     * @var string|null
     */
    protected $ExternalAlertID = null;

    /**
     * @var string|null
     */
    protected $ContentType = null;

    /**
     * @var string|null
     */
    protected $Text = null;

    /**
     * @var MyMessagesAlertResolutionStatusCode|null
     */
    protected $ResolutionStatus = null;

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
     * @var string|null
     */
    protected $ResolutionDate = null;

    /**
     * @var string|null
     */
    protected $LastReadDate = null;

    /**
     * @var ItemIDType|null
     */
    protected $ItemID = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $IsTimedResolution = null;

    /**
     * @var string|null
     */
    protected $ActionURL = null;

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
    public function getPriority()
    {
        return $this->_dc($this->Priority, 'Priority');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setPriority($value)
    {
        $this->Priority = self::_string($value);
    }

    /**
     * @return MyMessagesAlertIDType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getAlertID()
    {
        return $this->_dc($this->AlertID, 'AlertID');
    }

    /**
     * @param MyMessagesAlertIDType|null $value
     * @return void
     */
    public function setAlertID($value)
    {
        $this->AlertID = $value;
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getExternalAlertID()
    {
        return $this->_dc($this->ExternalAlertID, 'ExternalAlertID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setExternalAlertID($value)
    {
        $this->ExternalAlertID = self::_string($value);
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
     * @return MyMessagesAlertResolutionStatusCode|null|mixed Depending on the assigned data converter: mixed
     */
    public function getResolutionStatus()
    {
        return $this->_dc($this->ResolutionStatus);
    }

    /**
     * @param MyMessagesAlertResolutionStatusCode|null $value
     * @return void
     */
    public function setResolutionStatus($value)
    {
        $this->ResolutionStatus = $this->_enum($value, MyMessagesAlertResolutionStatusCode::class);
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
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getResolutionDate()
    {
        return $this->_dc($this->ResolutionDate, 'ResolutionDate');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setResolutionDate($value)
    {
        $this->ResolutionDate = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getLastReadDate()
    {
        return $this->_dc($this->LastReadDate, 'LastReadDate');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setLastReadDate($value)
    {
        $this->LastReadDate = self::_string($value);
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
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getIsTimedResolution()
    {
        return $this->_dc($this->IsTimedResolution === 'true', 'IsTimedResolution');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setIsTimedResolution($value)
    {
        $this->IsTimedResolution = self::_bool($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getActionURL()
    {
        return $this->_dc($this->ActionURL, 'ActionURL');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setActionURL($value)
    {
        $this->ActionURL = self::_string($value);
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
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'Sender' => [],
            'RecipientUserID' => [],
            'Subject' => [],
            'Priority' => [],
            'AlertID' => ['type' => 'MyMessagesAlertIDType', 'xmlns' => self::XMLNS],
            'ExternalAlertID' => [],
            'ContentType' => [],
            'Text' => [],
            'ResolutionStatus' => ['type' => 'MyMessagesAlertResolutionStatusCode', 'enum' => true, 'xmlns' => self::XMLNS],
            'Read' => ['type' => 'bool'],
            'CreationDate' => [],
            'ReceiveDate' => [],
            'ExpirationDate' => [],
            'ResolutionDate' => [],
            'LastReadDate' => [],
            'ItemID' => ['type' => 'ItemIDType', 'xmlns' => self::XMLNS],
            'IsTimedResolution' => ['type' => 'bool'],
            'ActionURL' => [],
            'ResponseDetails' => ['type' => 'MyMessagesResponseDetailsType', 'xmlns' => self::XMLNS],
            'ForwardDetails' => ['type' => 'MyMessagesForwardDetailsType', 'xmlns' => self::XMLNS],
            'Folder' => ['type' => 'MyMessagesFolderType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

MyMessagesAlertType::_register();

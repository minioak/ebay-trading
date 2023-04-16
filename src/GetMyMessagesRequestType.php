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
 * Retrieves information about the messages sent to a given user.
 **/
class GetMyMessagesRequestType extends AbstractRequestType
{
    const TAG = 'GetMyMessagesRequest';
    const NAME = 'GetMyMessagesRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'GetMyMessages';

    /**
     * @var MyMessagesAlertIDArrayType|null
     */
    protected $AlertIDs = null;

    /**
     * @var MyMessagesMessageIDArrayType|null
     */
    protected $MessageIDs = null;

    /**
     * @var int|null
     */
    protected $FolderID = null;

    /**
     * @var string|null
     */
    protected $StartTime = null;

    /**
     * @var string|null
     */
    protected $EndTime = null;

    /**
     * @var MyMessagesExternalMessageIDArrayType|null
     */
    protected $ExternalMessageIDs = null;

    /**
     * @var PaginationType|null
     */
    protected $Pagination = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $IncludeHighPriorityMessageOnly = null;


    /**
     * @return MyMessagesAlertIDArrayType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getAlertIDs()
    {
        return $this->_dc($this->AlertIDs, 'AlertIDs');
    }

    /**
     * @param MyMessagesAlertIDArrayType|null $value
     * @return void
     */
    public function setAlertIDs($value)
    {
        $this->AlertIDs = $value;
    }

    /**
     * @return MyMessagesMessageIDArrayType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMessageIDs()
    {
        return $this->_dc($this->MessageIDs, 'MessageIDs');
    }

    /**
     * @param MyMessagesMessageIDArrayType|null $value
     * @return void
     */
    public function setMessageIDs($value)
    {
        $this->MessageIDs = $value;
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getFolderID()
    {
        return $this->_dc($this->FolderID, 'FolderID');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setFolderID($value)
    {
        $this->FolderID = self::_int($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getStartTime()
    {
        return $this->_dc($this->StartTime, 'StartTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setStartTime($value)
    {
        $this->StartTime = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEndTime()
    {
        return $this->_dc($this->EndTime, 'EndTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setEndTime($value)
    {
        $this->EndTime = self::_string($value);
    }

    /**
     * @return MyMessagesExternalMessageIDArrayType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getExternalMessageIDs()
    {
        return $this->_dc($this->ExternalMessageIDs, 'ExternalMessageIDs');
    }

    /**
     * @param MyMessagesExternalMessageIDArrayType|null $value
     * @return void
     */
    public function setExternalMessageIDs($value)
    {
        $this->ExternalMessageIDs = $value;
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
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getIncludeHighPriorityMessageOnly()
    {
        return $this->_dc($this->IncludeHighPriorityMessageOnly === 'true', 'IncludeHighPriorityMessageOnly');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setIncludeHighPriorityMessageOnly($value)
    {
        $this->IncludeHighPriorityMessageOnly = self::_bool($value);
    }

    /**
     * @return GetMyMessagesResponseType|EbatNs_ResponseError
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
            'AlertIDs' => ['type' => 'MyMessagesAlertIDArrayType', 'xmlns' => self::XMLNS],
            'MessageIDs' => ['type' => 'MyMessagesMessageIDArrayType', 'xmlns' => self::XMLNS],
            'FolderID' => ['type' => 'int'],
            'StartTime' => [],
            'EndTime' => [],
            'ExternalMessageIDs' => ['type' => 'MyMessagesExternalMessageIDArrayType', 'xmlns' => self::XMLNS],
            'Pagination' => ['type' => 'PaginationType', 'xmlns' => self::XMLNS],
            'IncludeHighPriorityMessageOnly' => ['type' => 'bool']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

GetMyMessagesRequestType::_register();

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
 * This call can be used to mark one or more messages as 'Read', to flag one or more messages, and/or to move one or
 * more messages to another My Messages folder. Any of these actions can be applied on up to 10 messages with one
 * call.
 **/
class ReviseMyMessagesRequestType extends AbstractRequestType
{
    const TAG = 'ReviseMyMessagesRequest';
    const NAME = 'ReviseMyMessagesRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'ReviseMyMessages';

    /**
     * @var MyMessagesMessageIDArrayType|null
     */
    protected $MessageIDs = null;

    /**
     * @var MyMessagesAlertIDArrayType|null
     */
    protected $AlertIDs = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $Read = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $Flagged = null;

    /**
     * @var int|null
     */
    protected $FolderID = null;


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
     * @return ReviseMyMessagesResponseType|EbatNs_ResponseError
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
            'MessageIDs' => ['type' => 'MyMessagesMessageIDArrayType', 'xmlns' => self::XMLNS],
            'AlertIDs' => ['type' => 'MyMessagesAlertIDArrayType', 'xmlns' => self::XMLNS],
            'Read' => ['type' => 'bool'],
            'Flagged' => ['type' => 'bool'],
            'FolderID' => ['type' => 'int']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

ReviseMyMessagesRequestType::_register();

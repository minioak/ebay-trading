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
 * This call can be used to add, remove, or rename a custom folder in
 * My eBay Messages
 * . Note that the Inbox and Sent folders cannot be removed or renamed in
 * My eBay Messages
 * .
 * 
 * A user can have up to 10 custom folders in
 * My eBay Messages
 * , and it is possible to add, remove, or rename up to 10 custom folders with one
 * ReviseMyMessagesFolders
 * call
 **/
class ReviseMyMessagesFoldersRequestType extends AbstractRequestType
{
    const TAG = 'ReviseMyMessagesFoldersRequest';
    const NAME = 'ReviseMyMessagesFoldersRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'ReviseMyMessagesFolders';

    /**
     * @var MyMessagesFolderOperationCodeType|null
     */
    protected $Operation = null;

    /**
     * @var int[]|null
     */
    protected $FolderID = [];

    /**
     * @var string[]|null
     */
    protected $FolderName = [];


    /**
     * @return MyMessagesFolderOperationCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getOperation()
    {
        return $this->_dc($this->Operation);
    }

    /**
     * @param MyMessagesFolderOperationCodeType|null $value
     * @return void
     */
    public function setOperation($value)
    {
        $this->Operation = $this->_enum($value, MyMessagesFolderOperationCodeType::class);
    }

    /**
     * @return int[]|int|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getFolderID($index = null)
    {
        return $this->_dc($index === null
            ? $this->FolderID
            : (count($this->FolderID) > $index
                ? $this->FolderID[$index]
                : null), 'FolderID');
    }

    /**
     * @param int|null|int[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setFolderID($value, $index = null)
    {
        if ($index === null) {
            $this->FolderID = $value;
        } else {
            $this->FolderID[$index] = [];
            
            foreach ($value as $item) {
                $this->addFolderID($item);
            }
        }
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function addFolderID($value)
    {
        $this->FolderID[] = self::_int($value);
    }

    /**
     * @return string[]|string|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getFolderName($index = null)
    {
        return $this->_dc($index === null
            ? $this->FolderName
            : (count($this->FolderName) > $index
                ? $this->FolderName[$index]
                : null), 'FolderName');
    }

    /**
     * @param string|null|string[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setFolderName($value, $index = null)
    {
        if ($index === null) {
            $this->FolderName = $value;
        } else {
            $this->FolderName[$index] = [];
            
            foreach ($value as $item) {
                $this->addFolderName($item);
            }
        }
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function addFolderName($value)
    {
        $this->FolderName[] = self::_string($value);
    }

    /**
     * @return ReviseMyMessagesFoldersResponseType|EbatNs_ResponseError
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
            'Operation' => ['type' => 'MyMessagesFolderOperationCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'FolderID' => ['type' => 'int', 'cardinality' => '0..*'],
            'FolderName' => ['cardinality' => '0..*']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

ReviseMyMessagesFoldersRequestType::_register();

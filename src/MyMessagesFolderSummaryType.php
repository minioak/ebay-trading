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
 * Summary details for a specified My Messages folder.
 **/
class MyMessagesFolderSummaryType extends EbatNs_ComplexType
{
    const TAG = 'MyMessagesFolderSummaryType';
    const NAME = 'MyMessagesFolderSummaryType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var int|null
     */
    protected $FolderID = null;

    /**
     * @var string|null
     */
    protected $FolderName = null;

    /**
     * @var int|null
     */
    protected $NewAlertCount = null;

    /**
     * @var int|null
     */
    protected $NewMessageCount = null;

    /**
     * @var int|null
     */
    protected $TotalAlertCount = null;

    /**
     * @var int|null
     */
    protected $TotalMessageCount = null;

    /**
     * @var int|null
     */
    protected $NewHighPriorityCount = null;

    /**
     * @var int|null
     */
    protected $TotalHighPriorityCount = null;


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
    public function getFolderName()
    {
        return $this->_dc($this->FolderName, 'FolderName');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setFolderName($value)
    {
        $this->FolderName = self::_string($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getNewAlertCount()
    {
        return $this->_dc($this->NewAlertCount, 'NewAlertCount');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setNewAlertCount($value)
    {
        $this->NewAlertCount = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getNewMessageCount()
    {
        return $this->_dc($this->NewMessageCount, 'NewMessageCount');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setNewMessageCount($value)
    {
        $this->NewMessageCount = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTotalAlertCount()
    {
        return $this->_dc($this->TotalAlertCount, 'TotalAlertCount');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setTotalAlertCount($value)
    {
        $this->TotalAlertCount = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTotalMessageCount()
    {
        return $this->_dc($this->TotalMessageCount, 'TotalMessageCount');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setTotalMessageCount($value)
    {
        $this->TotalMessageCount = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getNewHighPriorityCount()
    {
        return $this->_dc($this->NewHighPriorityCount, 'NewHighPriorityCount');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setNewHighPriorityCount($value)
    {
        $this->NewHighPriorityCount = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTotalHighPriorityCount()
    {
        return $this->_dc($this->TotalHighPriorityCount, 'TotalHighPriorityCount');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setTotalHighPriorityCount($value)
    {
        $this->TotalHighPriorityCount = self::_int($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'FolderID' => ['type' => 'int'],
            'FolderName' => [],
            'NewAlertCount' => ['type' => 'int'],
            'NewMessageCount' => ['type' => 'int'],
            'TotalAlertCount' => ['type' => 'int'],
            'TotalMessageCount' => ['type' => 'int'],
            'NewHighPriorityCount' => ['type' => 'int'],
            'TotalHighPriorityCount' => ['type' => 'int']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

MyMessagesFolderSummaryType::_register();

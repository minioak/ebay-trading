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
 * Summary data for a given user's alerts and messages.
 * This includes the numbers of new alerts and messages,
 * unresolved alerts, flagged messages, and total alerts
 * and messages.
 **/
class MyMessagesSummaryType extends EbatNs_ComplexType
{
    const TAG = 'MyMessagesSummaryType';
    const NAME = 'MyMessagesSummaryType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var MyMessagesFolderSummaryType[]|null
     */
    protected $FolderSummary = [];

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
    protected $UnresolvedAlertCount = null;

    /**
     * @var int|null
     */
    protected $FlaggedMessageCount = null;

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
     * @return MyMessagesFolderSummaryType[]|MyMessagesFolderSummaryType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getFolderSummary($index = null)
    {
        return $this->_dc($index === null
            ? $this->FolderSummary
            : (count($this->FolderSummary) > $index
                ? $this->FolderSummary[$index]
                : null), 'FolderSummary');
    }

    /**
     * @param MyMessagesFolderSummaryType|null|MyMessagesFolderSummaryType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setFolderSummary($value, $index = null)
    {
        if ($index === null) {
            $this->FolderSummary = $value;
        } else {
            $this->FolderSummary[$index] = [];
            
            foreach ($value as $item) {
                $this->addFolderSummary($item);
            }
        }
    }

    /**
     * @param MyMessagesFolderSummaryType|null $value
     * @return void
     */
    public function addFolderSummary($value)
    {
        $this->FolderSummary[] = $value;
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
    public function getUnresolvedAlertCount()
    {
        return $this->_dc($this->UnresolvedAlertCount, 'UnresolvedAlertCount');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setUnresolvedAlertCount($value)
    {
        $this->UnresolvedAlertCount = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getFlaggedMessageCount()
    {
        return $this->_dc($this->FlaggedMessageCount, 'FlaggedMessageCount');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setFlaggedMessageCount($value)
    {
        $this->FlaggedMessageCount = self::_int($value);
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
            'FolderSummary' => ['type' => 'MyMessagesFolderSummaryType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'NewAlertCount' => ['type' => 'int'],
            'NewMessageCount' => ['type' => 'int'],
            'UnresolvedAlertCount' => ['type' => 'int'],
            'FlaggedMessageCount' => ['type' => 'int'],
            'TotalAlertCount' => ['type' => 'int'],
            'TotalMessageCount' => ['type' => 'int'],
            'NewHighPriorityCount' => ['type' => 'int'],
            'TotalHighPriorityCount' => ['type' => 'int']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

MyMessagesSummaryType::_register();

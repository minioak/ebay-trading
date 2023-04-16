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
 * This call is used to retrieve an array of listings for the seller. The seller must be associated with the
 * user/application token being used to make the call.
 * 
 * This call requires that either the 'Start Time' or 'End Time' date range filters be used. The date range
 * specified by either of these filters can not exceed 120 days or an error will occur.
 * 
 * This call also requires that pagination be used.
 **/
class GetSellerListRequestType extends AbstractRequestType
{
    const TAG = 'GetSellerListRequest';
    const NAME = 'GetSellerListRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'GetSellerList';

    /**
     * @var UserIDType|null
     */
    protected $UserID = null;

    /**
     * @var UserIDArrayType|null
     */
    protected $MotorsDealerUsers = null;

    /**
     * @var string|null
     */
    protected $EndTimeFrom = null;

    /**
     * @var string|null
     */
    protected $EndTimeTo = null;

    /**
     * @var int|null
     */
    protected $Sort = null;

    /**
     * @var string|null
     */
    protected $StartTimeFrom = null;

    /**
     * @var string|null
     */
    protected $StartTimeTo = null;

    /**
     * @var PaginationType|null
     */
    protected $Pagination = null;

    /**
     * @var GranularityLevelCodeType|null
     */
    protected $GranularityLevel = null;

    /**
     * @var SKUArrayType|null
     */
    protected $SKUArray = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $IncludeWatchCount = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $AdminEndedItemsOnly = null;

    /**
     * @var int|null
     */
    protected $CategoryID = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $IncludeVariations = null;


    /**
     * @return UserIDType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getUserID()
    {
        return $this->_dc($this->UserID, 'UserID');
    }

    /**
     * @param UserIDType|null $value
     * @return void
     */
    public function setUserID($value)
    {
        $this->UserID = $value;
    }

    /**
     * @return UserIDArrayType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMotorsDealerUsers()
    {
        return $this->_dc($this->MotorsDealerUsers, 'MotorsDealerUsers');
    }

    /**
     * @param UserIDArrayType|null $value
     * @return void
     */
    public function setMotorsDealerUsers($value)
    {
        $this->MotorsDealerUsers = $value;
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEndTimeFrom()
    {
        return $this->_dc($this->EndTimeFrom, 'EndTimeFrom');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setEndTimeFrom($value)
    {
        $this->EndTimeFrom = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEndTimeTo()
    {
        return $this->_dc($this->EndTimeTo, 'EndTimeTo');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setEndTimeTo($value)
    {
        $this->EndTimeTo = self::_string($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSort()
    {
        return $this->_dc($this->Sort, 'Sort');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setSort($value)
    {
        $this->Sort = self::_int($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getStartTimeFrom()
    {
        return $this->_dc($this->StartTimeFrom, 'StartTimeFrom');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setStartTimeFrom($value)
    {
        $this->StartTimeFrom = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getStartTimeTo()
    {
        return $this->_dc($this->StartTimeTo, 'StartTimeTo');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setStartTimeTo($value)
    {
        $this->StartTimeTo = self::_string($value);
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
     * @return GranularityLevelCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getGranularityLevel()
    {
        return $this->_dc($this->GranularityLevel);
    }

    /**
     * @param GranularityLevelCodeType|null $value
     * @return void
     */
    public function setGranularityLevel($value)
    {
        $this->GranularityLevel = $this->_enum($value, GranularityLevelCodeType::class);
    }

    /**
     * @return SKUArrayType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSKUArray()
    {
        return $this->_dc($this->SKUArray, 'SKUArray');
    }

    /**
     * @param SKUArrayType|null $value
     * @return void
     */
    public function setSKUArray($value)
    {
        $this->SKUArray = $value;
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getIncludeWatchCount()
    {
        return $this->_dc($this->IncludeWatchCount === 'true', 'IncludeWatchCount');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setIncludeWatchCount($value)
    {
        $this->IncludeWatchCount = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getAdminEndedItemsOnly()
    {
        return $this->_dc($this->AdminEndedItemsOnly === 'true', 'AdminEndedItemsOnly');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setAdminEndedItemsOnly($value)
    {
        $this->AdminEndedItemsOnly = self::_bool($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCategoryID()
    {
        return $this->_dc($this->CategoryID, 'CategoryID');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setCategoryID($value)
    {
        $this->CategoryID = self::_int($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getIncludeVariations()
    {
        return $this->_dc($this->IncludeVariations === 'true', 'IncludeVariations');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setIncludeVariations($value)
    {
        $this->IncludeVariations = self::_bool($value);
    }

    /**
     * @return GetSellerListResponseType|EbatNs_ResponseError
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
            'UserID' => ['type' => 'UserIDType', 'xmlns' => self::XMLNS],
            'MotorsDealerUsers' => ['type' => 'UserIDArrayType', 'xmlns' => self::XMLNS],
            'EndTimeFrom' => [],
            'EndTimeTo' => [],
            'Sort' => ['type' => 'int'],
            'StartTimeFrom' => [],
            'StartTimeTo' => [],
            'Pagination' => ['type' => 'PaginationType', 'xmlns' => self::XMLNS],
            'GranularityLevel' => ['type' => 'GranularityLevelCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'SKUArray' => ['type' => 'SKUArrayType', 'xmlns' => self::XMLNS],
            'IncludeWatchCount' => ['type' => 'bool'],
            'AdminEndedItemsOnly' => ['type' => 'bool'],
            'CategoryID' => ['type' => 'int'],
            'IncludeVariations' => ['type' => 'bool']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

GetSellerListRequestType::_register();

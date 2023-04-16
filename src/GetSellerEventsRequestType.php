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
 * This call is used by a seller to retrieve changes to their own listings that have occurred within the last 48
 * hours, including price changes, available quantity, and other revisions to listing.
 * 
 * One of the available date range filters must be used with this call.
 **/
class GetSellerEventsRequestType extends AbstractRequestType
{
    const TAG = 'GetSellerEventsRequest';
    const NAME = 'GetSellerEventsRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'GetSellerEvents';

    /**
     * @var UserIDType|null
     */
    protected $UserID = null;

    /**
     * @var string|null
     */
    protected $StartTimeFrom = null;

    /**
     * @var string|null
     */
    protected $StartTimeTo = null;

    /**
     * @var string|null
     */
    protected $EndTimeFrom = null;

    /**
     * @var string|null
     */
    protected $EndTimeTo = null;

    /**
     * @var string|null
     */
    protected $ModTimeFrom = null;

    /**
     * @var string|null
     */
    protected $ModTimeTo = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $NewItemFilter = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $IncludeWatchCount = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $IncludeVariationSpecifics = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $HideVariations = null;


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
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getModTimeFrom()
    {
        return $this->_dc($this->ModTimeFrom, 'ModTimeFrom');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setModTimeFrom($value)
    {
        $this->ModTimeFrom = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getModTimeTo()
    {
        return $this->_dc($this->ModTimeTo, 'ModTimeTo');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setModTimeTo($value)
    {
        $this->ModTimeTo = self::_string($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getNewItemFilter()
    {
        return $this->_dc($this->NewItemFilter === 'true', 'NewItemFilter');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setNewItemFilter($value)
    {
        $this->NewItemFilter = self::_bool($value);
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
    public function getIncludeVariationSpecifics()
    {
        return $this->_dc($this->IncludeVariationSpecifics === 'true', 'IncludeVariationSpecifics');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setIncludeVariationSpecifics($value)
    {
        $this->IncludeVariationSpecifics = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getHideVariations()
    {
        return $this->_dc($this->HideVariations === 'true', 'HideVariations');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setHideVariations($value)
    {
        $this->HideVariations = self::_bool($value);
    }

    /**
     * @return GetSellerEventsResponseType|EbatNs_ResponseError
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
            'StartTimeFrom' => [],
            'StartTimeTo' => [],
            'EndTimeFrom' => [],
            'EndTimeTo' => [],
            'ModTimeFrom' => [],
            'ModTimeTo' => [],
            'NewItemFilter' => ['type' => 'bool'],
            'IncludeWatchCount' => ['type' => 'bool'],
            'IncludeVariationSpecifics' => ['type' => 'bool'],
            'HideVariations' => ['type' => 'bool']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

GetSellerEventsRequestType::_register();

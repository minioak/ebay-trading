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
 * Retrieves all items that the user is currently bidding on, and the ones they have won
 * or purchased.
 * 
 * Retrieves all items that the user is currently bidding on, and the ones they have won or purchased.
 **/
class GetBidderListRequestType extends AbstractRequestType
{
    const TAG = 'GetBidderListRequest';
    const NAME = 'GetBidderListRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'GetBidderList';

    /**
     * @var bool|null "true" or "false"
     */
    protected $ActiveItemsOnly = null;

    /**
     * @var string|null
     */
    protected $EndTimeFrom = null;

    /**
     * @var string|null
     */
    protected $EndTimeTo = null;

    /**
     * @var UserIDType|null
     */
    protected $UserID = null;

    /**
     * @var GranularityLevelCodeType|null
     */
    protected $GranularityLevel = null;


    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getActiveItemsOnly()
    {
        return $this->_dc($this->ActiveItemsOnly === 'true', 'ActiveItemsOnly');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setActiveItemsOnly($value)
    {
        $this->ActiveItemsOnly = self::_bool($value);
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
     * @return GetBidderListResponseType|EbatNs_ResponseError
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
            'ActiveItemsOnly' => ['type' => 'bool'],
            'EndTimeFrom' => [],
            'EndTimeTo' => [],
            'UserID' => ['type' => 'UserIDType', 'xmlns' => self::XMLNS],
            'GranularityLevel' => ['type' => 'GranularityLevelCodeType', 'enum' => true, 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

GetBidderListRequestType::_register();

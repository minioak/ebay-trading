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
 * The
 * GetCharities
 * call is used to search for nonprofit organizations that are registered with the eBay for Charity program. This
 * call allows users to search for a specific nonprofit organization, or to search for multiple nonprofit
 * organizations from a particular charitable domain, and/or geographical region, or by using a search string.
 **/
class GetCharitiesRequestType extends AbstractRequestType
{
    const TAG = 'GetCharitiesRequest';
    const NAME = 'GetCharitiesRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'GetCharities';

    /**
     * @var string|null
     */
    protected $CharityID = null;

    /**
     * @var string|null
     */
    protected $CharityName = null;

    /**
     * @var string|null
     */
    protected $Query = null;

    /**
     * @var int|null
     */
    protected $CharityRegion = null;

    /**
     * @var int|null
     */
    protected $CharityDomain = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $IncludeDescription = null;

    /**
     * @var StringMatchCodeType|null
     */
    protected $MatchType = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $Featured = null;

    /**
     * @var int|null
     */
    protected $CampaignID = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCharityID()
    {
        return $this->_dc($this->CharityID, 'CharityID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setCharityID($value)
    {
        $this->CharityID = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCharityName()
    {
        return $this->_dc($this->CharityName, 'CharityName');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setCharityName($value)
    {
        $this->CharityName = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getQuery()
    {
        return $this->_dc($this->Query, 'Query');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setQuery($value)
    {
        $this->Query = self::_string($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCharityRegion()
    {
        return $this->_dc($this->CharityRegion, 'CharityRegion');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setCharityRegion($value)
    {
        $this->CharityRegion = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCharityDomain()
    {
        return $this->_dc($this->CharityDomain, 'CharityDomain');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setCharityDomain($value)
    {
        $this->CharityDomain = self::_int($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getIncludeDescription()
    {
        return $this->_dc($this->IncludeDescription === 'true', 'IncludeDescription');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setIncludeDescription($value)
    {
        $this->IncludeDescription = self::_bool($value);
    }

    /**
     * @return StringMatchCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMatchType()
    {
        return $this->_dc($this->MatchType);
    }

    /**
     * @param StringMatchCodeType|null $value
     * @return void
     */
    public function setMatchType($value)
    {
        $this->MatchType = $this->_enum($value, StringMatchCodeType::class);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getFeatured()
    {
        return $this->_dc($this->Featured === 'true', 'Featured');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setFeatured($value)
    {
        $this->Featured = self::_bool($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCampaignID()
    {
        return $this->_dc($this->CampaignID, 'CampaignID');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setCampaignID($value)
    {
        $this->CampaignID = self::_int($value);
    }

    /**
     * @return GetCharitiesResponseType|EbatNs_ResponseError
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
            'CharityID' => [],
            'CharityName' => [],
            'Query' => [],
            'CharityRegion' => ['type' => 'int'],
            'CharityDomain' => ['type' => 'int'],
            'IncludeDescription' => ['type' => 'bool'],
            'MatchType' => ['type' => 'StringMatchCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'Featured' => ['type' => 'bool'],
            'CampaignID' => ['type' => 'int']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

GetCharitiesRequestType::_register();

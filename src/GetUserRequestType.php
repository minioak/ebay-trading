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
 * Retrieves data pertaining to a single eBay user. Callers can use this call to return their own user data or the
 * data of another eBay user. Unless the caller passes in an <strong>ItemID</strong> value that identifies a current
 * or past common order, not all data (like email addresses) will be returned in the response.
 **/
class GetUserRequestType extends AbstractRequestType
{
    const TAG = 'GetUserRequest';
    const NAME = 'GetUserRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'GetUser';

    /**
     * @var ItemIDType|null
     */
    protected $ItemID = null;

    /**
     * @var string|null
     */
    protected $UserID = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $IncludeExpressRequirements = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $IncludeFeatureEligibility = null;


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
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getUserID()
    {
        return $this->_dc($this->UserID, 'UserID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setUserID($value)
    {
        $this->UserID = self::_string($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getIncludeExpressRequirements()
    {
        return $this->_dc($this->IncludeExpressRequirements === 'true', 'IncludeExpressRequirements');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setIncludeExpressRequirements($value)
    {
        $this->IncludeExpressRequirements = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getIncludeFeatureEligibility()
    {
        return $this->_dc($this->IncludeFeatureEligibility === 'true', 'IncludeFeatureEligibility');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setIncludeFeatureEligibility($value)
    {
        $this->IncludeFeatureEligibility = self::_bool($value);
    }

    /**
     * @return GetUserResponseType|EbatNs_ResponseError
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
            'ItemID' => ['type' => 'ItemIDType', 'xmlns' => self::XMLNS],
            'UserID' => [],
            'IncludeExpressRequirements' => ['type' => 'bool'],
            'IncludeFeatureEligibility' => ['type' => 'bool']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

GetUserRequestType::_register();

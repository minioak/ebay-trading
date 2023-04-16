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
 * This is the base request type for the
 * GetDescriptionTemplates
 * call. This call retrieves detailed information on the Listing Designer templates that are available for use by
 * the seller.
 **/
class GetDescriptionTemplatesRequestType extends AbstractRequestType
{
    const TAG = 'GetDescriptionTemplatesRequest';
    const NAME = 'GetDescriptionTemplatesRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'GetDescriptionTemplates';

    /**
     * @var string|null
     */
    protected $CategoryID = null;

    /**
     * @var string|null
     */
    protected $LastModifiedTime = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $MotorVehicles = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCategoryID()
    {
        return $this->_dc($this->CategoryID, 'CategoryID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setCategoryID($value)
    {
        $this->CategoryID = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getLastModifiedTime()
    {
        return $this->_dc($this->LastModifiedTime, 'LastModifiedTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setLastModifiedTime($value)
    {
        $this->LastModifiedTime = self::_string($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMotorVehicles()
    {
        return $this->_dc($this->MotorVehicles === 'true', 'MotorVehicles');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setMotorVehicles($value)
    {
        $this->MotorVehicles = self::_bool($value);
    }

    /**
     * @return GetDescriptionTemplatesResponseType|EbatNs_ResponseError
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
            'CategoryID' => [],
            'LastModifiedTime' => [],
            'MotorVehicles' => ['type' => 'bool']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

GetDescriptionTemplatesRequestType::_register();

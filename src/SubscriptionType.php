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


class SubscriptionType extends EbatNs_ComplexType
{
    const TAG = 'SubscriptionType';
    const NAME = 'SubscriptionType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $EIASToken = null;

    /**
     * @var SiteCodeType|null
     */
    protected $SiteID = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $Active = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEIASToken()
    {
        return $this->_dc($this->EIASToken, 'EIASToken');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setEIASToken($value)
    {
        $this->EIASToken = self::_string($value);
    }

    /**
     * @return SiteCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSiteID()
    {
        return $this->_dc($this->SiteID);
    }

    /**
     * @param SiteCodeType|null $value
     * @return void
     */
    public function setSiteID($value)
    {
        $this->SiteID = $this->_enum($value, SiteCodeType::class);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getActive()
    {
        return $this->_dc($this->Active === 'true', 'Active');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setActive($value)
    {
        $this->Active = self::_bool($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'EIASToken' => [],
            'SiteID' => ['type' => 'SiteCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'Active' => ['type' => 'bool']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

SubscriptionType::_register();

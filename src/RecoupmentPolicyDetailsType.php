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
 * Details the recoupment policy on this site.  There are two sites involved in recoupment - the listing site
 * and the user registration site, each of which must agree before eBay enforces recoupment for a seller and
 * listing.
 **/
class RecoupmentPolicyDetailsType extends EbatNs_ComplexType
{
    const TAG = 'RecoupmentPolicyDetailsType';
    const NAME = 'RecoupmentPolicyDetailsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var bool|null "true" or "false"
     */
    protected $EnforcedOnListingSite = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $EnforcedOnRegistrationSite = null;

    /**
     * @var string|null
     */
    protected $DetailVersion = null;

    /**
     * @var string|null
     */
    protected $UpdateTime = null;


    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEnforcedOnListingSite()
    {
        return $this->_dc($this->EnforcedOnListingSite === 'true', 'EnforcedOnListingSite');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setEnforcedOnListingSite($value)
    {
        $this->EnforcedOnListingSite = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEnforcedOnRegistrationSite()
    {
        return $this->_dc($this->EnforcedOnRegistrationSite === 'true', 'EnforcedOnRegistrationSite');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setEnforcedOnRegistrationSite($value)
    {
        $this->EnforcedOnRegistrationSite = self::_bool($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDetailVersion()
    {
        return $this->_dc($this->DetailVersion, 'DetailVersion');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setDetailVersion($value)
    {
        $this->DetailVersion = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getUpdateTime()
    {
        return $this->_dc($this->UpdateTime, 'UpdateTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setUpdateTime($value)
    {
        $this->UpdateTime = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'EnforcedOnListingSite' => ['type' => 'bool'],
            'EnforcedOnRegistrationSite' => ['type' => 'bool'],
            'DetailVersion' => [],
            'UpdateTime' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

RecoupmentPolicyDetailsType::_register();

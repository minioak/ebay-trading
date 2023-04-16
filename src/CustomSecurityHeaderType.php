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
 * Security header used for SOAP API calls.
 **/
class CustomSecurityHeaderType extends EbatNs_ComplexType
{
    const TAG = 'CustomSecurityHeaderType';
    const NAME = 'CustomSecurityHeaderType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $eBayAuthToken = null;

    /**
     * @var string|null
     */
    protected $HardExpirationWarning = null;

    /**
     * @var UserIdPasswordType|null
     */
    protected $Credentials = null;

    /**
     * @var string|null
     */
    protected $NotificationSignature = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEBayAuthToken()
    {
        return $this->_dc($this->eBayAuthToken, 'eBayAuthToken');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setEBayAuthToken($value)
    {
        $this->eBayAuthToken = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getHardExpirationWarning()
    {
        return $this->_dc($this->HardExpirationWarning, 'HardExpirationWarning');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setHardExpirationWarning($value)
    {
        $this->HardExpirationWarning = self::_string($value);
    }

    /**
     * @return UserIdPasswordType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCredentials()
    {
        return $this->_dc($this->Credentials, 'Credentials');
    }

    /**
     * @param UserIdPasswordType|null $value
     * @return void
     */
    public function setCredentials($value)
    {
        $this->Credentials = $value;
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getNotificationSignature()
    {
        return $this->_dc($this->NotificationSignature, 'NotificationSignature');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setNotificationSignature($value)
    {
        $this->NotificationSignature = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'eBayAuthToken' => [],
            'HardExpirationWarning' => [],
            'Credentials' => ['type' => 'UserIdPasswordType', 'xmlns' => self::XMLNS],
            'NotificationSignature' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

CustomSecurityHeaderType::_register();

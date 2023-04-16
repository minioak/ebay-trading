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
 * Requests to enable a test user to sell items in the Sandbox environment.
 **/
class ValidateTestUserRegistrationRequestType extends AbstractRequestType
{
    const TAG = 'ValidateTestUserRegistrationRequest';
    const NAME = 'ValidateTestUserRegistrationRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'ValidateTestUserRegistration';

    /**
     * @var int|null
     */
    protected $FeedbackScore = null;

    /**
     * @var string|null
     */
    protected $RegistrationDate = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $SubscribeSA = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $SubscribeSAPro = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $SubscribeSM = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $SubscribeSMPro = null;


    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getFeedbackScore()
    {
        return $this->_dc($this->FeedbackScore, 'FeedbackScore');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setFeedbackScore($value)
    {
        $this->FeedbackScore = self::_int($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getRegistrationDate()
    {
        return $this->_dc($this->RegistrationDate, 'RegistrationDate');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setRegistrationDate($value)
    {
        $this->RegistrationDate = self::_string($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSubscribeSA()
    {
        return $this->_dc($this->SubscribeSA === 'true', 'SubscribeSA');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setSubscribeSA($value)
    {
        $this->SubscribeSA = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSubscribeSAPro()
    {
        return $this->_dc($this->SubscribeSAPro === 'true', 'SubscribeSAPro');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setSubscribeSAPro($value)
    {
        $this->SubscribeSAPro = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSubscribeSM()
    {
        return $this->_dc($this->SubscribeSM === 'true', 'SubscribeSM');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setSubscribeSM($value)
    {
        $this->SubscribeSM = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSubscribeSMPro()
    {
        return $this->_dc($this->SubscribeSMPro === 'true', 'SubscribeSMPro');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setSubscribeSMPro($value)
    {
        $this->SubscribeSMPro = self::_bool($value);
    }

    /**
     * @return ValidateTestUserRegistrationResponseType|EbatNs_ResponseError
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
            'FeedbackScore' => ['type' => 'int'],
            'RegistrationDate' => [],
            'SubscribeSA' => ['type' => 'bool'],
            'SubscribeSAPro' => ['type' => 'bool'],
            'SubscribeSM' => ['type' => 'bool'],
            'SubscribeSMPro' => ['type' => 'bool']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

ValidateTestUserRegistrationRequestType::_register();

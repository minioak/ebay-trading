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
 * Validates the user response to a <b class="con">GetChallengeToken
 * botblock challenge.
 **/
class ValidateChallengeInputRequestType extends AbstractRequestType
{
    const TAG = 'ValidateChallengeInputRequest';
    const NAME = 'ValidateChallengeInputRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'ValidateChallengeInput';

    /**
     * @var string|null
     */
    protected $ChallengeToken = null;

    /**
     * @var string|null
     */
    protected $UserInput = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $KeepTokenValid = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getChallengeToken()
    {
        return $this->_dc($this->ChallengeToken, 'ChallengeToken');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setChallengeToken($value)
    {
        $this->ChallengeToken = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getUserInput()
    {
        return $this->_dc($this->UserInput, 'UserInput');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setUserInput($value)
    {
        $this->UserInput = self::_string($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getKeepTokenValid()
    {
        return $this->_dc($this->KeepTokenValid === 'true', 'KeepTokenValid');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setKeepTokenValid($value)
    {
        $this->KeepTokenValid = self::_bool($value);
    }

    /**
     * @return ValidateChallengeInputResponseType|EbatNs_ResponseError
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
            'ChallengeToken' => [],
            'UserInput' => [],
            'KeepTokenValid' => ['type' => 'bool']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

ValidateChallengeInputRequestType::_register();

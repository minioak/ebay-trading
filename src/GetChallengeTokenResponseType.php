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
 * This is the base response type for the
 * GetChallengeToken
 * call. This call retrieves a botblock token and URLs for an image or audio clip that the user is to match.
 **/
class GetChallengeTokenResponseType extends EbatNs_Response
{
    const TAG = 'GetChallengeTokenResponseType';
    const NAME = 'GetChallengeTokenResponseType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $ChallengeToken = null;

    /**
     * @var string|null
     */
    protected $ImageChallengeURL = null;

    /**
     * @var string|null
     */
    protected $AudioChallengeURL = null;


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
    public function getImageChallengeURL()
    {
        return $this->_dc($this->ImageChallengeURL, 'ImageChallengeURL');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setImageChallengeURL($value)
    {
        $this->ImageChallengeURL = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getAudioChallengeURL()
    {
        return $this->_dc($this->AudioChallengeURL, 'AudioChallengeURL');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setAudioChallengeURL($value)
    {
        $this->AudioChallengeURL = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'ChallengeToken' => [],
            'ImageChallengeURL' => [],
            'AudioChallengeURL' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

GetChallengeTokenResponseType::_register();

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
 * This type is used by the
 * BotBlock
 * container that is returned in the
 * PlaceOffer
 * call response if eBay is requiring that the user supply an authentication token and URL in order for eBay to
 * process the
 * PlaceOffer
 * call. The authentication token and URL values that are returned in the
 * PlaceOffer
 * call response are then passed in the
 * BotBlock
 * container of a subsequent
 * PlaceOffer
 * call.
 **/
class BotBlockResponseType extends EbatNs_ComplexType
{
    const TAG = 'BotBlockResponseType';
    const NAME = 'BotBlockResponseType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $BotBlockToken = null;

    /**
     * @var string|null
     */
    protected $BotBlockUrl = null;

    /**
     * @var string|null
     */
    protected $BotBlockAudioUrl = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBotBlockToken()
    {
        return $this->_dc($this->BotBlockToken, 'BotBlockToken');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setBotBlockToken($value)
    {
        $this->BotBlockToken = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBotBlockUrl()
    {
        return $this->_dc($this->BotBlockUrl, 'BotBlockUrl');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setBotBlockUrl($value)
    {
        $this->BotBlockUrl = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBotBlockAudioUrl()
    {
        return $this->_dc($this->BotBlockAudioUrl, 'BotBlockAudioUrl');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setBotBlockAudioUrl($value)
    {
        $this->BotBlockAudioUrl = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'BotBlockToken' => [],
            'BotBlockUrl' => [],
            'BotBlockAudioUrl' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

BotBlockResponseType::_register();

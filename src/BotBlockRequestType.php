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
 * Type used by the
 * BotBlock
 * container of the
 * PlaceOffer
 * call request. The
 * BotBlock
 * container is conditionally required in a
 * PlaceOffer
 * call request if the previous
 * PlaceOffer
 * call resulted in a
 * BotBlock
 * container being returned in the response. The
 * BotBlock
 * container in the response will contain an authentication token and a URL that will need to be passed into the
 * BotBlock
 * container of the
 * PlaceOffer
 * call request in the subsequent call.
 **/
class BotBlockRequestType extends EbatNs_ComplexType
{
    const TAG = 'BotBlockRequest';
    const NAME = 'BotBlockRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $BotBlockToken = null;

    /**
     * @var string|null
     */
    protected $BotBlockUserInput = null;


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
    public function getBotBlockUserInput()
    {
        return $this->_dc($this->BotBlockUserInput, 'BotBlockUserInput');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setBotBlockUserInput($value)
    {
        $this->BotBlockUserInput = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'BotBlockToken' => [],
            'BotBlockUserInput' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

BotBlockRequestType::_register();

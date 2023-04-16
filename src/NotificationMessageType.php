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
 * A template for an SMS notification message.
 **/
class NotificationMessageType extends EbatNs_Response
{
    const TAG = 'NotificationMessageType';
    const NAME = 'NotificationMessageType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $MessageBody = null;

    /**
     * @var string|null
     */
    protected $EIAS = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMessageBody()
    {
        return $this->_dc($this->MessageBody, 'MessageBody');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setMessageBody($value)
    {
        $this->MessageBody = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEIAS()
    {
        return $this->_dc($this->EIAS, 'EIAS');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setEIAS($value)
    {
        $this->EIAS = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'MessageBody' => [],
            'EIAS' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

NotificationMessageType::_register();

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
 * Removes selected messages for a given user.
 **/
class DeleteMyMessagesRequestType extends AbstractRequestType
{
    const TAG = 'DeleteMyMessagesRequest';
    const NAME = 'DeleteMyMessagesRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'DeleteMyMessages';

    /**
     * @var MyMessagesAlertIDArrayType|null
     */
    protected $AlertIDs = null;

    /**
     * @var MyMessagesMessageIDArrayType|null
     */
    protected $MessageIDs = null;


    /**
     * @return MyMessagesAlertIDArrayType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getAlertIDs()
    {
        return $this->_dc($this->AlertIDs, 'AlertIDs');
    }

    /**
     * @param MyMessagesAlertIDArrayType|null $value
     * @return void
     */
    public function setAlertIDs($value)
    {
        $this->AlertIDs = $value;
    }

    /**
     * @return MyMessagesMessageIDArrayType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMessageIDs()
    {
        return $this->_dc($this->MessageIDs, 'MessageIDs');
    }

    /**
     * @param MyMessagesMessageIDArrayType|null $value
     * @return void
     */
    public function setMessageIDs($value)
    {
        $this->MessageIDs = $value;
    }

    /**
     * @return DeleteMyMessagesResponseType|EbatNs_ResponseError
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
            'AlertIDs' => ['type' => 'MyMessagesAlertIDArrayType', 'xmlns' => self::XMLNS],
            'MessageIDs' => ['type' => 'MyMessagesMessageIDArrayType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

DeleteMyMessagesRequestType::_register();

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
 * The base request of the
 * AddMemberMessageRTQ
 * call that enables a seller to reply to a question about an active item listing.
 **/
class AddMemberMessageRTQRequestType extends AbstractRequestType
{
    const TAG = 'AddMemberMessageRTQRequest';
    const NAME = 'AddMemberMessageRTQRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'AddMemberMessageRTQ';

    /**
     * @var ItemIDType|null
     */
    protected $ItemID = null;

    /**
     * @var MemberMessageType|null
     */
    protected $MemberMessage = null;


    /**
     * @return ItemIDType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getItemID()
    {
        return $this->_dc($this->ItemID, 'ItemID');
    }

    /**
     * @param ItemIDType|null $value
     * @return void
     */
    public function setItemID($value)
    {
        $this->ItemID = $value;
    }

    /**
     * @return MemberMessageType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMemberMessage()
    {
        return $this->_dc($this->MemberMessage, 'MemberMessage');
    }

    /**
     * @param MemberMessageType|null $value
     * @return void
     */
    public function setMemberMessage($value)
    {
        $this->MemberMessage = $value;
    }

    /**
     * @return AddMemberMessageRTQResponseType|EbatNs_ResponseError
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
            'ItemID' => ['type' => 'ItemIDType', 'xmlns' => self::XMLNS],
            'MemberMessage' => ['type' => 'MemberMessageType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

AddMemberMessageRTQRequestType::_register();

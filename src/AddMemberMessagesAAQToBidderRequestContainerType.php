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
 * AddMemberMessagesAAQToBidderRequestContainer
 * container. An
 * AddMemberMessagesAAQToBidderRequestContainer
 * container is required for each bidder the seller is sending a message to. The seller can communicate with up to
 * 10 bidders with one
 * AddMemberMessagesAAQToBidder
 * call.
 **/
class AddMemberMessagesAAQToBidderRequestContainerType extends EbatNs_ComplexType
{
    const TAG = 'AddMemberMessagesAAQToBidderRequestContainerType';
    const NAME = 'AddMemberMessagesAAQToBidderRequestContainerType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $CorrelationID = null;

    /**
     * @var string|null
     */
    protected $ItemID = null;

    /**
     * @var MemberMessageType|null
     */
    protected $MemberMessage = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCorrelationID()
    {
        return $this->_dc($this->CorrelationID, 'CorrelationID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setCorrelationID($value)
    {
        $this->CorrelationID = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getItemID()
    {
        return $this->_dc($this->ItemID, 'ItemID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setItemID($value)
    {
        $this->ItemID = self::_string($value);
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
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'CorrelationID' => [],
            'ItemID' => [],
            'MemberMessage' => ['type' => 'MemberMessageType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

AddMemberMessagesAAQToBidderRequestContainerType::_register();

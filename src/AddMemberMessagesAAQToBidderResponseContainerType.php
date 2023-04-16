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
 * AddMemberMessagesAAQToBidderResponseContainer
 * container. A
 * AddMemberMessagesAAQToBidderResponseContainer
 * container is returned for each message that was sent from the seller to the bidders/potential buyers through a
 * separate
 * AddMemberMessagesAAQToBidderRequestContainer
 * . The
 * Ack
 * value in each
 * AddMemberMessagesAAQToBidderResponseContainer
 * container indicates whether or not each message sent through the call was successful or not, and an
 * AddMemberMessagesAAQToBidderResponseContainer
 * is matched up to the corresponding
 * AddMemberMessagesAAQToBidderRequestContainer
 * through the
 * CorrelationID
 * value.
 **/
class AddMemberMessagesAAQToBidderResponseContainerType extends EbatNs_ComplexType
{
    const TAG = 'AddMemberMessagesAAQToBidderResponseContainerType';
    const NAME = 'AddMemberMessagesAAQToBidderResponseContainerType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $CorrelationID = null;

    /**
     * @var AckCodeType|null
     */
    protected $Ack = null;


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
     * @return AckCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getAck()
    {
        return $this->_dc($this->Ack);
    }

    /**
     * @param AckCodeType|null $value
     * @return void
     */
    public function setAck($value)
    {
        $this->Ack = $this->_enum($value, AckCodeType::class);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'CorrelationID' => [],
            'Ack' => ['type' => 'AckCodeType', 'enum' => true, 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

AddMemberMessagesAAQToBidderResponseContainerType::_register();

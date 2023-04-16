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
 * Type defining the
 * AddMemberMessagesAAQToBidderResponseContainer
 * container, which consists of the
 * Ack
 * field (indicating the result of the send message operation) and the
 * CorrelationID
 * field (used to track multiple send message operations performed in one call).
 **/
class AddMemberMessagesAAQToBidderResponseType extends EbatNs_Response
{
    const TAG = 'AddMemberMessagesAAQToBidderResponseType';
    const NAME = 'AddMemberMessagesAAQToBidderResponseType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var AddMemberMessagesAAQToBidderResponseContainerType[]|null
     */
    protected $AddMemberMessagesAAQToBidderResponseContainer = [];


    /**
     * @return AddMemberMessagesAAQToBidderResponseContainerType[]|AddMemberMessagesAAQToBidderResponseContainerType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getAddMemberMessagesAAQToBidderResponseContainer($index = null)
    {
        return $this->_dc($index === null
            ? $this->AddMemberMessagesAAQToBidderResponseContainer
            : (count($this->AddMemberMessagesAAQToBidderResponseContainer) > $index
                ? $this->AddMemberMessagesAAQToBidderResponseContainer[$index]
                : null), 'AddMemberMessagesAAQToBidderResponseContainer');
    }

    /**
     * @param AddMemberMessagesAAQToBidderResponseContainerType|null|AddMemberMessagesAAQToBidderResponseContainerType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setAddMemberMessagesAAQToBidderResponseContainer($value, $index = null)
    {
        if ($index === null) {
            $this->AddMemberMessagesAAQToBidderResponseContainer = $value;
        } else {
            $this->AddMemberMessagesAAQToBidderResponseContainer[$index] = [];
            
            foreach ($value as $item) {
                $this->addAddMemberMessagesAAQToBidderResponseContainer($item);
            }
        }
    }

    /**
     * @param AddMemberMessagesAAQToBidderResponseContainerType|null $value
     * @return void
     */
    public function addAddMemberMessagesAAQToBidderResponseContainer($value)
    {
        $this->AddMemberMessagesAAQToBidderResponseContainer[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['AddMemberMessagesAAQToBidderResponseContainer' => ['type' => 'AddMemberMessagesAAQToBidderResponseContainerType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']], parent::NAME);
        self::assignAttributes([]);
    }

}

AddMemberMessagesAAQToBidderResponseType::_register();

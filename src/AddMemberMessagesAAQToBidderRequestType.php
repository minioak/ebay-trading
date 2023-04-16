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
 * AddMemberMessagesAAQToBidder
 * call, which allows a seller to send up to 10 messages to bidders/potential buyers regarding an active listing.
 * These potential buyers may include those who have made a Best Offer on a listing.
 **/
class AddMemberMessagesAAQToBidderRequestType extends AbstractRequestType
{
    const TAG = 'AddMemberMessagesAAQToBidderRequest';
    const NAME = 'AddMemberMessagesAAQToBidderRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'AddMemberMessagesAAQToBidder';

    /**
     * @var AddMemberMessagesAAQToBidderRequestContainerType[]|null
     */
    protected $AddMemberMessagesAAQToBidderRequestContainer = [];


    /**
     * @return AddMemberMessagesAAQToBidderRequestContainerType[]|AddMemberMessagesAAQToBidderRequestContainerType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getAddMemberMessagesAAQToBidderRequestContainer($index = null)
    {
        return $this->_dc($index === null
            ? $this->AddMemberMessagesAAQToBidderRequestContainer
            : (count($this->AddMemberMessagesAAQToBidderRequestContainer) > $index
                ? $this->AddMemberMessagesAAQToBidderRequestContainer[$index]
                : null), 'AddMemberMessagesAAQToBidderRequestContainer');
    }

    /**
     * @param AddMemberMessagesAAQToBidderRequestContainerType|null|AddMemberMessagesAAQToBidderRequestContainerType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setAddMemberMessagesAAQToBidderRequestContainer($value, $index = null)
    {
        if ($index === null) {
            $this->AddMemberMessagesAAQToBidderRequestContainer = $value;
        } else {
            $this->AddMemberMessagesAAQToBidderRequestContainer[$index] = [];
            
            foreach ($value as $item) {
                $this->addAddMemberMessagesAAQToBidderRequestContainer($item);
            }
        }
    }

    /**
     * @param AddMemberMessagesAAQToBidderRequestContainerType|null $value
     * @return void
     */
    public function addAddMemberMessagesAAQToBidderRequestContainer($value)
    {
        $this->AddMemberMessagesAAQToBidderRequestContainer[] = $value;
    }

    /**
     * @return AddMemberMessagesAAQToBidderResponseType|EbatNs_ResponseError
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
        self::assignElements(['AddMemberMessagesAAQToBidderRequestContainer' => ['type' => 'AddMemberMessagesAAQToBidderRequestContainerType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']], parent::NAME);
        self::assignAttributes([]);
    }

}

AddMemberMessagesAAQToBidderRequestType::_register();

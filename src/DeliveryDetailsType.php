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
 * DeliveryDetails
 * container that is returned by
 * GetOrders
 * and other order management calls. The
 * DeliveryDetails
 * container is only applicable and returned if the buyer purchased a digital gift card, and is either keeping the
 * gift card or giving that gift card to another person.
 **/
class DeliveryDetailsType extends EbatNs_ComplexType
{
    const TAG = 'DeliveryDetailsType';
    const NAME = 'DeliveryDetailsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var DigitalDeliveryUserType|null
     */
    protected $Recipient = null;

    /**
     * @var DigitalDeliveryUserType|null
     */
    protected $Sender = null;


    /**
     * @return DigitalDeliveryUserType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getRecipient()
    {
        return $this->_dc($this->Recipient, 'Recipient');
    }

    /**
     * @param DigitalDeliveryUserType|null $value
     * @return void
     */
    public function setRecipient($value)
    {
        $this->Recipient = $value;
    }

    /**
     * @return DigitalDeliveryUserType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSender()
    {
        return $this->_dc($this->Sender, 'Sender');
    }

    /**
     * @param DigitalDeliveryUserType|null $value
     * @return void
     */
    public function setSender($value)
    {
        $this->Sender = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'Recipient' => ['type' => 'DigitalDeliveryUserType', 'xmlns' => self::XMLNS],
            'Sender' => ['type' => 'DigitalDeliveryUserType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

DeliveryDetailsType::_register();

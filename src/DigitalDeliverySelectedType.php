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
 * DigitalDeliverySelected
 * container that is returned by
 * GetOrders
 * and other order management calls. The
 * DigitalDeliverySelected
 * container is only applicable and returned if the buyer purchased a digital gift card for themselves, or is
 * giving the digital gift card to someone else as a gift.
 **/
class DigitalDeliverySelectedType extends EbatNs_ComplexType
{
    const TAG = 'DigitalDeliverySelectedType';
    const NAME = 'DigitalDeliverySelectedType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $DeliveryMethod = null;

    /**
     * @var DeliveryStatusType|null
     */
    protected $DeliveryStatus = null;

    /**
     * @var DeliveryDetailsType|null
     */
    protected $DeliveryDetails = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDeliveryMethod()
    {
        return $this->_dc($this->DeliveryMethod, 'DeliveryMethod');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setDeliveryMethod($value)
    {
        $this->DeliveryMethod = self::_string($value);
    }

    /**
     * @return DeliveryStatusType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDeliveryStatus()
    {
        return $this->_dc($this->DeliveryStatus, 'DeliveryStatus');
    }

    /**
     * @param DeliveryStatusType|null $value
     * @return void
     */
    public function setDeliveryStatus($value)
    {
        $this->DeliveryStatus = $value;
    }

    /**
     * @return DeliveryDetailsType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDeliveryDetails()
    {
        return $this->_dc($this->DeliveryDetails, 'DeliveryDetails');
    }

    /**
     * @param DeliveryDetailsType|null $value
     * @return void
     */
    public function setDeliveryDetails($value)
    {
        $this->DeliveryDetails = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'DeliveryMethod' => [],
            'DeliveryStatus' => ['type' => 'DeliveryStatusType', 'xmlns' => self::XMLNS],
            'DeliveryDetails' => ['type' => 'DeliveryDetailsType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

DigitalDeliverySelectedType::_register();

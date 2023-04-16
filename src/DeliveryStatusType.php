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
 * DeliveryStatus
 * container, which will list the current status of whatever delivery method is being used (indicated in the
 * DigitalDeliverySelected.DeliveryMethod
 * field). Currently, the only supported delivery method is by email.
 **/
class DeliveryStatusType extends EbatNs_ComplexType
{
    const TAG = 'DeliveryStatusType';
    const NAME = 'DeliveryStatusType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $Email = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEmail()
    {
        return $this->_dc($this->Email, 'Email');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setEmail($value)
    {
        $this->Email = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['Email' => []], parent::NAME);
        self::assignAttributes([]);
    }

}

DeliveryStatusType::_register();

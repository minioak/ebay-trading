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
 * DigitalGoodInfo
 * container, which is used in
 * Add
 * /
 * Relist
 * /
 * Revise
 * /
 * Verify
 * listing calls to designate the listing as a digital gift card listing.
 **/
class DigitalGoodInfoType extends EbatNs_ComplexType
{
    const TAG = 'DigitalGoodInfoType';
    const NAME = 'DigitalGoodInfoType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var bool|null "true" or "false"
     */
    protected $DigitalDelivery = null;


    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDigitalDelivery()
    {
        return $this->_dc($this->DigitalDelivery === 'true', 'DigitalDelivery');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setDigitalDelivery($value)
    {
        $this->DigitalDelivery = self::_bool($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['DigitalDelivery' => ['type' => 'bool']], parent::NAME);
        self::assignAttributes([]);
    }

}

DigitalGoodInfoType::_register();

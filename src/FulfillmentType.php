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
 * This type is used to provide details about an order line item being fulfilled by eBay or an eBay fulfillment
 * partner.
 **/
class FulfillmentType extends EbatNs_ComplexType
{
    const TAG = 'FulfillmentType';
    const NAME = 'FulfillmentType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $FulfillmentBy = null;

    /**
     * @var string|null
     */
    protected $FulfillmentRefId = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getFulfillmentBy()
    {
        return $this->_dc($this->FulfillmentBy, 'FulfillmentBy');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setFulfillmentBy($value)
    {
        $this->FulfillmentBy = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getFulfillmentRefId()
    {
        return $this->_dc($this->FulfillmentRefId, 'FulfillmentRefId');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setFulfillmentRefId($value)
    {
        $this->FulfillmentRefId = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'FulfillmentBy' => [],
            'FulfillmentRefId' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

FulfillmentType::_register();

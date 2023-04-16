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
 * This type is deprecated.
 **/
class RefundFailureReasonType extends EbatNs_ComplexType
{
    const TAG = 'RefundFailureReasonType';
    const NAME = 'RefundFailureReasonType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var RefundFailureCodeType|null
     */
    protected $RefundFailureCode = null;


    /**
     * @return RefundFailureCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getRefundFailureCode()
    {
        return $this->_dc($this->RefundFailureCode);
    }

    /**
     * @param RefundFailureCodeType|null $value
     * @return void
     */
    public function setRefundFailureCode($value)
    {
        $this->RefundFailureCode = $this->_enum($value, RefundFailureCodeType::class);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['RefundFailureCode' => ['type' => 'RefundFailureCodeType', 'enum' => true, 'xmlns' => self::XMLNS]], parent::NAME);
        self::assignAttributes([]);
    }

}

RefundFailureReasonType::_register();

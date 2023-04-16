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
class PaymentsInformationCodeType extends EbatNs_ComplexType
{
    const TAG = 'PaymentsInformationCodeType';
    const NAME = 'PaymentsInformationCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var PaymentInformationCodeType|null
     */
    protected $Payments = null;


    /**
     * @return PaymentInformationCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPayments()
    {
        return $this->_dc($this->Payments, 'Payments');
    }

    /**
     * @param PaymentInformationCodeType|null $value
     * @return void
     */
    public function setPayments($value)
    {
        $this->Payments = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['Payments' => ['type' => 'PaymentInformationCodeType', 'xmlns' => self::XMLNS]], parent::NAME);
        self::assignAttributes([]);
    }

}

PaymentsInformationCodeType::_register();

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
 * SellerPaymentProfile
 * container, which is used in an Add/Revise/Relist/Verify Trading API call to reference and use a payment business
 * policy.
 **/
class SellerPaymentProfileType extends EbatNs_ComplexType
{
    const TAG = 'SellerPaymentProfileType';
    const NAME = 'SellerPaymentProfileType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var int|null
     */
    protected $PaymentProfileID = null;

    /**
     * @var string|null
     */
    protected $PaymentProfileName = null;


    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPaymentProfileID()
    {
        return $this->_dc($this->PaymentProfileID, 'PaymentProfileID');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setPaymentProfileID($value)
    {
        $this->PaymentProfileID = self::_int($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPaymentProfileName()
    {
        return $this->_dc($this->PaymentProfileName, 'PaymentProfileName');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setPaymentProfileName($value)
    {
        $this->PaymentProfileName = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'PaymentProfileID' => ['type' => 'int'],
            'PaymentProfileName' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

SellerPaymentProfileType::_register();

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
 * CheckoutStatus
 * container that is returned in
 * 
 * GetOrders
 * and
 * GetOrderTransactions
 * to indicate
 * the current checkout status of the order.
 **/
class CheckoutStatusType extends EbatNs_ComplexType
{
    const TAG = 'CheckoutStatusType';
    const NAME = 'CheckoutStatusType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var PaymentStatusCodeType|null
     */
    protected $eBayPaymentStatus = null;

    /**
     * @var string|null
     */
    protected $LastModifiedTime = null;

    /**
     * @var BuyerPaymentMethodCodeType|null
     */
    protected $PaymentMethod = null;

    /**
     * @var CompleteStatusCodeType|null
     */
    protected $Status = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $IntegratedMerchantCreditCardEnabled = null;

    /**
     * @var EBayPaymentMismatchDetailsType|null
     */
    protected $eBayPaymentMismatchDetails = null;

    /**
     * @var BuyerPaymentInstrumentCodeType|null
     */
    protected $PaymentInstrument = null;


    /**
     * @return PaymentStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEBayPaymentStatus()
    {
        return $this->_dc($this->eBayPaymentStatus);
    }

    /**
     * @param PaymentStatusCodeType|null $value
     * @return void
     */
    public function setEBayPaymentStatus($value)
    {
        $this->eBayPaymentStatus = $this->_enum($value, PaymentStatusCodeType::class);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getLastModifiedTime()
    {
        return $this->_dc($this->LastModifiedTime, 'LastModifiedTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setLastModifiedTime($value)
    {
        $this->LastModifiedTime = self::_string($value);
    }

    /**
     * @return BuyerPaymentMethodCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPaymentMethod()
    {
        return $this->_dc($this->PaymentMethod);
    }

    /**
     * @param BuyerPaymentMethodCodeType|null $value
     * @return void
     */
    public function setPaymentMethod($value)
    {
        $this->PaymentMethod = $this->_enum($value, BuyerPaymentMethodCodeType::class);
    }

    /**
     * @return CompleteStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getStatus()
    {
        return $this->_dc($this->Status);
    }

    /**
     * @param CompleteStatusCodeType|null $value
     * @return void
     */
    public function setStatus($value)
    {
        $this->Status = $this->_enum($value, CompleteStatusCodeType::class);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getIntegratedMerchantCreditCardEnabled()
    {
        return $this->_dc($this->IntegratedMerchantCreditCardEnabled === 'true', 'IntegratedMerchantCreditCardEnabled');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setIntegratedMerchantCreditCardEnabled($value)
    {
        $this->IntegratedMerchantCreditCardEnabled = self::_bool($value);
    }

    /**
     * @return EBayPaymentMismatchDetailsType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEBayPaymentMismatchDetails()
    {
        return $this->_dc($this->eBayPaymentMismatchDetails, 'eBayPaymentMismatchDetails');
    }

    /**
     * @param EBayPaymentMismatchDetailsType|null $value
     * @return void
     */
    public function setEBayPaymentMismatchDetails($value)
    {
        $this->eBayPaymentMismatchDetails = $value;
    }

    /**
     * @return BuyerPaymentInstrumentCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPaymentInstrument()
    {
        return $this->_dc($this->PaymentInstrument);
    }

    /**
     * @param BuyerPaymentInstrumentCodeType|null $value
     * @return void
     */
    public function setPaymentInstrument($value)
    {
        $this->PaymentInstrument = $this->_enum($value, BuyerPaymentInstrumentCodeType::class);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'eBayPaymentStatus' => ['type' => 'PaymentStatusCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'LastModifiedTime' => [],
            'PaymentMethod' => ['type' => 'BuyerPaymentMethodCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'Status' => ['type' => 'CompleteStatusCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'IntegratedMerchantCreditCardEnabled' => ['type' => 'bool'],
            'eBayPaymentMismatchDetails' => ['type' => 'EBayPaymentMismatchDetailsType', 'xmlns' => self::XMLNS],
            'PaymentInstrument' => ['type' => 'BuyerPaymentInstrumentCodeType', 'enum' => true, 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

CheckoutStatusType::_register();

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
 * Container consisting of details related to payment of an eBay order on an external system. This container is only
 * returned if order payment has been made on an external system. For
 * GetSellerTransaactions
 * and
 * GetItemTransactions
 * , this container is not returned for multiple line item orders.
 **/
class ExternalTransactionType extends EbatNs_ComplexType
{
    const TAG = 'ExternalTransactionType';
    const NAME = 'ExternalTransactionType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $ExternalTransactionID = null;

    /**
     * @var string|null
     */
    protected $ExternalTransactionTime = null;

    /**
     * @var AmountType|null
     */
    protected $FeeOrCreditAmount = null;

    /**
     * @var AmountType|null
     */
    protected $PaymentOrRefundAmount = null;

    /**
     * @var PaymentTransactionStatusCodeType|null
     */
    protected $ExternalTransactionStatus = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getExternalTransactionID()
    {
        return $this->_dc($this->ExternalTransactionID, 'ExternalTransactionID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setExternalTransactionID($value)
    {
        $this->ExternalTransactionID = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getExternalTransactionTime()
    {
        return $this->_dc($this->ExternalTransactionTime, 'ExternalTransactionTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setExternalTransactionTime($value)
    {
        $this->ExternalTransactionTime = self::_string($value);
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getFeeOrCreditAmount()
    {
        return $this->_dc($this->FeeOrCreditAmount, 'FeeOrCreditAmount');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setFeeOrCreditAmount($value)
    {
        $this->FeeOrCreditAmount = $value;
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPaymentOrRefundAmount()
    {
        return $this->_dc($this->PaymentOrRefundAmount, 'PaymentOrRefundAmount');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setPaymentOrRefundAmount($value)
    {
        $this->PaymentOrRefundAmount = $value;
    }

    /**
     * @return PaymentTransactionStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getExternalTransactionStatus()
    {
        return $this->_dc($this->ExternalTransactionStatus);
    }

    /**
     * @param PaymentTransactionStatusCodeType|null $value
     * @return void
     */
    public function setExternalTransactionStatus($value)
    {
        $this->ExternalTransactionStatus = $this->_enum($value, PaymentTransactionStatusCodeType::class);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'ExternalTransactionID' => [],
            'ExternalTransactionTime' => [],
            'FeeOrCreditAmount' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'PaymentOrRefundAmount' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'ExternalTransactionStatus' => ['type' => 'PaymentTransactionStatusCodeType', 'enum' => true, 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

ExternalTransactionType::_register();

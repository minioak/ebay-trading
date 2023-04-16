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
 * <span class="tablenote">
 * Note:
 * This type is only used for Half.com order refunds, and since the Half.com site has been shut down, this type
 * will also be deprecated.
 * </span>
 * Contains information about a single Half.com refund.
 **/
class RefundType extends EbatNs_ComplexType
{
    const TAG = 'RefundType';
    const NAME = 'RefundType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var AmountType|null
     */
    protected $RefundFromSeller = null;

    /**
     * @var AmountType|null
     */
    protected $TotalRefundToBuyer = null;

    /**
     * @var string|null
     */
    protected $RefundTime = null;

    /**
     * @var string|null
     */
    protected $RefundID = null;

    /**
     * @var RefundTransactionArrayType|null
     */
    protected $RefundTransactionArray = null;

    /**
     * @var AmountType|null
     */
    protected $RefundAmount = null;

    /**
     * @var RefundStatusCodeType|null
     */
    protected $RefundStatus = null;

    /**
     * @var RefundFailureReasonType|null
     */
    protected $RefundFailureReason = null;

    /**
     * @var RefundFundingSourceArrayType|null
     */
    protected $RefundFundingSourceArray = null;

    /**
     * @var string|null
     */
    protected $ExternalReferenceID = null;

    /**
     * @var string|null
     */
    protected $RefundRequestedTime = null;

    /**
     * @var string|null
     */
    protected $RefundCompletionTime = null;

    /**
     * @var string|null
     */
    protected $EstimatedRefundCompletionTime = null;

    /**
     * @var string|null
     */
    protected $SellerNoteToBuyer = null;


    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getRefundFromSeller()
    {
        return $this->_dc($this->RefundFromSeller, 'RefundFromSeller');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setRefundFromSeller($value)
    {
        $this->RefundFromSeller = $value;
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTotalRefundToBuyer()
    {
        return $this->_dc($this->TotalRefundToBuyer, 'TotalRefundToBuyer');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setTotalRefundToBuyer($value)
    {
        $this->TotalRefundToBuyer = $value;
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getRefundTime()
    {
        return $this->_dc($this->RefundTime, 'RefundTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setRefundTime($value)
    {
        $this->RefundTime = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getRefundID()
    {
        return $this->_dc($this->RefundID, 'RefundID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setRefundID($value)
    {
        $this->RefundID = self::_string($value);
    }

    /**
     * @return RefundTransactionArrayType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getRefundTransactionArray()
    {
        return $this->_dc($this->RefundTransactionArray, 'RefundTransactionArray');
    }

    /**
     * @param RefundTransactionArrayType|null $value
     * @return void
     */
    public function setRefundTransactionArray($value)
    {
        $this->RefundTransactionArray = $value;
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getRefundAmount()
    {
        return $this->_dc($this->RefundAmount, 'RefundAmount');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setRefundAmount($value)
    {
        $this->RefundAmount = $value;
    }

    /**
     * @return RefundStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getRefundStatus()
    {
        return $this->_dc($this->RefundStatus);
    }

    /**
     * @param RefundStatusCodeType|null $value
     * @return void
     */
    public function setRefundStatus($value)
    {
        $this->RefundStatus = $this->_enum($value, RefundStatusCodeType::class);
    }

    /**
     * @return RefundFailureReasonType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getRefundFailureReason()
    {
        return $this->_dc($this->RefundFailureReason, 'RefundFailureReason');
    }

    /**
     * @param RefundFailureReasonType|null $value
     * @return void
     */
    public function setRefundFailureReason($value)
    {
        $this->RefundFailureReason = $value;
    }

    /**
     * @return RefundFundingSourceArrayType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getRefundFundingSourceArray()
    {
        return $this->_dc($this->RefundFundingSourceArray, 'RefundFundingSourceArray');
    }

    /**
     * @param RefundFundingSourceArrayType|null $value
     * @return void
     */
    public function setRefundFundingSourceArray($value)
    {
        $this->RefundFundingSourceArray = $value;
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getExternalReferenceID()
    {
        return $this->_dc($this->ExternalReferenceID, 'ExternalReferenceID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setExternalReferenceID($value)
    {
        $this->ExternalReferenceID = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getRefundRequestedTime()
    {
        return $this->_dc($this->RefundRequestedTime, 'RefundRequestedTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setRefundRequestedTime($value)
    {
        $this->RefundRequestedTime = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getRefundCompletionTime()
    {
        return $this->_dc($this->RefundCompletionTime, 'RefundCompletionTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setRefundCompletionTime($value)
    {
        $this->RefundCompletionTime = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEstimatedRefundCompletionTime()
    {
        return $this->_dc($this->EstimatedRefundCompletionTime, 'EstimatedRefundCompletionTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setEstimatedRefundCompletionTime($value)
    {
        $this->EstimatedRefundCompletionTime = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSellerNoteToBuyer()
    {
        return $this->_dc($this->SellerNoteToBuyer, 'SellerNoteToBuyer');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setSellerNoteToBuyer($value)
    {
        $this->SellerNoteToBuyer = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'RefundFromSeller' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'TotalRefundToBuyer' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'RefundTime' => [],
            'RefundID' => [],
            'RefundTransactionArray' => ['type' => 'RefundTransactionArrayType', 'xmlns' => self::XMLNS],
            'RefundAmount' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'RefundStatus' => ['type' => 'RefundStatusCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'RefundFailureReason' => ['type' => 'RefundFailureReasonType', 'xmlns' => self::XMLNS],
            'RefundFundingSourceArray' => ['type' => 'RefundFundingSourceArrayType', 'xmlns' => self::XMLNS],
            'ExternalReferenceID' => [],
            'RefundRequestedTime' => [],
            'RefundCompletionTime' => [],
            'EstimatedRefundCompletionTime' => [],
            'SellerNoteToBuyer' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

RefundType::_register();

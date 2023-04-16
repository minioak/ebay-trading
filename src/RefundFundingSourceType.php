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
class RefundFundingSourceType extends EbatNs_ComplexType
{
    const TAG = 'RefundFundingSourceType';
    const NAME = 'RefundFundingSourceType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var RefundingSourceTypeCodeType|null
     */
    protected $RefundingSourceType = null;

    /**
     * @var string|null
     */
    protected $AccountNumber = null;

    /**
     * @var AmountType|null
     */
    protected $RefundAmount = null;

    /**
     * @var string|null
     */
    protected $SellerExternalTransactionID = null;

    /**
     * @var string|null
     */
    protected $BuyerExternalTransactionID = null;


    /**
     * @return RefundingSourceTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getRefundingSourceType()
    {
        return $this->_dc($this->RefundingSourceType);
    }

    /**
     * @param RefundingSourceTypeCodeType|null $value
     * @return void
     */
    public function setRefundingSourceType($value)
    {
        $this->RefundingSourceType = $this->_enum($value, RefundingSourceTypeCodeType::class);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getAccountNumber()
    {
        return $this->_dc($this->AccountNumber, 'AccountNumber');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setAccountNumber($value)
    {
        $this->AccountNumber = self::_string($value);
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
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSellerExternalTransactionID()
    {
        return $this->_dc($this->SellerExternalTransactionID, 'SellerExternalTransactionID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setSellerExternalTransactionID($value)
    {
        $this->SellerExternalTransactionID = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBuyerExternalTransactionID()
    {
        return $this->_dc($this->BuyerExternalTransactionID, 'BuyerExternalTransactionID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setBuyerExternalTransactionID($value)
    {
        $this->BuyerExternalTransactionID = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'RefundingSourceType' => ['type' => 'RefundingSourceTypeCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'AccountNumber' => [],
            'RefundAmount' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'SellerExternalTransactionID' => [],
            'BuyerExternalTransactionID' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

RefundFundingSourceType::_register();

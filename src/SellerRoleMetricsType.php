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
 * Specifies 1 year feedback metrics for a seller.
 **/
class SellerRoleMetricsType extends EbatNs_ComplexType
{
    const TAG = 'SellerRoleMetricsType';
    const NAME = 'SellerRoleMetricsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var int|null
     */
    protected $PositiveFeedbackLeftCount = null;

    /**
     * @var int|null
     */
    protected $NegativeFeedbackLeftCount = null;

    /**
     * @var int|null
     */
    protected $NeutralFeedbackLeftCount = null;

    /**
     * @var float|null
     */
    protected $FeedbackLeftPercent = null;

    /**
     * @var int|null
     */
    protected $RepeatBuyerCount = null;

    /**
     * @var float|null
     */
    protected $RepeatBuyerPercent = null;

    /**
     * @var int|null
     */
    protected $UniqueBuyerCount = null;

    /**
     * @var float|null
     */
    protected $TransactionPercent = null;

    /**
     * @var int|null
     */
    protected $CrossBorderTransactionCount = null;

    /**
     * @var float|null
     */
    protected $CrossBorderTransactionPercent = null;


    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPositiveFeedbackLeftCount()
    {
        return $this->_dc($this->PositiveFeedbackLeftCount, 'PositiveFeedbackLeftCount');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setPositiveFeedbackLeftCount($value)
    {
        $this->PositiveFeedbackLeftCount = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getNegativeFeedbackLeftCount()
    {
        return $this->_dc($this->NegativeFeedbackLeftCount, 'NegativeFeedbackLeftCount');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setNegativeFeedbackLeftCount($value)
    {
        $this->NegativeFeedbackLeftCount = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getNeutralFeedbackLeftCount()
    {
        return $this->_dc($this->NeutralFeedbackLeftCount, 'NeutralFeedbackLeftCount');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setNeutralFeedbackLeftCount($value)
    {
        $this->NeutralFeedbackLeftCount = self::_int($value);
    }

    /**
     * @return float|null|mixed Depending on the assigned data converter: mixed
     */
    public function getFeedbackLeftPercent()
    {
        return $this->_dc($this->FeedbackLeftPercent, 'FeedbackLeftPercent');
    }

    /**
     * @param float|null $value
     * @return void
     */
    public function setFeedbackLeftPercent($value)
    {
        $this->FeedbackLeftPercent = self::_float($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getRepeatBuyerCount()
    {
        return $this->_dc($this->RepeatBuyerCount, 'RepeatBuyerCount');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setRepeatBuyerCount($value)
    {
        $this->RepeatBuyerCount = self::_int($value);
    }

    /**
     * @return float|null|mixed Depending on the assigned data converter: mixed
     */
    public function getRepeatBuyerPercent()
    {
        return $this->_dc($this->RepeatBuyerPercent, 'RepeatBuyerPercent');
    }

    /**
     * @param float|null $value
     * @return void
     */
    public function setRepeatBuyerPercent($value)
    {
        $this->RepeatBuyerPercent = self::_float($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getUniqueBuyerCount()
    {
        return $this->_dc($this->UniqueBuyerCount, 'UniqueBuyerCount');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setUniqueBuyerCount($value)
    {
        $this->UniqueBuyerCount = self::_int($value);
    }

    /**
     * @return float|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTransactionPercent()
    {
        return $this->_dc($this->TransactionPercent, 'TransactionPercent');
    }

    /**
     * @param float|null $value
     * @return void
     */
    public function setTransactionPercent($value)
    {
        $this->TransactionPercent = self::_float($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCrossBorderTransactionCount()
    {
        return $this->_dc($this->CrossBorderTransactionCount, 'CrossBorderTransactionCount');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setCrossBorderTransactionCount($value)
    {
        $this->CrossBorderTransactionCount = self::_int($value);
    }

    /**
     * @return float|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCrossBorderTransactionPercent()
    {
        return $this->_dc($this->CrossBorderTransactionPercent, 'CrossBorderTransactionPercent');
    }

    /**
     * @param float|null $value
     * @return void
     */
    public function setCrossBorderTransactionPercent($value)
    {
        $this->CrossBorderTransactionPercent = self::_float($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'PositiveFeedbackLeftCount' => ['type' => 'int'],
            'NegativeFeedbackLeftCount' => ['type' => 'int'],
            'NeutralFeedbackLeftCount' => ['type' => 'int'],
            'FeedbackLeftPercent' => ['type' => 'float'],
            'RepeatBuyerCount' => ['type' => 'int'],
            'RepeatBuyerPercent' => ['type' => 'float'],
            'UniqueBuyerCount' => ['type' => 'int'],
            'TransactionPercent' => ['type' => 'float'],
            'CrossBorderTransactionCount' => ['type' => 'int'],
            'CrossBorderTransactionPercent' => ['type' => 'float']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

SellerRoleMetricsType::_register();

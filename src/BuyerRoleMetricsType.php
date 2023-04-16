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
 * BuyerRoleMetrics
 * container, which consists of details relating to the eBay buyer's one-year history of leaving feedback for the
 * seller.
 **/
class BuyerRoleMetricsType extends EbatNs_ComplexType
{
    const TAG = 'BuyerRoleMetricsType';
    const NAME = 'BuyerRoleMetricsType';
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
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'PositiveFeedbackLeftCount' => ['type' => 'int'],
            'NegativeFeedbackLeftCount' => ['type' => 'int'],
            'NeutralFeedbackLeftCount' => ['type' => 'int'],
            'FeedbackLeftPercent' => ['type' => 'float']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

BuyerRoleMetricsType::_register();

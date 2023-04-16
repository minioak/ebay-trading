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
 * Indicates whether the seller making the request can list with certain features.
 * A seller's eligibility is determined by their Feedback score.
 **/
class FeatureEligibilityType extends EbatNs_ComplexType
{
    const TAG = 'FeatureEligibilityType';
    const NAME = 'FeatureEligibilityType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var bool|null "true" or "false"
     */
    protected $QualifiesForBuyItNow = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $QualifiesForBuyItNowMultiple = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $QualifiedForFixedPriceOneDayDuration = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $QualifiesForVariations = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $QualifiedForAuctionOneDayDuration = null;


    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getQualifiesForBuyItNow()
    {
        return $this->_dc($this->QualifiesForBuyItNow === 'true', 'QualifiesForBuyItNow');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setQualifiesForBuyItNow($value)
    {
        $this->QualifiesForBuyItNow = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getQualifiesForBuyItNowMultiple()
    {
        return $this->_dc($this->QualifiesForBuyItNowMultiple === 'true', 'QualifiesForBuyItNowMultiple');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setQualifiesForBuyItNowMultiple($value)
    {
        $this->QualifiesForBuyItNowMultiple = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getQualifiedForFixedPriceOneDayDuration()
    {
        return $this->_dc($this->QualifiedForFixedPriceOneDayDuration === 'true', 'QualifiedForFixedPriceOneDayDuration');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setQualifiedForFixedPriceOneDayDuration($value)
    {
        $this->QualifiedForFixedPriceOneDayDuration = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getQualifiesForVariations()
    {
        return $this->_dc($this->QualifiesForVariations === 'true', 'QualifiesForVariations');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setQualifiesForVariations($value)
    {
        $this->QualifiesForVariations = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getQualifiedForAuctionOneDayDuration()
    {
        return $this->_dc($this->QualifiedForAuctionOneDayDuration === 'true', 'QualifiedForAuctionOneDayDuration');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setQualifiedForAuctionOneDayDuration($value)
    {
        $this->QualifiedForAuctionOneDayDuration = self::_bool($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'QualifiesForBuyItNow' => ['type' => 'bool'],
            'QualifiesForBuyItNowMultiple' => ['type' => 'bool'],
            'QualifiedForFixedPriceOneDayDuration' => ['type' => 'bool'],
            'QualifiesForVariations' => ['type' => 'bool'],
            'QualifiedForAuctionOneDayDuration' => ['type' => 'bool']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

FeatureEligibilityType::_register();

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
 * If a seller has reduced the price of a listed item with the Promotional Price Display
 * feature, this type contains the original price of the discounted item and other
 * information.
 **/
class PromotionalSaleDetailsType extends EbatNs_ComplexType
{
    const TAG = 'PromotionalSaleDetailsType';
    const NAME = 'PromotionalSaleDetailsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var AmountType|null
     */
    protected $OriginalPrice = null;

    /**
     * @var string|null
     */
    protected $StartTime = null;

    /**
     * @var string|null
     */
    protected $EndTime = null;


    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getOriginalPrice()
    {
        return $this->_dc($this->OriginalPrice, 'OriginalPrice');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setOriginalPrice($value)
    {
        $this->OriginalPrice = $value;
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getStartTime()
    {
        return $this->_dc($this->StartTime, 'StartTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setStartTime($value)
    {
        $this->StartTime = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEndTime()
    {
        return $this->_dc($this->EndTime, 'EndTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setEndTime($value)
    {
        $this->EndTime = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'OriginalPrice' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'StartTime' => [],
            'EndTime' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

PromotionalSaleDetailsType::_register();

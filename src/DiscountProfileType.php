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
 * Details of a flat or calculated shipping discount rule. Shipping Discount Rules can be set up through the
 * SetShippingDiscountProfiles
 * call or through My eBay.
 **/
class DiscountProfileType extends EbatNs_ComplexType
{
    const TAG = 'DiscountProfileType';
    const NAME = 'DiscountProfileType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $DiscountProfileID = null;

    /**
     * @var string|null
     */
    protected $DiscountProfileName = null;

    /**
     * @var AmountType|null
     */
    protected $EachAdditionalAmount = null;

    /**
     * @var AmountType|null
     */
    protected $EachAdditionalAmountOff = null;

    /**
     * @var float|null
     */
    protected $EachAdditionalPercentOff = null;

    /**
     * @var MeasureType|null
     */
    protected $WeightOff = null;

    /**
     * @var string|null
     */
    protected $MappedDiscountProfileID = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDiscountProfileID()
    {
        return $this->_dc($this->DiscountProfileID, 'DiscountProfileID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setDiscountProfileID($value)
    {
        $this->DiscountProfileID = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDiscountProfileName()
    {
        return $this->_dc($this->DiscountProfileName, 'DiscountProfileName');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setDiscountProfileName($value)
    {
        $this->DiscountProfileName = self::_string($value);
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEachAdditionalAmount()
    {
        return $this->_dc($this->EachAdditionalAmount, 'EachAdditionalAmount');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setEachAdditionalAmount($value)
    {
        $this->EachAdditionalAmount = $value;
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEachAdditionalAmountOff()
    {
        return $this->_dc($this->EachAdditionalAmountOff, 'EachAdditionalAmountOff');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setEachAdditionalAmountOff($value)
    {
        $this->EachAdditionalAmountOff = $value;
    }

    /**
     * @return float|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEachAdditionalPercentOff()
    {
        return $this->_dc($this->EachAdditionalPercentOff, 'EachAdditionalPercentOff');
    }

    /**
     * @param float|null $value
     * @return void
     */
    public function setEachAdditionalPercentOff($value)
    {
        $this->EachAdditionalPercentOff = self::_float($value);
    }

    /**
     * @return MeasureType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getWeightOff()
    {
        return $this->_dc($this->WeightOff, 'WeightOff');
    }

    /**
     * @param MeasureType|null $value
     * @return void
     */
    public function setWeightOff($value)
    {
        $this->WeightOff = $value;
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMappedDiscountProfileID()
    {
        return $this->_dc($this->MappedDiscountProfileID, 'MappedDiscountProfileID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setMappedDiscountProfileID($value)
    {
        $this->MappedDiscountProfileID = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'DiscountProfileID' => [],
            'DiscountProfileName' => [],
            'EachAdditionalAmount' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'EachAdditionalAmountOff' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'EachAdditionalPercentOff' => ['type' => 'float'],
            'WeightOff' => ['type' => 'MeasureType', 'xmlns' => self::XMLNS],
            'MappedDiscountProfileID' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

DiscountProfileType::_register();

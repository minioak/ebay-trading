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
 * CalculatedHandlingDiscount
 * container that is used in the
 * SetShippingDiscountProfiles
 * call to specify the rules used to determine package handling costs for an order in which calculated shipping is
 * used.
 **/
class CalculatedHandlingDiscountType extends EbatNs_ComplexType
{
    const TAG = 'CalculatedHandlingDiscountType';
    const NAME = 'CalculatedHandlingDiscountType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var HandlingNameCodeType|null
     */
    protected $DiscountName = null;

    /**
     * @var AmountType|null
     */
    protected $OrderHandlingAmount = null;

    /**
     * @var AmountType|null
     */
    protected $EachAdditionalAmount = null;

    /**
     * @var AmountType|null
     */
    protected $EachAdditionalOffAmount = null;

    /**
     * @var float|null
     */
    protected $EachAdditionalPercentOff = null;


    /**
     * @return HandlingNameCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDiscountName()
    {
        return $this->_dc($this->DiscountName);
    }

    /**
     * @param HandlingNameCodeType|null $value
     * @return void
     */
    public function setDiscountName($value)
    {
        $this->DiscountName = $this->_enum($value, HandlingNameCodeType::class);
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getOrderHandlingAmount()
    {
        return $this->_dc($this->OrderHandlingAmount, 'OrderHandlingAmount');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setOrderHandlingAmount($value)
    {
        $this->OrderHandlingAmount = $value;
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
    public function getEachAdditionalOffAmount()
    {
        return $this->_dc($this->EachAdditionalOffAmount, 'EachAdditionalOffAmount');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setEachAdditionalOffAmount($value)
    {
        $this->EachAdditionalOffAmount = $value;
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
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'DiscountName' => ['type' => 'HandlingNameCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'OrderHandlingAmount' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'EachAdditionalAmount' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'EachAdditionalOffAmount' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'EachAdditionalPercentOff' => ['type' => 'float']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

CalculatedHandlingDiscountType::_register();

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
class EBayPaymentMismatchDetailsType extends EbatNs_ComplexType
{
    const TAG = 'eBayPaymentMismatchDetailsType';
    const NAME = 'EBayPaymentMismatchDetailsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var MismatchTypeCodeType|null
     */
    protected $MismatchType = null;

    /**
     * @var string|null
     */
    protected $ActionRequiredBy = null;

    /**
     * @var AmountType|null
     */
    protected $MismatchAmount = null;


    /**
     * @return MismatchTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMismatchType()
    {
        return $this->_dc($this->MismatchType);
    }

    /**
     * @param MismatchTypeCodeType|null $value
     * @return void
     */
    public function setMismatchType($value)
    {
        $this->MismatchType = $this->_enum($value, MismatchTypeCodeType::class);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getActionRequiredBy()
    {
        return $this->_dc($this->ActionRequiredBy, 'ActionRequiredBy');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setActionRequiredBy($value)
    {
        $this->ActionRequiredBy = self::_string($value);
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMismatchAmount()
    {
        return $this->_dc($this->MismatchAmount, 'MismatchAmount');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setMismatchAmount($value)
    {
        $this->MismatchAmount = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'MismatchType' => ['type' => 'MismatchTypeCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'ActionRequiredBy' => [],
            'MismatchAmount' => ['type' => 'AmountType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

EBayPaymentMismatchDetailsType::_register();

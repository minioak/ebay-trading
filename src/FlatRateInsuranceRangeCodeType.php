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
 * This type is deprecated, as shipping insurance is no longer applicable or supported in eBay APIs.
 **/
class FlatRateInsuranceRangeCodeType extends EbatNs_EnumType
{
    const TAG = 'FlatRateInsuranceRangeCodeType';
    const NAME = 'FlatRateInsuranceRangeCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * Shipping insurance is no longer applicable or supported in eBay APIs.
     **/
    const CodeType_FlatRateInsuranceRange1 = 'FlatRateInsuranceRange1';

    /**
     * Shipping insurance is no longer applicable or supported in eBay APIs.
     **/
    const CodeType_FlatRateInsuranceRange2 = 'FlatRateInsuranceRange2';

    /**
     * Shipping insurance is no longer applicable or supported in eBay APIs.
     **/
    const CodeType_FlatRateInsuranceRange3 = 'FlatRateInsuranceRange3';

    /**
     * Shipping insurance is no longer applicable or supported in eBay APIs.
     **/
    const CodeType_FlatRateInsuranceRange4 = 'FlatRateInsuranceRange4';

    /**
     * Shipping insurance is no longer applicable or supported in eBay APIs.
     **/
    const CodeType_FlatRateInsuranceRange5 = 'FlatRateInsuranceRange5';

    /**
     * Shipping insurance is no longer applicable or supported in eBay APIs.
     **/
    const CodeType_FlatRateInsuranceRange6 = 'FlatRateInsuranceRange6';

    /**
     * Shipping insurance is no longer applicable or supported in eBay APIs.
     **/
    const CodeType_CustomCode = 'CustomCode';
    
    /**
     * @var string|null
     */
    protected $_value = null;


    /**
     * @param string|null $value
     */
    public function __construct($value = null)
    {
        $this->setTypeValue($value);
    }

    /**
     * @return FlatRateInsuranceRangeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param FlatRateInsuranceRangeCodeType|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $const = 'self::CodeType_' . $value;
        $this->_value = $value !== null && defined($const) ? constant($const) : null;
    }

    /**
     * @return bool
     */
    public function isFlatRateInsuranceRange1()
    {
        return $this->_value === self::CodeType_FlatRateInsuranceRange1;
    }

    /**
     * @return bool
     */
    public function isFlatRateInsuranceRange2()
    {
        return $this->_value === self::CodeType_FlatRateInsuranceRange2;
    }

    /**
     * @return bool
     */
    public function isFlatRateInsuranceRange3()
    {
        return $this->_value === self::CodeType_FlatRateInsuranceRange3;
    }

    /**
     * @return bool
     */
    public function isFlatRateInsuranceRange4()
    {
        return $this->_value === self::CodeType_FlatRateInsuranceRange4;
    }

    /**
     * @return bool
     */
    public function isFlatRateInsuranceRange5()
    {
        return $this->_value === self::CodeType_FlatRateInsuranceRange5;
    }

    /**
     * @return bool
     */
    public function isFlatRateInsuranceRange6()
    {
        return $this->_value === self::CodeType_FlatRateInsuranceRange6;
    }

    /**
     * @return bool
     */
    public function isCustomCode()
    {
        return $this->_value === self::CodeType_CustomCode;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([], parent::NAME);
        self::assignAttributes([]);
    }

}

FlatRateInsuranceRangeCodeType::_register();

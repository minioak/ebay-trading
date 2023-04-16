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
 * This type is deprecated, as product warranties are no longer applicable or supported in eBay APIs.
 **/
class WarrantyDurationOptionsCodeType extends EbatNs_EnumType
{
    const TAG = 'WarrantyDurationOptionsCodeType';
    const NAME = 'WarrantyDurationOptionsCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This value indicates that the duration of the warranty will be one month from time of purchase. If this value is
     * returned in the
     * ReturnPolicyDetails.WarrantyDuration
     * container of the
     * GeteBayDetails
     * response, the seller may offer this warranty duration to the buyer. The warranty duration value is specified
     * through the
     * ReturnPolicy.WarrantyDurationOption
     * field in an add/revise/relist API call.
     **/
    const CodeType_Months_1 = 'Months_1';

    /**
     * This value indicates that the duration of the warranty will be three months from time of purchase. If this value
     * is returned in the
     * ReturnPolicyDetails.WarrantyDuration
     * container of the
     * GeteBayDetails
     * response, the seller may offer this warranty duration to the buyer. The warranty duration value is specified
     * through the
     * ReturnPolicy.WarrantyDurationOption
     * field in an add/revise/relist API call.
     **/
    const CodeType_Months_3 = 'Months_3';

    /**
     * This value indicates that the duration of the warranty will be six months from time of purchase. If this value is
     * returned in the
     * ReturnPolicyDetails.WarrantyDuration
     * container of the
     * GeteBayDetails
     * response, the seller may offer this warranty duration to the buyer. The warranty duration value is specified
     * through the
     * ReturnPolicy.WarrantyDurationOption
     * field in an add/revise/relist API call.
     **/
    const CodeType_Months_6 = 'Months_6';

    /**
     * This value indicates that the duration of the warranty will be one year from time of purchase. If this value is
     * returned in the
     * ReturnPolicyDetails.WarrantyDuration
     * container of the
     * GeteBayDetails
     * response, the seller may offer this warranty duration to the buyer. The warranty duration value is specified
     * through the
     * ReturnPolicy.WarrantyDurationOption
     * field in an add/revise/relist API call.
     **/
    const CodeType_Years_1 = 'Years_1';

    /**
     * This value indicates that the duration of the warranty will be two years from time of purchase. If this value is
     * returned in the
     * ReturnPolicyDetails.WarrantyDuration
     * container of the
     * GeteBayDetails
     * response, the seller may offer this warranty duration to the buyer. The warranty duration value is specified
     * through the
     * ReturnPolicy.WarrantyDurationOption
     * field in an add/revise/relist API call.
     **/
    const CodeType_Years_2 = 'Years_2';

    /**
     * This value indicates that the duration of the warranty will be three years from time of purchase. If this value
     * is returned in the
     * ReturnPolicyDetails.WarrantyDuration
     * container of the
     * GeteBayDetails
     * response, the seller may offer this warranty duration to the buyer. The warranty duration value is specified
     * through the
     * ReturnPolicy.WarrantyDurationOption
     * field in an add/revise/relist API call.
     **/
    const CodeType_Years_3 = 'Years_3';

    /**
     * This value indicates that the duration of the warranty is longer than three years from time of purchase. If this
     * value is returned in the
     * ReturnPolicyDetails.WarrantyDuration
     * container of the
     * GeteBayDetails
     * response, the seller may offer this warranty duration to the buyer. The warranty duration value is specified
     * through the
     * ReturnPolicy.WarrantyDurationOption
     * field in an add/revise/relist API call.
     **/
    const CodeType_Years_MoreThan3 = 'Years_MoreThan3';

    /**
     * This value is reserved for internal or future use.
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
     * @return WarrantyDurationOptionsCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param WarrantyDurationOptionsCodeType|null $value
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
    public function isMonths_1()
    {
        return $this->_value === self::CodeType_Months_1;
    }

    /**
     * @return bool
     */
    public function isMonths_3()
    {
        return $this->_value === self::CodeType_Months_3;
    }

    /**
     * @return bool
     */
    public function isMonths_6()
    {
        return $this->_value === self::CodeType_Months_6;
    }

    /**
     * @return bool
     */
    public function isYears_1()
    {
        return $this->_value === self::CodeType_Years_1;
    }

    /**
     * @return bool
     */
    public function isYears_2()
    {
        return $this->_value === self::CodeType_Years_2;
    }

    /**
     * @return bool
     */
    public function isYears_3()
    {
        return $this->_value === self::CodeType_Years_3;
    }

    /**
     * @return bool
     */
    public function isYears_MoreThan3()
    {
        return $this->_value === self::CodeType_Years_MoreThan3;
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

WarrantyDurationOptionsCodeType::_register();

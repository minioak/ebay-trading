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
 * Enumerated type used by the
 * QuantityOperator
 * field that is returned under the
 * FavoriteSearch
 * container in a
 * GetMyeBayBuying
 * call. The values in this type indicate how the quantity of the item that the prospective desires compares to the
 * quantity available.
 **/
class QuantityOperatorCodeType extends EbatNs_EnumType
{
    const TAG = 'QuantityOperatorCodeType';
    const NAME = 'QuantityOperatorCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This enumeration value indicates that the quantity sought (specified in
     * Quantity
     * field) is less than the quantity available (specified in
     * TotalAvailable
     * field).
     **/
    const CodeType_LessThan = 'LessThan';

    /**
     * This enumeration value indicates that the quantity sought (specified in
     * Quantity
     * field) is less than or equal to the quantity available (specified in
     * TotalAvailable
     * field).
     **/
    const CodeType_LessThanOrEqual = 'LessThanOrEqual';

    /**
     * This enumeration value indicates that the quantity sought (specified in
     * Quantity
     * field) is equal to the quantity available (specified in
     * TotalAvailable
     * field).
     **/
    const CodeType_Equal = 'Equal';

    /**
     * This enumeration value indicates that the quantity sought (specified in
     * Quantity
     * field) is greater than the quantity available (specified in
     * TotalAvailable
     * field).
     **/
    const CodeType_GreaterThan = 'GreaterThan';

    /**
     * This enumeration value indicates that the quantity sought (specified in
     * Quantity
     * field) is greater than or equal to the quantity available (specified in
     * TotalAvailable
     * field).
     **/
    const CodeType_GreaterThanOrEqual = 'GreaterThanOrEqual';

    /**
     * Reserved for internal or future use.
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
     * @return QuantityOperatorCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param QuantityOperatorCodeType|null $value
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
    public function isLessThan()
    {
        return $this->_value === self::CodeType_LessThan;
    }

    /**
     * @return bool
     */
    public function isLessThanOrEqual()
    {
        return $this->_value === self::CodeType_LessThanOrEqual;
    }

    /**
     * @return bool
     */
    public function isEqual()
    {
        return $this->_value === self::CodeType_Equal;
    }

    /**
     * @return bool
     */
    public function isGreaterThan()
    {
        return $this->_value === self::CodeType_GreaterThan;
    }

    /**
     * @return bool
     */
    public function isGreaterThanOrEqual()
    {
        return $this->_value === self::CodeType_GreaterThanOrEqual;
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

QuantityOperatorCodeType::_register();

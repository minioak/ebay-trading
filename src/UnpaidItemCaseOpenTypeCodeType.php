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
 * <span class="tablenote"> <strong>Note:</strong>  This type is deprecated since Unpaid Item cases are no longer
 * supported. </span>
 **/
class UnpaidItemCaseOpenTypeCodeType extends EbatNs_EnumType
{
    const TAG = 'UnpaidItemCaseOpenTypeCodeType';
    const NAME = 'UnpaidItemCaseOpenTypeCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * <span class="tablenote"><strong>Note:</strong> This field is deprecated (Unpaid Item cases are no longer
     * supported). </span>
     **/
    const CodeType_Auto = 'Auto';

    /**
     * <span class="tablenote"><strong>Note:</strong> This field is deprecated (Unpaid Item cases are no longer
     * supported). </span>
     **/
    const CodeType_Manual = 'Manual';

    /**
     * This value is reserved for future or internal use.
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
     * @return UnpaidItemCaseOpenTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param UnpaidItemCaseOpenTypeCodeType|null $value
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
    public function isAuto()
    {
        return $this->_value === self::CodeType_Auto;
    }

    /**
     * @return bool
     */
    public function isManual()
    {
        return $this->_value === self::CodeType_Manual;
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

UnpaidItemCaseOpenTypeCodeType::_register();

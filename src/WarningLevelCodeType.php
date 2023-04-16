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
 * This enumerated type contains the list of values that can be passed in through the
 * WarningLevel
 * field of a call request.
 **/
class WarningLevelCodeType extends EbatNs_EnumType
{
    const TAG = 'WarningLevelCodeType';
    const NAME = 'WarningLevelCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * The
     * WarningLevel
     * value is set to <code>Low</code> if the user does not wish to receive warnings when the application passes
     * unrecognized or deprecated elements in an API call request.
     * This is the default value if
     * WarningLevel
     * is not specified in the call request.
     **/
    const CodeType_Low = 'Low';

    /**
     * The
     * WarningLevel
     * value is set to <code>High</code> if the user wishes to receive warnings when the application passes
     * unrecognized or deprecated elements in an API call request. Setting the
     * WarningLevel
     * value to <code>High</code>  is not recommended in a production environment. Instead, it should only be used
     * during the development/debugging stage.
     **/
    const CodeType_High = 'High';
    
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
     * @return WarningLevelCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param WarningLevelCodeType|null $value
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
    public function isLow()
    {
        return $this->_value === self::CodeType_Low;
    }

    /**
     * @return bool
     */
    public function isHigh()
    {
        return $this->_value === self::CodeType_High;
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

WarningLevelCodeType::_register();

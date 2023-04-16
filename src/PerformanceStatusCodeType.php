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
 * Enumerated type that defines eBay Seller Levels.
 **/
class PerformanceStatusCodeType extends EbatNs_EnumType
{
    const TAG = 'PerformanceStatusCodeType';
    const NAME = 'PerformanceStatusCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This enumeration value indicates that the user's Seller Level is Top-Rated.
     **/
    const CodeType_TopRated = 'TopRated';

    /**
     * This enumeration value indicates that the user's Seller Level is Above Standard.
     **/
    const CodeType_AboveStandard = 'AboveStandard';

    /**
     * This enumeration value indicates that the user's Seller Level is Standard.
     **/
    const CodeType_Standard = 'Standard';

    /**
     * This enumeration value indicates that the user's Seller Level is Below Standard.
     **/
    const CodeType_BelowStandard = 'BelowStandard';

    /**
     * Reserved for internal use.
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
     * @return PerformanceStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param PerformanceStatusCodeType|null $value
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
    public function isTopRated()
    {
        return $this->_value === self::CodeType_TopRated;
    }

    /**
     * @return bool
     */
    public function isAboveStandard()
    {
        return $this->_value === self::CodeType_AboveStandard;
    }

    /**
     * @return bool
     */
    public function isStandard()
    {
        return $this->_value === self::CodeType_Standard;
    }

    /**
     * @return bool
     */
    public function isBelowStandard()
    {
        return $this->_value === self::CodeType_BelowStandard;
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

PerformanceStatusCodeType::_register();

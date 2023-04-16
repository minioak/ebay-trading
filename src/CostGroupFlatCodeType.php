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
 * This enumerated type is used to indicate which flat-rate shipping cost group that a shipping service option
 * belongs to.
 **/
class CostGroupFlatCodeType extends EbatNs_EnumType
{
    const TAG = 'CostGroupFlatCodeType';
    const NAME = 'CostGroupFlatCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This enumeration value indicates that the shipping service option belongs to flat-rate shipping cost group 1.
     **/
    const CodeType_Group1MaxFlatShippingCost = 'Group1MaxFlatShippingCost';

    /**
     * This enumeration value indicates that the shipping service option belongs to flat-rate shipping cost group 2.
     **/
    const CodeType_Group2MaxFlatShippingCost = 'Group2MaxFlatShippingCost';

    /**
     * This enumeration value indicates that the shipping service option belongs to flat-rate shipping cost group 3.
     **/
    const CodeType_Group3MaxFlatShippingCost = 'Group3MaxFlatShippingCost';

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
     * @return CostGroupFlatCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param CostGroupFlatCodeType|null $value
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
    public function isGroup1MaxFlatShippingCost()
    {
        return $this->_value === self::CodeType_Group1MaxFlatShippingCost;
    }

    /**
     * @return bool
     */
    public function isGroup2MaxFlatShippingCost()
    {
        return $this->_value === self::CodeType_Group2MaxFlatShippingCost;
    }

    /**
     * @return bool
     */
    public function isGroup3MaxFlatShippingCost()
    {
        return $this->_value === self::CodeType_Group3MaxFlatShippingCost;
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

CostGroupFlatCodeType::_register();

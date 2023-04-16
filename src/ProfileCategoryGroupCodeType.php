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
 * Enumerated type that defines the category group values. Business Policies profiles (Payment,
 * Shipping, and Return Policy) are linked to category groups.
 **/
class ProfileCategoryGroupCodeType extends EbatNs_EnumType
{
    const TAG = 'ProfileCategoryGroupCodeType';
    const NAME = 'ProfileCategoryGroupCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * Default value.
     **/
    const CodeType_Inherit = 'Inherit';

    /**
     * None.
     **/
    const CodeType_None = 'None';

    /**
     * For Business Policies, the 'ALL' enumeration value represents all eBay categories except for motor vehicles.
     **/
    const CodeType_ALL = 'ALL';

    /**
     * For Business Policies, the 'MOTORS_VEHICLE' enumeration value represents all motor vehicle categories.
     **/
    const CodeType_MOTORS_VEHICLE = 'MOTORS_VEHICLE';
    
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
     * @return ProfileCategoryGroupCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param ProfileCategoryGroupCodeType|null $value
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
    public function isInherit()
    {
        return $this->_value === self::CodeType_Inherit;
    }

    /**
     * @return bool
     */
    public function isNone()
    {
        return $this->_value === self::CodeType_None;
    }

    /**
     * @return bool
     */
    public function isALL()
    {
        return $this->_value === self::CodeType_ALL;
    }

    /**
     * @return bool
     */
    public function isMOTORS_VEHICLE()
    {
        return $this->_value === self::CodeType_MOTORS_VEHICLE;
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

ProfileCategoryGroupCodeType::_register();

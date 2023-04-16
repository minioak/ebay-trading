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
 * This enumerated type defines the values that can be used when adding, modiying, or
 * deleting a shipping discount profile (through the
 * ModifyActionCode
 * field in
 * SetShippingDiscountProfiles
 * ).
 **/
class ModifyActionCodeType extends EbatNs_EnumType
{
    const TAG = 'ModifyActionCodeType';
    const NAME = 'ModifyActionCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This value is used in a
     * SetShippingDiscountProfiles
     * request
     * to create a new shipping discount profile.
     **/
    const CodeType_Add = 'Add';

    /**
     * This value is used in a
     * SetShippingDiscountProfiles
     * request
     * to delete an existing shipping discount profile.
     **/
    const CodeType_Delete = 'Delete';

    /**
     * This value is used in a
     * SetShippingDiscountProfiles
     * request
     * to modify an existing shipping discount profile.
     **/
    const CodeType_Update = 'Update';

    /**
     * Reserved for future use.
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
     * @return ModifyActionCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param ModifyActionCodeType|null $value
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
    public function isAdd()
    {
        return $this->_value === self::CodeType_Add;
    }

    /**
     * @return bool
     */
    public function isDelete()
    {
        return $this->_value === self::CodeType_Delete;
    }

    /**
     * @return bool
     */
    public function isUpdate()
    {
        return $this->_value === self::CodeType_Update;
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

ModifyActionCodeType::_register();

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
 * This enumerated type is deprecated.
 **/
class ProductStateCodeType extends EbatNs_EnumType
{
    const TAG = 'ProductStateCodeType';
    const NAME = 'ProductStateCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This value is not used.
     **/
    const CodeType_Update = 'Update';

    /**
     * This value is not used.
     **/
    const CodeType_UpdateMajor = 'UpdateMajor';

    /**
     * This value is not used.
     **/
    const CodeType_UpdateNoDetails = 'UpdateNoDetails';

    /**
     * This value is not used.
     **/
    const CodeType_Merge = 'Merge';

    /**
     * This value is not used.
     **/
    const CodeType_Delete = 'Delete';

    /**
     * This value is not used.
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
     * @return ProductStateCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param ProductStateCodeType|null $value
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
    public function isUpdate()
    {
        return $this->_value === self::CodeType_Update;
    }

    /**
     * @return bool
     */
    public function isUpdateMajor()
    {
        return $this->_value === self::CodeType_UpdateMajor;
    }

    /**
     * @return bool
     */
    public function isUpdateNoDetails()
    {
        return $this->_value === self::CodeType_UpdateNoDetails;
    }

    /**
     * @return bool
     */
    public function isMerge()
    {
        return $this->_value === self::CodeType_Merge;
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

ProductStateCodeType::_register();

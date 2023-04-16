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
 * Specifies the type of action to carry out with SetStoreCategories.
 **/
class StoreCategoryUpdateActionCodeType extends EbatNs_EnumType
{
    const TAG = 'StoreCategoryUpdateActionCodeType';
    const NAME = 'StoreCategoryUpdateActionCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * (in) Add the listed categories to the store.
     **/
    const CodeType_Add = 'Add';

    /**
     * (in) Delete the listed categories from the store.
     **/
    const CodeType_Delete = 'Delete';

    /**
     * (in) Move the listed categories from one place in the store category
     * structure to another.
     **/
    const CodeType_Move = 'Move';

    /**
     * (in) Rename the listed store categories to the names provided.
     **/
    const CodeType_Rename = 'Rename';

    /**
     * (out) Reserved for internal or future use.
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
     * @return StoreCategoryUpdateActionCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param StoreCategoryUpdateActionCodeType|null $value
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
    public function isMove()
    {
        return $this->_value === self::CodeType_Move;
    }

    /**
     * @return bool
     */
    public function isRename()
    {
        return $this->_value === self::CodeType_Rename;
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

StoreCategoryUpdateActionCodeType::_register();

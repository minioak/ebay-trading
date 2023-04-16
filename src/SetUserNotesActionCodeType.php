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
 * Specifies the action to take for an item's My eBay notes.
 **/
class SetUserNotesActionCodeType extends EbatNs_EnumType
{
    const TAG = 'SetUserNotesActionCodeType';
    const NAME = 'SetUserNotesActionCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * Creates or replaces an item's My eBay notes. Note that if
     * the specified item already has notes in My eBay, the new
     * notes will completely replace the existing notes. They will
     * not be appended.
     **/
    const CodeType_AddOrUpdate = 'AddOrUpdate';

    /**
     * Deletes any existing My eBay notes for the specified item.
     * Specifying Delete when no notes exist does nothing, but does
     * not return an error.
     **/
    const CodeType_Delete = 'Delete';

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
     * @return SetUserNotesActionCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param SetUserNotesActionCodeType|null $value
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
    public function isAddOrUpdate()
    {
        return $this->_value === self::CodeType_AddOrUpdate;
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

SetUserNotesActionCodeType::_register();

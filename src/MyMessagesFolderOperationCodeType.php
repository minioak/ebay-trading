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
 * This enumerated type contains the operations that can be used in a
 * ReviseMyMessagesFolders
 * call.
 **/
class MyMessagesFolderOperationCodeType extends EbatNs_EnumType
{
    const TAG = 'MyMessagesFolderOperationCodeType';
    const NAME = 'MyMessagesFolderOperationCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This enumeration value is used to create one or more custom folders in
     * My eBay Messages
     * . For a 'Display' operation, the new folder name(s) are specified in  one or more
     * FolderName
     * fields. The maximum length of a folder name is 15 characters. Up to 10 new folders can be created with one
     * ReviseMyMessagesFolders
     * call, but this is also limited by how many custom folders exist at the time of the call, as only a maximum of 10
     * custom folders are supported in
     * My eBay Messages
     * .
     **/
    const CodeType_Display = 'Display';

    /**
     * This enumeration value is used to rename one or more existing folders in
     * My eBay Messages
     * . For a 'Rename' operation, the unique identifier(s) of the message folder(s) to rename are specified in one or
     * more
     * FolderID
     * fields, and the new name for the folder(s) are specified in one or more
     * FolderName
     * fields.
     * 
     * The
     * FolderID
     * and
     * FolderName
     * values can be retrieved by calling
     * GetMyMessages
     * with a
     * DetailLevel
     * value set to <code>ReturnSummary</code>, or these folder names and identifiers can be found by navigating to
     * My eBay Messages
     * (Folder ID values are displayed at the end of the browser's URL when that folder is opened).
     * 
     * The maximum length of a folder name is 15 characters. The Inbox and Sent folders cannot be renamed.
     * 
     * <span class="tablenote">
     * Note:
     * If multiple folders will be renamed with one call, the user must pay close attention to the order of the
     * FolderID
     * and
     * FolderName
     * fields, as eBay will process these requests in order according to the placement of the the
     * FolderID
     * and
     * FolderName
     * fields. So, the existing folder identified by the first
     * FolderID
     * field in the request payload will get renamed to the folder name passed into the first
     * FolderName
     * field in the request payload, and so on.
     * </span>
     **/
    const CodeType_Rename = 'Rename';

    /**
     * This enumeration value is used to remove one or more custom folders in
     * My eBay Messages
     * . For a 'Remove' operation, the folder(s) to remove are specified in one or more
     * FolderID
     * fields. The
     * FolderID
     * values for a
     * My eBay Messages
     * folders can be retrieved by calling
     * GetMyMessages
     * with a
     * DetailLevel
     * value set to <code>ReturnSummary</code>, or these folder IDs can be found by navigating to a specific folder in
     * My eBay Messages
     * , and the ID value for the opened folder is displayed at the end of the browser's URL.
     * 
     * A
     * My eBay Messages
     * folder must be empty before being removed, and an error is returned if a user tries to remove a non-empty
     * folder.
     * 
     * The Inbox and Sent folders cannot be removed under any circumstance.
     **/
    const CodeType_Remove = 'Remove';

    /**
     * Reserved for future or internal use.
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
     * @return MyMessagesFolderOperationCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param MyMessagesFolderOperationCodeType|null $value
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
    public function isDisplay()
    {
        return $this->_value === self::CodeType_Display;
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
    public function isRemove()
    {
        return $this->_value === self::CodeType_Remove;
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

MyMessagesFolderOperationCodeType::_register();

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
 * Enumerated type defining the possible values that can be used in the
 * AccountEntrySortType
 * field of the
 * GetAccount
 * request to sort account entries returned in the response.
 **/
class AccountEntrySortTypeCodeType extends EbatNs_EnumType
{
    const TAG = 'AccountEntrySortTypeCodeType';
    const NAME = 'AccountEntrySortTypeCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This is the default value. With this value set, account entries in the
     * GetAccount
     * response are sorted by transaction date (see
     * AccountEntry.Date
     * field) in ascending order (oldest transaction to most recent transaction). This value will produce the same
     * results as the
     * AccountEntryCreatedTimeAscending
     * value.
     **/
    const CodeType_None = 'None';

    /**
     * With this value set, account entries in the
     * GetAccount
     * response are sorted by transaction date (see
     * AccountEntry.Date
     * field) in ascending order (oldest transaction to most recent transaction). This value will produce the same
     * results as the
     * None
     * value.
     **/
    const CodeType_AccountEntryCreatedTimeAscending = 'AccountEntryCreatedTimeAscending';

    /**
     * With this value set, account entries in the
     * GetAccount
     * response are sorted by transaction date (see
     * AccountEntry.Date
     * field) in descending order (most recent transaction to oldest transaction).
     **/
    const CodeType_AccountEntryCreatedTimeDescending = 'AccountEntryCreatedTimeDescending';

    /**
     * With this value set, account entries in the
     * GetAccount
     * response are sorted by Item ID value (see
     * AccountEntry.ItemID
     * field) in ascending order (oldest eBay listing to most recent eBay listing).
     **/
    const CodeType_AccountEntryItemNumberAscending = 'AccountEntryItemNumberAscending';

    /**
     * With this value set, account entries in the
     * GetAccount
     * response are sorted by Item ID value (see
     * AccountEntry.ItemID
     * field) in descending order (most recent eBay listing to oldest eBay listing).
     **/
    const CodeType_AccountEntryItemNumberDescending = 'AccountEntryItemNumberDescending';

    /**
     * With this value set, account entries in the
     * GetAccount
     * response are sorted in alphabetical order according to each entry's
     * AccountEntry.Description
     * value. When account entries are sorted according to fee type, the secondary sort criterion is transaction date,
     * and for account entries with identical fee types, the oldest account entries will appear first in the response.
     **/
    const CodeType_AccountEntryFeeTypeAscending = 'AccountEntryFeeTypeAscending';

    /**
     * With this value set, account entries in the
     * GetAccount
     * response are sorted in reverse alphabetical order according to each entry's
     * AccountEntry.Description
     * value. When account entries are sorted according to fee type, the secondary sort criterion is transaction date,
     * and for account entries with identical fee types, the oldest account entries will appear first in the response.
     **/
    const CodeType_AccountEntryFeeTypeDescending = 'AccountEntryFeeTypeDescending';

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
     * @return AccountEntrySortTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param AccountEntrySortTypeCodeType|null $value
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
    public function isNone()
    {
        return $this->_value === self::CodeType_None;
    }

    /**
     * @return bool
     */
    public function isAccountEntryCreatedTimeAscending()
    {
        return $this->_value === self::CodeType_AccountEntryCreatedTimeAscending;
    }

    /**
     * @return bool
     */
    public function isAccountEntryCreatedTimeDescending()
    {
        return $this->_value === self::CodeType_AccountEntryCreatedTimeDescending;
    }

    /**
     * @return bool
     */
    public function isAccountEntryItemNumberAscending()
    {
        return $this->_value === self::CodeType_AccountEntryItemNumberAscending;
    }

    /**
     * @return bool
     */
    public function isAccountEntryItemNumberDescending()
    {
        return $this->_value === self::CodeType_AccountEntryItemNumberDescending;
    }

    /**
     * @return bool
     */
    public function isAccountEntryFeeTypeAscending()
    {
        return $this->_value === self::CodeType_AccountEntryFeeTypeAscending;
    }

    /**
     * @return bool
     */
    public function isAccountEntryFeeTypeDescending()
    {
        return $this->_value === self::CodeType_AccountEntryFeeTypeDescending;
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

AccountEntrySortTypeCodeType::_register();

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
 * This type specifies the sort order of a returned array of elements. The array or list to be sorted, the sort key,
 * and the default sort order depend on the call.
 **/
class SortOrderCodeType extends EbatNs_EnumType
{
    const TAG = 'SortOrderCodeType';
    const NAME = 'SortOrderCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * The results will be sorted by the specified key in ascending (low to high) order.
     **/
    const CodeType_Ascending = 'Ascending';

    /**
     * The results will be sorted by the specified key in descending (high to low) order.
     **/
    const CodeType_Descending = 'Descending';

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
     * @return SortOrderCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param SortOrderCodeType|null $value
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
    public function isAscending()
    {
        return $this->_value === self::CodeType_Ascending;
    }

    /**
     * @return bool
     */
    public function isDescending()
    {
        return $this->_value === self::CodeType_Descending;
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

SortOrderCodeType::_register();

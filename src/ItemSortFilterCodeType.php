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
class ItemSortFilterCodeType extends EbatNs_EnumType
{
    const TAG = 'ItemSortFilterCodeType';
    const NAME = 'ItemSortFilterCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This value is not used.
     **/
    const CodeType_EndingLast = 'EndingLast';

    /**
     * This value is not used.
     **/
    const CodeType_EndingSoonest = 'EndingSoonest';

    /**
     * Sort items by price, with the highest price first.
     **/
    const CodeType_HighestPrice = 'HighestPrice';

    /**
     * This value is not used.
     **/
    const CodeType_LowestPrice = 'LowestPrice';

    /**
     * This value is not used.
     **/
    const CodeType_NewlyListed = 'NewlyListed';

    /**
     * This value is not used.
     **/
    const CodeType_RandomlySelected = 'RandomlySelected';

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
     * @return ItemSortFilterCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param ItemSortFilterCodeType|null $value
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
    public function isEndingLast()
    {
        return $this->_value === self::CodeType_EndingLast;
    }

    /**
     * @return bool
     */
    public function isEndingSoonest()
    {
        return $this->_value === self::CodeType_EndingSoonest;
    }

    /**
     * @return bool
     */
    public function isHighestPrice()
    {
        return $this->_value === self::CodeType_HighestPrice;
    }

    /**
     * @return bool
     */
    public function isLowestPrice()
    {
        return $this->_value === self::CodeType_LowestPrice;
    }

    /**
     * @return bool
     */
    public function isNewlyListed()
    {
        return $this->_value === self::CodeType_NewlyListed;
    }

    /**
     * @return bool
     */
    public function isRandomlySelected()
    {
        return $this->_value === self::CodeType_RandomlySelected;
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

ItemSortFilterCodeType::_register();

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
 * List of available options for how items are sorted in an eBay Store.
 **/
class StoreItemListSortOrderCodeType extends EbatNs_EnumType
{
    const TAG = 'StoreItemListSortOrderCodeType';
    const NAME = 'StoreItemListSortOrderCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * Lists items with those ending soon listed first.
     **/
    const CodeType_EndingFirst = 'EndingFirst';

    /**
     * Lists items with those newly listed appearing in the list first.
     **/
    const CodeType_NewlyListed = 'NewlyListed';

    /**
     * Lists items by price in ascending order. The item with the lowest
     * starting price is listed first.
     **/
    const CodeType_LowestPriced = 'LowestPriced';

    /**
     * Lists items by price in descending order. The item with the highest
     * starting price is listed first.
     **/
    const CodeType_HighestPriced = 'HighestPriced';

    /**
     * Lists items by combined price and shipping cost in ascending order. The item
     * with the lowest combined starting price plus shipping cost is listed first.
     **/
    const CodeType_LowestPricedPlusShipping = 'LowestPricedPlusShipping';

    /**
     * Reserved for future use.
     * Lists items by combined price and shipping cost in descending order. The item
     * with the highest combined starting price plus shipping cost is listed first.
     **/
    const CodeType_HighestPricedPlusShipping = 'HighestPricedPlusShipping';

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
     * @return StoreItemListSortOrderCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param StoreItemListSortOrderCodeType|null $value
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
    public function isEndingFirst()
    {
        return $this->_value === self::CodeType_EndingFirst;
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
    public function isLowestPriced()
    {
        return $this->_value === self::CodeType_LowestPriced;
    }

    /**
     * @return bool
     */
    public function isHighestPriced()
    {
        return $this->_value === self::CodeType_HighestPriced;
    }

    /**
     * @return bool
     */
    public function isLowestPricedPlusShipping()
    {
        return $this->_value === self::CodeType_LowestPricedPlusShipping;
    }

    /**
     * @return bool
     */
    public function isHighestPricedPlusShipping()
    {
        return $this->_value === self::CodeType_HighestPricedPlusShipping;
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

StoreItemListSortOrderCodeType::_register();

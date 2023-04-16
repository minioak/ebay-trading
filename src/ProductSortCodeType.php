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
class ProductSortCodeType extends EbatNs_EnumType
{
    const TAG = 'ProductSortCodeType';
    const NAME = 'ProductSortCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This value is not used.
     **/
    const CodeType_PopularityAsc = 'PopularityAsc';

    /**
     * This value is not used.
     **/
    const CodeType_PopularityDesc = 'PopularityDesc';

    /**
     * This value is not used.
     **/
    const CodeType_RatingAsc = 'RatingAsc';

    /**
     * This value is not used.
     **/
    const CodeType_RatingDesc = 'RatingDesc';

    /**
     * This value is not used.
     **/
    const CodeType_ReviewCountAsc = 'ReviewCountAsc';

    /**
     * This value is not used.
     **/
    const CodeType_ReviewCountDesc = 'ReviewCountDesc';

    /**
     * This value is not used.
     **/
    const CodeType_ItemCountAsc = 'ItemCountAsc';

    /**
     * This value is not used.
     **/
    const CodeType_ItemCountDesc = 'ItemCountDesc';

    /**
     * This value is not used.
     **/
    const CodeType_TitleAsc = 'TitleAsc';

    /**
     * This value is not used.
     **/
    const CodeType_TitleDesc = 'TitleDesc';

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
     * @return ProductSortCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param ProductSortCodeType|null $value
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
    public function isPopularityAsc()
    {
        return $this->_value === self::CodeType_PopularityAsc;
    }

    /**
     * @return bool
     */
    public function isPopularityDesc()
    {
        return $this->_value === self::CodeType_PopularityDesc;
    }

    /**
     * @return bool
     */
    public function isRatingAsc()
    {
        return $this->_value === self::CodeType_RatingAsc;
    }

    /**
     * @return bool
     */
    public function isRatingDesc()
    {
        return $this->_value === self::CodeType_RatingDesc;
    }

    /**
     * @return bool
     */
    public function isReviewCountAsc()
    {
        return $this->_value === self::CodeType_ReviewCountAsc;
    }

    /**
     * @return bool
     */
    public function isReviewCountDesc()
    {
        return $this->_value === self::CodeType_ReviewCountDesc;
    }

    /**
     * @return bool
     */
    public function isItemCountAsc()
    {
        return $this->_value === self::CodeType_ItemCountAsc;
    }

    /**
     * @return bool
     */
    public function isItemCountDesc()
    {
        return $this->_value === self::CodeType_ItemCountDesc;
    }

    /**
     * @return bool
     */
    public function isTitleAsc()
    {
        return $this->_value === self::CodeType_TitleAsc;
    }

    /**
     * @return bool
     */
    public function isTitleDesc()
    {
        return $this->_value === self::CodeType_TitleDesc;
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

ProductSortCodeType::_register();

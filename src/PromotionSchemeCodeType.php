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
 * This type is deprecated.
 **/
class PromotionSchemeCodeType extends EbatNs_EnumType
{
    const TAG = 'PromotionSchemeCodeType';
    const NAME = 'PromotionSchemeCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This value is not used.
     **/
    const CodeType_ItemToItem = 'ItemToItem';

    /**
     * This value is not used.
     **/
    const CodeType_ItemToStoreCat = 'ItemToStoreCat';

    /**
     * This value is not used.
     **/
    const CodeType_StoreToStoreCat = 'StoreToStoreCat';

    /**
     * This value is not used.
     **/
    const CodeType_ItemToDefaultRule = 'ItemToDefaultRule';

    /**
     * This value is not used.
     **/
    const CodeType_DefaultRule = 'DefaultRule';

    /**
     * This value is not used.
     **/
    const CodeType_CategoryProximity = 'CategoryProximity';

    /**
     * This value is not used.
     **/
    const CodeType_RelatedCategoryRule = 'RelatedCategoryRule';

    /**
     * This value is not used.
     **/
    const CodeType_DefaultUpSellLogic = 'DefaultUpSellLogic';

    /**
     * This value is not used.
     **/
    const CodeType_DefaultCrossSellLogic = 'DefaultCrossSellLogic';

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
     * @return PromotionSchemeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param PromotionSchemeCodeType|null $value
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
    public function isItemToItem()
    {
        return $this->_value === self::CodeType_ItemToItem;
    }

    /**
     * @return bool
     */
    public function isItemToStoreCat()
    {
        return $this->_value === self::CodeType_ItemToStoreCat;
    }

    /**
     * @return bool
     */
    public function isStoreToStoreCat()
    {
        return $this->_value === self::CodeType_StoreToStoreCat;
    }

    /**
     * @return bool
     */
    public function isItemToDefaultRule()
    {
        return $this->_value === self::CodeType_ItemToDefaultRule;
    }

    /**
     * @return bool
     */
    public function isDefaultRule()
    {
        return $this->_value === self::CodeType_DefaultRule;
    }

    /**
     * @return bool
     */
    public function isCategoryProximity()
    {
        return $this->_value === self::CodeType_CategoryProximity;
    }

    /**
     * @return bool
     */
    public function isRelatedCategoryRule()
    {
        return $this->_value === self::CodeType_RelatedCategoryRule;
    }

    /**
     * @return bool
     */
    public function isDefaultUpSellLogic()
    {
        return $this->_value === self::CodeType_DefaultUpSellLogic;
    }

    /**
     * @return bool
     */
    public function isDefaultCrossSellLogic()
    {
        return $this->_value === self::CodeType_DefaultCrossSellLogic;
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

PromotionSchemeCodeType::_register();

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
 * This enumerated type is used by the
 * ProductRequiredEnabled
 * field that can be returned under the
 * SiteDefaults
 * and/or
 * Category
 * containers of a
 * GetCategoryFeatures
 * response.
 * 
 * 
 * <span class="tablenote">
 * Note:
 * Due to the rollback of the Product-Based Shopping Experience mandate for all eBay categories, the
 * ProductRequiredEnabled
 * field no longer has any practical use since it will show as Disabled for
 * SiteDefaults
 * and all
 * Category
 * nodes. Due to this fact, the
 * ProductRequiredEnabledCodeType
 * is currently not applicable.
 * </span>
 **/
class ProductRequiredEnabledCodeType extends EbatNs_EnumType
{
    const TAG = 'ProductRequiredEnabledCodeType';
    const NAME = 'ProductRequiredEnabledCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This value indicates that the category does not require product-based listings (associated with an eBay catalog
     * product).
     * 
     * 
     * <span class="tablenote">
     * Note:
     * Due to the rollback of the Product-Based Shopping Experience mandate for all eBay categories, this value
     * should get returned for
     * SiteDefaults
     * and all
     * Category
     * nodes.
     * </span>
     **/
    const CodeType_Disabled = 'Disabled';

    /**
     * This value indicates that the category requires listings within the category to be associated with an eBay
     * catalog product.
     * 
     * 
     * <span class="tablenote">
     * Note:
     * Due to the rollback of the Product-Based Shopping Experience mandate for all eBay categories, this value
     * should never get returned for
     * SiteDefaults
     * or for any
     * Category
     * nodes.
     * </span>
     **/
    const CodeType_Enabled = 'Enabled';

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
     * @return ProductRequiredEnabledCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param ProductRequiredEnabledCodeType|null $value
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
    public function isDisabled()
    {
        return $this->_value === self::CodeType_Disabled;
    }

    /**
     * @return bool
     */
    public function isEnabled()
    {
        return $this->_value === self::CodeType_Enabled;
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

ProductRequiredEnabledCodeType::_register();

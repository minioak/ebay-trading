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
 * <span class="tablenote">
 * Note:
 * Currently, the only supported value for this enumeration type is <code>eBay</code>. Half.com listings will no
 * longer be supported in APIs.
 * </span>
 * Specifies the site on which the purchase was made.
 **/
class TransactionPlatformCodeType extends EbatNs_EnumType
{
    const TAG = 'TransactionPlatformCodeType';
    const NAME = 'TransactionPlatformCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This value indicates the purchase occurred on an eBay marketplace site.
     **/
    const CodeType_eBay = 'eBay';

    /**
     * <span class="tablenote">
     * Note:
     * eBay Express no longer exists.
     * </span>
     * The order line item was created on the eBay Express site.
     **/
    const CodeType_Express = 'Express';

    /**
     * <span class="tablenote">
     * Note:
     * Half.com listings will no longer be supported in APIs.
     * </span>
     * The order line item was created on Half.com site.
     **/
    const CodeType_Half = 'Half';

    /**
     * <span class="tablenote">
     * Note:
     * Shopping.com listings are no longer supported in APIs.
     * </span>
     * The order line item was created on the Shopping.com site.
     **/
    const CodeType_Shopping = 'Shopping';

    /**
     * <span class="tablenote">
     * Note:
     * World Of Good is no longer associated with eBay.
     * </span>
     * The order line item was created on the WorldOfGood site.
     **/
    const CodeType_WorldOfGood = 'WorldOfGood';

    /**
     * Reserved for future use.
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
     * @return TransactionPlatformCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param TransactionPlatformCodeType|null $value
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
    public function isEBay()
    {
        return $this->_value === self::CodeType_eBay;
    }

    /**
     * @return bool
     */
    public function isExpress()
    {
        return $this->_value === self::CodeType_Express;
    }

    /**
     * @return bool
     */
    public function isHalf()
    {
        return $this->_value === self::CodeType_Half;
    }

    /**
     * @return bool
     */
    public function isShopping()
    {
        return $this->_value === self::CodeType_Shopping;
    }

    /**
     * @return bool
     */
    public function isWorldOfGood()
    {
        return $this->_value === self::CodeType_WorldOfGood;
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

TransactionPlatformCodeType::_register();

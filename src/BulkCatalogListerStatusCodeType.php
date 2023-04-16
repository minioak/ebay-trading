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
class BulkCatalogListerStatusCodeType extends EbatNs_EnumType
{
    const TAG = 'BulkCatalogListerStatusCodeType';
    const NAME = 'BulkCatalogListerStatusCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This value is not used.
     **/
    const CodeType_Preapproved = 'Preapproved';

    /**
     * This value is not used.
     **/
    const CodeType_Active = 'Active';

    /**
     * This value is not used.
     **/
    const CodeType_OnWatch = 'OnWatch';

    /**
     * This value is not used.
     **/
    const CodeType_OnHold = 'OnHold';

    /**
     * This value is not used.
     **/
    const CodeType_Suspended = 'Suspended';

    /**
     * This value is not used.
     **/
    const CodeType_WatchWarn = 'WatchWarn';

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
     * @return BulkCatalogListerStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param BulkCatalogListerStatusCodeType|null $value
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
    public function isPreapproved()
    {
        return $this->_value === self::CodeType_Preapproved;
    }

    /**
     * @return bool
     */
    public function isActive()
    {
        return $this->_value === self::CodeType_Active;
    }

    /**
     * @return bool
     */
    public function isOnWatch()
    {
        return $this->_value === self::CodeType_OnWatch;
    }

    /**
     * @return bool
     */
    public function isOnHold()
    {
        return $this->_value === self::CodeType_OnHold;
    }

    /**
     * @return bool
     */
    public function isSuspended()
    {
        return $this->_value === self::CodeType_Suspended;
    }

    /**
     * @return bool
     */
    public function isWatchWarn()
    {
        return $this->_value === self::CodeType_WatchWarn;
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

BulkCatalogListerStatusCodeType::_register();

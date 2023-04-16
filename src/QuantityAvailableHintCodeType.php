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
 * Indicates the text message type of the item's quantity availability.
 **/
class QuantityAvailableHintCodeType extends EbatNs_EnumType
{
    const TAG = 'QuantityAvailableHintCodeType';
    const NAME = 'QuantityAvailableHintCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * (out) The message "Limited quantity available" is shown in the web
     * flow (e.g., for a flash sale or a Daily Deal).
     **/
    const CodeType_Limited = 'Limited';

    /**
     * (out) The message "More than 10 available" is shown in the web flow.
     * 10 is the value of QuantityThreshold tag based on the seller's
     * preference.
     **/
    const CodeType_MoreThan = 'MoreThan';

    /**
     * Reserved for internal or future use.
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
     * @return QuantityAvailableHintCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param QuantityAvailableHintCodeType|null $value
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
    public function isLimited()
    {
        return $this->_value === self::CodeType_Limited;
    }

    /**
     * @return bool
     */
    public function isMoreThan()
    {
        return $this->_value === self::CodeType_MoreThan;
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

QuantityAvailableHintCodeType::_register();

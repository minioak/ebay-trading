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
 * This type is deprecated, as sellers are no longer allowed to set a restocking fee through a listings's return
 * policy.
 **/
class RestockingFeeCodeType extends EbatNs_EnumType
{
    const TAG = 'RestockingFeeCodeType';
    const NAME = 'RestockingFeeCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This value indicates that the seller will not charge a restocking fee to the
     * buyer if the item is returned.
     **/
    const CodeType_NoRestockingFee = 'NoRestockingFee';

    /**
     * This value indicates that the seller charges the buyer a restocking fee of 10
     * percent of the item's purchase price if the item is returned.
     **/
    const CodeType_Percent_10 = 'Percent_10';

    /**
     * This value indicates that the seller charges the buyer a restocking fee of 15
     * percent of the item's purchase price if the item is returned.
     **/
    const CodeType_Percent_15 = 'Percent_15';

    /**
     * This value indicates that the seller charges the buyer a restocking fee of up to 20
     * percent of the item's purchase price if the item is returned.
     **/
    const CodeType_Percent_20 = 'Percent_20';

    /**
     * This is no longer a valid value.
     **/
    const CodeType_Percent_25 = 'Percent_25';

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
     * @return RestockingFeeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param RestockingFeeCodeType|null $value
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
    public function isNoRestockingFee()
    {
        return $this->_value === self::CodeType_NoRestockingFee;
    }

    /**
     * @return bool
     */
    public function isPercent_10()
    {
        return $this->_value === self::CodeType_Percent_10;
    }

    /**
     * @return bool
     */
    public function isPercent_15()
    {
        return $this->_value === self::CodeType_Percent_15;
    }

    /**
     * @return bool
     */
    public function isPercent_20()
    {
        return $this->_value === self::CodeType_Percent_20;
    }

    /**
     * @return bool
     */
    public function isPercent_25()
    {
        return $this->_value === self::CodeType_Percent_25;
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

RestockingFeeCodeType::_register();

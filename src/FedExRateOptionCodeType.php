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
 * This enumerated type consists of the different Federal Express shipping rates that sellers can offer to buyers.
 * The shipping rates for the major US shipping carriers can be selected in the Shipping rate preferences in My
 * eBay, or through the
 * SetUserPreferences
 * call.
 **/
class FedExRateOptionCodeType extends EbatNs_EnumType
{
    const TAG = 'FedExRateOptionCodeType';
    const NAME = 'FedExRateOptionCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This enumeration value indicates that the seller offers buyers the standard Federal Express shipping rates.
     **/
    const CodeType_FedExStandardList = 'FedExStandardList';

    /**
     * This enumeration value indicates that the seller offers buyers Federal Express counter rates.
     **/
    const CodeType_FedExCounter = 'FedExCounter';

    /**
     * This enumeration value indicates that the seller offers buyers discounted Federal Express shipping rates. Buyers
     * will get these discounted shipping rates as long as they use the eBay-generated shipping labels.
     **/
    const CodeType_FedExDiscounted = 'FedExDiscounted';

    /**
     * Reserved for internal or future use
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
     * @return FedExRateOptionCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param FedExRateOptionCodeType|null $value
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
    public function isFedExStandardList()
    {
        return $this->_value === self::CodeType_FedExStandardList;
    }

    /**
     * @return bool
     */
    public function isFedExCounter()
    {
        return $this->_value === self::CodeType_FedExCounter;
    }

    /**
     * @return bool
     */
    public function isFedExDiscounted()
    {
        return $this->_value === self::CodeType_FedExDiscounted;
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

FedExRateOptionCodeType::_register();

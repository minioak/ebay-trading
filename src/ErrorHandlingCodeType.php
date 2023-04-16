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
 * Preferences that specify how eBay should handle certain requests that contain
 * invalid data or that could partially fail. These preferences give you some control
 * over whether eBay returns warnings or errors in response to invalid data and how
 * eBay handles listing requests when such data is passed in. For example, these
 * preferences are applicable to
 * AddItem
 * and related calls when Item Specifics are
 * specified, and to
 * CompleteSale
 * . See <a
 * href="https://developer.ebay.com/devzone/guides/features-guide/default.html#Basics/Call-ErrorHandling.html">Error
 * Handling</a>
 * for details about these preferences and their effects.
 **/
class ErrorHandlingCodeType extends EbatNs_EnumType
{
    const TAG = 'ErrorHandlingCodeType';
    const NAME = 'ErrorHandlingCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * Apply validation rules that were in effect prior to the time
     * the call started supporting
     * ErrorHandling
     * .
     **/
    const CodeType_Legacy = 'Legacy';

    /**
     * Drop the invalid data, continue processing the request with the
     * valid data. If dropping the invalid data leaves the request in a
     * state where required data is missing, reject the request.
     * 
     * If
     * BestEffort
     * is specified for
     * CompleteSale
     * , the Ack field in the
     * response could return PartialFailure if one change fails but
     * another succeeds. For example, if the seller attempts to
     * leave feedback twice for the same order line item, the feedback changes
     * would fail but any paid or shipped status changes would succeed.
     **/
    const CodeType_BestEffort = 'BestEffort';

    /**
     * If any of the item specifics data is invalid, drop all the data and
     * proceed with listing the item. If the category has required item specifics
     * and the data was dropped, reject the listing.
     **/
    const CodeType_AllOrNothing = 'AllOrNothing';

    /**
     * If any data is invalid, reject the request.
     **/
    const CodeType_FailOnError = 'FailOnError';
    
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
     * @return ErrorHandlingCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param ErrorHandlingCodeType|null $value
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
    public function isLegacy()
    {
        return $this->_value === self::CodeType_Legacy;
    }

    /**
     * @return bool
     */
    public function isBestEffort()
    {
        return $this->_value === self::CodeType_BestEffort;
    }

    /**
     * @return bool
     */
    public function isAllOrNothing()
    {
        return $this->_value === self::CodeType_AllOrNothing;
    }

    /**
     * @return bool
     */
    public function isFailOnError()
    {
        return $this->_value === self::CodeType_FailOnError;
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

ErrorHandlingCodeType::_register();

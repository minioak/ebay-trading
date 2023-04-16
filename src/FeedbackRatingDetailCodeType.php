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
 * Applicable to sites that support the Detailed Seller Ratings feature.
 * The FeedbackRatingDetailCodeType is the list of areas for detailed seller ratings. When buyers leave an
 * overall Feedback rating (positive, neutral, or negative) for a seller, they also can leave ratings in four areas:
 * item as described, communication, shipping time, and charges for shipping and handling. Users retrieve detailed
 * ratings as averages of the ratings left by buyers.
 **/
class FeedbackRatingDetailCodeType extends EbatNs_EnumType
{
    const TAG = 'FeedbackRatingDetailCodeType';
    const NAME = 'FeedbackRatingDetailCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * Detailed seller rating in the area of "item as described."
     **/
    const CodeType_ItemAsDescribed = 'ItemAsDescribed';

    /**
     * Detailed seller rating in the area of "communication."
     **/
    const CodeType_Communication = 'Communication';

    /**
     * Detailed seller rating in the area of "shipping time." Inapplicable to
     * motor vehicle items.
     **/
    const CodeType_ShippingTime = 'ShippingTime';

    /**
     * Detailed seller rating in the area of "charges for shipping and handling."
     * Inapplicable to motor vehicle items.
     **/
    const CodeType_ShippingAndHandlingCharges = 'ShippingAndHandlingCharges';

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
     * @return FeedbackRatingDetailCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param FeedbackRatingDetailCodeType|null $value
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
    public function isItemAsDescribed()
    {
        return $this->_value === self::CodeType_ItemAsDescribed;
    }

    /**
     * @return bool
     */
    public function isCommunication()
    {
        return $this->_value === self::CodeType_Communication;
    }

    /**
     * @return bool
     */
    public function isShippingTime()
    {
        return $this->_value === self::CodeType_ShippingTime;
    }

    /**
     * @return bool
     */
    public function isShippingAndHandlingCharges()
    {
        return $this->_value === self::CodeType_ShippingAndHandlingCharges;
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

FeedbackRatingDetailCodeType::_register();

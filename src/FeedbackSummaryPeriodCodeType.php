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
 * This enumerated type is used to indicate the length of the time period for which Detailed Seller Ratings are
 * evaluated under the
 * AverageRatingSummary
 * container returned in the
 * GetFeedback
 * call.
 **/
class FeedbackSummaryPeriodCodeType extends EbatNs_EnumType
{
    const TAG = 'FeedbackSummaryPeriodCodeType';
    const NAME = 'FeedbackSummaryPeriodCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This enumeration value indicates that the Detailed Seller Rating statistics shown under each
     * AverageRatingDetails
     * container were compiled over the last 30 days.
     **/
    const CodeType_ThirtyDays = 'ThirtyDays';

    /**
     * This enumeration value indicates that the Detailed Seller Rating statistics shown under each
     * AverageRatingDetails
     * container were compiled over the last 52 weeks, or one year.
     **/
    const CodeType_FiftyTwoWeeks = 'FiftyTwoWeeks';

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
     * @return FeedbackSummaryPeriodCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param FeedbackSummaryPeriodCodeType|null $value
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
    public function isThirtyDays()
    {
        return $this->_value === self::CodeType_ThirtyDays;
    }

    /**
     * @return bool
     */
    public function isFiftyTwoWeeks()
    {
        return $this->_value === self::CodeType_FiftyTwoWeeks;
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

FeedbackSummaryPeriodCodeType::_register();

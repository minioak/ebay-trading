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
 * This enumerated type consists of the values that may be used in the request of a
 * GetFeedback
 * call in order to retrieve a specific type of Feedback.
 **/
class FeedbackTypeCodeType extends EbatNs_EnumType
{
    const TAG = 'FeedbackTypeCodeType';
    const NAME = 'FeedbackTypeCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This enumeration value will be used in the
     * FeedbackType
     * field of a
     * GetFeedback
     * call if the user only wants to retrieve the Feedback data that they have received acting as a seller.
     **/
    const CodeType_FeedbackReceivedAsSeller = 'FeedbackReceivedAsSeller';

    /**
     * This enumeration value will be used in the
     * FeedbackType
     * field of a
     * GetFeedback
     * call if the user only wants to retrieve the Feedback data that they have received acting as a buyer.
     **/
    const CodeType_FeedbackReceivedAsBuyer = 'FeedbackReceivedAsBuyer';

    /**
     * This enumeration value will be used in the
     * FeedbackType
     * field of a
     * GetFeedback
     * call if the user wants to retrieve the Feedback data that they have received acting as a seller and buyer.
     **/
    const CodeType_FeedbackReceived = 'FeedbackReceived';

    /**
     * This enumeration value will be used in the
     * FeedbackType
     * field of a
     * GetFeedback
     * call if the user wants to retrieve the Feedback they have left for their order partners while acting as a seller
     * or buyer.
     **/
    const CodeType_FeedbackLeft = 'FeedbackLeft';

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
     * @return FeedbackTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param FeedbackTypeCodeType|null $value
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
    public function isFeedbackReceivedAsSeller()
    {
        return $this->_value === self::CodeType_FeedbackReceivedAsSeller;
    }

    /**
     * @return bool
     */
    public function isFeedbackReceivedAsBuyer()
    {
        return $this->_value === self::CodeType_FeedbackReceivedAsBuyer;
    }

    /**
     * @return bool
     */
    public function isFeedbackReceived()
    {
        return $this->_value === self::CodeType_FeedbackReceived;
    }

    /**
     * @return bool
     */
    public function isFeedbackLeft()
    {
        return $this->_value === self::CodeType_FeedbackLeft;
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

FeedbackTypeCodeType::_register();

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
 * This enumerated type list the Feedback ratings that can be left by one eBay user for
 * another user regarding that user's experience with the another user during the
 * purchase/checkout flow of an order line item.
 **/
class CommentTypeCodeType extends EbatNs_EnumType
{
    const TAG = 'CommentTypeCodeType';
    const NAME = 'CommentTypeCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This value indicates that the submitting user's experience with the other user
     * (receiving feedback) was rated as a "Positive" experience. If an eBay user receives
     * a Positive rating for an order line item from a Verified User, their overall
     * Feedback score increases by a value of 1.
     **/
    const CodeType_Positive = 'Positive';

    /**
     * This value indicates that the submitting user's experience with the other user
     * (receiving feedback) was rated as a "Neutral" experience. If an eBay user receives
     * a Neutral rating for an order line item from a Verified User, their overall
     * Feedback score remains the same.
     **/
    const CodeType_Neutral = 'Neutral';

    /**
     * This value indicates that the submitting user's experience with the other user
     * (receiving feedback) was rated as a "Negative" experience. If an eBay user receives
     * a Negative rating for an order line item from a Verified User, their overall
     * Feedback score decreases by a value of 1.
     **/
    const CodeType_Negative = 'Negative';

    /**
     * This value indicates that a submitted Feedback entry was withdrawn. If a Feedback
     * entry is withdrawn, the effect of that entry on the overall Feedback score is
     * nullified. However, Feedback comments from the withdrawn entry are still visible.
     **/
    const CodeType_Withdrawn = 'Withdrawn';

    /**
     * This value indicates that a submitted Feedback entry was withdrawn based on the
     * decision of a third-party (such as eBay). If a Feedback
     * entry is withdrawn, the effect of that entry on the overall Feedback score is
     * nullified.
     * 
     * This value is only applicable to the eBay Motors site only.
     **/
    const CodeType_IndependentlyWithdrawn = 'IndependentlyWithdrawn';

    /**
     * This value is reserved for internal or future use.
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
     * @return CommentTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param CommentTypeCodeType|null $value
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
    public function isPositive()
    {
        return $this->_value === self::CodeType_Positive;
    }

    /**
     * @return bool
     */
    public function isNeutral()
    {
        return $this->_value === self::CodeType_Neutral;
    }

    /**
     * @return bool
     */
    public function isNegative()
    {
        return $this->_value === self::CodeType_Negative;
    }

    /**
     * @return bool
     */
    public function isWithdrawn()
    {
        return $this->_value === self::CodeType_Withdrawn;
    }

    /**
     * @return bool
     */
    public function isIndependentlyWithdrawn()
    {
        return $this->_value === self::CodeType_IndependentlyWithdrawn;
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

CommentTypeCodeType::_register();

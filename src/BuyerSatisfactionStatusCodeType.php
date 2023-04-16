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
 * This enumerated type contains the list of possible Buyer Satisfaction ratings for a seller.
 **/
class BuyerSatisfactionStatusCodeType extends EbatNs_EnumType
{
    const TAG = 'BuyerSatisfactionStatusCodeType';
    const NAME = 'BuyerSatisfactionStatusCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * You are doing an excellent job as an eBay seller.
     * Be sure to continue providing members with a positive buying experience.
     * A buyer satisfaction rating of Excellent ensures that you are eligible
     * for eBay incentives.
     **/
    const CodeType_Excellent = 'Excellent';

    /**
     * You are doing a good job as an eBay seller.
     * Buyers have been satisfied with your customer service. Be sure to continue
     * providing members with a positive buying experience. A buyer satisfaction
     * rating of Good ensures that you are eligible for eBay incentives.
     **/
    const CodeType_Good = 'Good';

    /**
     * This value is no longer applicable.
     **/
    const CodeType_NeedsWork = 'NeedsWork';

    /**
     * You are not doing a good job as an eBay seller.
     * Some of your buyers have not been satisfied with your service.
     * Improve your customer service to earn a higher buyer satisfaction rating.
     * If your customer service continues to receive poor responses from customers,
     * your buyer satisfaction rating can drop and could put your eBay seller's
     * account at risk.
     **/
    const CodeType_Poor = 'Poor';

    /**
     * You are doing a very poor job as an eBay seller.
     * You need to improve your selling practices immediately. Too many of your
     * customers have not been satisfied with your customer service and you are
     * at risk of losing your eBay account.
     **/
    const CodeType_VeryPoor = 'VeryPoor';

    /**
     * You are doing an unacceptable job as an eBay seller.
     * Improve your selling practices immediately. Your account may be suspended
     * because of your unacceptable customer service.
     **/
    const CodeType_Unacceptable = 'Unacceptable';

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
     * @return BuyerSatisfactionStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param BuyerSatisfactionStatusCodeType|null $value
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
    public function isExcellent()
    {
        return $this->_value === self::CodeType_Excellent;
    }

    /**
     * @return bool
     */
    public function isGood()
    {
        return $this->_value === self::CodeType_Good;
    }

    /**
     * @return bool
     */
    public function isNeedsWork()
    {
        return $this->_value === self::CodeType_NeedsWork;
    }

    /**
     * @return bool
     */
    public function isPoor()
    {
        return $this->_value === self::CodeType_Poor;
    }

    /**
     * @return bool
     */
    public function isVeryPoor()
    {
        return $this->_value === self::CodeType_VeryPoor;
    }

    /**
     * @return bool
     */
    public function isUnacceptable()
    {
        return $this->_value === self::CodeType_Unacceptable;
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

BuyerSatisfactionStatusCodeType::_register();

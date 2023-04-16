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
 * The color of a feedback score star visually denotes the
 * range in which the member's summary feedback score falls. The score
 * is the net positive feedback minus the net negative feedback left
 * for the member.
 **/
class FeedbackRatingStarCodeType extends EbatNs_EnumType
{
    const TAG = 'FeedbackRatingStarCodeType';
    const NAME = 'FeedbackRatingStarCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * No graphic displayed, feedback score 0-9.
     **/
    const CodeType_None = 'None';

    /**
     * Yellow Star, feedback score 10-49.
     **/
    const CodeType_Yellow = 'Yellow';

    /**
     * Blue Star, feedback score 50-99.
     **/
    const CodeType_Blue = 'Blue';

    /**
     * Turquoise Star, feedback score 100-499.
     **/
    const CodeType_Turquoise = 'Turquoise';

    /**
     * Purple Star, feedback score 500-999.
     **/
    const CodeType_Purple = 'Purple';

    /**
     * Red Star, feedback score 1,000-4,999
     **/
    const CodeType_Red = 'Red';

    /**
     * Green Star, feedback score 5,000-9,999.
     **/
    const CodeType_Green = 'Green';

    /**
     * Yellow Shooting Star, feedback score 10,000-24,999.
     **/
    const CodeType_YellowShooting = 'YellowShooting';

    /**
     * Turquoise Shooting Star, feedback score 25,000-49,999.
     **/
    const CodeType_TurquoiseShooting = 'TurquoiseShooting';

    /**
     * Purple Shooting Star, feedback score 50,000-99,999.
     **/
    const CodeType_PurpleShooting = 'PurpleShooting';

    /**
     * Red Shooting Star, feedback score 100,000-499,999.
     **/
    const CodeType_RedShooting = 'RedShooting';

    /**
     * Green Shooting Star, feedback score 500,000-999,999.
     **/
    const CodeType_GreenShooting = 'GreenShooting';

    /**
     * Silver Shooting Star, feedback score 1,000,000 and above.
     **/
    const CodeType_SilverShooting = 'SilverShooting';

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
     * @return FeedbackRatingStarCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param FeedbackRatingStarCodeType|null $value
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
    public function isNone()
    {
        return $this->_value === self::CodeType_None;
    }

    /**
     * @return bool
     */
    public function isYellow()
    {
        return $this->_value === self::CodeType_Yellow;
    }

    /**
     * @return bool
     */
    public function isBlue()
    {
        return $this->_value === self::CodeType_Blue;
    }

    /**
     * @return bool
     */
    public function isTurquoise()
    {
        return $this->_value === self::CodeType_Turquoise;
    }

    /**
     * @return bool
     */
    public function isPurple()
    {
        return $this->_value === self::CodeType_Purple;
    }

    /**
     * @return bool
     */
    public function isRed()
    {
        return $this->_value === self::CodeType_Red;
    }

    /**
     * @return bool
     */
    public function isGreen()
    {
        return $this->_value === self::CodeType_Green;
    }

    /**
     * @return bool
     */
    public function isYellowShooting()
    {
        return $this->_value === self::CodeType_YellowShooting;
    }

    /**
     * @return bool
     */
    public function isTurquoiseShooting()
    {
        return $this->_value === self::CodeType_TurquoiseShooting;
    }

    /**
     * @return bool
     */
    public function isPurpleShooting()
    {
        return $this->_value === self::CodeType_PurpleShooting;
    }

    /**
     * @return bool
     */
    public function isRedShooting()
    {
        return $this->_value === self::CodeType_RedShooting;
    }

    /**
     * @return bool
     */
    public function isGreenShooting()
    {
        return $this->_value === self::CodeType_GreenShooting;
    }

    /**
     * @return bool
     */
    public function isSilverShooting()
    {
        return $this->_value === self::CodeType_SilverShooting;
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

FeedbackRatingStarCodeType::_register();

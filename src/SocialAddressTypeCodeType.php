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
 * Enumerated type that defines the social networking sites that are supported by PayPal Giving Fund.
 **/
class SocialAddressTypeCodeType extends EbatNs_EnumType
{
    const TAG = 'SocialAddressTypeCodeType';
    const NAME = 'SocialAddressTypeCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This value indicates that the
     * Charity.NonProfitSocialAddress.SocialAddressId
     * is associated with the nonprofit company's Facebook account.
     **/
    const CodeType_Facebook = 'Facebook';

    /**
     * This value indicates that the
     * Charity.NonProfitSocialAddress.SocialAddressId
     * is associated with the nonprofit company's Twitter account.
     **/
    const CodeType_Twitter = 'Twitter';

    /**
     * This value indicates that the
     * Charity.NonProfitSocialAddress.SocialAddressId
     * is associated with the nonprofit company's LinkedIn account.
     **/
    const CodeType_Linkedin = 'Linkedin';

    /**
     * This value indicates that the
     * Charity.NonProfitSocialAddress.SocialAddressId
     * is associated with the nonprofit company's Google+ account.
     **/
    const CodeType_GooglePlus = 'GooglePlus';

    /**
     * This value indicates that the
     * Charity.NonProfitSocialAddress.SocialAddressId
     * is associated with the nonprofit company's MySpace account.
     **/
    const CodeType_Myspace = 'Myspace';

    /**
     * This value indicates that the
     * Charity.NonProfitSocialAddress.SocialAddressId
     * is associated with the nonprofit company's Orkut account.
     **/
    const CodeType_Orkut = 'Orkut';

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
     * @return SocialAddressTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param SocialAddressTypeCodeType|null $value
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
    public function isFacebook()
    {
        return $this->_value === self::CodeType_Facebook;
    }

    /**
     * @return bool
     */
    public function isTwitter()
    {
        return $this->_value === self::CodeType_Twitter;
    }

    /**
     * @return bool
     */
    public function isLinkedin()
    {
        return $this->_value === self::CodeType_Linkedin;
    }

    /**
     * @return bool
     */
    public function isGooglePlus()
    {
        return $this->_value === self::CodeType_GooglePlus;
    }

    /**
     * @return bool
     */
    public function isMyspace()
    {
        return $this->_value === self::CodeType_Myspace;
    }

    /**
     * @return bool
     */
    public function isOrkut()
    {
        return $this->_value === self::CodeType_Orkut;
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

SocialAddressTypeCodeType::_register();

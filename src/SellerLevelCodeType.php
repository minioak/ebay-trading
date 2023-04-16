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
 * Indicates the user's eBay PowerSeller tier. PowerSellers are distinguished in 5
 * tiers based on average monthly sales. Benefits and services vary for each tier.
 * eBay calculates eligibility for each tier monthly.
 **/
class SellerLevelCodeType extends EbatNs_EnumType
{
    const TAG = 'SellerLevelCodeType';
    const NAME = 'SellerLevelCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * Bronze (lowest tier)
     **/
    const CodeType_Bronze = 'Bronze';

    /**
     * Silver (between Bronze and Gold)
     **/
    const CodeType_Silver = 'Silver';

    /**
     * Gold (between Silver and Platinum)
     **/
    const CodeType_Gold = 'Gold';

    /**
     * Platinum (between Gold and Titanium)
     **/
    const CodeType_Platinum = 'Platinum';

    /**
     * Titanium (highest tier)
     **/
    const CodeType_Titanium = 'Titanium';

    /**
     * Not a PowerSeller (eBay has not yet evaluated your PowerSeller status, or
     * you have not chosen to be a member of the PowerSeller program,
     * or you lost your PowerSeller status due to a policy violation.)
     **/
    const CodeType_None = 'None';

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
     * @return SellerLevelCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param SellerLevelCodeType|null $value
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
    public function isBronze()
    {
        return $this->_value === self::CodeType_Bronze;
    }

    /**
     * @return bool
     */
    public function isSilver()
    {
        return $this->_value === self::CodeType_Silver;
    }

    /**
     * @return bool
     */
    public function isGold()
    {
        return $this->_value === self::CodeType_Gold;
    }

    /**
     * @return bool
     */
    public function isPlatinum()
    {
        return $this->_value === self::CodeType_Platinum;
    }

    /**
     * @return bool
     */
    public function isTitanium()
    {
        return $this->_value === self::CodeType_Titanium;
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

SellerLevelCodeType::_register();

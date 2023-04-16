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
 * eBay sites (by the country in which each resides) on which a user is registered
 * and on which items can be listed through the Trading API.
 **/
class SiteCodeType extends EbatNs_EnumType
{
    const TAG = 'SiteCodeType';
    const NAME = 'SiteCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * USA, site ID 0, abbreviation US, currency USD.
     * 
     * (<a href="http://www.ebay.com" target="_blank">http://www.ebay.com</a>)
     **/
    const CodeType_US = 'US';

    /**
     * Canada, site ID 2, abbreviation CA, currencies CAD and USD.
     * 
     * (<a href="http://www.ebay.ca" target="_blank">http://www.ebay.ca</a>)
     **/
    const CodeType_Canada = 'Canada';

    /**
     * United Kingdom, site ID 3, abbreviation UK, currency GBP.
     * 
     * (<a href="http://www.ebay.co.uk" target="_blank">http://www.ebay.co.uk</a>)
     **/
    const CodeType_UK = 'UK';

    /**
     * Australia, site ID 15, abbreviation AU, currency AUD.
     * 
     * (<a href="http://www.ebay.com.au" target="_blank">http://www.ebay.com.au</a>)
     **/
    const CodeType_Australia = 'Australia';

    /**
     * Austria, site ID 16, abbreviation AT, currency EUR.
     * 
     * (<a href="http://www.ebay.at" target="_blank">http://www.ebay.at</a>)
     **/
    const CodeType_Austria = 'Austria';

    /**
     * Belgium (French), site ID 23, abbreviation BEFR, currency EUR.
     * 
     * (<a href="http://www.ebay.be" target="_blank">http://www.ebay.be</a>)
     **/
    const CodeType_Belgium_French = 'Belgium_French';

    /**
     * France, site ID 71, abbreviation FR, currency EUR.
     * 
     * (<a href="http://www.ebay.fr" target="_blank">http://www.ebay.fr</a>)
     **/
    const CodeType_France = 'France';

    /**
     * Germany, site ID 77, abbreviation DE, currency EUR.
     * 
     * (<a href="http://www.ebay.de" target="_blank">http://www.ebay.de</a>)
     **/
    const CodeType_Germany = 'Germany';

    /**
     * Italy, site ID 101, abbreviation IT, currency EUR.
     * 
     * (<a href="http://www.ebay.it" target="_blank">http://www.ebay.it</a>)
     **/
    const CodeType_Italy = 'Italy';

    /**
     * Belgium (Dutch), site ID 123, abbreviation BENL, currency EUR.
     * 
     * (<a href="http://www.ebay.be" target="_blank">http://www.ebay.be</a>)
     **/
    const CodeType_Belgium_Dutch = 'Belgium_Dutch';

    /**
     * Netherlands, site ID 146, abbreviation NL, currency EUR.
     * 
     * (<a href="http://www.ebay.nl" target="_blank">http://www.ebay.nl</a>)
     **/
    const CodeType_Netherlands = 'Netherlands';

    /**
     * Spain, site ID 186, abbreviation ES, currency EUR.
     * 
     * (<a href="http://www.ebay.es" target="_blank">http://www.ebay.es</a>)
     **/
    const CodeType_Spain = 'Spain';

    /**
     * Switzerland, site ID 193, abbreviation CH, currency CHF.
     * 
     * (<a href="http://www.ebay.ch" target="_blank">http://www.ebay.ch</a>)
     **/
    const CodeType_Switzerland = 'Switzerland';

    /**
     * Taiwan, currency TWD. Note that the old eBay Taiwan site is no longer in operation, and the new site does not use
     * this API.
     **/
    const CodeType_Taiwan = 'Taiwan';

    /**
     * Although Site ID 100 is still valid in APIs, eBay Motors US is no longer its own site, but just a vertical within
     * the eBay US site.
     **/
    const CodeType_eBayMotors = 'eBayMotors';

    /**
     * Hong Kong, site ID 201, abbreviation HK, currency HKD.
     * 
     * (<a href="http://www.ebay.com.hk" target="_blank">http://www.ebay.com.hk</a>)
     **/
    const CodeType_HongKong = 'HongKong';

    /**
     * Singapore, site ID 216, abbreviation SG, currency SGD.
     * 
     * (<a href="http://www.ebay.com.sg" target="_blank">http://www.ebay.com.sg</a>)
     **/
    const CodeType_Singapore = 'Singapore';

    /**
     * India, site ID 203, abbreviation IN, currency INR.
     * 
     * (<a href="http://www.ebay.in" target="_blank">http://www.ebay.in</a>)
     **/
    const CodeType_India = 'India';

    
    const CodeType_China = 'China';

    /**
     * Ireland, site ID 205, abbreviation IE, currency EUR.
     * 
     * (<a href="http://www.ebay.ie" target="_blank">http://www.ebay.ie</a>)
     **/
    const CodeType_Ireland = 'Ireland';

    /**
     * Malaysia, site ID 207, abbreviation MY, currency MYR.
     * 
     * (<a href="http://www.ebay.com.my" target="_blank">http://www.ebay.com.my</a>)
     **/
    const CodeType_Malaysia = 'Malaysia';

    /**
     * Philippines, site ID 211, abbreviation PH, currency PHP.
     * 
     * (<a href="http://www.ebay.ph" target="_blank">http://www.ebay.ph</a>)
     **/
    const CodeType_Philippines = 'Philippines';

    /**
     * Poland, site ID 212, abbreviation PL, currency PLN.
     * 
     * (<a href="http://www.ebay.pl" target="_blank">http://www.ebay.pl</a>)
     **/
    const CodeType_Poland = 'Poland';

    
    const CodeType_Sweden = 'Sweden';

    /**
     * Reserved for internal or future use.
     **/
    const CodeType_CustomCode = 'CustomCode';

    /**
     * Canada French, site ID 210, abbreviation CAFR, currencies CAD and USD.
     **/
    const CodeType_CanadaFrench = 'CanadaFrench';

    /**
     * Russia, site ID 215, abbreviation RU, currency RUB. Sellers must use Merchant Integration Platform (MIP) to
     * create and revise listings on the Russia site. Russian listings cannot be created or revised through the Trading
     * API's add and revise calls, so 'Russia' would not be a valid value to pass in through
     * Item.Site
     * field of an Add or Revise Trading API call.
     **/
    const CodeType_Russia = 'Russia';
    
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
     * @return SiteCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param SiteCodeType|null $value
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
    public function isUS()
    {
        return $this->_value === self::CodeType_US;
    }

    /**
     * @return bool
     */
    public function isCanada()
    {
        return $this->_value === self::CodeType_Canada;
    }

    /**
     * @return bool
     */
    public function isUK()
    {
        return $this->_value === self::CodeType_UK;
    }

    /**
     * @return bool
     */
    public function isAustralia()
    {
        return $this->_value === self::CodeType_Australia;
    }

    /**
     * @return bool
     */
    public function isAustria()
    {
        return $this->_value === self::CodeType_Austria;
    }

    /**
     * @return bool
     */
    public function isBelgium_French()
    {
        return $this->_value === self::CodeType_Belgium_French;
    }

    /**
     * @return bool
     */
    public function isFrance()
    {
        return $this->_value === self::CodeType_France;
    }

    /**
     * @return bool
     */
    public function isGermany()
    {
        return $this->_value === self::CodeType_Germany;
    }

    /**
     * @return bool
     */
    public function isItaly()
    {
        return $this->_value === self::CodeType_Italy;
    }

    /**
     * @return bool
     */
    public function isBelgium_Dutch()
    {
        return $this->_value === self::CodeType_Belgium_Dutch;
    }

    /**
     * @return bool
     */
    public function isNetherlands()
    {
        return $this->_value === self::CodeType_Netherlands;
    }

    /**
     * @return bool
     */
    public function isSpain()
    {
        return $this->_value === self::CodeType_Spain;
    }

    /**
     * @return bool
     */
    public function isSwitzerland()
    {
        return $this->_value === self::CodeType_Switzerland;
    }

    /**
     * @return bool
     */
    public function isTaiwan()
    {
        return $this->_value === self::CodeType_Taiwan;
    }

    /**
     * @return bool
     */
    public function isEBayMotors()
    {
        return $this->_value === self::CodeType_eBayMotors;
    }

    /**
     * @return bool
     */
    public function isHongKong()
    {
        return $this->_value === self::CodeType_HongKong;
    }

    /**
     * @return bool
     */
    public function isSingapore()
    {
        return $this->_value === self::CodeType_Singapore;
    }

    /**
     * @return bool
     */
    public function isIndia()
    {
        return $this->_value === self::CodeType_India;
    }

    /**
     * @return bool
     */
    public function isChina()
    {
        return $this->_value === self::CodeType_China;
    }

    /**
     * @return bool
     */
    public function isIreland()
    {
        return $this->_value === self::CodeType_Ireland;
    }

    /**
     * @return bool
     */
    public function isMalaysia()
    {
        return $this->_value === self::CodeType_Malaysia;
    }

    /**
     * @return bool
     */
    public function isPhilippines()
    {
        return $this->_value === self::CodeType_Philippines;
    }

    /**
     * @return bool
     */
    public function isPoland()
    {
        return $this->_value === self::CodeType_Poland;
    }

    /**
     * @return bool
     */
    public function isSweden()
    {
        return $this->_value === self::CodeType_Sweden;
    }

    /**
     * @return bool
     */
    public function isCustomCode()
    {
        return $this->_value === self::CodeType_CustomCode;
    }

    /**
     * @return bool
     */
    public function isCanadaFrench()
    {
        return $this->_value === self::CodeType_CanadaFrench;
    }

    /**
     * @return bool
     */
    public function isRussia()
    {
        return $this->_value === self::CodeType_Russia;
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

SiteCodeType::_register();

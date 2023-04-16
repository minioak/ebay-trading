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
 * The Search standing that you have earned.
 **/
class SearchStandingStatusCodeType extends EbatNs_EnumType
{
    const TAG = 'SearchStandingStatusCodeType';
    const NAME = 'SearchStandingStatusCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * Your listings may receive higher placement in search results
     * that are sorted by Best Match.
     * You earn this standing when you provide excellent customer service to eBay buyers
     * (such as good BuyerSatisfaction.Status and high detailed seller ratings).
     * If you already have a raised search standing, you can still boost your
     * ratings and increase the visibility of your items by maintaining or
     * improving your customer service.
     **/
    const CodeType_Raised = 'Raised';

    /**
     * Listings recieve standard placement in search results that are sorted by Best Match.
     **/
    const CodeType_Standard = 'Standard';

    /**
     * Your listings may receive lower placement in search results that
     * are sorted by Best Match.
     * You earn this standing when you have not been successful in providing
     * eBay buyers with the customer service they expect.
     * You can still take positive steps to improve your customer service
     * and increase your ratings.
     **/
    const CodeType_Lowered = 'Lowered';

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
     * @return SearchStandingStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param SearchStandingStatusCodeType|null $value
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
    public function isRaised()
    {
        return $this->_value === self::CodeType_Raised;
    }

    /**
     * @return bool
     */
    public function isStandard()
    {
        return $this->_value === self::CodeType_Standard;
    }

    /**
     * @return bool
     */
    public function isLowered()
    {
        return $this->_value === self::CodeType_Lowered;
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

SearchStandingStatusCodeType::_register();

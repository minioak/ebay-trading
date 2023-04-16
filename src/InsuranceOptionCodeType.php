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
 * This type is deprecated, as shipping insurance is no longer applicable or supported in eBay APIs.
 **/
class InsuranceOptionCodeType extends EbatNs_EnumType
{
    const TAG = 'InsuranceOptionCodeType';
    const NAME = 'InsuranceOptionCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * The seller offers the buyer the choice of paying
     * for shipping insurance or not.
     **/
    const CodeType_Optional = 'Optional';

    /**
     * The seller requires that the buyer pay for
     * shipping insurance.
     **/
    const CodeType_Required = 'Required';

    /**
     * The seller does not offer shipping insurance to the buyer.
     **/
    const CodeType_NotOffered = 'NotOffered';

    /**
     * The seller is not charging separately for shipping
     * insurance costs; any insurance is already included in the
     * base shipping cost.
     **/
    const CodeType_IncludedInShippingHandling = 'IncludedInShippingHandling';

    /**
     * Shipping insurance is not offered as a separate option on the site
     * where the item is listed. (Some shipping services, such as
     * DE_InsuredExpressOrCourier, include insurance as part of the service.) If
     * another insurance option is specified in the listing request and the site does
     * not support shipping insurance as a separate option, eBay will reset the
     * insurance option to this value. At the time of this writing, this option is
     * only meaningful for the eBay Germany, Austria, and Switzerland sites.
     **/
    const CodeType_NotOfferedOnSite = 'NotOfferedOnSite';

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
     * @return InsuranceOptionCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param InsuranceOptionCodeType|null $value
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
    public function isOptional()
    {
        return $this->_value === self::CodeType_Optional;
    }

    /**
     * @return bool
     */
    public function isRequired()
    {
        return $this->_value === self::CodeType_Required;
    }

    /**
     * @return bool
     */
    public function isNotOffered()
    {
        return $this->_value === self::CodeType_NotOffered;
    }

    /**
     * @return bool
     */
    public function isIncludedInShippingHandling()
    {
        return $this->_value === self::CodeType_IncludedInShippingHandling;
    }

    /**
     * @return bool
     */
    public function isNotOfferedOnSite()
    {
        return $this->_value === self::CodeType_NotOfferedOnSite;
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

InsuranceOptionCodeType::_register();

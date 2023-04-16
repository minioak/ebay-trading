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
 * This enumeration type defines the possible values that can be returned for the
 * CharityAffiliationDetail.AffiliationType
 * field in the
 * GetUser
 * response.
 **/
class CharityAffiliationTypeCodeType extends EbatNs_EnumType
{
    const TAG = 'CharityAffiliationTypeCodeType';
    const NAME = 'CharityAffiliationTypeCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This enumeration value indicates that the eBay user is just selling on the behalf of the nonprofit organization,
     * and is not directly affiliated with the organization.
     **/
    const CodeType_Community = 'Community';

    /**
     * This enumeration value indicates that the eBay user is directly affiliated with or represents the nonprofit
     * organization, or the eBay user has been added as a Direct Seller by the same nonprofit organization.
     **/
    const CodeType_Direct = 'Direct';

    /**
     * This enumeration value may be returned if the nonprofit organization has recently unregistered as an eBay for
     * Charity organization, or it may be returned if the eBay user has recently removed the charity feature from a
     * listing.
     **/
    const CodeType_Remove = 'Remove';

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
     * @return CharityAffiliationTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param CharityAffiliationTypeCodeType|null $value
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
    public function isCommunity()
    {
        return $this->_value === self::CodeType_Community;
    }

    /**
     * @return bool
     */
    public function isDirect()
    {
        return $this->_value === self::CodeType_Direct;
    }

    /**
     * @return bool
     */
    public function isRemove()
    {
        return $this->_value === self::CodeType_Remove;
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

CharityAffiliationTypeCodeType::_register();

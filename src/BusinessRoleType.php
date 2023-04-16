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
 * Enumerated type that defines the eBay user's account type.
 **/
class BusinessRoleType extends EbatNs_EnumType
{
    const TAG = 'BusinessRoleType';
    const NAME = 'BusinessRoleType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This value indicates that the eBay user's account is a Partially Provisioned Account
     * without buying and selling privileges on eBay.
     **/
    const CodeType_Shopper = 'Shopper';

    /**
     * This value indicates that the eBay user's account is a fully provisioned account with buying
     * and selling privileges on eBay.
     **/
    const CodeType_FullMarketPlaceParticipant = 'FullMarketPlaceParticipant';
    
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
     * @return BusinessRoleType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param BusinessRoleType|null $value
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
    public function isShopper()
    {
        return $this->_value === self::CodeType_Shopper;
    }

    /**
     * @return bool
     */
    public function isFullMarketPlaceParticipant()
    {
        return $this->_value === self::CodeType_FullMarketPlaceParticipant;
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

BusinessRoleType::_register();

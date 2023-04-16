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
 * Alerts can be either informational or a warning that identifies a problem.
 **/
class SellerDashboardAlertSeverityCodeType extends EbatNs_EnumType
{
    const TAG = 'SellerDashboardAlertSeverityCodeType';
    const NAME = 'SellerDashboardAlertSeverityCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * The alert message is informational in nature.
     * 
     * Some examples: you might get a PowerSeller status message if your PowerSeller
     * level has been increased, a policy-compliance message if you have no recent
     * policy violations, a buyer-satisfaction message if you are providing excellent
     * customer service, or a seller-account message if there is a new notice available
     * about your payment status.
     **/
    const CodeType_Informational = 'Informational';

    /**
     * The alert message is a warning that identifies a problem.
     * 
     * For example, you might get a PowerSeller status warning if you missed the
     * PowerSeller sales requirements in the past month. Or you might get a
     * policy-compliance warning if you recently listed an item with excessive
     * shipping costs, or a seller-account warning if a collections message
     * asks you to pay now to make sure no restrictions are placed on your account.
     **/
    const CodeType_Warning = 'Warning';

    /**
     * The alert message is a strong warning that indicates a serious problem.
     * 
     * For example, you might get a PowerSeller status strong warning if you have lost
     * your PowerSeller status because of policy violations, or you might get a
     * policy-compliance strong warning if your account has been restricted.
     **/
    const CodeType_StrongWarning = 'StrongWarning';

    /**
     * Reserved for internal (or future) use.
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
     * @return SellerDashboardAlertSeverityCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param SellerDashboardAlertSeverityCodeType|null $value
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
    public function isInformational()
    {
        return $this->_value === self::CodeType_Informational;
    }

    /**
     * @return bool
     */
    public function isWarning()
    {
        return $this->_value === self::CodeType_Warning;
    }

    /**
     * @return bool
     */
    public function isStrongWarning()
    {
        return $this->_value === self::CodeType_StrongWarning;
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

SellerDashboardAlertSeverityCodeType::_register();

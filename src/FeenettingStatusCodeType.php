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
 * This enumerated type contains values that indicate the current status of the seller's account for the fee netting
 * mechanism. With fee netting, some selling fees like final value fee and payment processing fee will be deducted
 * from seller payouts insted of eBay invoicing the seller for the fees.
 **/
class FeenettingStatusCodeType extends EbatNs_EnumType
{
    const TAG = 'FeenettingStatusCodeType';
    const NAME = 'FeenettingStatusCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This value indicates that the account is enabled for the fee netting mechanism. If a user sees this value, the
     * GetAccount
     * response will include the
     * AccountSummary.NettedTransactionSummary
     * container and the
     * AccountEntry.Netted
     * boolean field for each account entry.
     **/
    const CodeType_Enabled = 'Enabled';

    /**
     * This value indicates that the account is not enabled for the fee netting mechanism. .
     **/
    const CodeType_Disabled = 'Disabled';

    /**
     * This value indicates that the account is exempted from the fee netting mechanism.
     **/
    const CodeType_Exempted = 'Exempted';
    
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
     * @return FeenettingStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param FeenettingStatusCodeType|null $value
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
    public function isEnabled()
    {
        return $this->_value === self::CodeType_Enabled;
    }

    /**
     * @return bool
     */
    public function isDisabled()
    {
        return $this->_value === self::CodeType_Disabled;
    }

    /**
     * @return bool
     */
    public function isExempted()
    {
        return $this->_value === self::CodeType_Exempted;
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

FeenettingStatusCodeType::_register();

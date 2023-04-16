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
 * Enumerated type that contains all possible reasons why the buyer's payment for
 * the order is being held by eBay instead of being distributed to the seller's
 * account. A seller's funds for an order can be held by eBay for as little as
 * three days after the buyer receives the order, but the hold can be up to 21
 * days based on the scenario, and in some cases, the seller's lack of action in
 * helping to expedite the release of funds.
 **/
class PaymentHoldReasonCodeType extends EbatNs_EnumType
{
    const TAG = 'PaymentHoldReasonCodeType';
    const NAME = 'PaymentHoldReasonCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This value indicates that the buyer's payment for the order is being held
     * by eBay because the seller is new to selling on eBay.
     **/
    const CodeType_NewSeller = 'NewSeller';

    /**
     * This value indicates that the buyer's payment for the order is being held
     * by eBay because the seller has been classified as a Below Standard
     * seller.
     **/
    const CodeType_BelowStandardSeller = 'BelowStandardSeller';

    /**
     * This value indicates that the buyer's payment for the order is being held
     * by eBay because an eBay Money Back Guarantee case has been filed against
     * the order. If this value is returned, the seller can expedite the release
     * of funds into their account by resolving the eBay Money Back Guarantee
     * case, as indicated by a value of 'ResolveeBPCase' returned in a
     * 
     * PaymentHoldDetails.RequiredSellerActionArray.RequiredSellerAction
     * field.
     **/
    const CodeType_EbpCaseOpen = 'EbpCaseOpen';

    /**
     * This value indicates that the buyer's payment for the order is being held
     * by eBay because the seller has recently been reinstated as an active eBay
     * seller after their account went through a suspension/restricted period.
     **/
    const CodeType_ReinstatementAfterSuspension = 'ReinstatementAfterSuspension';

    /**
     * This value indicates that the buyer's payment for the order is being held
     * by eBay because the seller is classified as a casual (or infrequent) seller on eBay.
     **/
    const CodeType_CasualSeller = 'CasualSeller';

    /**
     * This value is deprecated.
     **/
    const CodeType_NewPaypalAccountAdded = 'NewPaypalAccountAdded';

    /**
     * This value indicates that the reason for the buyer's payment for the order
     * being held by eBay is not known.
     **/
    const CodeType_NotAvailable = 'NotAvailable';

    /**
     * This value is reserved for internal or future use.
     **/
    const CodeType_SellerIsOnBlackList = 'SellerIsOnBlackList';

    /**
     * This value is returned if the reason for the buyer's payment for the order
     * being held by eBay cannot be classified by any of the other enumeration
     * values.
     **/
    const CodeType_Other = 'Other';

    /**
     * This value is reserved for internal or future use.
     **/
    const CodeType_None = 'None';

    /**
     * This value is reserved for internal or future use.
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
     * @return PaymentHoldReasonCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param PaymentHoldReasonCodeType|null $value
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
    public function isNewSeller()
    {
        return $this->_value === self::CodeType_NewSeller;
    }

    /**
     * @return bool
     */
    public function isBelowStandardSeller()
    {
        return $this->_value === self::CodeType_BelowStandardSeller;
    }

    /**
     * @return bool
     */
    public function isEbpCaseOpen()
    {
        return $this->_value === self::CodeType_EbpCaseOpen;
    }

    /**
     * @return bool
     */
    public function isReinstatementAfterSuspension()
    {
        return $this->_value === self::CodeType_ReinstatementAfterSuspension;
    }

    /**
     * @return bool
     */
    public function isCasualSeller()
    {
        return $this->_value === self::CodeType_CasualSeller;
    }

    /**
     * @return bool
     */
    public function isNewPaypalAccountAdded()
    {
        return $this->_value === self::CodeType_NewPaypalAccountAdded;
    }

    /**
     * @return bool
     */
    public function isNotAvailable()
    {
        return $this->_value === self::CodeType_NotAvailable;
    }

    /**
     * @return bool
     */
    public function isSellerIsOnBlackList()
    {
        return $this->_value === self::CodeType_SellerIsOnBlackList;
    }

    /**
     * @return bool
     */
    public function isOther()
    {
        return $this->_value === self::CodeType_Other;
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

PaymentHoldReasonCodeType::_register();

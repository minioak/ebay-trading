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
 * This enumerated type contains the values that specify the party (seller/buyer) who will be responsible for paying
 * the return shipping cost if an item is returned. One of these values is set by the seller when
 * establishing/setting a return policy for an item.
 * 
 * <span class="tablenote">
 * Note:
 * The
 * GeteBayDetails
 * call returns site-default Return Policy settings. For most categories within a given eBay site, the supported
 * Return Policy options/values are the same, but there a few exceptions. To discover what return shipping 'payee'
 * values that a particular category supports, call
 * GetCategoryFeatures
 * and include <code>DomesticReturnsShipmentPayeeValues</code> and/or
 * <code>InternationalReturnsShipmentPayeeValues</code> as
 * FeatureID
 * values to see the return shipping 'payee' values available for domestic and international returns, respectively.
 * </span>
 **/
class ShippingCostPaidByOptionsCodeType extends EbatNs_EnumType
{
    const TAG = 'ShippingCostPaidByOptionsCodeType';
    const NAME = 'ShippingCostPaidByOptionsCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This value indicates that the buyer is responsible for paying the return shipping cost. Note that the buyer will
     * not be responsible for return shipping cost if the the buyer's reason for the return is related to the received
     * item not being as described in the listing, or if the item has arrived damaged or with missing parts.
     **/
    const CodeType_Buyer = 'Buyer';

    /**
     * This value indicates that the seller is responsible for paying the return shipping cost.
     **/
    const CodeType_Seller = 'Seller';

    /**
     * (out) Reserved for internal or future use.
     **/
    const CodeType_CustomCode = 'CustomCode';

    /**
     * This value is no longer applicable.
     **/
    const CodeType_EUSeller_ReturnRights = 'EUSeller_ReturnRights';

    /**
     * This value is no longer applicable.
     **/
    const CodeType_EUSeller_CancelRights = 'EUSeller_CancelRights';

    /**
     * This value is no longer applicable.
     **/
    const CodeType_EUBuyer_CancelRightsUnder40 = 'EUBuyer_CancelRightsUnder40';
    
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
     * @return ShippingCostPaidByOptionsCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param ShippingCostPaidByOptionsCodeType|null $value
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
    public function isBuyer()
    {
        return $this->_value === self::CodeType_Buyer;
    }

    /**
     * @return bool
     */
    public function isSeller()
    {
        return $this->_value === self::CodeType_Seller;
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
    public function isEUSeller_ReturnRights()
    {
        return $this->_value === self::CodeType_EUSeller_ReturnRights;
    }

    /**
     * @return bool
     */
    public function isEUSeller_CancelRights()
    {
        return $this->_value === self::CodeType_EUSeller_CancelRights;
    }

    /**
     * @return bool
     */
    public function isEUBuyer_CancelRightsUnder40()
    {
        return $this->_value === self::CodeType_EUBuyer_CancelRightsUnder40;
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

ShippingCostPaidByOptionsCodeType::_register();

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
 * Simple type defining all possible states for an In-Store Pickup order. The value of the
 * <strong>PickupStatus</strong> field (returned under the <strong>PickupMethodSelected</strong> container) can
 * change during the lifecycle of the order based on the notifications that a merchant sends to eBay through the
 * <strong>Inbound Notifications API</strong>.
 * 
 * <span class="tablenote">
 * <strong>Note:</strong> At this time, the In-Store Pickup feature is generally only available to large retail
 * merchants in US, and can only be applied to multi-quantity, fixed-price listings.
 * </span>
 **/
class PickupStatusCodeType extends EbatNs_EnumType
{
    const TAG = 'PickupStatusCodeType';
    const NAME = 'PickupStatusCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This value indicates that the current status value of the In-Store Pickup order is invalid.
     **/
    const CodeType_Invalid = 'Invalid';

    /**
     * This value indicates that the current status value of the In-Store Pickup order is not applicable.
     **/
    const CodeType_NotApplicable = 'NotApplicable';

    /**
     * This status indicates that the In-Store Pickup order has yet to be acknowledged by the merchant. This is
     * typically the state before the merchant sends the <strong>ORDER.READY_FOR_PICKUP</strong> notification to eBay
     * through the <strong>Inbound Notifications API</strong>.
     **/
    const CodeType_PendingMerchantConfirmation = 'PendingMerchantConfirmation';

    /**
     * This status indicates that the In-Store Pickup order is ready to be picked up by the buyer. This state occurs
     * after the merchant sends the <strong>ORDER.READY_FOR_PICKUP</strong> notification to eBay through the
     * <strong>Inbound Notifications API</strong>.
     **/
    const CodeType_ReadyToPickup = 'ReadyToPickup';

    /**
     * This status indicates that the In-Store Pickup order has been picked up by the buyer. This state occurs after the
     * merchant sends the <strong>ORDER.PICKEDUP</strong> notification to eBay through the <strong>Inbound Notifications
     * API</strong>.
     **/
    const CodeType_Pickedup = 'Pickedup';

    /**
     * This status indicates that the In-Store Pickup order has been cancelled by the merchant, because the product was
     * out of stock. This state occurs after the merchant sends the <strong>ORDER.PICKUP_CANCELED</strong> notification
     * (with the <strong>CANCEL_TYPE</strong> parameter in the notification payload set to "OUT_OF_STOCK") to eBay
     * through the <strong>Inbound Notifications API</strong>.
     **/
    const CodeType_PickupCancelledOutOfStock = 'PickupCancelledOutOfStock';

    /**
     * This status indicates that the In-Store Pickup order has been cancelled by the merchant, because the buyer
     * rejected the item. This state occurs after the merchant sends the <strong>ORDER.PICKUP_CANCELED</strong>
     * notification (with the <strong>CANCEL_TYPE</strong> parameter in the notification payload set to
     * "BUYER_REJECTED") to eBay through the <strong>Inbound Notifications API</strong>.
     **/
    const CodeType_PickupCancelledBuyerRejected = 'PickupCancelledBuyerRejected';

    /**
     * This status indicates that the In-Store Pickup order has been cancelled by the merchant, because the buyer never
     * showed up to pick up the item. This state occurs after the merchant sends the
     * <strong>ORDER.PICKUP_CANCELED</strong> notification (with the <strong>CANCEL_TYPE</strong> parameter in the
     * notification payload set to "BUYER_NO_SHOW") to eBay through the <strong>Inbound Notifications API</strong>.
     **/
    const CodeType_PickupCancelledBuyerNoShow = 'PickupCancelledBuyerNoShow';

    /**
     * This status indicates that the In-Store Pickup order has been cancelled, and the exact reason is not available.
     **/
    const CodeType_PickupCancelled = 'PickupCancelled';

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
     * @return PickupStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param PickupStatusCodeType|null $value
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
    public function isInvalid()
    {
        return $this->_value === self::CodeType_Invalid;
    }

    /**
     * @return bool
     */
    public function isNotApplicable()
    {
        return $this->_value === self::CodeType_NotApplicable;
    }

    /**
     * @return bool
     */
    public function isPendingMerchantConfirmation()
    {
        return $this->_value === self::CodeType_PendingMerchantConfirmation;
    }

    /**
     * @return bool
     */
    public function isReadyToPickup()
    {
        return $this->_value === self::CodeType_ReadyToPickup;
    }

    /**
     * @return bool
     */
    public function isPickedup()
    {
        return $this->_value === self::CodeType_Pickedup;
    }

    /**
     * @return bool
     */
    public function isPickupCancelledOutOfStock()
    {
        return $this->_value === self::CodeType_PickupCancelledOutOfStock;
    }

    /**
     * @return bool
     */
    public function isPickupCancelledBuyerRejected()
    {
        return $this->_value === self::CodeType_PickupCancelledBuyerRejected;
    }

    /**
     * @return bool
     */
    public function isPickupCancelledBuyerNoShow()
    {
        return $this->_value === self::CodeType_PickupCancelledBuyerNoShow;
    }

    /**
     * @return bool
     */
    public function isPickupCancelled()
    {
        return $this->_value === self::CodeType_PickupCancelled;
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

PickupStatusCodeType::_register();

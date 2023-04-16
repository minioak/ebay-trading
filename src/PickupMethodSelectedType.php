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
 * Type defining the <strong>PickupMethodSelected</strong> container, which consists of details related to the
 * selected local pickup method (In-Store Pickup or "Click and Collect"), including the pickup method, the
 * merchant's store ID, the status of the pickup, and the pickup reference code (if provided by merchant).
 * 
 * <span class="tablenote">
 * <strong>Note:</strong> At this time, the In-Store Pickup feature is generally only available to large retail
 * merchants in US, and can only be applied to multi-quantity, fixed-price listings. The "Click and Collect" feature
 * is only available to large merchants on the eBay UK (site ID - 3), eBay Australia (Site ID - 15), and eBay
 * Germany (Site ID - 77) sites.
 * </span>
 **/
class PickupMethodSelectedType extends EbatNs_ComplexType
{
    const TAG = 'PickupMethodSelectedType';
    const NAME = 'PickupMethodSelectedType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $PickupMethod = null;

    /**
     * @var string|null
     */
    protected $PickupStoreID = null;

    /**
     * @var PickupStatusCodeType|null
     */
    protected $PickupStatus = null;

    /**
     * @var string|null
     */
    protected $MerchantPickupCode = null;

    /**
     * @var string|null
     */
    protected $PickupFulfillmentTime = null;

    /**
     * @var string|null
     */
    protected $PickupLocationUUID = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPickupMethod()
    {
        return $this->_dc($this->PickupMethod, 'PickupMethod');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setPickupMethod($value)
    {
        $this->PickupMethod = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPickupStoreID()
    {
        return $this->_dc($this->PickupStoreID, 'PickupStoreID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setPickupStoreID($value)
    {
        $this->PickupStoreID = self::_string($value);
    }

    /**
     * @return PickupStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPickupStatus()
    {
        return $this->_dc($this->PickupStatus);
    }

    /**
     * @param PickupStatusCodeType|null $value
     * @return void
     */
    public function setPickupStatus($value)
    {
        $this->PickupStatus = $this->_enum($value, PickupStatusCodeType::class);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMerchantPickupCode()
    {
        return $this->_dc($this->MerchantPickupCode, 'MerchantPickupCode');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setMerchantPickupCode($value)
    {
        $this->MerchantPickupCode = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPickupFulfillmentTime()
    {
        return $this->_dc($this->PickupFulfillmentTime, 'PickupFulfillmentTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setPickupFulfillmentTime($value)
    {
        $this->PickupFulfillmentTime = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPickupLocationUUID()
    {
        return $this->_dc($this->PickupLocationUUID, 'PickupLocationUUID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setPickupLocationUUID($value)
    {
        $this->PickupLocationUUID = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'PickupMethod' => [],
            'PickupStoreID' => [],
            'PickupStatus' => ['type' => 'PickupStatusCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'MerchantPickupCode' => [],
            'PickupFulfillmentTime' => [],
            'PickupLocationUUID' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

PickupMethodSelectedType::_register();

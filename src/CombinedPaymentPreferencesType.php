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
 * Type used to indicate if the seller supports <a
 * href="https://developer.ebay.com/DevZone/guides/features-guide/default.html#development/Listing-AnItem.html#CombinedInvoice">Combined
 * Invoice</a>
 * orders, and if so, defines whether the seller specifies any shipping discount before or after purchase.
 * 
 * <span class="tablenote">
 * Note:
 * In the past, this type was also used to indicate more settings related to Combined Invoice discounts, including
 * the number of days that buyers have to combine line items into a Combined Invoice, and detailed information on
 * Calculated and Flat-Rate shipping discount profiles. However, these settings are now set through the
 * SetShippingDiscountProfiles
 * call (or through Shipping Preferences in My eBay), and retrieved with the
 * GetShippingDiscountProfiles
 * call.
 * </span>
 **/
class CombinedPaymentPreferencesType extends EbatNs_ComplexType
{
    const TAG = 'CombinedPaymentPreferencesType';
    const NAME = 'CombinedPaymentPreferencesType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var CalculatedShippingPreferencesType|null
     */
    protected $CalculatedShippingPreferences = null;

    /**
     * @var CombinedPaymentOptionCodeType|null
     */
    protected $CombinedPaymentOption = null;

    /**
     * @var CombinedPaymentPeriodCodeType|null
     */
    protected $CombinedPaymentPeriod = null;

    /**
     * @var FlatShippingPreferencesType|null
     */
    protected $FlatShippingPreferences = null;


    /**
     * @return CalculatedShippingPreferencesType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCalculatedShippingPreferences()
    {
        return $this->_dc($this->CalculatedShippingPreferences, 'CalculatedShippingPreferences');
    }

    /**
     * @param CalculatedShippingPreferencesType|null $value
     * @return void
     */
    public function setCalculatedShippingPreferences($value)
    {
        $this->CalculatedShippingPreferences = $value;
    }

    /**
     * @return CombinedPaymentOptionCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCombinedPaymentOption()
    {
        return $this->_dc($this->CombinedPaymentOption);
    }

    /**
     * @param CombinedPaymentOptionCodeType|null $value
     * @return void
     */
    public function setCombinedPaymentOption($value)
    {
        $this->CombinedPaymentOption = $this->_enum($value, CombinedPaymentOptionCodeType::class);
    }

    /**
     * @return CombinedPaymentPeriodCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCombinedPaymentPeriod()
    {
        return $this->_dc($this->CombinedPaymentPeriod);
    }

    /**
     * @param CombinedPaymentPeriodCodeType|null $value
     * @return void
     */
    public function setCombinedPaymentPeriod($value)
    {
        $this->CombinedPaymentPeriod = $this->_enum($value, CombinedPaymentPeriodCodeType::class);
    }

    /**
     * @return FlatShippingPreferencesType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getFlatShippingPreferences()
    {
        return $this->_dc($this->FlatShippingPreferences, 'FlatShippingPreferences');
    }

    /**
     * @param FlatShippingPreferencesType|null $value
     * @return void
     */
    public function setFlatShippingPreferences($value)
    {
        $this->FlatShippingPreferences = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'CalculatedShippingPreferences' => ['type' => 'CalculatedShippingPreferencesType', 'xmlns' => self::XMLNS],
            'CombinedPaymentOption' => ['type' => 'CombinedPaymentOptionCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'CombinedPaymentPeriod' => ['type' => 'CombinedPaymentPeriodCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'FlatShippingPreferences' => ['type' => 'FlatShippingPreferencesType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

CombinedPaymentPreferencesType::_register();

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
 * The shipping cost model offered by the seller.
 **/
class ShippingTypeCodeType extends EbatNs_EnumType
{
    const TAG = 'ShippingTypeCodeType';
    const NAME = 'ShippingTypeCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * Flat shipping model: the seller establishes the cost of shipping and cost of shipping insurance, regardless of
     * what any buyer-selected shipping service might charge the seller.
     * 
     * <span class="tablenote">
     * <strong>Note:</strong> This shipping type includes an option for a <em>Flat Rate Freight</em> shipping
     * service. For details about freight shipping, see <a
     * href="https://developer.ebay.com/devzone/guides/features-guide/default.html#development/Shipping-TypesCosts.html#SpecifyingFreightShipping">Specifying
     * Freight Shipping</a> in the eBay Features Guide.
     * </span>
     **/
    const CodeType_Flat = 'Flat';

    /**
     * Calculated shipping model: the cost of shipping is
     * determined in large part by the seller-offered and
     * buyer-selected shipping service. The seller might assess an
     * additional fee via PackagingHandlingCosts.
     **/
    const CodeType_Calculated = 'Calculated';

    /**
     * Freight shipping model. Available only for US domestic shipping. The cost of shipping is automatically determined
     * by an affiliated third party, FreightQuote.com, based on the item location (postal code).
     * 
     * <span class="tablenote">
     * <strong>Note:</strong> This shipping type cannot be set via API, but it is automatically set by eBay when a
     * buyer selects the FreightQuote.com option on the US eBay website.
     * 
     * For details about types of freight shipping that you can specify via API, see <a
     * href="https://developer.ebay.com/devzone/guides/features-guide/default.html#development/Shipping-TypesCosts.html#SpecifyingFreightShipping">Specifying
     * Freight Shipping</a> in the eBay Features Guide.
     * </span>
     **/
    const CodeType_Freight = 'Freight';

    /**
     * Free shipping.
     * This field is output-only so if you want to use AddItem to specify a free
     * Shipping Cost, specify 0 in
     * Item.ShippingDetails.ShippingServiceOptions.ShippingServiceCost.
     **/
    const CodeType_Free = 'Free';

    /**
     * The seller did not specify the shipping type.
     **/
    const CodeType_NotSpecified = 'NotSpecified';

    /**
     * The seller specified one or more flat domestic shipping services
     * and one or more calculated international shipping services.
     **/
    const CodeType_FlatDomesticCalculatedInternational = 'FlatDomesticCalculatedInternational';

    /**
     * The seller specified one or more calculated domestic shipping services
     * and one or more flat international shipping services.
     **/
    const CodeType_CalculatedDomesticFlatInternational = 'CalculatedDomesticFlatInternational';

    /**
     * Freight shipping model. Available only for the US, UK, AU, CA and CAFR sites, and only for domestic shipping.
     * <code>FreightFlat</code> applies to shipping with carriers that are not affiliated with eBay. It is negotiated
     * freight, not a flat rate. Sellers negotiate the shipping cost with their chosen carrier and the buyer before
     * completing the sale. FreightFlat shipping may be used when calculated shipping cannot be used due to the greater
     * weight of the item.
     * 
     * For details about freight shipping, see <a
     * href="https://developer.ebay.com/devzone/guides/features-guide/default.html#development/Shipping-TypesCosts.html#SpecifyingFreightShipping">Specifying
     * Freight Shipping</a> in the eBay Features Guide.
     **/
    const CodeType_FreightFlat = 'FreightFlat';

    /**
     * Reserved for future use.
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
     * @return ShippingTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param ShippingTypeCodeType|null $value
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
    public function isFlat()
    {
        return $this->_value === self::CodeType_Flat;
    }

    /**
     * @return bool
     */
    public function isCalculated()
    {
        return $this->_value === self::CodeType_Calculated;
    }

    /**
     * @return bool
     */
    public function isFreight()
    {
        return $this->_value === self::CodeType_Freight;
    }

    /**
     * @return bool
     */
    public function isFree()
    {
        return $this->_value === self::CodeType_Free;
    }

    /**
     * @return bool
     */
    public function isNotSpecified()
    {
        return $this->_value === self::CodeType_NotSpecified;
    }

    /**
     * @return bool
     */
    public function isFlatDomesticCalculatedInternational()
    {
        return $this->_value === self::CodeType_FlatDomesticCalculatedInternational;
    }

    /**
     * @return bool
     */
    public function isCalculatedDomesticFlatInternational()
    {
        return $this->_value === self::CodeType_CalculatedDomesticFlatInternational;
    }

    /**
     * @return bool
     */
    public function isFreightFlat()
    {
        return $this->_value === self::CodeType_FreightFlat;
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

ShippingTypeCodeType::_register();

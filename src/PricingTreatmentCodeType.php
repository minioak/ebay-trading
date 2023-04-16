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
 * This enumerated type defines the available discount price treatments that can be set up by eligible sellers.
 **/
class PricingTreatmentCodeType extends EbatNs_EnumType
{
    const TAG = 'PricingTreatmentCodeType';
    const NAME = 'PricingTreatmentCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This enumeration value indicates that Strikethrough Pricing is enabled for the order line item. If this value is
     * returned, the price in the
     * OriginalRetailPrice
     * field will be crossed out in the View Item page.
     **/
    const CodeType_STP = 'STP';

    /**
     * This enumeration value indicates that Minimum Advertised Pricing is enabled for the order line item. If this
     * value is returned, the minimum advertised price is found in the
     * MinimumAdvertisedPrice
     * field.
     **/
    const CodeType_MAP = 'MAP';

    /**
     * This enumeration value indicates that neither Strikethrough Pricing or Minimum Advertised Pricing is enabled for
     * the order line item.
     **/
    const CodeType_None = 'None';

    /**
     * This enumeration value indicates that Made For Outlet Comparison Pricing is enabled for the order line item. If
     * this value is returned, the Made For Outlet Comparison price is found in the
     * MadeForOutletComparisonPrice
     * field.
     **/
    const CodeType_MFO = 'MFO';

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
     * @return PricingTreatmentCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param PricingTreatmentCodeType|null $value
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
    public function isSTP()
    {
        return $this->_value === self::CodeType_STP;
    }

    /**
     * @return bool
     */
    public function isMAP()
    {
        return $this->_value === self::CodeType_MAP;
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
    public function isMFO()
    {
        return $this->_value === self::CodeType_MFO;
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

PricingTreatmentCodeType::_register();

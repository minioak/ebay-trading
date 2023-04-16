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
 * Regions to which the seller is willing to ship the item.
 * These values are applicable to ShipToLocation.
 **/
class ShippingRegionCodeType extends EbatNs_EnumType
{
    const TAG = 'ShippingRegionCodeType';
    const NAME = 'ShippingRegionCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * Africa
     **/
    const CodeType_Africa = 'Africa';

    /**
     * Asia
     **/
    const CodeType_Asia = 'Asia';

    /**
     * Caribbean
     **/
    const CodeType_Caribbean = 'Caribbean';

    /**
     * Europe
     **/
    const CodeType_Europe = 'Europe';

    /**
     * Latin America
     **/
    const CodeType_LatinAmerica = 'LatinAmerica';

    /**
     * Middle East
     **/
    const CodeType_MiddleEast = 'MiddleEast';

    /**
     * North America
     **/
    const CodeType_NorthAmerica = 'NorthAmerica';

    /**
     * Oceania (Pacific region other than Asia)
     **/
    const CodeType_Oceania = 'Oceania';

    /**
     * South America
     **/
    const CodeType_SouthAmerica = 'SouthAmerica';

    /**
     * European Union
     **/
    const CodeType_EuropeanUnion = 'EuropeanUnion';

    /**
     * Seller will not ship the item.
     **/
    const CodeType_WillNotShip = 'WillNotShip';

    /**
     * Seller has specified Worldwide or eBay has
     * determined that the specified regions add up to Worldwide.
     **/
    const CodeType_Worldwide = 'Worldwide';

    /**
     * Americas
     **/
    const CodeType_Americas = 'Americas';

    
    const CodeType_None = 'None';

    /**
     * Reserved for internal or future use
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
     * @return ShippingRegionCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param ShippingRegionCodeType|null $value
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
    public function isAfrica()
    {
        return $this->_value === self::CodeType_Africa;
    }

    /**
     * @return bool
     */
    public function isAsia()
    {
        return $this->_value === self::CodeType_Asia;
    }

    /**
     * @return bool
     */
    public function isCaribbean()
    {
        return $this->_value === self::CodeType_Caribbean;
    }

    /**
     * @return bool
     */
    public function isEurope()
    {
        return $this->_value === self::CodeType_Europe;
    }

    /**
     * @return bool
     */
    public function isLatinAmerica()
    {
        return $this->_value === self::CodeType_LatinAmerica;
    }

    /**
     * @return bool
     */
    public function isMiddleEast()
    {
        return $this->_value === self::CodeType_MiddleEast;
    }

    /**
     * @return bool
     */
    public function isNorthAmerica()
    {
        return $this->_value === self::CodeType_NorthAmerica;
    }

    /**
     * @return bool
     */
    public function isOceania()
    {
        return $this->_value === self::CodeType_Oceania;
    }

    /**
     * @return bool
     */
    public function isSouthAmerica()
    {
        return $this->_value === self::CodeType_SouthAmerica;
    }

    /**
     * @return bool
     */
    public function isEuropeanUnion()
    {
        return $this->_value === self::CodeType_EuropeanUnion;
    }

    /**
     * @return bool
     */
    public function isWillNotShip()
    {
        return $this->_value === self::CodeType_WillNotShip;
    }

    /**
     * @return bool
     */
    public function isWorldwide()
    {
        return $this->_value === self::CodeType_Worldwide;
    }

    /**
     * @return bool
     */
    public function isAmericas()
    {
        return $this->_value === self::CodeType_Americas;
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

ShippingRegionCodeType::_register();

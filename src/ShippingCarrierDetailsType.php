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
 * Details about type of Carrier used to ship an item.
 **/
class ShippingCarrierDetailsType extends EbatNs_ComplexType
{
    const TAG = 'ShippingCarrierDetailsType';
    const NAME = 'ShippingCarrierDetailsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var int|null
     */
    protected $ShippingCarrierID = null;

    /**
     * @var string|null
     */
    protected $Description = null;

    /**
     * @var ShippingCarrierCodeType|null
     */
    protected $ShippingCarrier = null;

    /**
     * @var string|null
     */
    protected $DetailVersion = null;

    /**
     * @var string|null
     */
    protected $UpdateTime = null;


    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShippingCarrierID()
    {
        return $this->_dc($this->ShippingCarrierID, 'ShippingCarrierID');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setShippingCarrierID($value)
    {
        $this->ShippingCarrierID = self::_int($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDescription()
    {
        return $this->_dc($this->Description, 'Description');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setDescription($value)
    {
        $this->Description = self::_string($value);
    }

    /**
     * @return ShippingCarrierCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShippingCarrier()
    {
        return $this->_dc($this->ShippingCarrier);
    }

    /**
     * @param ShippingCarrierCodeType|null $value
     * @return void
     */
    public function setShippingCarrier($value)
    {
        $this->ShippingCarrier = $this->_enum($value, ShippingCarrierCodeType::class);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDetailVersion()
    {
        return $this->_dc($this->DetailVersion, 'DetailVersion');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setDetailVersion($value)
    {
        $this->DetailVersion = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getUpdateTime()
    {
        return $this->_dc($this->UpdateTime, 'UpdateTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setUpdateTime($value)
    {
        $this->UpdateTime = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'ShippingCarrierID' => ['type' => 'int'],
            'Description' => [],
            'ShippingCarrier' => ['type' => 'ShippingCarrierCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'DetailVersion' => [],
            'UpdateTime' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

ShippingCarrierDetailsType::_register();

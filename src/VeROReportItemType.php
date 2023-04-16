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
 * This type is used by the
 * ReportItem
 * container. A
 * ReportItem
 * container is required for each eBay item that the product owner is reporting as violating the product owner's
 * copyright, trademark, or intellectual property rights.
 **/
class VeROReportItemType extends EbatNs_ComplexType
{
    const TAG = 'VeROReportItemType';
    const NAME = 'VeROReportItemType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var ItemIDType|null
     */
    protected $ItemID = null;

    /**
     * @var int|null
     */
    protected $VeROReasonCodeID = null;

    /**
     * @var string|null
     */
    protected $MessageToSeller = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $CopyEmailToRightsOwner = null;

    /**
     * @var ShippingRegionCodeType[]|null
     */
    protected $Region = [];

    /**
     * @var CountryCodeType[]|null
     */
    protected $Country = [];

    /**
     * @var string|null
     */
    protected $Patent = null;

    /**
     * @var string|null
     */
    protected $Brand = null;

    /**
     * @var string|null
     */
    protected $DetailedMessage = null;


    /**
     * @return ItemIDType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getItemID()
    {
        return $this->_dc($this->ItemID, 'ItemID');
    }

    /**
     * @param ItemIDType|null $value
     * @return void
     */
    public function setItemID($value)
    {
        $this->ItemID = $value;
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getVeROReasonCodeID()
    {
        return $this->_dc($this->VeROReasonCodeID, 'VeROReasonCodeID');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setVeROReasonCodeID($value)
    {
        $this->VeROReasonCodeID = self::_int($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMessageToSeller()
    {
        return $this->_dc($this->MessageToSeller, 'MessageToSeller');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setMessageToSeller($value)
    {
        $this->MessageToSeller = self::_string($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCopyEmailToRightsOwner()
    {
        return $this->_dc($this->CopyEmailToRightsOwner === 'true', 'CopyEmailToRightsOwner');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setCopyEmailToRightsOwner($value)
    {
        $this->CopyEmailToRightsOwner = self::_bool($value);
    }

    /**
     * @return string[]|ShippingRegionCodeType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getRegion($index = null)
    {
        return $this->_dc($index === null
            ? $this->Region
            : (count($this->Region) > $index
                ? $this->Region[$index]
                : null));
    }

    /**
     * @param ShippingRegionCodeType|null|string[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setRegion($value, $index = null)
    {
        if ($index === null) {
            $this->Region = $value;
        } else {
            $this->Region[$index] = [];
            
            foreach ($value as $item) {
                $this->addRegion($item);
            }
        }
    }

    /**
     * @param ShippingRegionCodeType|null $value
     * @return void
     */
    public function addRegion($value)
    {
        $this->Region[] = $this->_enum($value, ShippingRegionCodeType::class);
    }

    /**
     * @return string[]|CountryCodeType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getCountry($index = null)
    {
        return $this->_dc($index === null
            ? $this->Country
            : (count($this->Country) > $index
                ? $this->Country[$index]
                : null));
    }

    /**
     * @param CountryCodeType|null|string[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setCountry($value, $index = null)
    {
        if ($index === null) {
            $this->Country = $value;
        } else {
            $this->Country[$index] = [];
            
            foreach ($value as $item) {
                $this->addCountry($item);
            }
        }
    }

    /**
     * @param CountryCodeType|null $value
     * @return void
     */
    public function addCountry($value)
    {
        $this->Country[] = $this->_enum($value, CountryCodeType::class);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPatent()
    {
        return $this->_dc($this->Patent, 'Patent');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setPatent($value)
    {
        $this->Patent = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBrand()
    {
        return $this->_dc($this->Brand, 'Brand');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setBrand($value)
    {
        $this->Brand = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDetailedMessage()
    {
        return $this->_dc($this->DetailedMessage, 'DetailedMessage');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setDetailedMessage($value)
    {
        $this->DetailedMessage = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'ItemID' => ['type' => 'ItemIDType', 'xmlns' => self::XMLNS],
            'VeROReasonCodeID' => ['type' => 'int'],
            'MessageToSeller' => [],
            'CopyEmailToRightsOwner' => ['type' => 'bool'],
            'Region' => ['type' => 'ShippingRegionCodeType', 'enum' => true, 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'Country' => ['type' => 'CountryCodeType', 'enum' => true, 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'Patent' => [],
            'Brand' => [],
            'DetailedMessage' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

VeROReportItemType::_register();

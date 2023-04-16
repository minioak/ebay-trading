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
 * Type defining the
 * Shipment
 * container, which is used by
 * the seller in
 * CompleteSale
 * to provide shipping information.
 **/
class ShipmentType extends EbatNs_ComplexType
{
    const TAG = 'ShipmentType';
    const NAME = 'ShipmentType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $EstimatedDeliveryDate = null;

    /**
     * @var AmountType|null
     */
    protected $InsuredValue = null;

    /**
     * @var MeasureType|null
     */
    protected $PackageDepth = null;

    /**
     * @var MeasureType|null
     */
    protected $PackageLength = null;

    /**
     * @var MeasureType|null
     */
    protected $PackageWidth = null;

    /**
     * @var string|null
     */
    protected $PayPalShipmentID = null;

    /**
     * @var int|null
     */
    protected $ShipmentID = null;

    /**
     * @var AmountType|null
     */
    protected $PostageTotal = null;

    /**
     * @var string|null
     */
    protected $PrintedTime = null;

    /**
     * @var AddressType|null
     */
    protected $ShipFromAddress = null;

    /**
     * @var AddressType|null
     */
    protected $ShippingAddress = null;

    /**
     * @var string|null
     */
    protected $ShippingCarrierUsed = null;

    /**
     * @var ShippingFeatureCodeType[]|null
     */
    protected $ShippingFeature = [];

    /**
     * @var ShippingPackageCodeType|null
     */
    protected $ShippingPackage = null;

    /**
     * @var string|null
     */
    protected $ShippingServiceUsed = null;

    /**
     * @var string|null
     */
    protected $ShipmentTrackingNumber = null;

    /**
     * @var MeasureType|null
     */
    protected $WeightMajor = null;

    /**
     * @var MeasureType|null
     */
    protected $WeightMinor = null;

    /**
     * @var ItemTransactionIDType[]|null
     */
    protected $ItemTransactionID = [];

    /**
     * @var string|null
     */
    protected $DeliveryDate = null;

    /**
     * @var ShipmentDeliveryStatusCodeType|null
     */
    protected $DeliveryStatus = null;

    /**
     * @var string|null
     */
    protected $RefundGrantedTime = null;

    /**
     * @var string|null
     */
    protected $RefundRequestedTime = null;

    /**
     * @var ShipmentStatusCodeType|null
     */
    protected $Status = null;

    /**
     * @var string|null
     */
    protected $ShippedTime = null;

    /**
     * @var string|null
     */
    protected $Notes = null;

    /**
     * @var ShipmentTrackingDetailsType[]|null
     */
    protected $ShipmentTrackingDetails = [];


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEstimatedDeliveryDate()
    {
        return $this->_dc($this->EstimatedDeliveryDate, 'EstimatedDeliveryDate');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setEstimatedDeliveryDate($value)
    {
        $this->EstimatedDeliveryDate = self::_string($value);
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getInsuredValue()
    {
        return $this->_dc($this->InsuredValue, 'InsuredValue');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setInsuredValue($value)
    {
        $this->InsuredValue = $value;
    }

    /**
     * @return MeasureType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPackageDepth()
    {
        return $this->_dc($this->PackageDepth, 'PackageDepth');
    }

    /**
     * @param MeasureType|null $value
     * @return void
     */
    public function setPackageDepth($value)
    {
        $this->PackageDepth = $value;
    }

    /**
     * @return MeasureType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPackageLength()
    {
        return $this->_dc($this->PackageLength, 'PackageLength');
    }

    /**
     * @param MeasureType|null $value
     * @return void
     */
    public function setPackageLength($value)
    {
        $this->PackageLength = $value;
    }

    /**
     * @return MeasureType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPackageWidth()
    {
        return $this->_dc($this->PackageWidth, 'PackageWidth');
    }

    /**
     * @param MeasureType|null $value
     * @return void
     */
    public function setPackageWidth($value)
    {
        $this->PackageWidth = $value;
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPayPalShipmentID()
    {
        return $this->_dc($this->PayPalShipmentID, 'PayPalShipmentID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setPayPalShipmentID($value)
    {
        $this->PayPalShipmentID = self::_string($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShipmentID()
    {
        return $this->_dc($this->ShipmentID, 'ShipmentID');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setShipmentID($value)
    {
        $this->ShipmentID = self::_int($value);
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPostageTotal()
    {
        return $this->_dc($this->PostageTotal, 'PostageTotal');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setPostageTotal($value)
    {
        $this->PostageTotal = $value;
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPrintedTime()
    {
        return $this->_dc($this->PrintedTime, 'PrintedTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setPrintedTime($value)
    {
        $this->PrintedTime = self::_string($value);
    }

    /**
     * @return AddressType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShipFromAddress()
    {
        return $this->_dc($this->ShipFromAddress, 'ShipFromAddress');
    }

    /**
     * @param AddressType|null $value
     * @return void
     */
    public function setShipFromAddress($value)
    {
        $this->ShipFromAddress = $value;
    }

    /**
     * @return AddressType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShippingAddress()
    {
        return $this->_dc($this->ShippingAddress, 'ShippingAddress');
    }

    /**
     * @param AddressType|null $value
     * @return void
     */
    public function setShippingAddress($value)
    {
        $this->ShippingAddress = $value;
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShippingCarrierUsed()
    {
        return $this->_dc($this->ShippingCarrierUsed, 'ShippingCarrierUsed');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setShippingCarrierUsed($value)
    {
        $this->ShippingCarrierUsed = self::_string($value);
    }

    /**
     * @return string[]|ShippingFeatureCodeType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getShippingFeature($index = null)
    {
        return $this->_dc($index === null
            ? $this->ShippingFeature
            : (count($this->ShippingFeature) > $index
                ? $this->ShippingFeature[$index]
                : null));
    }

    /**
     * @param ShippingFeatureCodeType|null|string[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setShippingFeature($value, $index = null)
    {
        if ($index === null) {
            $this->ShippingFeature = $value;
        } else {
            $this->ShippingFeature[$index] = [];
            
            foreach ($value as $item) {
                $this->addShippingFeature($item);
            }
        }
    }

    /**
     * @param ShippingFeatureCodeType|null $value
     * @return void
     */
    public function addShippingFeature($value)
    {
        $this->ShippingFeature[] = $this->_enum($value, ShippingFeatureCodeType::class);
    }

    /**
     * @return ShippingPackageCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShippingPackage()
    {
        return $this->_dc($this->ShippingPackage);
    }

    /**
     * @param ShippingPackageCodeType|null $value
     * @return void
     */
    public function setShippingPackage($value)
    {
        $this->ShippingPackage = $this->_enum($value, ShippingPackageCodeType::class);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShippingServiceUsed()
    {
        return $this->_dc($this->ShippingServiceUsed, 'ShippingServiceUsed');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setShippingServiceUsed($value)
    {
        $this->ShippingServiceUsed = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShipmentTrackingNumber()
    {
        return $this->_dc($this->ShipmentTrackingNumber, 'ShipmentTrackingNumber');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setShipmentTrackingNumber($value)
    {
        $this->ShipmentTrackingNumber = self::_string($value);
    }

    /**
     * @return MeasureType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getWeightMajor()
    {
        return $this->_dc($this->WeightMajor, 'WeightMajor');
    }

    /**
     * @param MeasureType|null $value
     * @return void
     */
    public function setWeightMajor($value)
    {
        $this->WeightMajor = $value;
    }

    /**
     * @return MeasureType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getWeightMinor()
    {
        return $this->_dc($this->WeightMinor, 'WeightMinor');
    }

    /**
     * @param MeasureType|null $value
     * @return void
     */
    public function setWeightMinor($value)
    {
        $this->WeightMinor = $value;
    }

    /**
     * @return ItemTransactionIDType[]|ItemTransactionIDType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getItemTransactionID($index = null)
    {
        return $this->_dc($index === null
            ? $this->ItemTransactionID
            : (count($this->ItemTransactionID) > $index
                ? $this->ItemTransactionID[$index]
                : null), 'ItemTransactionID');
    }

    /**
     * @param ItemTransactionIDType|null|ItemTransactionIDType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setItemTransactionID($value, $index = null)
    {
        if ($index === null) {
            $this->ItemTransactionID = $value;
        } else {
            $this->ItemTransactionID[$index] = [];
            
            foreach ($value as $item) {
                $this->addItemTransactionID($item);
            }
        }
    }

    /**
     * @param ItemTransactionIDType|null $value
     * @return void
     */
    public function addItemTransactionID($value)
    {
        $this->ItemTransactionID[] = $value;
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDeliveryDate()
    {
        return $this->_dc($this->DeliveryDate, 'DeliveryDate');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setDeliveryDate($value)
    {
        $this->DeliveryDate = self::_string($value);
    }

    /**
     * @return ShipmentDeliveryStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDeliveryStatus()
    {
        return $this->_dc($this->DeliveryStatus);
    }

    /**
     * @param ShipmentDeliveryStatusCodeType|null $value
     * @return void
     */
    public function setDeliveryStatus($value)
    {
        $this->DeliveryStatus = $this->_enum($value, ShipmentDeliveryStatusCodeType::class);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getRefundGrantedTime()
    {
        return $this->_dc($this->RefundGrantedTime, 'RefundGrantedTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setRefundGrantedTime($value)
    {
        $this->RefundGrantedTime = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getRefundRequestedTime()
    {
        return $this->_dc($this->RefundRequestedTime, 'RefundRequestedTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setRefundRequestedTime($value)
    {
        $this->RefundRequestedTime = self::_string($value);
    }

    /**
     * @return ShipmentStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getStatus()
    {
        return $this->_dc($this->Status);
    }

    /**
     * @param ShipmentStatusCodeType|null $value
     * @return void
     */
    public function setStatus($value)
    {
        $this->Status = $this->_enum($value, ShipmentStatusCodeType::class);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShippedTime()
    {
        return $this->_dc($this->ShippedTime, 'ShippedTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setShippedTime($value)
    {
        $this->ShippedTime = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getNotes()
    {
        return $this->_dc($this->Notes, 'Notes');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setNotes($value)
    {
        $this->Notes = self::_string($value);
    }

    /**
     * @return ShipmentTrackingDetailsType[]|ShipmentTrackingDetailsType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getShipmentTrackingDetails($index = null)
    {
        return $this->_dc($index === null
            ? $this->ShipmentTrackingDetails
            : (count($this->ShipmentTrackingDetails) > $index
                ? $this->ShipmentTrackingDetails[$index]
                : null), 'ShipmentTrackingDetails');
    }

    /**
     * @param ShipmentTrackingDetailsType|null|ShipmentTrackingDetailsType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setShipmentTrackingDetails($value, $index = null)
    {
        if ($index === null) {
            $this->ShipmentTrackingDetails = $value;
        } else {
            $this->ShipmentTrackingDetails[$index] = [];
            
            foreach ($value as $item) {
                $this->addShipmentTrackingDetails($item);
            }
        }
    }

    /**
     * @param ShipmentTrackingDetailsType|null $value
     * @return void
     */
    public function addShipmentTrackingDetails($value)
    {
        $this->ShipmentTrackingDetails[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'EstimatedDeliveryDate' => [],
            'InsuredValue' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'PackageDepth' => ['type' => 'MeasureType', 'xmlns' => self::XMLNS],
            'PackageLength' => ['type' => 'MeasureType', 'xmlns' => self::XMLNS],
            'PackageWidth' => ['type' => 'MeasureType', 'xmlns' => self::XMLNS],
            'PayPalShipmentID' => [],
            'ShipmentID' => ['type' => 'int'],
            'PostageTotal' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'PrintedTime' => [],
            'ShipFromAddress' => ['type' => 'AddressType', 'xmlns' => self::XMLNS],
            'ShippingAddress' => ['type' => 'AddressType', 'xmlns' => self::XMLNS],
            'ShippingCarrierUsed' => [],
            'ShippingFeature' => ['type' => 'ShippingFeatureCodeType', 'enum' => true, 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'ShippingPackage' => ['type' => 'ShippingPackageCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'ShippingServiceUsed' => [],
            'ShipmentTrackingNumber' => [],
            'WeightMajor' => ['type' => 'MeasureType', 'xmlns' => self::XMLNS],
            'WeightMinor' => ['type' => 'MeasureType', 'xmlns' => self::XMLNS],
            'ItemTransactionID' => ['type' => 'ItemTransactionIDType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'DeliveryDate' => [],
            'DeliveryStatus' => ['type' => 'ShipmentDeliveryStatusCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'RefundGrantedTime' => [],
            'RefundRequestedTime' => [],
            'Status' => ['type' => 'ShipmentStatusCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'ShippedTime' => [],
            'Notes' => [],
            'ShipmentTrackingDetails' => ['type' => 'ShipmentTrackingDetailsType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

ShipmentType::_register();

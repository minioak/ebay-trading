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
 * ReturnPolicyDetails
 * container, which is returned in
 * GeteBayDetails
 * , and provides the seller with the Return Policy features (and applicable values) that are supported by the
 * listing site. This container is only returned if
 * ReturnPolicyDetails
 * is included as a
 * DetailName
 * filter in the call request, or if no
 * DetailName
 * filters are used in the request.
 * 
 * <span class="tablenote">
 * Note:
 * The
 * GeteBayDetails
 * call returns site-default Return Policy settings. For most categories within a given eBay site, the supported
 * Return Policy options/values are the same, but there a few exceptions. To discover what Return Policy
 * features/settings that a particular category supports, call
 * GetCategoryFeatures
 * and include any or all of the domestic and or international Return Policy-related
 * FeatureID
 * values to see the Return Policy features/settings available for domestic and international returns,
 * respectively.
 * </span>
 **/
class ReturnPolicyDetailsType extends EbatNs_ComplexType
{
    const TAG = 'ReturnPolicyDetailsType';
    const NAME = 'ReturnPolicyDetailsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var RefundDetailsType[]|null
     */
    protected $Refund = [];

    /**
     * @var ReturnsWithinDetailsType[]|null
     */
    protected $ReturnsWithin = [];

    /**
     * @var ReturnsAcceptedDetailsType[]|null
     */
    protected $ReturnsAccepted = [];

    /**
     * @var bool|null "true" or "false"
     */
    protected $Description = null;

    /**
     * @var WarrantyOfferedDetailsType[]|null
     */
    protected $WarrantyOffered = [];

    /**
     * @var WarrantyTypeDetailsType[]|null
     */
    protected $WarrantyType = [];

    /**
     * @var WarrantyDurationDetailsType[]|null
     */
    protected $WarrantyDuration = [];

    /**
     * @var bool|null "true" or "false"
     */
    protected $EAN = null;

    /**
     * @var ShippingCostPaidByDetailsType[]|null
     */
    protected $ShippingCostPaidBy = [];

    /**
     * @var RestockingFeeValueDetailsType[]|null
     */
    protected $RestockingFeeValue = [];

    /**
     * @var string|null
     */
    protected $DetailVersion = null;

    /**
     * @var string|null
     */
    protected $UpdateTime = null;


    /**
     * @return RefundDetailsType[]|RefundDetailsType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getRefund($index = null)
    {
        return $this->_dc($index === null
            ? $this->Refund
            : (count($this->Refund) > $index
                ? $this->Refund[$index]
                : null), 'Refund');
    }

    /**
     * @param RefundDetailsType|null|RefundDetailsType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setRefund($value, $index = null)
    {
        if ($index === null) {
            $this->Refund = $value;
        } else {
            $this->Refund[$index] = [];
            
            foreach ($value as $item) {
                $this->addRefund($item);
            }
        }
    }

    /**
     * @param RefundDetailsType|null $value
     * @return void
     */
    public function addRefund($value)
    {
        $this->Refund[] = $value;
    }

    /**
     * @return ReturnsWithinDetailsType[]|ReturnsWithinDetailsType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getReturnsWithin($index = null)
    {
        return $this->_dc($index === null
            ? $this->ReturnsWithin
            : (count($this->ReturnsWithin) > $index
                ? $this->ReturnsWithin[$index]
                : null), 'ReturnsWithin');
    }

    /**
     * @param ReturnsWithinDetailsType|null|ReturnsWithinDetailsType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setReturnsWithin($value, $index = null)
    {
        if ($index === null) {
            $this->ReturnsWithin = $value;
        } else {
            $this->ReturnsWithin[$index] = [];
            
            foreach ($value as $item) {
                $this->addReturnsWithin($item);
            }
        }
    }

    /**
     * @param ReturnsWithinDetailsType|null $value
     * @return void
     */
    public function addReturnsWithin($value)
    {
        $this->ReturnsWithin[] = $value;
    }

    /**
     * @return ReturnsAcceptedDetailsType[]|ReturnsAcceptedDetailsType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getReturnsAccepted($index = null)
    {
        return $this->_dc($index === null
            ? $this->ReturnsAccepted
            : (count($this->ReturnsAccepted) > $index
                ? $this->ReturnsAccepted[$index]
                : null), 'ReturnsAccepted');
    }

    /**
     * @param ReturnsAcceptedDetailsType|null|ReturnsAcceptedDetailsType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setReturnsAccepted($value, $index = null)
    {
        if ($index === null) {
            $this->ReturnsAccepted = $value;
        } else {
            $this->ReturnsAccepted[$index] = [];
            
            foreach ($value as $item) {
                $this->addReturnsAccepted($item);
            }
        }
    }

    /**
     * @param ReturnsAcceptedDetailsType|null $value
     * @return void
     */
    public function addReturnsAccepted($value)
    {
        $this->ReturnsAccepted[] = $value;
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDescription()
    {
        return $this->_dc($this->Description === 'true', 'Description');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setDescription($value)
    {
        $this->Description = self::_bool($value);
    }

    /**
     * @return WarrantyOfferedDetailsType[]|WarrantyOfferedDetailsType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getWarrantyOffered($index = null)
    {
        return $this->_dc($index === null
            ? $this->WarrantyOffered
            : (count($this->WarrantyOffered) > $index
                ? $this->WarrantyOffered[$index]
                : null), 'WarrantyOffered');
    }

    /**
     * @param WarrantyOfferedDetailsType|null|WarrantyOfferedDetailsType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setWarrantyOffered($value, $index = null)
    {
        if ($index === null) {
            $this->WarrantyOffered = $value;
        } else {
            $this->WarrantyOffered[$index] = [];
            
            foreach ($value as $item) {
                $this->addWarrantyOffered($item);
            }
        }
    }

    /**
     * @param WarrantyOfferedDetailsType|null $value
     * @return void
     */
    public function addWarrantyOffered($value)
    {
        $this->WarrantyOffered[] = $value;
    }

    /**
     * @return WarrantyTypeDetailsType[]|WarrantyTypeDetailsType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getWarrantyType($index = null)
    {
        return $this->_dc($index === null
            ? $this->WarrantyType
            : (count($this->WarrantyType) > $index
                ? $this->WarrantyType[$index]
                : null), 'WarrantyType');
    }

    /**
     * @param WarrantyTypeDetailsType|null|WarrantyTypeDetailsType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setWarrantyType($value, $index = null)
    {
        if ($index === null) {
            $this->WarrantyType = $value;
        } else {
            $this->WarrantyType[$index] = [];
            
            foreach ($value as $item) {
                $this->addWarrantyType($item);
            }
        }
    }

    /**
     * @param WarrantyTypeDetailsType|null $value
     * @return void
     */
    public function addWarrantyType($value)
    {
        $this->WarrantyType[] = $value;
    }

    /**
     * @return WarrantyDurationDetailsType[]|WarrantyDurationDetailsType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getWarrantyDuration($index = null)
    {
        return $this->_dc($index === null
            ? $this->WarrantyDuration
            : (count($this->WarrantyDuration) > $index
                ? $this->WarrantyDuration[$index]
                : null), 'WarrantyDuration');
    }

    /**
     * @param WarrantyDurationDetailsType|null|WarrantyDurationDetailsType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setWarrantyDuration($value, $index = null)
    {
        if ($index === null) {
            $this->WarrantyDuration = $value;
        } else {
            $this->WarrantyDuration[$index] = [];
            
            foreach ($value as $item) {
                $this->addWarrantyDuration($item);
            }
        }
    }

    /**
     * @param WarrantyDurationDetailsType|null $value
     * @return void
     */
    public function addWarrantyDuration($value)
    {
        $this->WarrantyDuration[] = $value;
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEAN()
    {
        return $this->_dc($this->EAN === 'true', 'EAN');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setEAN($value)
    {
        $this->EAN = self::_bool($value);
    }

    /**
     * @return ShippingCostPaidByDetailsType[]|ShippingCostPaidByDetailsType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getShippingCostPaidBy($index = null)
    {
        return $this->_dc($index === null
            ? $this->ShippingCostPaidBy
            : (count($this->ShippingCostPaidBy) > $index
                ? $this->ShippingCostPaidBy[$index]
                : null), 'ShippingCostPaidBy');
    }

    /**
     * @param ShippingCostPaidByDetailsType|null|ShippingCostPaidByDetailsType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setShippingCostPaidBy($value, $index = null)
    {
        if ($index === null) {
            $this->ShippingCostPaidBy = $value;
        } else {
            $this->ShippingCostPaidBy[$index] = [];
            
            foreach ($value as $item) {
                $this->addShippingCostPaidBy($item);
            }
        }
    }

    /**
     * @param ShippingCostPaidByDetailsType|null $value
     * @return void
     */
    public function addShippingCostPaidBy($value)
    {
        $this->ShippingCostPaidBy[] = $value;
    }

    /**
     * @return RestockingFeeValueDetailsType[]|RestockingFeeValueDetailsType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getRestockingFeeValue($index = null)
    {
        return $this->_dc($index === null
            ? $this->RestockingFeeValue
            : (count($this->RestockingFeeValue) > $index
                ? $this->RestockingFeeValue[$index]
                : null), 'RestockingFeeValue');
    }

    /**
     * @param RestockingFeeValueDetailsType|null|RestockingFeeValueDetailsType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setRestockingFeeValue($value, $index = null)
    {
        if ($index === null) {
            $this->RestockingFeeValue = $value;
        } else {
            $this->RestockingFeeValue[$index] = [];
            
            foreach ($value as $item) {
                $this->addRestockingFeeValue($item);
            }
        }
    }

    /**
     * @param RestockingFeeValueDetailsType|null $value
     * @return void
     */
    public function addRestockingFeeValue($value)
    {
        $this->RestockingFeeValue[] = $value;
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
            'Refund' => ['type' => 'RefundDetailsType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'ReturnsWithin' => ['type' => 'ReturnsWithinDetailsType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'ReturnsAccepted' => ['type' => 'ReturnsAcceptedDetailsType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'Description' => ['type' => 'bool'],
            'WarrantyOffered' => ['type' => 'WarrantyOfferedDetailsType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'WarrantyType' => ['type' => 'WarrantyTypeDetailsType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'WarrantyDuration' => ['type' => 'WarrantyDurationDetailsType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'EAN' => ['type' => 'bool'],
            'ShippingCostPaidBy' => ['type' => 'ShippingCostPaidByDetailsType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'RestockingFeeValue' => ['type' => 'RestockingFeeValueDetailsType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'DetailVersion' => [],
            'UpdateTime' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

ReturnPolicyDetailsType::_register();

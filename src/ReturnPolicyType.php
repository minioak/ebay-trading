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
 * Type used to express the details of the return policy for an item.
 * 
 * Historically, the
 * GeteBayDetails
 * call has been used to retrieve site-level return policy metadata. However, the
 * GetCategoryFeatures
 * call is now recommended instead because this call now returns category-level metadata for both domestic and
 * international return policies.
 * 
 * <span class="tablenote">
 * Note:
 * If a seller does not add a separate international return policy, the settings in the domestic return policy will
 * be used instead. For more information on setting separate domestic and international return policies, see the
 * <a
 * href="https://pages.ebay.com/seller-center/seller-updates/2018-summer/simplified-returns.html#international-returns-policy"
 * target="_blank">International returns policy</a> help topic. </span>
 **/
class ReturnPolicyType extends EbatNs_ComplexType
{
    const TAG = 'ReturnPolicyType';
    const NAME = 'ReturnPolicyType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $RefundOption = null;

    /**
     * @var string|null
     */
    protected $Refund = null;

    /**
     * @var string|null
     */
    protected $ReturnsWithinOption = null;

    /**
     * @var string|null
     */
    protected $ReturnsWithin = null;

    /**
     * @var string|null
     */
    protected $ReturnsAcceptedOption = null;

    /**
     * @var string|null
     */
    protected $ReturnsAccepted = null;

    /**
     * @var string|null
     */
    protected $Description = null;

    /**
     * @var string|null
     */
    protected $WarrantyOfferedOption = null;

    /**
     * @var string|null
     */
    protected $WarrantyOffered = null;

    /**
     * @var string|null
     */
    protected $WarrantyTypeOption = null;

    /**
     * @var string|null
     */
    protected $WarrantyType = null;

    /**
     * @var string|null
     */
    protected $WarrantyDurationOption = null;

    /**
     * @var string|null
     */
    protected $WarrantyDuration = null;

    /**
     * @var string|null
     */
    protected $ShippingCostPaidByOption = null;

    /**
     * @var string|null
     */
    protected $ShippingCostPaidBy = null;

    /**
     * @var string|null
     */
    protected $RestockingFeeValue = null;

    /**
     * @var string|null
     */
    protected $RestockingFeeValueOption = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $ExtendedHolidayReturns = null;

    /**
     * @var string|null
     */
    protected $InternationalRefundOption = null;

    /**
     * @var string|null
     */
    protected $InternationalReturnsAcceptedOption = null;

    /**
     * @var string|null
     */
    protected $InternationalReturnsWithinOption = null;

    /**
     * @var string|null
     */
    protected $InternationalShippingCostPaidByOption = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getRefundOption()
    {
        return $this->_dc($this->RefundOption, 'RefundOption');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setRefundOption($value)
    {
        $this->RefundOption = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getRefund()
    {
        return $this->_dc($this->Refund, 'Refund');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setRefund($value)
    {
        $this->Refund = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getReturnsWithinOption()
    {
        return $this->_dc($this->ReturnsWithinOption, 'ReturnsWithinOption');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setReturnsWithinOption($value)
    {
        $this->ReturnsWithinOption = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getReturnsWithin()
    {
        return $this->_dc($this->ReturnsWithin, 'ReturnsWithin');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setReturnsWithin($value)
    {
        $this->ReturnsWithin = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getReturnsAcceptedOption()
    {
        return $this->_dc($this->ReturnsAcceptedOption, 'ReturnsAcceptedOption');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setReturnsAcceptedOption($value)
    {
        $this->ReturnsAcceptedOption = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getReturnsAccepted()
    {
        return $this->_dc($this->ReturnsAccepted, 'ReturnsAccepted');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setReturnsAccepted($value)
    {
        $this->ReturnsAccepted = self::_string($value);
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
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getWarrantyOfferedOption()
    {
        return $this->_dc($this->WarrantyOfferedOption, 'WarrantyOfferedOption');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setWarrantyOfferedOption($value)
    {
        $this->WarrantyOfferedOption = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getWarrantyOffered()
    {
        return $this->_dc($this->WarrantyOffered, 'WarrantyOffered');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setWarrantyOffered($value)
    {
        $this->WarrantyOffered = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getWarrantyTypeOption()
    {
        return $this->_dc($this->WarrantyTypeOption, 'WarrantyTypeOption');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setWarrantyTypeOption($value)
    {
        $this->WarrantyTypeOption = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getWarrantyType()
    {
        return $this->_dc($this->WarrantyType, 'WarrantyType');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setWarrantyType($value)
    {
        $this->WarrantyType = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getWarrantyDurationOption()
    {
        return $this->_dc($this->WarrantyDurationOption, 'WarrantyDurationOption');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setWarrantyDurationOption($value)
    {
        $this->WarrantyDurationOption = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getWarrantyDuration()
    {
        return $this->_dc($this->WarrantyDuration, 'WarrantyDuration');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setWarrantyDuration($value)
    {
        $this->WarrantyDuration = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShippingCostPaidByOption()
    {
        return $this->_dc($this->ShippingCostPaidByOption, 'ShippingCostPaidByOption');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setShippingCostPaidByOption($value)
    {
        $this->ShippingCostPaidByOption = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShippingCostPaidBy()
    {
        return $this->_dc($this->ShippingCostPaidBy, 'ShippingCostPaidBy');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setShippingCostPaidBy($value)
    {
        $this->ShippingCostPaidBy = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getRestockingFeeValue()
    {
        return $this->_dc($this->RestockingFeeValue, 'RestockingFeeValue');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setRestockingFeeValue($value)
    {
        $this->RestockingFeeValue = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getRestockingFeeValueOption()
    {
        return $this->_dc($this->RestockingFeeValueOption, 'RestockingFeeValueOption');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setRestockingFeeValueOption($value)
    {
        $this->RestockingFeeValueOption = self::_string($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getExtendedHolidayReturns()
    {
        return $this->_dc($this->ExtendedHolidayReturns === 'true', 'ExtendedHolidayReturns');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setExtendedHolidayReturns($value)
    {
        $this->ExtendedHolidayReturns = self::_bool($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getInternationalRefundOption()
    {
        return $this->_dc($this->InternationalRefundOption, 'InternationalRefundOption');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setInternationalRefundOption($value)
    {
        $this->InternationalRefundOption = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getInternationalReturnsAcceptedOption()
    {
        return $this->_dc($this->InternationalReturnsAcceptedOption, 'InternationalReturnsAcceptedOption');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setInternationalReturnsAcceptedOption($value)
    {
        $this->InternationalReturnsAcceptedOption = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getInternationalReturnsWithinOption()
    {
        return $this->_dc($this->InternationalReturnsWithinOption, 'InternationalReturnsWithinOption');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setInternationalReturnsWithinOption($value)
    {
        $this->InternationalReturnsWithinOption = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getInternationalShippingCostPaidByOption()
    {
        return $this->_dc($this->InternationalShippingCostPaidByOption, 'InternationalShippingCostPaidByOption');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setInternationalShippingCostPaidByOption($value)
    {
        $this->InternationalShippingCostPaidByOption = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'RefundOption' => [],
            'Refund' => [],
            'ReturnsWithinOption' => [],
            'ReturnsWithin' => [],
            'ReturnsAcceptedOption' => [],
            'ReturnsAccepted' => [],
            'Description' => [],
            'WarrantyOfferedOption' => [],
            'WarrantyOffered' => [],
            'WarrantyTypeOption' => [],
            'WarrantyType' => [],
            'WarrantyDurationOption' => [],
            'WarrantyDuration' => [],
            'ShippingCostPaidByOption' => [],
            'ShippingCostPaidBy' => [],
            'RestockingFeeValue' => [],
            'RestockingFeeValueOption' => [],
            'ExtendedHolidayReturns' => ['type' => 'bool'],
            'InternationalRefundOption' => [],
            'InternationalReturnsAcceptedOption' => [],
            'InternationalReturnsWithinOption' => [],
            'InternationalShippingCostPaidByOption' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

ReturnPolicyType::_register();

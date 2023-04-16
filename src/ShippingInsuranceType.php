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
 * This type is deprecated, as Shipping Insurance can no longer be offered by the seller to the buyer in the APIs.
 * 
 * orders.
 **/
class ShippingInsuranceType extends EbatNs_ComplexType
{
    const TAG = 'ShippingInsuranceType';
    const NAME = 'ShippingInsuranceType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var InsuranceOptionCodeType|null
     */
    protected $InsuranceOption = null;

    /**
     * @var FlatRateInsuranceRangeCostType[]|null
     */
    protected $FlatRateInsuranceRangeCost = [];


    /**
     * @return InsuranceOptionCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getInsuranceOption()
    {
        return $this->_dc($this->InsuranceOption);
    }

    /**
     * @param InsuranceOptionCodeType|null $value
     * @return void
     */
    public function setInsuranceOption($value)
    {
        $this->InsuranceOption = $this->_enum($value, InsuranceOptionCodeType::class);
    }

    /**
     * @return FlatRateInsuranceRangeCostType[]|FlatRateInsuranceRangeCostType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getFlatRateInsuranceRangeCost($index = null)
    {
        return $this->_dc($index === null
            ? $this->FlatRateInsuranceRangeCost
            : (count($this->FlatRateInsuranceRangeCost) > $index
                ? $this->FlatRateInsuranceRangeCost[$index]
                : null), 'FlatRateInsuranceRangeCost');
    }

    /**
     * @param FlatRateInsuranceRangeCostType|null|FlatRateInsuranceRangeCostType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setFlatRateInsuranceRangeCost($value, $index = null)
    {
        if ($index === null) {
            $this->FlatRateInsuranceRangeCost = $value;
        } else {
            $this->FlatRateInsuranceRangeCost[$index] = [];
            
            foreach ($value as $item) {
                $this->addFlatRateInsuranceRangeCost($item);
            }
        }
    }

    /**
     * @param FlatRateInsuranceRangeCostType|null $value
     * @return void
     */
    public function addFlatRateInsuranceRangeCost($value)
    {
        $this->FlatRateInsuranceRangeCost[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'InsuranceOption' => ['type' => 'InsuranceOptionCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'FlatRateInsuranceRangeCost' => ['type' => 'FlatRateInsuranceRangeCostType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

ShippingInsuranceType::_register();

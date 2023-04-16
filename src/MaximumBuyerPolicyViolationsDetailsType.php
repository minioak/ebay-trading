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
 * Although the
 * MaximumBuyerPolicyViolations
 * container is still returned in
 * GeteBayDetails
 * , a Maximum Buyer Policy Violations threshold value can no longer be set at the account or listing level, so this
 * type is no longer applicable.
 **/
class MaximumBuyerPolicyViolationsDetailsType extends EbatNs_ComplexType
{
    const TAG = 'MaximumBuyerPolicyViolationsDetailsType';
    const NAME = 'MaximumBuyerPolicyViolationsDetailsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var NumberOfPolicyViolationsDetailsType|null
     */
    protected $NumberOfPolicyViolations = null;

    /**
     * @var PolicyViolationDurationDetailsType[]|null
     */
    protected $PolicyViolationDuration = [];


    /**
     * @return NumberOfPolicyViolationsDetailsType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getNumberOfPolicyViolations()
    {
        return $this->_dc($this->NumberOfPolicyViolations, 'NumberOfPolicyViolations');
    }

    /**
     * @param NumberOfPolicyViolationsDetailsType|null $value
     * @return void
     */
    public function setNumberOfPolicyViolations($value)
    {
        $this->NumberOfPolicyViolations = $value;
    }

    /**
     * @return PolicyViolationDurationDetailsType[]|PolicyViolationDurationDetailsType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getPolicyViolationDuration($index = null)
    {
        return $this->_dc($index === null
            ? $this->PolicyViolationDuration
            : (count($this->PolicyViolationDuration) > $index
                ? $this->PolicyViolationDuration[$index]
                : null), 'PolicyViolationDuration');
    }

    /**
     * @param PolicyViolationDurationDetailsType|null|PolicyViolationDurationDetailsType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setPolicyViolationDuration($value, $index = null)
    {
        if ($index === null) {
            $this->PolicyViolationDuration = $value;
        } else {
            $this->PolicyViolationDuration[$index] = [];
            
            foreach ($value as $item) {
                $this->addPolicyViolationDuration($item);
            }
        }
    }

    /**
     * @param PolicyViolationDurationDetailsType|null $value
     * @return void
     */
    public function addPolicyViolationDuration($value)
    {
        $this->PolicyViolationDuration[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'NumberOfPolicyViolations' => ['type' => 'NumberOfPolicyViolationsDetailsType', 'xmlns' => self::XMLNS],
            'PolicyViolationDuration' => ['type' => 'PolicyViolationDurationDetailsType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

MaximumBuyerPolicyViolationsDetailsType::_register();

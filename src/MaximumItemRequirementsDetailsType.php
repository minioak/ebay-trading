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
 * MaximumItemRequirements
 * container that is returned under the
 * BuyerRequirementDetails
 * in the
 * GeteBayDetails
 * . The Maximum Item Requirement settings of Buyer Requirements allow a seller to restrict the quantity of a line
 * item that may be purchased during a consecutive 10-day period.
 **/
class MaximumItemRequirementsDetailsType extends EbatNs_ComplexType
{
    const TAG = 'MaximumItemRequirementsDetailsType';
    const NAME = 'MaximumItemRequirementsDetailsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var int[]|null
     */
    protected $MaximumItemCount = [];

    /**
     * @var int[]|null
     */
    protected $MinimumFeedbackScore = [];


    /**
     * @return int[]|int|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getMaximumItemCount($index = null)
    {
        return $this->_dc($index === null
            ? $this->MaximumItemCount
            : (count($this->MaximumItemCount) > $index
                ? $this->MaximumItemCount[$index]
                : null), 'MaximumItemCount');
    }

    /**
     * @param int|null|int[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setMaximumItemCount($value, $index = null)
    {
        if ($index === null) {
            $this->MaximumItemCount = $value;
        } else {
            $this->MaximumItemCount[$index] = [];
            
            foreach ($value as $item) {
                $this->addMaximumItemCount($item);
            }
        }
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function addMaximumItemCount($value)
    {
        $this->MaximumItemCount[] = self::_int($value);
    }

    /**
     * @return int[]|int|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getMinimumFeedbackScore($index = null)
    {
        return $this->_dc($index === null
            ? $this->MinimumFeedbackScore
            : (count($this->MinimumFeedbackScore) > $index
                ? $this->MinimumFeedbackScore[$index]
                : null), 'MinimumFeedbackScore');
    }

    /**
     * @param int|null|int[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setMinimumFeedbackScore($value, $index = null)
    {
        if ($index === null) {
            $this->MinimumFeedbackScore = $value;
        } else {
            $this->MinimumFeedbackScore[$index] = [];
            
            foreach ($value as $item) {
                $this->addMinimumFeedbackScore($item);
            }
        }
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function addMinimumFeedbackScore($value)
    {
        $this->MinimumFeedbackScore[] = self::_int($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'MaximumItemCount' => ['type' => 'int', 'cardinality' => '0..*'],
            'MinimumFeedbackScore' => ['type' => 'int', 'cardinality' => '0..*']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

MaximumItemRequirementsDetailsType::_register();

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
 * MinimumFeedbackScore
 * container that is returned in
 * GeteBayDetails
 * . The
 * MinimumFeedbackScore
 * container consists of the values that can be used as the threshold value for a buyer's Minimum Feedback Score in
 * Buyer Requirements. The Feedback Score for a potential buyer must be greater than or equal to the specified
 * value, or that buyer is blocked from buying the item.
 * For the
 * MinimumFeedbackScore
 * container to appear in the
 * GeteBayDetails
 * response,
 * BuyerRequirementDetails
 * must be one of the values passed into the
 * DetailName
 * field in the
 * GeteBayDetails
 * request (or, no
 * DetailName
 * filters should be used).
 * 
 * <span class="tablenote">
 * Note:
 * Although the
 * MinimumFeedbackScore
 * container is still returned in
 * GeteBayDetails
 * , sellers can no longer set a buyer's Minimum Feedback Score threshold Buyer Requirement at the listing-level in
 * Add/Revise/Relist calls.
 * </span>
 **/
class MinimumFeedbackScoreDetailsType extends EbatNs_ComplexType
{
    const TAG = 'MinimumFeedbackScoreDetailsType';
    const NAME = 'MinimumFeedbackScoreDetailsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var int[]|null
     */
    protected $FeedbackScore = [];


    /**
     * @return int[]|int|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getFeedbackScore($index = null)
    {
        return $this->_dc($index === null
            ? $this->FeedbackScore
            : (count($this->FeedbackScore) > $index
                ? $this->FeedbackScore[$index]
                : null), 'FeedbackScore');
    }

    /**
     * @param int|null|int[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setFeedbackScore($value, $index = null)
    {
        if ($index === null) {
            $this->FeedbackScore = $value;
        } else {
            $this->FeedbackScore[$index] = [];
            
            foreach ($value as $item) {
                $this->addFeedbackScore($item);
            }
        }
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function addFeedbackScore($value)
    {
        $this->FeedbackScore[] = self::_int($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['FeedbackScore' => ['type' => 'int', 'cardinality' => '0..*']], parent::NAME);
        self::assignAttributes([]);
    }

}

MinimumFeedbackScoreDetailsType::_register();

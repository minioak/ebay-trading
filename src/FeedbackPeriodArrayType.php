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
 * Container for a set of feedback statistics. Contains zero one or
 * multiple FeedbackPeriod objects. Output only, for the summary
 * feedback data returned by GetFeedback.
 **/
class FeedbackPeriodArrayType extends EbatNs_ComplexType
{
    const TAG = 'FeedbackPeriodArrayType';
    const NAME = 'FeedbackPeriodArrayType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var FeedbackPeriodType[]|null
     */
    protected $FeedbackPeriod = [];


    /**
     * @return FeedbackPeriodType[]|FeedbackPeriodType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getFeedbackPeriod($index = null)
    {
        return $this->_dc($index === null
            ? $this->FeedbackPeriod
            : (count($this->FeedbackPeriod) > $index
                ? $this->FeedbackPeriod[$index]
                : null), 'FeedbackPeriod');
    }

    /**
     * @param FeedbackPeriodType|null|FeedbackPeriodType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setFeedbackPeriod($value, $index = null)
    {
        if ($index === null) {
            $this->FeedbackPeriod = $value;
        } else {
            $this->FeedbackPeriod[$index] = [];
            
            foreach ($value as $item) {
                $this->addFeedbackPeriod($item);
            }
        }
    }

    /**
     * @param FeedbackPeriodType|null $value
     * @return void
     */
    public function addFeedbackPeriod($value)
    {
        $this->FeedbackPeriod[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['FeedbackPeriod' => ['type' => 'FeedbackPeriodType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']], parent::NAME);
        self::assignAttributes([]);
    }

}

FeedbackPeriodArrayType::_register();

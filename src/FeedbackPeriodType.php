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
 * FeedbackPeriod
 * containers that are returned in the
 * GetFeedback
 * call to indicate how many Negative, Neutral, Positive, Retracted, and Total Feedback entries a user has received
 * within different periods of time, typically 30 days, 180 days, and 365 days.
 **/
class FeedbackPeriodType extends EbatNs_ComplexType
{
    const TAG = 'FeedbackPeriodType';
    const NAME = 'FeedbackPeriodType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var int|null
     */
    protected $PeriodInDays = null;

    /**
     * @var int|null
     */
    protected $Count = null;


    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPeriodInDays()
    {
        return $this->_dc($this->PeriodInDays, 'PeriodInDays');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setPeriodInDays($value)
    {
        $this->PeriodInDays = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCount()
    {
        return $this->_dc($this->Count, 'Count');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setCount($value)
    {
        $this->Count = self::_int($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'PeriodInDays' => ['type' => 'int'],
            'Count' => ['type' => 'int']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

FeedbackPeriodType::_register();

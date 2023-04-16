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
 * AverageRatingSummary
 * container that is returned in the
 * GetFeedback
 * call to display the seller's rating information across the four different Detail Seller Rating areas. The Detail
 * Seller Rating subject areas include Item as Described, Communication, Shipping Time, and Shipping and Handling
 * charges.
 **/
class AverageRatingSummaryType extends EbatNs_ComplexType
{
    const TAG = 'AverageRatingSummaryType';
    const NAME = 'AverageRatingSummaryType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var FeedbackSummaryPeriodCodeType|null
     */
    protected $FeedbackSummaryPeriod = null;

    /**
     * @var AverageRatingDetailsType[]|null
     */
    protected $AverageRatingDetails = [];


    /**
     * @return FeedbackSummaryPeriodCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getFeedbackSummaryPeriod()
    {
        return $this->_dc($this->FeedbackSummaryPeriod);
    }

    /**
     * @param FeedbackSummaryPeriodCodeType|null $value
     * @return void
     */
    public function setFeedbackSummaryPeriod($value)
    {
        $this->FeedbackSummaryPeriod = $this->_enum($value, FeedbackSummaryPeriodCodeType::class);
    }

    /**
     * @return AverageRatingDetailsType[]|AverageRatingDetailsType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getAverageRatingDetails($index = null)
    {
        return $this->_dc($index === null
            ? $this->AverageRatingDetails
            : (count($this->AverageRatingDetails) > $index
                ? $this->AverageRatingDetails[$index]
                : null), 'AverageRatingDetails');
    }

    /**
     * @param AverageRatingDetailsType|null|AverageRatingDetailsType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setAverageRatingDetails($value, $index = null)
    {
        if ($index === null) {
            $this->AverageRatingDetails = $value;
        } else {
            $this->AverageRatingDetails[$index] = [];
            
            foreach ($value as $item) {
                $this->addAverageRatingDetails($item);
            }
        }
    }

    /**
     * @param AverageRatingDetailsType|null $value
     * @return void
     */
    public function addAverageRatingDetails($value)
    {
        $this->AverageRatingDetails[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'FeedbackSummaryPeriod' => ['type' => 'FeedbackSummaryPeriodCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'AverageRatingDetails' => ['type' => 'AverageRatingDetailsType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

AverageRatingSummaryType::_register();

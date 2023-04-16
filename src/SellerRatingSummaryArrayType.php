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
 * SellerRatingSummaryArray
 * container that is returned
 * in the
 * GetFeedback
 * response. The
 * SellerRatingSummaryArray
 * 
 * container consists of an array of
 * AverageRatingSummary
 * containers,
 * which provide details on Detailed Seller Ratings (DSRs), including the type of rating
 * (Communication, Item As Described, Shipping and Handling Charges, or Shipping Time), the
 * seller's average rating for that DSR type, the total number of DSR ratings, and the
 * period in which those ratings were received (the last year or the last 30 days).
 **/
class SellerRatingSummaryArrayType extends EbatNs_ComplexType
{
    const TAG = 'SellerRatingSummaryArrayType';
    const NAME = 'SellerRatingSummaryArrayType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var AverageRatingSummaryType[]|null
     */
    protected $AverageRatingSummary = [];


    /**
     * @return AverageRatingSummaryType[]|AverageRatingSummaryType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getAverageRatingSummary($index = null)
    {
        return $this->_dc($index === null
            ? $this->AverageRatingSummary
            : (count($this->AverageRatingSummary) > $index
                ? $this->AverageRatingSummary[$index]
                : null), 'AverageRatingSummary');
    }

    /**
     * @param AverageRatingSummaryType|null|AverageRatingSummaryType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setAverageRatingSummary($value, $index = null)
    {
        if ($index === null) {
            $this->AverageRatingSummary = $value;
        } else {
            $this->AverageRatingSummary[$index] = [];
            
            foreach ($value as $item) {
                $this->addAverageRatingSummary($item);
            }
        }
    }

    /**
     * @param AverageRatingSummaryType|null $value
     * @return void
     */
    public function addAverageRatingSummary($value)
    {
        $this->AverageRatingSummary[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['AverageRatingSummary' => ['type' => 'AverageRatingSummaryType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']], parent::NAME);
        self::assignAttributes([]);
    }

}

SellerRatingSummaryArrayType::_register();

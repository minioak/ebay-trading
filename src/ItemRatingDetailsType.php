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
 * Applicable to sites that support the Detailed Seller Ratings feature.
 * The
 * ItemRatingDetailsType
 * contains detailed seller ratings for an order line item in one area. When buyers leave an overall Feedback
 * rating (positive, neutral, or negative) for a seller, they also can leave ratings in four areas: item as
 * described, communication, shipping time, and charges for shipping and handling. Users retrieve detailed ratings
 * as averages of the ratings left by buyers.
 **/
class ItemRatingDetailsType extends EbatNs_ComplexType
{
    const TAG = 'ItemRatingDetailsType';
    const NAME = 'ItemRatingDetailsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var FeedbackRatingDetailCodeType|null
     */
    protected $RatingDetail = null;

    /**
     * @var int|null
     */
    protected $Rating = null;


    /**
     * @return FeedbackRatingDetailCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getRatingDetail()
    {
        return $this->_dc($this->RatingDetail);
    }

    /**
     * @param FeedbackRatingDetailCodeType|null $value
     * @return void
     */
    public function setRatingDetail($value)
    {
        $this->RatingDetail = $this->_enum($value, FeedbackRatingDetailCodeType::class);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getRating()
    {
        return $this->_dc($this->Rating, 'Rating');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setRating($value)
    {
        $this->Rating = self::_int($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'RatingDetail' => ['type' => 'FeedbackRatingDetailCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'Rating' => ['type' => 'int']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

ItemRatingDetailsType::_register();

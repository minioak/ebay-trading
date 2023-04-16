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
 * FeedbackDetailArray
 * container that is returned in the
 * GetFeedback
 * call. The
 * FeedbackDetailArray
 * container consists of an array of one or more Feedback entries. The Feedback entries that are returned will
 * depend on the fields/values included in the call request.
 **/
class FeedbackDetailArrayType extends EbatNs_ComplexType
{
    const TAG = 'FeedbackDetailArrayType';
    const NAME = 'FeedbackDetailArrayType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var FeedbackDetailType[]|null
     */
    protected $FeedbackDetail = [];


    /**
     * @return FeedbackDetailType[]|FeedbackDetailType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getFeedbackDetail($index = null)
    {
        return $this->_dc($index === null
            ? $this->FeedbackDetail
            : (count($this->FeedbackDetail) > $index
                ? $this->FeedbackDetail[$index]
                : null), 'FeedbackDetail');
    }

    /**
     * @param FeedbackDetailType|null|FeedbackDetailType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setFeedbackDetail($value, $index = null)
    {
        if ($index === null) {
            $this->FeedbackDetail = $value;
        } else {
            $this->FeedbackDetail[$index] = [];
            
            foreach ($value as $item) {
                $this->addFeedbackDetail($item);
            }
        }
    }

    /**
     * @param FeedbackDetailType|null $value
     * @return void
     */
    public function addFeedbackDetail($value)
    {
        $this->FeedbackDetail[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['FeedbackDetail' => ['type' => 'FeedbackDetailType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']], parent::NAME);
        self::assignAttributes([]);
    }

}

FeedbackDetailArrayType::_register();

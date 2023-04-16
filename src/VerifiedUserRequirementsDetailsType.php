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
 * The Verified User Buyer Requirement has been deprecated, so this type is no longer applicable.
 **/
class VerifiedUserRequirementsDetailsType extends EbatNs_ComplexType
{
    const TAG = 'VerifiedUserRequirementsDetailsType';
    const NAME = 'VerifiedUserRequirementsDetailsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var bool|null "true" or "false"
     */
    protected $VerifiedUser = null;

    /**
     * @var int[]|null
     */
    protected $FeedbackScore = [];


    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getVerifiedUser()
    {
        return $this->_dc($this->VerifiedUser === 'true', 'VerifiedUser');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setVerifiedUser($value)
    {
        $this->VerifiedUser = self::_bool($value);
    }

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
        self::assignElements([
            'VerifiedUser' => ['type' => 'bool'],
            'FeedbackScore' => ['type' => 'int', 'cardinality' => '0..*']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

VerifiedUserRequirementsDetailsType::_register();

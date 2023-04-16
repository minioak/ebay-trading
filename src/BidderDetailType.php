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
 * This type is deprecated.
 **/
class BidderDetailType extends EbatNs_ComplexType
{
    const TAG = 'BidderDetailType';
    const NAME = 'BidderDetailType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var UserIDType|null
     */
    protected $UserID = null;

    /**
     * @var string|null
     */
    protected $Email = null;

    /**
     * @var int|null
     */
    protected $FeedbackScore = null;

    /**
     * @var int|null
     */
    protected $UniqueNegativeFeedbackCount = null;

    /**
     * @var int|null
     */
    protected $UniquePositiveFeedbackCount = null;

    /**
     * @var int|null
     */
    protected $UniqueNeutralFeedbackCount = null;


    /**
     * @return UserIDType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getUserID()
    {
        return $this->_dc($this->UserID, 'UserID');
    }

    /**
     * @param UserIDType|null $value
     * @return void
     */
    public function setUserID($value)
    {
        $this->UserID = $value;
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEmail()
    {
        return $this->_dc($this->Email, 'Email');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setEmail($value)
    {
        $this->Email = self::_string($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getFeedbackScore()
    {
        return $this->_dc($this->FeedbackScore, 'FeedbackScore');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setFeedbackScore($value)
    {
        $this->FeedbackScore = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getUniqueNegativeFeedbackCount()
    {
        return $this->_dc($this->UniqueNegativeFeedbackCount, 'UniqueNegativeFeedbackCount');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setUniqueNegativeFeedbackCount($value)
    {
        $this->UniqueNegativeFeedbackCount = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getUniquePositiveFeedbackCount()
    {
        return $this->_dc($this->UniquePositiveFeedbackCount, 'UniquePositiveFeedbackCount');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setUniquePositiveFeedbackCount($value)
    {
        $this->UniquePositiveFeedbackCount = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getUniqueNeutralFeedbackCount()
    {
        return $this->_dc($this->UniqueNeutralFeedbackCount, 'UniqueNeutralFeedbackCount');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setUniqueNeutralFeedbackCount($value)
    {
        $this->UniqueNeutralFeedbackCount = self::_int($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'UserID' => ['type' => 'UserIDType', 'xmlns' => self::XMLNS],
            'Email' => [],
            'FeedbackScore' => ['type' => 'int'],
            'UniqueNegativeFeedbackCount' => ['type' => 'int'],
            'UniquePositiveFeedbackCount' => ['type' => 'int'],
            'UniqueNeutralFeedbackCount' => ['type' => 'int']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

BidderDetailType::_register();

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
class BidApprovalType extends EbatNs_ComplexType
{
    const TAG = 'BidApprovalType';
    const NAME = 'BidApprovalType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var UserIDType|null
     */
    protected $UserID = null;

    /**
     * @var AmountType|null
     */
    protected $ApprovedBiddingLimit = null;

    /**
     * @var string|null
     */
    protected $DeclinedComment = null;

    /**
     * @var BidderStatusCodeType|null
     */
    protected $Status = null;


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
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getApprovedBiddingLimit()
    {
        return $this->_dc($this->ApprovedBiddingLimit, 'ApprovedBiddingLimit');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setApprovedBiddingLimit($value)
    {
        $this->ApprovedBiddingLimit = $value;
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDeclinedComment()
    {
        return $this->_dc($this->DeclinedComment, 'DeclinedComment');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setDeclinedComment($value)
    {
        $this->DeclinedComment = self::_string($value);
    }

    /**
     * @return BidderStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getStatus()
    {
        return $this->_dc($this->Status);
    }

    /**
     * @param BidderStatusCodeType|null $value
     * @return void
     */
    public function setStatus($value)
    {
        $this->Status = $this->_enum($value, BidderStatusCodeType::class);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'UserID' => ['type' => 'UserIDType', 'xmlns' => self::XMLNS],
            'ApprovedBiddingLimit' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'DeclinedComment' => [],
            'Status' => ['type' => 'BidderStatusCodeType', 'enum' => true, 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

BidApprovalType::_register();

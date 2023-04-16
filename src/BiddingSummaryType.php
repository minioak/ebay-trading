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
 * Type used by the
 * BiddingSummary
 * container, which is returned in the
 * GetAllBidders
 * response if the
 * IncludeBiddingSummary
 * boolean field is included and set to <code>true</code> in the call request. The
 * BiddingSummary
 * container consists of bidding history information for a specific bidder (specified in the
 * User.UserID
 * field).
 **/
class BiddingSummaryType extends EbatNs_ComplexType
{
    const TAG = 'BiddingSummaryType';
    const NAME = 'BiddingSummaryType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var int|null
     */
    protected $SummaryDays = null;

    /**
     * @var int|null
     */
    protected $TotalBids = null;

    /**
     * @var int|null
     */
    protected $BidActivityWithSeller = null;

    /**
     * @var int|null
     */
    protected $BidsToUniqueSellers = null;

    /**
     * @var int|null
     */
    protected $BidsToUniqueCategories = null;

    /**
     * @var int|null
     */
    protected $BidRetractions = null;

    /**
     * @var ItemBidDetailsType[]|null
     */
    protected $ItemBidDetails = [];


    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSummaryDays()
    {
        return $this->_dc($this->SummaryDays, 'SummaryDays');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setSummaryDays($value)
    {
        $this->SummaryDays = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTotalBids()
    {
        return $this->_dc($this->TotalBids, 'TotalBids');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setTotalBids($value)
    {
        $this->TotalBids = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBidActivityWithSeller()
    {
        return $this->_dc($this->BidActivityWithSeller, 'BidActivityWithSeller');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setBidActivityWithSeller($value)
    {
        $this->BidActivityWithSeller = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBidsToUniqueSellers()
    {
        return $this->_dc($this->BidsToUniqueSellers, 'BidsToUniqueSellers');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setBidsToUniqueSellers($value)
    {
        $this->BidsToUniqueSellers = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBidsToUniqueCategories()
    {
        return $this->_dc($this->BidsToUniqueCategories, 'BidsToUniqueCategories');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setBidsToUniqueCategories($value)
    {
        $this->BidsToUniqueCategories = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBidRetractions()
    {
        return $this->_dc($this->BidRetractions, 'BidRetractions');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setBidRetractions($value)
    {
        $this->BidRetractions = self::_int($value);
    }

    /**
     * @return ItemBidDetailsType[]|ItemBidDetailsType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getItemBidDetails($index = null)
    {
        return $this->_dc($index === null
            ? $this->ItemBidDetails
            : (count($this->ItemBidDetails) > $index
                ? $this->ItemBidDetails[$index]
                : null), 'ItemBidDetails');
    }

    /**
     * @param ItemBidDetailsType|null|ItemBidDetailsType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setItemBidDetails($value, $index = null)
    {
        if ($index === null) {
            $this->ItemBidDetails = $value;
        } else {
            $this->ItemBidDetails[$index] = [];
            
            foreach ($value as $item) {
                $this->addItemBidDetails($item);
            }
        }
    }

    /**
     * @param ItemBidDetailsType|null $value
     * @return void
     */
    public function addItemBidDetails($value)
    {
        $this->ItemBidDetails[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'SummaryDays' => ['type' => 'int'],
            'TotalBids' => ['type' => 'int'],
            'BidActivityWithSeller' => ['type' => 'int'],
            'BidsToUniqueSellers' => ['type' => 'int'],
            'BidsToUniqueCategories' => ['type' => 'int'],
            'BidRetractions' => ['type' => 'int'],
            'ItemBidDetails' => ['type' => 'ItemBidDetailsType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

BiddingSummaryType::_register();

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
class BidGroupType extends EbatNs_ComplexType
{
    const TAG = 'BidGroupType';
    const NAME = 'BidGroupType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var BidGroupItemType[]|null
     */
    protected $BidGroupItem = [];

    /**
     * @var int|null
     */
    protected $BidGroupID = null;

    /**
     * @var string|null
     */
    protected $BidGroupName = null;

    /**
     * @var BidGroupStatusCodeType|null
     */
    protected $BidGroupStatus = null;


    /**
     * @return BidGroupItemType[]|BidGroupItemType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getBidGroupItem($index = null)
    {
        return $this->_dc($index === null
            ? $this->BidGroupItem
            : (count($this->BidGroupItem) > $index
                ? $this->BidGroupItem[$index]
                : null), 'BidGroupItem');
    }

    /**
     * @param BidGroupItemType|null|BidGroupItemType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setBidGroupItem($value, $index = null)
    {
        if ($index === null) {
            $this->BidGroupItem = $value;
        } else {
            $this->BidGroupItem[$index] = [];
            
            foreach ($value as $item) {
                $this->addBidGroupItem($item);
            }
        }
    }

    /**
     * @param BidGroupItemType|null $value
     * @return void
     */
    public function addBidGroupItem($value)
    {
        $this->BidGroupItem[] = $value;
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBidGroupID()
    {
        return $this->_dc($this->BidGroupID, 'BidGroupID');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setBidGroupID($value)
    {
        $this->BidGroupID = self::_int($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBidGroupName()
    {
        return $this->_dc($this->BidGroupName, 'BidGroupName');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setBidGroupName($value)
    {
        $this->BidGroupName = self::_string($value);
    }

    /**
     * @return BidGroupStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBidGroupStatus()
    {
        return $this->_dc($this->BidGroupStatus);
    }

    /**
     * @param BidGroupStatusCodeType|null $value
     * @return void
     */
    public function setBidGroupStatus($value)
    {
        $this->BidGroupStatus = $this->_enum($value, BidGroupStatusCodeType::class);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'BidGroupItem' => ['type' => 'BidGroupItemType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'BidGroupID' => ['type' => 'int'],
            'BidGroupName' => [],
            'BidGroupStatus' => ['type' => 'BidGroupStatusCodeType', 'enum' => true, 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

BidGroupType::_register();

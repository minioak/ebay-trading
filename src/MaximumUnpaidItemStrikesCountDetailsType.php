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
 * MaximumUnpaidItemStrikesCount
 * container that is returned
 * in the
 * GeteBayDetails
 * response. The
 * MaximumUnpaidItemStrikesCount
 * 
 * container consists of multiple
 * Count
 * fields with values that can be
 * used in the
 * BuyerRequirementDetails.MaximumUnpaidItemStrikesInfo.Count
 * 
 * field when using the Trading API to add, revise, or relist an item.
 * 
 * The
 * Item.MaximumUnpaidItemStrikesInfo
 * container in Add/Revise/Relist
 * API calls is used to block buyers with unpaid item strikes equal to or exceeding
 * the specified
 * Count
 * value during the specified
 * Period
 * 
 * value from buying/bidding on the item.
 **/
class MaximumUnpaidItemStrikesCountDetailsType extends EbatNs_ComplexType
{
    const TAG = 'MaximumUnpaidItemStrikesCountDetailsType';
    const NAME = 'MaximumUnpaidItemStrikesCountDetailsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var int[]|null
     */
    protected $Count = [];


    /**
     * @return int[]|int|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getCount($index = null)
    {
        return $this->_dc($index === null
            ? $this->Count
            : (count($this->Count) > $index
                ? $this->Count[$index]
                : null), 'Count');
    }

    /**
     * @param int|null|int[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setCount($value, $index = null)
    {
        if ($index === null) {
            $this->Count = $value;
        } else {
            $this->Count[$index] = [];
            
            foreach ($value as $item) {
                $this->addCount($item);
            }
        }
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function addCount($value)
    {
        $this->Count[] = self::_int($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['Count' => ['type' => 'int', 'cardinality' => '0..*']], parent::NAME);
        self::assignAttributes([]);
    }

}

MaximumUnpaidItemStrikesCountDetailsType::_register();

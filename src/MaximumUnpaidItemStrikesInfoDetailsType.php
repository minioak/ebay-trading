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
 * Details of a buyer's maximum unpaid item strikes in a pre-defined time period. This is applicable only to
 * sellers.
 **/
class MaximumUnpaidItemStrikesInfoDetailsType extends EbatNs_ComplexType
{
    const TAG = 'MaximumUnpaidItemStrikesInfoDetailsType';
    const NAME = 'MaximumUnpaidItemStrikesInfoDetailsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var MaximumUnpaidItemStrikesCountDetailsType|null
     */
    protected $MaximumUnpaidItemStrikesCount = null;

    /**
     * @var MaximumUnpaidItemStrikesDurationDetailsType[]|null
     */
    protected $MaximumUnpaidItemStrikesDuration = [];


    /**
     * @return MaximumUnpaidItemStrikesCountDetailsType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMaximumUnpaidItemStrikesCount()
    {
        return $this->_dc($this->MaximumUnpaidItemStrikesCount, 'MaximumUnpaidItemStrikesCount');
    }

    /**
     * @param MaximumUnpaidItemStrikesCountDetailsType|null $value
     * @return void
     */
    public function setMaximumUnpaidItemStrikesCount($value)
    {
        $this->MaximumUnpaidItemStrikesCount = $value;
    }

    /**
     * @return MaximumUnpaidItemStrikesDurationDetailsType[]|MaximumUnpaidItemStrikesDurationDetailsType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getMaximumUnpaidItemStrikesDuration($index = null)
    {
        return $this->_dc($index === null
            ? $this->MaximumUnpaidItemStrikesDuration
            : (count($this->MaximumUnpaidItemStrikesDuration) > $index
                ? $this->MaximumUnpaidItemStrikesDuration[$index]
                : null), 'MaximumUnpaidItemStrikesDuration');
    }

    /**
     * @param MaximumUnpaidItemStrikesDurationDetailsType|null|MaximumUnpaidItemStrikesDurationDetailsType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setMaximumUnpaidItemStrikesDuration($value, $index = null)
    {
        if ($index === null) {
            $this->MaximumUnpaidItemStrikesDuration = $value;
        } else {
            $this->MaximumUnpaidItemStrikesDuration[$index] = [];
            
            foreach ($value as $item) {
                $this->addMaximumUnpaidItemStrikesDuration($item);
            }
        }
    }

    /**
     * @param MaximumUnpaidItemStrikesDurationDetailsType|null $value
     * @return void
     */
    public function addMaximumUnpaidItemStrikesDuration($value)
    {
        $this->MaximumUnpaidItemStrikesDuration[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'MaximumUnpaidItemStrikesCount' => ['type' => 'MaximumUnpaidItemStrikesCountDetailsType', 'xmlns' => self::XMLNS],
            'MaximumUnpaidItemStrikesDuration' => ['type' => 'MaximumUnpaidItemStrikesDurationDetailsType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

MaximumUnpaidItemStrikesInfoDetailsType::_register();

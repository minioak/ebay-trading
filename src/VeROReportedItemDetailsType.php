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
 * Container for a list of reported items. Can contain zero, one, or multiple
 * VeROReportedItemType objects, each of which conveys the data for one item listing.
 **/
class VeROReportedItemDetailsType extends EbatNs_ComplexType
{
    const TAG = 'VeROReportedItemDetailsType';
    const NAME = 'VeROReportedItemDetailsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var VeROReportedItemType[]|null
     */
    protected $ReportedItem = [];


    /**
     * @return VeROReportedItemType[]|VeROReportedItemType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getReportedItem($index = null)
    {
        return $this->_dc($index === null
            ? $this->ReportedItem
            : (count($this->ReportedItem) > $index
                ? $this->ReportedItem[$index]
                : null), 'ReportedItem');
    }

    /**
     * @param VeROReportedItemType|null|VeROReportedItemType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setReportedItem($value, $index = null)
    {
        if ($index === null) {
            $this->ReportedItem = $value;
        } else {
            $this->ReportedItem[$index] = [];
            
            foreach ($value as $item) {
                $this->addReportedItem($item);
            }
        }
    }

    /**
     * @param VeROReportedItemType|null $value
     * @return void
     */
    public function addReportedItem($value)
    {
        $this->ReportedItem[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['ReportedItem' => ['type' => 'VeROReportedItemType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']], parent::NAME);
        self::assignAttributes([]);
    }

}

VeROReportedItemDetailsType::_register();

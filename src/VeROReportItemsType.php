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
 * ReportItems
 * container in the
 * VeROReportItems
 * request. The
 * ReportItems
 * container is an array of one or more eBay items which, according to the product's owner, are infringing upon the
 * product owner's copyright, trademark, or intellectual property rights.
 **/
class VeROReportItemsType extends EbatNs_ComplexType
{
    const TAG = 'VeROReportItemsType';
    const NAME = 'VeROReportItemsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var VeROReportItemType[]|null
     */
    protected $ReportItem = [];


    /**
     * @return VeROReportItemType[]|VeROReportItemType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getReportItem($index = null)
    {
        return $this->_dc($index === null
            ? $this->ReportItem
            : (count($this->ReportItem) > $index
                ? $this->ReportItem[$index]
                : null), 'ReportItem');
    }

    /**
     * @param VeROReportItemType|null|VeROReportItemType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setReportItem($value, $index = null)
    {
        if ($index === null) {
            $this->ReportItem = $value;
        } else {
            $this->ReportItem[$index] = [];
            
            foreach ($value as $item) {
                $this->addReportItem($item);
            }
        }
    }

    /**
     * @param VeROReportItemType|null $value
     * @return void
     */
    public function addReportItem($value)
    {
        $this->ReportItem[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['ReportItem' => ['type' => 'VeROReportItemType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']], parent::NAME);
        self::assignAttributes([]);
    }

}

VeROReportItemsType::_register();

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
 * ReportedItem
 * container which is returned in the
 * 
 * GetVeROReportStatus
 * response. The
 * ReportedItem
 * container consists of the
 * ItemID
 * of the item that has infringed
 * upon the seller's copyright, trademark, or intellectual property rights, as well as the
 * submission status of the VeRO Report.
 **/
class VeROReportedItemType extends EbatNs_ComplexType
{
    const TAG = 'VeROReportedItemType';
    const NAME = 'VeROReportedItemType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var ItemIDType|null
     */
    protected $ItemID = null;

    /**
     * @var VeROItemStatusCodeType|null
     */
    protected $ItemStatus = null;

    /**
     * @var string|null
     */
    protected $ItemReasonForFailure = null;


    /**
     * @return ItemIDType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getItemID()
    {
        return $this->_dc($this->ItemID, 'ItemID');
    }

    /**
     * @param ItemIDType|null $value
     * @return void
     */
    public function setItemID($value)
    {
        $this->ItemID = $value;
    }

    /**
     * @return VeROItemStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getItemStatus()
    {
        return $this->_dc($this->ItemStatus);
    }

    /**
     * @param VeROItemStatusCodeType|null $value
     * @return void
     */
    public function setItemStatus($value)
    {
        $this->ItemStatus = $this->_enum($value, VeROItemStatusCodeType::class);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getItemReasonForFailure()
    {
        return $this->_dc($this->ItemReasonForFailure, 'ItemReasonForFailure');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setItemReasonForFailure($value)
    {
        $this->ItemReasonForFailure = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'ItemID' => ['type' => 'ItemIDType', 'xmlns' => self::XMLNS],
            'ItemStatus' => ['type' => 'VeROItemStatusCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'ItemReasonForFailure' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

VeROReportedItemType::_register();

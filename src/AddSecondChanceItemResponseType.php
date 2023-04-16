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
 * Type defining the response container of an
 * AddSecondChanceItem
 * call. This response container consists of the
 * ItemID
 * of the listing in which a Second Chance Offer is being offered, as well as the start and end time that the
 * Second Chance Offer is available to the recipient (identified through the
 * RecipientBidderUserID
 * in the request).
 **/
class AddSecondChanceItemResponseType extends EbatNs_Response
{
    const TAG = 'AddSecondChanceItemResponseType';
    const NAME = 'AddSecondChanceItemResponseType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var ItemIDType|null
     */
    protected $ItemID = null;

    /**
     * @var string|null
     */
    protected $StartTime = null;

    /**
     * @var string|null
     */
    protected $EndTime = null;


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
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getStartTime()
    {
        return $this->_dc($this->StartTime, 'StartTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setStartTime($value)
    {
        $this->StartTime = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEndTime()
    {
        return $this->_dc($this->EndTime, 'EndTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setEndTime($value)
    {
        $this->EndTime = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'ItemID' => ['type' => 'ItemIDType', 'xmlns' => self::XMLNS],
            'StartTime' => [],
            'EndTime' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

AddSecondChanceItemResponseType::_register();

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
 * This is the base response type of the
 * GetMyeBayReminders
 * call. This call returns the total counts for My eBay Buying and/or My eBay Selling Reminders for a user.
 **/
class GetMyeBayRemindersResponseType extends EbatNs_Response
{
    const TAG = 'GetMyeBayRemindersResponseType';
    const NAME = 'GetMyeBayRemindersResponseType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var RemindersType|null
     */
    protected $BuyingReminders = null;

    /**
     * @var RemindersType|null
     */
    protected $SellingReminders = null;


    /**
     * @return RemindersType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBuyingReminders()
    {
        return $this->_dc($this->BuyingReminders, 'BuyingReminders');
    }

    /**
     * @param RemindersType|null $value
     * @return void
     */
    public function setBuyingReminders($value)
    {
        $this->BuyingReminders = $value;
    }

    /**
     * @return RemindersType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSellingReminders()
    {
        return $this->_dc($this->SellingReminders, 'SellingReminders');
    }

    /**
     * @param RemindersType|null $value
     * @return void
     */
    public function setSellingReminders($value)
    {
        $this->SellingReminders = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'BuyingReminders' => ['type' => 'RemindersType', 'xmlns' => self::XMLNS],
            'SellingReminders' => ['type' => 'RemindersType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

GetMyeBayRemindersResponseType::_register();

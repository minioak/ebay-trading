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
 * This is the base request type of the
 * GetMyeBayReminders
 * call. This call returns the total counts for My eBay Buying and/or My eBay Selling Reminders for a user.
 **/
class GetMyeBayRemindersRequestType extends AbstractRequestType
{
    const TAG = 'GetMyeBayRemindersRequest';
    const NAME = 'GetMyeBayRemindersRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'GetMyeBayReminders';

    /**
     * @var ReminderCustomizationType|null
     */
    protected $BuyingReminders = null;

    /**
     * @var ReminderCustomizationType|null
     */
    protected $SellingReminders = null;


    /**
     * @return ReminderCustomizationType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBuyingReminders()
    {
        return $this->_dc($this->BuyingReminders, 'BuyingReminders');
    }

    /**
     * @param ReminderCustomizationType|null $value
     * @return void
     */
    public function setBuyingReminders($value)
    {
        $this->BuyingReminders = $value;
    }

    /**
     * @return ReminderCustomizationType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSellingReminders()
    {
        return $this->_dc($this->SellingReminders, 'SellingReminders');
    }

    /**
     * @param ReminderCustomizationType|null $value
     * @return void
     */
    public function setSellingReminders($value)
    {
        $this->SellingReminders = $value;
    }

    /**
     * @return GetMyeBayRemindersResponseType|EbatNs_ResponseError
     * @param EbatNs_Client
     **/
    function call($client)
    {
        return $client->call(self::REQUEST, $this);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'BuyingReminders' => ['type' => 'ReminderCustomizationType', 'xmlns' => self::XMLNS],
            'SellingReminders' => ['type' => 'ReminderCustomizationType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

GetMyeBayRemindersRequestType::_register();

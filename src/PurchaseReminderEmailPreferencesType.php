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
 * Contains a seller's preference for sending a "Payment Reminder Email" to buyers.
 **/
class PurchaseReminderEmailPreferencesType extends EbatNs_ComplexType
{
    const TAG = 'PurchaseReminderEmailPreferencesType';
    const NAME = 'PurchaseReminderEmailPreferencesType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var bool|null "true" or "false"
     */
    protected $PurchaseReminderEmailPreferences = null;


    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPurchaseReminderEmailPreferences()
    {
        return $this->_dc($this->PurchaseReminderEmailPreferences === 'true', 'PurchaseReminderEmailPreferences');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setPurchaseReminderEmailPreferences($value)
    {
        $this->PurchaseReminderEmailPreferences = self::_bool($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['PurchaseReminderEmailPreferences' => ['type' => 'bool']], parent::NAME);
        self::assignAttributes([]);
    }

}

PurchaseReminderEmailPreferencesType::_register();

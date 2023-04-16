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
 * Conains information about the messages sent to a user. Depending on the detail
 * level, this information can include message counts, resolution and flagged status,
 * message headers, and message text.
 **/
class GetMyMessagesResponseType extends EbatNs_Response
{
    const TAG = 'GetMyMessagesResponseType';
    const NAME = 'GetMyMessagesResponseType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var MyMessagesSummaryType|null
     */
    protected $Summary = null;

    /**
     * @var MyMessagesAlertArrayType|null
     */
    protected $Alerts = null;

    /**
     * @var MyMessagesMessageArrayType|null
     */
    protected $Messages = null;


    /**
     * @return MyMessagesSummaryType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSummary()
    {
        return $this->_dc($this->Summary, 'Summary');
    }

    /**
     * @param MyMessagesSummaryType|null $value
     * @return void
     */
    public function setSummary($value)
    {
        $this->Summary = $value;
    }

    /**
     * @return MyMessagesAlertArrayType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getAlerts()
    {
        return $this->_dc($this->Alerts, 'Alerts');
    }

    /**
     * @param MyMessagesAlertArrayType|null $value
     * @return void
     */
    public function setAlerts($value)
    {
        $this->Alerts = $value;
    }

    /**
     * @return MyMessagesMessageArrayType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMessages()
    {
        return $this->_dc($this->Messages, 'Messages');
    }

    /**
     * @param MyMessagesMessageArrayType|null $value
     * @return void
     */
    public function setMessages($value)
    {
        $this->Messages = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'Summary' => ['type' => 'MyMessagesSummaryType', 'xmlns' => self::XMLNS],
            'Alerts' => ['type' => 'MyMessagesAlertArrayType', 'xmlns' => self::XMLNS],
            'Messages' => ['type' => 'MyMessagesMessageArrayType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

GetMyMessagesResponseType::_register();

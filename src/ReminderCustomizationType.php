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
 * Specifies how to return certain reminder types from the user's My eBay account.
 **/
class ReminderCustomizationType extends EbatNs_ComplexType
{
    const TAG = 'ReminderCustomizationType';
    const NAME = 'ReminderCustomizationType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var int|null
     */
    protected $DurationInDays = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $Include = null;


    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDurationInDays()
    {
        return $this->_dc($this->DurationInDays, 'DurationInDays');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setDurationInDays($value)
    {
        $this->DurationInDays = self::_int($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getInclude()
    {
        return $this->_dc($this->Include === 'true', 'Include');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setInclude($value)
    {
        $this->Include = self::_bool($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'DurationInDays' => ['type' => 'int'],
            'Include' => ['type' => 'bool']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

ReminderCustomizationType::_register();

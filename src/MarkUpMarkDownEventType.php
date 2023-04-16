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
 * Describes an individual mark-up or mark-down event. eBay will automatically
 * mark an application as down if attempts to deliver a notification fail
 * repeatedly. eBay may mark an application down manually under certain
 * circumstances.
 **/
class MarkUpMarkDownEventType extends EbatNs_ComplexType
{
    const TAG = 'MarkUpMarkDownEventType';
    const NAME = 'MarkUpMarkDownEventType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var MarkUpMarkDownEventTypeCodeType|null
     */
    protected $Type = null;

    /**
     * @var string|null
     */
    protected $Time = null;

    /**
     * @var string|null
     */
    protected $Reason = null;


    /**
     * @return MarkUpMarkDownEventTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getType()
    {
        return $this->_dc($this->Type);
    }

    /**
     * @param MarkUpMarkDownEventTypeCodeType|null $value
     * @return void
     */
    public function setType($value)
    {
        $this->Type = $this->_enum($value, MarkUpMarkDownEventTypeCodeType::class);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTime()
    {
        return $this->_dc($this->Time, 'Time');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setTime($value)
    {
        $this->Time = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getReason()
    {
        return $this->_dc($this->Reason, 'Reason');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setReason($value)
    {
        $this->Reason = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'Type' => ['type' => 'MarkUpMarkDownEventTypeCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'Time' => [],
            'Reason' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

MarkUpMarkDownEventType::_register();

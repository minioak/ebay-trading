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
 * List of objects representing markup or markdown events for a given application
 * and time period. If no time period is specified in the request, the information
 * for only one day (24 hours before the time the call is made to the time the call
 * is made) is included. The maximum time period is allowed is 3 days (72 hours
 * before the call is made to the time the call is made).
 **/
class MarkUpMarkDownHistoryType extends EbatNs_ComplexType
{
    const TAG = 'MarkUpMarkDownHistoryType';
    const NAME = 'MarkUpMarkDownHistoryType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var MarkUpMarkDownEventType[]|null
     */
    protected $MarkUpMarkDownEvent = [];


    /**
     * @return MarkUpMarkDownEventType[]|MarkUpMarkDownEventType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getMarkUpMarkDownEvent($index = null)
    {
        return $this->_dc($index === null
            ? $this->MarkUpMarkDownEvent
            : (count($this->MarkUpMarkDownEvent) > $index
                ? $this->MarkUpMarkDownEvent[$index]
                : null), 'MarkUpMarkDownEvent');
    }

    /**
     * @param MarkUpMarkDownEventType|null|MarkUpMarkDownEventType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setMarkUpMarkDownEvent($value, $index = null)
    {
        if ($index === null) {
            $this->MarkUpMarkDownEvent = $value;
        } else {
            $this->MarkUpMarkDownEvent[$index] = [];
            
            foreach ($value as $item) {
                $this->addMarkUpMarkDownEvent($item);
            }
        }
    }

    /**
     * @param MarkUpMarkDownEventType|null $value
     * @return void
     */
    public function addMarkUpMarkDownEvent($value)
    {
        $this->MarkUpMarkDownEvent[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['MarkUpMarkDownEvent' => ['type' => 'MarkUpMarkDownEventType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']], parent::NAME);
        self::assignAttributes([]);
    }

}

MarkUpMarkDownHistoryType::_register();

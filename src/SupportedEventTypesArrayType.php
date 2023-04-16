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


class SupportedEventTypesArrayType extends EbatNs_ComplexType
{
    const TAG = 'SupportedEventTypesArrayType';
    const NAME = 'SupportedEventTypesArrayType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var NotificationEventTypeCodeType[]|null
     */
    protected $EventType = [];


    /**
     * @return string[]|NotificationEventTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getEventType($index = null)
    {
        return $this->_dc($index === null
            ? $this->EventType
            : (count($this->EventType) > $index
                ? $this->EventType[$index]
                : null));
    }

    /**
     * @param NotificationEventTypeCodeType|null|string[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setEventType($value, $index = null)
    {
        if ($index === null) {
            $this->EventType = $value;
        } else {
            $this->EventType[$index] = [];
            
            foreach ($value as $item) {
                $this->addEventType($item);
            }
        }
    }

    /**
     * @param NotificationEventTypeCodeType|null $value
     * @return void
     */
    public function addEventType($value)
    {
        $this->EventType[] = $this->_enum($value, NotificationEventTypeCodeType::class);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['EventType' => ['type' => 'NotificationEventTypeCodeType', 'enum' => true, 'xmlns' => self::XMLNS, 'cardinality' => '0..*']], parent::NAME);
        self::assignAttributes([]);
    }

}

SupportedEventTypesArrayType::_register();

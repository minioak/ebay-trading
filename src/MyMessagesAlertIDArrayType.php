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
 * This type is deprecated.
 **/
class MyMessagesAlertIDArrayType extends EbatNs_ComplexType
{
    const TAG = 'MyMessagesAlertIDArrayType';
    const NAME = 'MyMessagesAlertIDArrayType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var MyMessagesAlertIDType[]|null
     */
    protected $AlertID = [];


    /**
     * @return MyMessagesAlertIDType[]|MyMessagesAlertIDType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getAlertID($index = null)
    {
        return $this->_dc($index === null
            ? $this->AlertID
            : (count($this->AlertID) > $index
                ? $this->AlertID[$index]
                : null), 'AlertID');
    }

    /**
     * @param MyMessagesAlertIDType|null|MyMessagesAlertIDType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setAlertID($value, $index = null)
    {
        if ($index === null) {
            $this->AlertID = $value;
        } else {
            $this->AlertID[$index] = [];
            
            foreach ($value as $item) {
                $this->addAlertID($item);
            }
        }
    }

    /**
     * @param MyMessagesAlertIDType|null $value
     * @return void
     */
    public function addAlertID($value)
    {
        $this->AlertID[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['AlertID' => ['type' => 'MyMessagesAlertIDType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']], parent::NAME);
        self::assignAttributes([]);
    }

}

MyMessagesAlertIDArrayType::_register();

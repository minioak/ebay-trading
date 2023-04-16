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
 * Contains a list of up to 10 MessageID values.
 **/
class MyMessagesMessageIDArrayType extends EbatNs_ComplexType
{
    const TAG = 'MyMessagesMessageIDArrayType';
    const NAME = 'MyMessagesMessageIDArrayType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var MyMessagesMessageIDType[]|null
     */
    protected $MessageID = [];


    /**
     * @return MyMessagesMessageIDType[]|MyMessagesMessageIDType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getMessageID($index = null)
    {
        return $this->_dc($index === null
            ? $this->MessageID
            : (count($this->MessageID) > $index
                ? $this->MessageID[$index]
                : null), 'MessageID');
    }

    /**
     * @param MyMessagesMessageIDType|null|MyMessagesMessageIDType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setMessageID($value, $index = null)
    {
        if ($index === null) {
            $this->MessageID = $value;
        } else {
            $this->MessageID[$index] = [];
            
            foreach ($value as $item) {
                $this->addMessageID($item);
            }
        }
    }

    /**
     * @param MyMessagesMessageIDType|null $value
     * @return void
     */
    public function addMessageID($value)
    {
        $this->MessageID[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['MessageID' => ['type' => 'MyMessagesMessageIDType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']], parent::NAME);
        self::assignAttributes([]);
    }

}

MyMessagesMessageIDArrayType::_register();

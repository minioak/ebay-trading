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
 * Contains a list of up to 10 external message IDs.
 **/
class MyMessagesExternalMessageIDArrayType extends EbatNs_ComplexType
{
    const TAG = 'MyMessagesExternalMessageIDArrayType';
    const NAME = 'MyMessagesExternalMessageIDArrayType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var MyMessagesExternalMessageIDType[]|null
     */
    protected $ExternalMessageID = [];


    /**
     * @return MyMessagesExternalMessageIDType[]|MyMessagesExternalMessageIDType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getExternalMessageID($index = null)
    {
        return $this->_dc($index === null
            ? $this->ExternalMessageID
            : (count($this->ExternalMessageID) > $index
                ? $this->ExternalMessageID[$index]
                : null), 'ExternalMessageID');
    }

    /**
     * @param MyMessagesExternalMessageIDType|null|MyMessagesExternalMessageIDType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setExternalMessageID($value, $index = null)
    {
        if ($index === null) {
            $this->ExternalMessageID = $value;
        } else {
            $this->ExternalMessageID[$index] = [];
            
            foreach ($value as $item) {
                $this->addExternalMessageID($item);
            }
        }
    }

    /**
     * @param MyMessagesExternalMessageIDType|null $value
     * @return void
     */
    public function addExternalMessageID($value)
    {
        $this->ExternalMessageID[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['ExternalMessageID' => ['type' => 'MyMessagesExternalMessageIDType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']], parent::NAME);
        self::assignAttributes([]);
    }

}

MyMessagesExternalMessageIDArrayType::_register();

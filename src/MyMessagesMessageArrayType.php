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
 * Type used by the
 * Messages
 * container that is returned in
 * GetMyMessages
 * . The
 * Messages
 * container consists of an array of one or more messages.
 **/
class MyMessagesMessageArrayType extends EbatNs_ComplexType
{
    const TAG = 'MyMessagesMessageArrayType';
    const NAME = 'MyMessagesMessageArrayType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var MyMessagesMessageType[]|null
     */
    protected $Message = [];


    /**
     * @return MyMessagesMessageType[]|MyMessagesMessageType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getMessage($index = null)
    {
        return $this->_dc($index === null
            ? $this->Message
            : (count($this->Message) > $index
                ? $this->Message[$index]
                : null), 'Message');
    }

    /**
     * @param MyMessagesMessageType|null|MyMessagesMessageType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setMessage($value, $index = null)
    {
        if ($index === null) {
            $this->Message = $value;
        } else {
            $this->Message[$index] = [];
            
            foreach ($value as $item) {
                $this->addMessage($item);
            }
        }
    }

    /**
     * @param MyMessagesMessageType|null $value
     * @return void
     */
    public function addMessage($value)
    {
        $this->Message[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['Message' => ['type' => 'MyMessagesMessageType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']], parent::NAME);
        self::assignAttributes([]);
    }

}

MyMessagesMessageArrayType::_register();

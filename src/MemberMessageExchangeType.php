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
 * Container for message metadata.
 **/
class MemberMessageExchangeType extends EbatNs_ComplexType
{
    const TAG = 'MemberMessageExchangeType';
    const NAME = 'MemberMessageExchangeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var ItemType|null
     */
    protected $Item = null;

    /**
     * @var MemberMessageType|null
     */
    protected $Question = null;

    /**
     * @var string[]|null
     */
    protected $Response = [];

    /**
     * @var MessageStatusTypeCodeType|null
     */
    protected $MessageStatus = null;

    /**
     * @var string|null
     */
    protected $CreationDate = null;

    /**
     * @var string|null
     */
    protected $LastModifiedDate = null;

    /**
     * @var MessageMediaType[]|null
     */
    protected $MessageMedia = [];


    /**
     * @return ItemType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getItem()
    {
        return $this->_dc($this->Item, 'Item');
    }

    /**
     * @param ItemType|null $value
     * @return void
     */
    public function setItem($value)
    {
        $this->Item = $value;
    }

    /**
     * @return MemberMessageType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getQuestion()
    {
        return $this->_dc($this->Question, 'Question');
    }

    /**
     * @param MemberMessageType|null $value
     * @return void
     */
    public function setQuestion($value)
    {
        $this->Question = $value;
    }

    /**
     * @return string[]|string|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getResponse($index = null)
    {
        return $this->_dc($index === null
            ? $this->Response
            : (count($this->Response) > $index
                ? $this->Response[$index]
                : null), 'Response');
    }

    /**
     * @param string|null|string[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setResponse($value, $index = null)
    {
        if ($index === null) {
            $this->Response = $value;
        } else {
            $this->Response[$index] = [];
            
            foreach ($value as $item) {
                $this->addResponse($item);
            }
        }
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function addResponse($value)
    {
        $this->Response[] = self::_string($value);
    }

    /**
     * @return MessageStatusTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMessageStatus()
    {
        return $this->_dc($this->MessageStatus);
    }

    /**
     * @param MessageStatusTypeCodeType|null $value
     * @return void
     */
    public function setMessageStatus($value)
    {
        $this->MessageStatus = $this->_enum($value, MessageStatusTypeCodeType::class);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCreationDate()
    {
        return $this->_dc($this->CreationDate, 'CreationDate');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setCreationDate($value)
    {
        $this->CreationDate = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getLastModifiedDate()
    {
        return $this->_dc($this->LastModifiedDate, 'LastModifiedDate');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setLastModifiedDate($value)
    {
        $this->LastModifiedDate = self::_string($value);
    }

    /**
     * @return MessageMediaType[]|MessageMediaType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getMessageMedia($index = null)
    {
        return $this->_dc($index === null
            ? $this->MessageMedia
            : (count($this->MessageMedia) > $index
                ? $this->MessageMedia[$index]
                : null), 'MessageMedia');
    }

    /**
     * @param MessageMediaType|null|MessageMediaType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setMessageMedia($value, $index = null)
    {
        if ($index === null) {
            $this->MessageMedia = $value;
        } else {
            $this->MessageMedia[$index] = [];
            
            foreach ($value as $item) {
                $this->addMessageMedia($item);
            }
        }
    }

    /**
     * @param MessageMediaType|null $value
     * @return void
     */
    public function addMessageMedia($value)
    {
        $this->MessageMedia[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'Item' => ['type' => 'ItemType', 'xmlns' => self::XMLNS],
            'Question' => ['type' => 'MemberMessageType', 'xmlns' => self::XMLNS],
            'Response' => ['cardinality' => '0..*'],
            'MessageStatus' => ['type' => 'MessageStatusTypeCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'CreationDate' => [],
            'LastModifiedDate' => [],
            'MessageMedia' => ['type' => 'MessageMediaType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

MemberMessageExchangeType::_register();

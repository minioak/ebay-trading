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
 * Base type definition of the request payload, which can carry any type of payload
 * content plus optional versioning information and detail level requirements. All
 * concrete request types (e.g., AddItemRequestType) are derived from the abstract
 * request type. The naming convention we use for the concrete type names is the name
 * of the service (the verb or call name) followed by "RequestType":
 * VerbNameRequestType
 **/
class AbstractRequestType extends EbatNs_ComplexType
{
    const TAG = 'AbstractRequest';
    const NAME = 'AbstractRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var DetailLevelCodeType[]|null
     */
    protected $DetailLevel = [];

    /**
     * @var string|null
     */
    protected $ErrorLanguage = null;

    /**
     * @var string|null
     */
    protected $MessageID = null;

    /**
     * @var string|null
     */
    protected $Version = '1299';

    /**
     * @var string|null
     */
    protected $EndUserIP = null;

    /**
     * @var ErrorHandlingCodeType|null
     */
    protected $ErrorHandling = null;

    /**
     * @var UUIDType|null
     */
    protected $InvocationID = null;

    /**
     * @var string[]|null
     */
    protected $OutputSelector = [];

    /**
     * @var WarningLevelCodeType|null
     */
    protected $WarningLevel = null;

    /**
     * @var BotBlockRequestType|null
     */
    protected $BotBlock = null;


    /**
     * @return string[]|DetailLevelCodeType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getDetailLevel($index = null)
    {
        return $this->_dc($index === null
            ? $this->DetailLevel
            : (count($this->DetailLevel) > $index
                ? $this->DetailLevel[$index]
                : null));
    }

    /**
     * @param DetailLevelCodeType|null|string[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setDetailLevel($value, $index = null)
    {
        if ($index === null) {
            $this->DetailLevel = $value;
        } else {
            $this->DetailLevel[$index] = [];
            
            foreach ($value as $item) {
                $this->addDetailLevel($item);
            }
        }
    }

    /**
     * @param DetailLevelCodeType|null $value
     * @return void
     */
    public function addDetailLevel($value)
    {
        $this->DetailLevel[] = $this->_enum($value, DetailLevelCodeType::class);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getErrorLanguage()
    {
        return $this->_dc($this->ErrorLanguage, 'ErrorLanguage');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setErrorLanguage($value)
    {
        $this->ErrorLanguage = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMessageID()
    {
        return $this->_dc($this->MessageID, 'MessageID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setMessageID($value)
    {
        $this->MessageID = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getVersion()
    {
        return $this->_dc($this->Version, 'Version');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setVersion($value)
    {
        $this->Version = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEndUserIP()
    {
        return $this->_dc($this->EndUserIP, 'EndUserIP');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setEndUserIP($value)
    {
        $this->EndUserIP = self::_string($value);
    }

    /**
     * @return ErrorHandlingCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getErrorHandling()
    {
        return $this->_dc($this->ErrorHandling);
    }

    /**
     * @param ErrorHandlingCodeType|null $value
     * @return void
     */
    public function setErrorHandling($value)
    {
        $this->ErrorHandling = $this->_enum($value, ErrorHandlingCodeType::class);
    }

    /**
     * @return UUIDType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getInvocationID()
    {
        return $this->_dc($this->InvocationID, 'InvocationID');
    }

    /**
     * @param UUIDType|null $value
     * @return void
     */
    public function setInvocationID($value)
    {
        $this->InvocationID = $value;
    }

    /**
     * @return string[]|string|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getOutputSelector($index = null)
    {
        return $this->_dc($index === null
            ? $this->OutputSelector
            : (count($this->OutputSelector) > $index
                ? $this->OutputSelector[$index]
                : null), 'OutputSelector');
    }

    /**
     * @param string|null|string[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setOutputSelector($value, $index = null)
    {
        if ($index === null) {
            $this->OutputSelector = $value;
        } else {
            $this->OutputSelector[$index] = [];
            
            foreach ($value as $item) {
                $this->addOutputSelector($item);
            }
        }
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function addOutputSelector($value)
    {
        $this->OutputSelector[] = self::_string($value);
    }

    /**
     * @return WarningLevelCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getWarningLevel()
    {
        return $this->_dc($this->WarningLevel);
    }

    /**
     * @param WarningLevelCodeType|null $value
     * @return void
     */
    public function setWarningLevel($value)
    {
        $this->WarningLevel = $this->_enum($value, WarningLevelCodeType::class);
    }

    /**
     * @return BotBlockRequestType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBotBlock()
    {
        return $this->_dc($this->BotBlock, 'BotBlock');
    }

    /**
     * @param BotBlockRequestType|null $value
     * @return void
     */
    public function setBotBlock($value)
    {
        $this->BotBlock = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'DetailLevel' => ['type' => 'DetailLevelCodeType', 'enum' => true, 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'ErrorLanguage' => [],
            'MessageID' => [],
            'Version' => [],
            'EndUserIP' => [],
            'ErrorHandling' => ['type' => 'ErrorHandlingCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'InvocationID' => ['type' => 'UUIDType', 'xmlns' => self::XMLNS],
            'OutputSelector' => ['cardinality' => '0..*'],
            'WarningLevel' => ['type' => 'WarningLevelCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'BotBlock' => ['type' => 'BotBlockRequestType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

AbstractRequestType::_register();

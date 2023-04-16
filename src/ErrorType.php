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
 * These are request errors (as opposed to system errors) that occur due to problems
 * with business-level data (e.g., an invalid combination of arguments) that
 * the application passed in.
 **/
class ErrorType extends EbatNs_ComplexType
{
    const TAG = 'ErrorType';
    const NAME = 'ErrorType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $ShortMessage = null;

    /**
     * @var string|null
     */
    protected $LongMessage = null;

    /**
     * @var string|null
     */
    protected $ErrorCode = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $UserDisplayHint = null;

    /**
     * @var SeverityCodeType|null
     */
    protected $SeverityCode = null;

    /**
     * @var ErrorParameterType[]|null
     */
    protected $ErrorParameters = [];

    /**
     * @var ErrorClassificationCodeType|null
     */
    protected $ErrorClassification = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShortMessage()
    {
        return $this->_dc($this->ShortMessage, 'ShortMessage');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setShortMessage($value)
    {
        $this->ShortMessage = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getLongMessage()
    {
        return $this->_dc($this->LongMessage, 'LongMessage');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setLongMessage($value)
    {
        $this->LongMessage = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getErrorCode()
    {
        return $this->_dc($this->ErrorCode, 'ErrorCode');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setErrorCode($value)
    {
        $this->ErrorCode = self::_string($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getUserDisplayHint()
    {
        return $this->_dc($this->UserDisplayHint === 'true', 'UserDisplayHint');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setUserDisplayHint($value)
    {
        $this->UserDisplayHint = self::_bool($value);
    }

    /**
     * @return SeverityCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSeverityCode()
    {
        return $this->_dc($this->SeverityCode);
    }

    /**
     * @param SeverityCodeType|null $value
     * @return void
     */
    public function setSeverityCode($value)
    {
        $this->SeverityCode = $this->_enum($value, SeverityCodeType::class);
    }

    /**
     * @return ErrorParameterType[]|ErrorParameterType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getErrorParameters($index = null)
    {
        return $this->_dc($index === null
            ? $this->ErrorParameters
            : (count($this->ErrorParameters) > $index
                ? $this->ErrorParameters[$index]
                : null), 'ErrorParameters');
    }

    /**
     * @param ErrorParameterType|null|ErrorParameterType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setErrorParameters($value, $index = null)
    {
        if ($index === null) {
            $this->ErrorParameters = $value;
        } else {
            $this->ErrorParameters[$index] = [];
            
            foreach ($value as $item) {
                $this->addErrorParameters($item);
            }
        }
    }

    /**
     * @param ErrorParameterType|null $value
     * @return void
     */
    public function addErrorParameters($value)
    {
        $this->ErrorParameters[] = $value;
    }

    /**
     * @return ErrorClassificationCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getErrorClassification()
    {
        return $this->_dc($this->ErrorClassification);
    }

    /**
     * @param ErrorClassificationCodeType|null $value
     * @return void
     */
    public function setErrorClassification($value)
    {
        $this->ErrorClassification = $this->_enum($value, ErrorClassificationCodeType::class);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'ShortMessage' => [],
            'LongMessage' => [],
            'ErrorCode' => [],
            'UserDisplayHint' => ['type' => 'bool'],
            'SeverityCode' => ['type' => 'SeverityCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'ErrorParameters' => ['type' => 'ErrorParameterType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'ErrorClassification' => ['type' => 'ErrorClassificationCodeType', 'enum' => true, 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

ErrorType::_register();

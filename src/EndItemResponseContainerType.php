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
 * This type includes the acknowledgement of the date and time when an eBay listing was ended due to the call to
 * EndItems
 * .
 **/
class EndItemResponseContainerType extends EbatNs_ComplexType
{
    const TAG = 'EndItemResponseContainerType';
    const NAME = 'EndItemResponseContainerType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $EndTime = null;

    /**
     * @var string|null
     */
    protected $CorrelationID = null;

    /**
     * @var ErrorType[]|null
     */
    protected $Errors = [];


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEndTime()
    {
        return $this->_dc($this->EndTime, 'EndTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setEndTime($value)
    {
        $this->EndTime = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCorrelationID()
    {
        return $this->_dc($this->CorrelationID, 'CorrelationID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setCorrelationID($value)
    {
        $this->CorrelationID = self::_string($value);
    }

    /**
     * @return ErrorType[]|ErrorType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getErrors($index = null)
    {
        return $this->_dc($index === null
            ? $this->Errors
            : (count($this->Errors) > $index
                ? $this->Errors[$index]
                : null), 'Errors');
    }

    /**
     * @param ErrorType|null|ErrorType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setErrors($value, $index = null)
    {
        if ($index === null) {
            $this->Errors = $value;
        } else {
            $this->Errors[$index] = [];
            
            foreach ($value as $item) {
                $this->addErrors($item);
            }
        }
    }

    /**
     * @param ErrorType|null $value
     * @return void
     */
    public function addErrors($value)
    {
        $this->Errors[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'EndTime' => [],
            'CorrelationID' => [],
            'Errors' => ['type' => 'ErrorType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

EndItemResponseContainerType::_register();

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
 * This type defines the available options for the return durations for international returns.
 **/
class InternationalReturnsDurationCodeType extends EbatNs_ComplexType
{
    const TAG = 'InternationalReturnsDurationCodeType';
    const NAME = 'InternationalReturnsDurationCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var ReturnsDurationCodeType[]|null
     */
    protected $InternationalReturnsDuration = [];


    /**
     * @return string[]|ReturnsDurationCodeType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getInternationalReturnsDuration($index = null)
    {
        return $this->_dc($index === null
            ? $this->InternationalReturnsDuration
            : (count($this->InternationalReturnsDuration) > $index
                ? $this->InternationalReturnsDuration[$index]
                : null));
    }

    /**
     * @param ReturnsDurationCodeType|null|string[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setInternationalReturnsDuration($value, $index = null)
    {
        if ($index === null) {
            $this->InternationalReturnsDuration = $value;
        } else {
            $this->InternationalReturnsDuration[$index] = [];
            
            foreach ($value as $item) {
                $this->addInternationalReturnsDuration($item);
            }
        }
    }

    /**
     * @param ReturnsDurationCodeType|null $value
     * @return void
     */
    public function addInternationalReturnsDuration($value)
    {
        $this->InternationalReturnsDuration[] = $this->_enum($value, ReturnsDurationCodeType::class);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['InternationalReturnsDuration' => ['type' => 'ReturnsDurationCodeType', 'enum' => true, 'xmlns' => self::XMLNS, 'cardinality' => '0..*']], parent::NAME);
        self::assignAttributes([]);
    }

}

InternationalReturnsDurationCodeType::_register();

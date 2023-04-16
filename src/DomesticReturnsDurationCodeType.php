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
 * This type defines the available options for the return durations for domestic returns.
 **/
class DomesticReturnsDurationCodeType extends EbatNs_ComplexType
{
    const TAG = 'DomesticReturnsDurationCodeType';
    const NAME = 'DomesticReturnsDurationCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var ReturnsDurationCodeType[]|null
     */
    protected $DomesticReturnsDuration = [];


    /**
     * @return string[]|ReturnsDurationCodeType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getDomesticReturnsDuration($index = null)
    {
        return $this->_dc($index === null
            ? $this->DomesticReturnsDuration
            : (count($this->DomesticReturnsDuration) > $index
                ? $this->DomesticReturnsDuration[$index]
                : null));
    }

    /**
     * @param ReturnsDurationCodeType|null|string[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setDomesticReturnsDuration($value, $index = null)
    {
        if ($index === null) {
            $this->DomesticReturnsDuration = $value;
        } else {
            $this->DomesticReturnsDuration[$index] = [];
            
            foreach ($value as $item) {
                $this->addDomesticReturnsDuration($item);
            }
        }
    }

    /**
     * @param ReturnsDurationCodeType|null $value
     * @return void
     */
    public function addDomesticReturnsDuration($value)
    {
        $this->DomesticReturnsDuration[] = $this->_enum($value, ReturnsDurationCodeType::class);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['DomesticReturnsDuration' => ['type' => 'ReturnsDurationCodeType', 'enum' => true, 'xmlns' => self::XMLNS, 'cardinality' => '0..*']], parent::NAME);
        self::assignAttributes([]);
    }

}

DomesticReturnsDurationCodeType::_register();

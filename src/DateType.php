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
 * Defines year, month, and day as individual components of a date.
 * Only applicable to use cases that support incomplete dates.
 * Otherwise, we use xs:dateTime (or xs:date, as appropriate).
 **/
class DateType extends EbatNs_ComplexType
{
    const TAG = 'DateType';
    const NAME = 'DateType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var int|null
     */
    protected $Year = null;

    /**
     * @var int|null
     */
    protected $Month = null;

    /**
     * @var int|null
     */
    protected $Day = null;


    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getYear()
    {
        return $this->_dc($this->Year, 'Year');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setYear($value)
    {
        $this->Year = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMonth()
    {
        return $this->_dc($this->Month, 'Month');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setMonth($value)
    {
        $this->Month = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDay()
    {
        return $this->_dc($this->Day, 'Day');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setDay($value)
    {
        $this->Day = self::_int($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'Year' => ['type' => 'int'],
            'Month' => ['type' => 'int'],
            'Day' => ['type' => 'int']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

DateType::_register();

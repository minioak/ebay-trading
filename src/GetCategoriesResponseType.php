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
 * Contains the category data for the eBay site specified as input. The category
 * data is contained in a CategoryArrayType object, within which are zero, one, or
 * multiple CategoryType objects. Each CategoryType object contains the detail data
 * for one category. Other fields tell how many categories are returned in a call,
 * when the category hierarchy was last updated, and the version of the category
 * hierarchy (all three of which can differ from one eBay site to the next).
 **/
class GetCategoriesResponseType extends EbatNs_Response
{
    const TAG = 'GetCategoriesResponseType';
    const NAME = 'GetCategoriesResponseType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var CategoryArrayType|null
     */
    protected $CategoryArray = null;

    /**
     * @var int|null
     */
    protected $CategoryCount = null;

    /**
     * @var string|null
     */
    protected $UpdateTime = null;

    /**
     * @var string|null
     */
    protected $CategoryVersion = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $ReservePriceAllowed = null;

    /**
     * @var float|null
     */
    protected $MinimumReservePrice = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $ReduceReserveAllowed = null;


    /**
     * @return CategoryArrayType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCategoryArray()
    {
        return $this->_dc($this->CategoryArray, 'CategoryArray');
    }

    /**
     * @param CategoryArrayType|null $value
     * @return void
     */
    public function setCategoryArray($value)
    {
        $this->CategoryArray = $value;
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCategoryCount()
    {
        return $this->_dc($this->CategoryCount, 'CategoryCount');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setCategoryCount($value)
    {
        $this->CategoryCount = self::_int($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getUpdateTime()
    {
        return $this->_dc($this->UpdateTime, 'UpdateTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setUpdateTime($value)
    {
        $this->UpdateTime = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCategoryVersion()
    {
        return $this->_dc($this->CategoryVersion, 'CategoryVersion');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setCategoryVersion($value)
    {
        $this->CategoryVersion = self::_string($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getReservePriceAllowed()
    {
        return $this->_dc($this->ReservePriceAllowed === 'true', 'ReservePriceAllowed');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setReservePriceAllowed($value)
    {
        $this->ReservePriceAllowed = self::_bool($value);
    }

    /**
     * @return float|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMinimumReservePrice()
    {
        return $this->_dc($this->MinimumReservePrice, 'MinimumReservePrice');
    }

    /**
     * @param float|null $value
     * @return void
     */
    public function setMinimumReservePrice($value)
    {
        $this->MinimumReservePrice = self::_float($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getReduceReserveAllowed()
    {
        return $this->_dc($this->ReduceReserveAllowed === 'true', 'ReduceReserveAllowed');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setReduceReserveAllowed($value)
    {
        $this->ReduceReserveAllowed = self::_bool($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'CategoryArray' => ['type' => 'CategoryArrayType', 'xmlns' => self::XMLNS],
            'CategoryCount' => ['type' => 'int'],
            'UpdateTime' => [],
            'CategoryVersion' => [],
            'ReservePriceAllowed' => ['type' => 'bool'],
            'MinimumReservePrice' => ['type' => 'float'],
            'ReduceReserveAllowed' => ['type' => 'bool']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

GetCategoriesResponseType::_register();

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
 * Type defining the
 * CurrencyDetails
 * container that is returned in the
 * GeteBayDetails
 * response if 'CurrencyDetails' is used as a
 * DetailName
 * value in the request, or no
 * DetailName
 * values are used in the request. A
 * CurrencyDetails
 * container is returned for each currency value that is available to use in the
 * Item.Currency
 * field in an Add/Revise/Relist call.
 **/
class CurrencyDetailsType extends EbatNs_ComplexType
{
    const TAG = 'CurrencyDetailsType';
    const NAME = 'CurrencyDetailsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var CurrencyCodeType|null
     */
    protected $Currency = null;

    /**
     * @var string|null
     */
    protected $Description = null;

    /**
     * @var string|null
     */
    protected $DetailVersion = null;

    /**
     * @var string|null
     */
    protected $UpdateTime = null;


    /**
     * @return CurrencyCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCurrency()
    {
        return $this->_dc($this->Currency);
    }

    /**
     * @param CurrencyCodeType|null $value
     * @return void
     */
    public function setCurrency($value)
    {
        $this->Currency = $this->_enum($value, CurrencyCodeType::class);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDescription()
    {
        return $this->_dc($this->Description, 'Description');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setDescription($value)
    {
        $this->Description = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDetailVersion()
    {
        return $this->_dc($this->DetailVersion, 'DetailVersion');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setDetailVersion($value)
    {
        $this->DetailVersion = self::_string($value);
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
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'Currency' => ['type' => 'CurrencyCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'Description' => [],
            'DetailVersion' => [],
            'UpdateTime' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

CurrencyDetailsType::_register();

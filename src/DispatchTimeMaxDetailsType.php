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
 * Details about the maximum number of business days required to ship an item to domestic buyers after receiving a
 * cleared payment.
 **/
class DispatchTimeMaxDetailsType extends EbatNs_ComplexType
{
    const TAG = 'DispatchTimeMaxDetailsType';
    const NAME = 'DispatchTimeMaxDetailsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var int|null
     */
    protected $DispatchTimeMax = null;

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
     * @var bool|null "true" or "false"
     */
    protected $ExtendedHandling = null;


    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDispatchTimeMax()
    {
        return $this->_dc($this->DispatchTimeMax, 'DispatchTimeMax');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setDispatchTimeMax($value)
    {
        $this->DispatchTimeMax = self::_int($value);
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
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getExtendedHandling()
    {
        return $this->_dc($this->ExtendedHandling === 'true', 'ExtendedHandling');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setExtendedHandling($value)
    {
        $this->ExtendedHandling = self::_bool($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'DispatchTimeMax' => ['type' => 'int'],
            'Description' => [],
            'DetailVersion' => [],
            'UpdateTime' => [],
            'ExtendedHandling' => ['type' => 'bool']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

DispatchTimeMaxDetailsType::_register();

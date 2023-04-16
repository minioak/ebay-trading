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
 * This type is used by the
 * URLDetails
 * containers that are returned in the response of
 * GeteBayDetails
 * if the <code>URLDetails</code> value is used in the
 * DetailName
 * field of the call request. Each
 * URLDetails
 * container conists of the URL of the different eBay pages, such as the View Item URL, the eBay Store URL, and
 * others.
 **/
class URLDetailsType extends EbatNs_ComplexType
{
    const TAG = 'URLDetailsType';
    const NAME = 'URLDetailsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var URLTypeCodeType|null
     */
    protected $URLType = null;

    /**
     * @var string|null
     */
    protected $URL = null;

    /**
     * @var string|null
     */
    protected $DetailVersion = null;

    /**
     * @var string|null
     */
    protected $UpdateTime = null;


    /**
     * @return URLTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getURLType()
    {
        return $this->_dc($this->URLType);
    }

    /**
     * @param URLTypeCodeType|null $value
     * @return void
     */
    public function setURLType($value)
    {
        $this->URLType = $this->_enum($value, URLTypeCodeType::class);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getURL()
    {
        return $this->_dc($this->URL, 'URL');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setURL($value)
    {
        $this->URL = self::_string($value);
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
            'URLType' => ['type' => 'URLTypeCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'URL' => [],
            'DetailVersion' => [],
            'UpdateTime' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

URLDetailsType::_register();

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
 * Details about a specific site.
 **/
class SiteDetailsType extends EbatNs_ComplexType
{
    const TAG = 'SiteDetailsType';
    const NAME = 'SiteDetailsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var SiteCodeType|null
     */
    protected $Site = null;

    /**
     * @var int|null
     */
    protected $SiteID = null;

    /**
     * @var string|null
     */
    protected $DetailVersion = null;

    /**
     * @var string|null
     */
    protected $UpdateTime = null;


    /**
     * @return SiteCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSite()
    {
        return $this->_dc($this->Site);
    }

    /**
     * @param SiteCodeType|null $value
     * @return void
     */
    public function setSite($value)
    {
        $this->Site = $this->_enum($value, SiteCodeType::class);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSiteID()
    {
        return $this->_dc($this->SiteID, 'SiteID');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setSiteID($value)
    {
        $this->SiteID = self::_int($value);
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
            'Site' => ['type' => 'SiteCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'SiteID' => ['type' => 'int'],
            'DetailVersion' => [],
            'UpdateTime' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

SiteDetailsType::_register();

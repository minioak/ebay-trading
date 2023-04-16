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
 * This type is used to provide details about a seller's eBay Store.
 **/
class StoreType extends EbatNs_ComplexType
{
    const TAG = 'StoreType';
    const NAME = 'StoreType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $Name = null;

    /**
     * @var string|null
     */
    protected $URLPath = null;

    /**
     * @var string|null
     */
    protected $URL = null;

    /**
     * @var string|null
     */
    protected $Description = null;

    /**
     * @var StoreLogoType|null
     */
    protected $Logo = null;

    /**
     * @var StoreCustomCategoryArrayType|null
     */
    protected $CustomCategories = null;

    /**
     * @var MerchDisplayCodeType|null
     */
    protected $MerchDisplay = null;

    /**
     * @var string|null
     */
    protected $LastOpenedTime = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getName()
    {
        return $this->_dc($this->Name, 'Name');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setName($value)
    {
        $this->Name = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getURLPath()
    {
        return $this->_dc($this->URLPath, 'URLPath');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setURLPath($value)
    {
        $this->URLPath = self::_string($value);
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
     * @return StoreLogoType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getLogo()
    {
        return $this->_dc($this->Logo, 'Logo');
    }

    /**
     * @param StoreLogoType|null $value
     * @return void
     */
    public function setLogo($value)
    {
        $this->Logo = $value;
    }

    /**
     * @return StoreCustomCategoryArrayType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCustomCategories()
    {
        return $this->_dc($this->CustomCategories, 'CustomCategories');
    }

    /**
     * @param StoreCustomCategoryArrayType|null $value
     * @return void
     */
    public function setCustomCategories($value)
    {
        $this->CustomCategories = $value;
    }

    /**
     * @return MerchDisplayCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMerchDisplay()
    {
        return $this->_dc($this->MerchDisplay);
    }

    /**
     * @param MerchDisplayCodeType|null $value
     * @return void
     */
    public function setMerchDisplay($value)
    {
        $this->MerchDisplay = $this->_enum($value, MerchDisplayCodeType::class);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getLastOpenedTime()
    {
        return $this->_dc($this->LastOpenedTime, 'LastOpenedTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setLastOpenedTime($value)
    {
        $this->LastOpenedTime = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'Name' => [],
            'URLPath' => [],
            'URL' => [],
            'Description' => [],
            'Logo' => ['type' => 'StoreLogoType', 'xmlns' => self::XMLNS],
            'CustomCategories' => ['type' => 'StoreCustomCategoryArrayType', 'xmlns' => self::XMLNS],
            'MerchDisplay' => ['type' => 'MerchDisplayCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'LastOpenedTime' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

StoreType::_register();

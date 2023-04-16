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
 * This type is deprecated.
 **/
class WantItNowPostType extends EbatNs_ComplexType
{
    const TAG = 'WantItNowPostType';
    const NAME = 'WantItNowPostType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $CategoryID = null;

    /**
     * @var string|null
     */
    protected $Description = null;

    /**
     * @var ItemIDType|null
     */
    protected $PostID = null;

    /**
     * @var SiteCodeType|null
     */
    protected $Site = null;

    /**
     * @var string|null
     */
    protected $StartTime = null;

    /**
     * @var int|null
     */
    protected $ResponseCount = null;

    /**
     * @var string|null
     */
    protected $Title = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCategoryID()
    {
        return $this->_dc($this->CategoryID, 'CategoryID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setCategoryID($value)
    {
        $this->CategoryID = self::_string($value);
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
     * @return ItemIDType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPostID()
    {
        return $this->_dc($this->PostID, 'PostID');
    }

    /**
     * @param ItemIDType|null $value
     * @return void
     */
    public function setPostID($value)
    {
        $this->PostID = $value;
    }

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
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getStartTime()
    {
        return $this->_dc($this->StartTime, 'StartTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setStartTime($value)
    {
        $this->StartTime = self::_string($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getResponseCount()
    {
        return $this->_dc($this->ResponseCount, 'ResponseCount');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setResponseCount($value)
    {
        $this->ResponseCount = self::_int($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTitle()
    {
        return $this->_dc($this->Title, 'Title');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setTitle($value)
    {
        $this->Title = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'CategoryID' => [],
            'Description' => [],
            'PostID' => ['type' => 'ItemIDType', 'xmlns' => self::XMLNS],
            'Site' => ['type' => 'SiteCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'StartTime' => [],
            'ResponseCount' => ['type' => 'int'],
            'Title' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

WantItNowPostType::_register();

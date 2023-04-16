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
 * This type is not used by any Trading API calls.
 **/
class BuyingGuideType extends EbatNs_ComplexType
{
    const TAG = 'BuyingGuideType';
    const NAME = 'BuyingGuideType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $Name = null;

    /**
     * @var string|null
     */
    protected $URL = null;

    /**
     * @var string|null
     */
    protected $CategoryID = null;

    /**
     * @var int|null
     */
    protected $ProductFinderID = null;

    /**
     * @var string|null
     */
    protected $Title = null;

    /**
     * @var string|null
     */
    protected $Text = null;

    /**
     * @var string|null
     */
    protected $CreationTime = null;

    /**
     * @var UserIDType|null
     */
    protected $UserID = null;


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
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getProductFinderID()
    {
        return $this->_dc($this->ProductFinderID, 'ProductFinderID');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setProductFinderID($value)
    {
        $this->ProductFinderID = self::_int($value);
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
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getText()
    {
        return $this->_dc($this->Text, 'Text');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setText($value)
    {
        $this->Text = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCreationTime()
    {
        return $this->_dc($this->CreationTime, 'CreationTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setCreationTime($value)
    {
        $this->CreationTime = self::_string($value);
    }

    /**
     * @return UserIDType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getUserID()
    {
        return $this->_dc($this->UserID, 'UserID');
    }

    /**
     * @param UserIDType|null $value
     * @return void
     */
    public function setUserID($value)
    {
        $this->UserID = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'Name' => [],
            'URL' => [],
            'CategoryID' => [],
            'ProductFinderID' => ['type' => 'int'],
            'Title' => [],
            'Text' => [],
            'CreationTime' => [],
            'UserID' => ['type' => 'UserIDType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

BuyingGuideType::_register();

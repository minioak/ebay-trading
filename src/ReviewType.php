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
class ReviewType extends EbatNs_ComplexType
{
    const TAG = 'ReviewType';
    const NAME = 'ReviewType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $URL = null;

    /**
     * @var string|null
     */
    protected $Title = null;

    /**
     * @var int|null
     */
    protected $Rating = null;

    /**
     * @var string|null
     */
    protected $Text = null;

    /**
     * @var UserIDType|null
     */
    protected $UserID = null;

    /**
     * @var string|null
     */
    protected $CreationTime = null;


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
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getRating()
    {
        return $this->_dc($this->Rating, 'Rating');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setRating($value)
    {
        $this->Rating = self::_int($value);
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
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'URL' => [],
            'Title' => [],
            'Rating' => ['type' => 'int'],
            'Text' => [],
            'UserID' => ['type' => 'UserIDType', 'xmlns' => self::XMLNS],
            'CreationTime' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

ReviewType::_register();

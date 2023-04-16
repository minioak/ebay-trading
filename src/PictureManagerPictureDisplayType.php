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
class PictureManagerPictureDisplayType extends EbatNs_ComplexType
{
    const TAG = 'PictureManagerPictureDisplayType';
    const NAME = 'PictureManagerPictureDisplayType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var PictureManagerPictureDisplayTypeCodeType|null
     */
    protected $DisplayType = null;

    /**
     * @var string|null
     */
    protected $URL = null;

    /**
     * @var int|null
     */
    protected $Size = null;

    /**
     * @var int|null
     */
    protected $Height = null;

    /**
     * @var int|null
     */
    protected $Width = null;


    /**
     * @return PictureManagerPictureDisplayTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDisplayType()
    {
        return $this->_dc($this->DisplayType);
    }

    /**
     * @param PictureManagerPictureDisplayTypeCodeType|null $value
     * @return void
     */
    public function setDisplayType($value)
    {
        $this->DisplayType = $this->_enum($value, PictureManagerPictureDisplayTypeCodeType::class);
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
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSize()
    {
        return $this->_dc($this->Size, 'Size');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setSize($value)
    {
        $this->Size = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getHeight()
    {
        return $this->_dc($this->Height, 'Height');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setHeight($value)
    {
        $this->Height = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getWidth()
    {
        return $this->_dc($this->Width, 'Width');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setWidth($value)
    {
        $this->Width = self::_int($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'DisplayType' => ['type' => 'PictureManagerPictureDisplayTypeCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'URL' => [],
            'Size' => ['type' => 'int'],
            'Height' => ['type' => 'int'],
            'Width' => ['type' => 'int']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

PictureManagerPictureDisplayType::_register();

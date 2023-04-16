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
 * Contains the data for the pictures associated with an item.
 **/
class PictureDetailsType extends EbatNs_ComplexType
{
    const TAG = 'PictureDetailsType';
    const NAME = 'PictureDetailsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var GalleryTypeCodeType|null
     */
    protected $GalleryType = null;

    /**
     * @var PhotoDisplayCodeType|null
     */
    protected $PhotoDisplay = null;

    /**
     * @var string[]|null
     */
    protected $PictureURL = [];

    /**
     * @var PictureSourceCodeType|null
     */
    protected $PictureSource = null;

    /**
     * @var GalleryStatusCodeType|null
     */
    protected $GalleryStatus = null;

    /**
     * @var string|null
     */
    protected $GalleryErrorInfo = null;

    /**
     * @var string[]|null
     */
    protected $ExternalPictureURL = [];

    /**
     * @var ExtendedPictureDetailsType|null
     */
    protected $ExtendedPictureDetails = null;


    /**
     * @return GalleryTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getGalleryType()
    {
        return $this->_dc($this->GalleryType);
    }

    /**
     * @param GalleryTypeCodeType|null $value
     * @return void
     */
    public function setGalleryType($value)
    {
        $this->GalleryType = $this->_enum($value, GalleryTypeCodeType::class);
    }

    /**
     * @return PhotoDisplayCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPhotoDisplay()
    {
        return $this->_dc($this->PhotoDisplay);
    }

    /**
     * @param PhotoDisplayCodeType|null $value
     * @return void
     */
    public function setPhotoDisplay($value)
    {
        $this->PhotoDisplay = $this->_enum($value, PhotoDisplayCodeType::class);
    }

    /**
     * @return string[]|string|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getPictureURL($index = null)
    {
        return $this->_dc($index === null
            ? $this->PictureURL
            : (count($this->PictureURL) > $index
                ? $this->PictureURL[$index]
                : null), 'PictureURL');
    }

    /**
     * @param string|null|string[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setPictureURL($value, $index = null)
    {
        if ($index === null) {
            $this->PictureURL = $value;
        } else {
            $this->PictureURL[$index] = [];
            
            foreach ($value as $item) {
                $this->addPictureURL($item);
            }
        }
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function addPictureURL($value)
    {
        $this->PictureURL[] = self::_string($value);
    }

    /**
     * @return PictureSourceCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPictureSource()
    {
        return $this->_dc($this->PictureSource);
    }

    /**
     * @param PictureSourceCodeType|null $value
     * @return void
     */
    public function setPictureSource($value)
    {
        $this->PictureSource = $this->_enum($value, PictureSourceCodeType::class);
    }

    /**
     * @return GalleryStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getGalleryStatus()
    {
        return $this->_dc($this->GalleryStatus);
    }

    /**
     * @param GalleryStatusCodeType|null $value
     * @return void
     */
    public function setGalleryStatus($value)
    {
        $this->GalleryStatus = $this->_enum($value, GalleryStatusCodeType::class);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getGalleryErrorInfo()
    {
        return $this->_dc($this->GalleryErrorInfo, 'GalleryErrorInfo');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setGalleryErrorInfo($value)
    {
        $this->GalleryErrorInfo = self::_string($value);
    }

    /**
     * @return string[]|string|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getExternalPictureURL($index = null)
    {
        return $this->_dc($index === null
            ? $this->ExternalPictureURL
            : (count($this->ExternalPictureURL) > $index
                ? $this->ExternalPictureURL[$index]
                : null), 'ExternalPictureURL');
    }

    /**
     * @param string|null|string[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setExternalPictureURL($value, $index = null)
    {
        if ($index === null) {
            $this->ExternalPictureURL = $value;
        } else {
            $this->ExternalPictureURL[$index] = [];
            
            foreach ($value as $item) {
                $this->addExternalPictureURL($item);
            }
        }
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function addExternalPictureURL($value)
    {
        $this->ExternalPictureURL[] = self::_string($value);
    }

    /**
     * @return ExtendedPictureDetailsType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getExtendedPictureDetails()
    {
        return $this->_dc($this->ExtendedPictureDetails, 'ExtendedPictureDetails');
    }

    /**
     * @param ExtendedPictureDetailsType|null $value
     * @return void
     */
    public function setExtendedPictureDetails($value)
    {
        $this->ExtendedPictureDetails = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'GalleryType' => ['type' => 'GalleryTypeCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'PhotoDisplay' => ['type' => 'PhotoDisplayCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'PictureURL' => ['cardinality' => '0..*'],
            'PictureSource' => ['type' => 'PictureSourceCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'GalleryStatus' => ['type' => 'GalleryStatusCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'GalleryErrorInfo' => [],
            'ExternalPictureURL' => ['cardinality' => '0..*'],
            'ExtendedPictureDetails' => ['type' => 'ExtendedPictureDetailsType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

PictureDetailsType::_register();

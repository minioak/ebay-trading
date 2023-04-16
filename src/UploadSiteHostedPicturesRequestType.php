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
 * Uploads a picture to the eBay Picture Service and returns a URL of the picture.
 * You will use this URL when creating, revising, or relisting an item with the Trading API.
 **/
class UploadSiteHostedPicturesRequestType extends EbatNs_RequestHeaderType
{
    const TAG = 'UploadSiteHostedPicturesRequest';
    const NAME = 'UploadSiteHostedPicturesRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'UploadSiteHostedPictures';

    /**
     * @var string|null
     */
    protected $PictureName = null;

    /**
     * @var int|null
     */
    protected $PictureSystemVersion = null;

    /**
     * @var PictureSetCodeType|null
     */
    protected $PictureSet = null;

    /**
     * @var Base64BinaryType|null
     */
    protected $PictureData = null;

    /**
     * @var PictureUploadPolicyCodeType|null
     */
    protected $PictureUploadPolicy = null;

    /**
     * @var string[]|null
     */
    protected $ExternalPictureURL = [];

    /**
     * @var PictureWatermarkCodeType[]|null
     */
    protected $PictureWatermark = [];

    /**
     * @var int|null
     */
    protected $ExtensionInDays = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPictureName()
    {
        return $this->_dc($this->PictureName, 'PictureName');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setPictureName($value)
    {
        $this->PictureName = self::_string($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPictureSystemVersion()
    {
        return $this->_dc($this->PictureSystemVersion, 'PictureSystemVersion');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setPictureSystemVersion($value)
    {
        $this->PictureSystemVersion = self::_int($value);
    }

    /**
     * @return PictureSetCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPictureSet()
    {
        return $this->_dc($this->PictureSet);
    }

    /**
     * @param PictureSetCodeType|null $value
     * @return void
     */
    public function setPictureSet($value)
    {
        $this->PictureSet = $this->_enum($value, PictureSetCodeType::class);
    }

    /**
     * @return Base64BinaryType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPictureData()
    {
        return $this->_dc($this->PictureData, 'PictureData');
    }

    /**
     * @param Base64BinaryType|null $value
     * @return void
     */
    public function setPictureData($value)
    {
        $this->PictureData = $value;
    }

    /**
     * @return PictureUploadPolicyCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPictureUploadPolicy()
    {
        return $this->_dc($this->PictureUploadPolicy);
    }

    /**
     * @param PictureUploadPolicyCodeType|null $value
     * @return void
     */
    public function setPictureUploadPolicy($value)
    {
        $this->PictureUploadPolicy = $this->_enum($value, PictureUploadPolicyCodeType::class);
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
     * @return string[]|PictureWatermarkCodeType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getPictureWatermark($index = null)
    {
        return $this->_dc($index === null
            ? $this->PictureWatermark
            : (count($this->PictureWatermark) > $index
                ? $this->PictureWatermark[$index]
                : null));
    }

    /**
     * @param PictureWatermarkCodeType|null|string[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setPictureWatermark($value, $index = null)
    {
        if ($index === null) {
            $this->PictureWatermark = $value;
        } else {
            $this->PictureWatermark[$index] = [];
            
            foreach ($value as $item) {
                $this->addPictureWatermark($item);
            }
        }
    }

    /**
     * @param PictureWatermarkCodeType|null $value
     * @return void
     */
    public function addPictureWatermark($value)
    {
        $this->PictureWatermark[] = $this->_enum($value, PictureWatermarkCodeType::class);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getExtensionInDays()
    {
        return $this->_dc($this->ExtensionInDays, 'ExtensionInDays');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setExtensionInDays($value)
    {
        $this->ExtensionInDays = self::_int($value);
    }

    /**
     * @return UploadSiteHostedPicturesResponseType|EbatNs_ResponseError
     * @param EbatNs_Client
     **/
    function call($client)
    {
        return $client->call(self::REQUEST, $this);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'PictureName' => [],
            'PictureSystemVersion' => ['type' => 'int'],
            'PictureSet' => ['type' => 'PictureSetCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'PictureData' => ['type' => 'Base64BinaryType', 'xmlns' => self::XMLNS],
            'PictureUploadPolicy' => ['type' => 'PictureUploadPolicyCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'ExternalPictureURL' => ['cardinality' => '0..*'],
            'PictureWatermark' => ['type' => 'PictureWatermarkCodeType', 'enum' => true, 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'ExtensionInDays' => ['type' => 'int']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

UploadSiteHostedPicturesRequestType::_register();

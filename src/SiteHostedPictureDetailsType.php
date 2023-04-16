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
 * Type defining the
 * SiteHostedPictureDetails
 * container that is returned
 * in an
 * UploadSiteHostedPictures
 * call.
 **/
class SiteHostedPictureDetailsType extends EbatNs_ComplexType
{
    const TAG = 'SiteHostedPictureDetailsType';
    const NAME = 'SiteHostedPictureDetailsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $PictureName = null;

    /**
     * @var PictureSetCodeType|null
     */
    protected $PictureSet = null;

    /**
     * @var PictureFormatCodeType|null
     */
    protected $PictureFormat = null;

    /**
     * @var string|null
     */
    protected $FullURL = null;

    /**
     * @var string|null
     */
    protected $BaseURL = null;

    /**
     * @var PictureSetMemberType[]|null
     */
    protected $PictureSetMember = [];

    /**
     * @var string|null
     */
    protected $ExternalPictureURL = null;

    /**
     * @var string|null
     */
    protected $UseByDate = null;


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
     * @return PictureFormatCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPictureFormat()
    {
        return $this->_dc($this->PictureFormat);
    }

    /**
     * @param PictureFormatCodeType|null $value
     * @return void
     */
    public function setPictureFormat($value)
    {
        $this->PictureFormat = $this->_enum($value, PictureFormatCodeType::class);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getFullURL()
    {
        return $this->_dc($this->FullURL, 'FullURL');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setFullURL($value)
    {
        $this->FullURL = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBaseURL()
    {
        return $this->_dc($this->BaseURL, 'BaseURL');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setBaseURL($value)
    {
        $this->BaseURL = self::_string($value);
    }

    /**
     * @return PictureSetMemberType[]|PictureSetMemberType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getPictureSetMember($index = null)
    {
        return $this->_dc($index === null
            ? $this->PictureSetMember
            : (count($this->PictureSetMember) > $index
                ? $this->PictureSetMember[$index]
                : null), 'PictureSetMember');
    }

    /**
     * @param PictureSetMemberType|null|PictureSetMemberType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setPictureSetMember($value, $index = null)
    {
        if ($index === null) {
            $this->PictureSetMember = $value;
        } else {
            $this->PictureSetMember[$index] = [];
            
            foreach ($value as $item) {
                $this->addPictureSetMember($item);
            }
        }
    }

    /**
     * @param PictureSetMemberType|null $value
     * @return void
     */
    public function addPictureSetMember($value)
    {
        $this->PictureSetMember[] = $value;
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getExternalPictureURL()
    {
        return $this->_dc($this->ExternalPictureURL, 'ExternalPictureURL');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setExternalPictureURL($value)
    {
        $this->ExternalPictureURL = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getUseByDate()
    {
        return $this->_dc($this->UseByDate, 'UseByDate');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setUseByDate($value)
    {
        $this->UseByDate = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'PictureName' => [],
            'PictureSet' => ['type' => 'PictureSetCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'PictureFormat' => ['type' => 'PictureFormatCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'FullURL' => [],
            'BaseURL' => [],
            'PictureSetMember' => ['type' => 'PictureSetMemberType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'ExternalPictureURL' => [],
            'UseByDate' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

SiteHostedPictureDetailsType::_register();

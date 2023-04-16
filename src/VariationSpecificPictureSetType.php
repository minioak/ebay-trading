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
 * VariationSpecificPictureSet
 * container, which is
 * used to specify the URL(s) where the picture(s) of the variation specific will be
 * hosted. If the
 * Variations.Pictures
 * container is used, at least one
 * 
 * VariationSpecificPictureSet
 * container is required.
 **/
class VariationSpecificPictureSetType extends EbatNs_ComplexType
{
    const TAG = 'VariationSpecificPictureSetType';
    const NAME = 'VariationSpecificPictureSetType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $VariationSpecificValue = null;

    /**
     * @var string[]|null
     */
    protected $PictureURL = [];

    /**
     * @var string|null
     */
    protected $GalleryURL = null;

    /**
     * @var string[]|null
     */
    protected $ExternalPictureURL = [];

    /**
     * @var ExtendedPictureDetailsType|null
     */
    protected $ExtendedPictureDetails = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getVariationSpecificValue()
    {
        return $this->_dc($this->VariationSpecificValue, 'VariationSpecificValue');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setVariationSpecificValue($value)
    {
        $this->VariationSpecificValue = self::_string($value);
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
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getGalleryURL()
    {
        return $this->_dc($this->GalleryURL, 'GalleryURL');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setGalleryURL($value)
    {
        $this->GalleryURL = self::_string($value);
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
            'VariationSpecificValue' => [],
            'PictureURL' => ['cardinality' => '0..*'],
            'GalleryURL' => [],
            'ExternalPictureURL' => ['cardinality' => '0..*'],
            'ExtendedPictureDetails' => ['type' => 'ExtendedPictureDetailsType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

VariationSpecificPictureSetType::_register();

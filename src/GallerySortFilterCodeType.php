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
 * This enumerated type is deprecated.
 **/
class GallerySortFilterCodeType extends EbatNs_EnumType
{
    const TAG = 'GallerySortFilterCodeType';
    const NAME = 'GallerySortFilterCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This value is not used.
     **/
    const CodeType_ShowAnyItems = 'ShowAnyItems';

    /**
     * This value is not used.
     **/
    const CodeType_ShowItemsWithGalleryImagesFirst = 'ShowItemsWithGalleryImagesFirst';

    /**
     * This value is not used.
     **/
    const CodeType_ShowOnlyItemsWithGalleryImages = 'ShowOnlyItemsWithGalleryImages';

    /**
     * This value is not used.
     **/
    const CodeType_CustomCode = 'CustomCode';
    
    /**
     * @var string|null
     */
    protected $_value = null;


    /**
     * @param string|null $value
     */
    public function __construct($value = null)
    {
        $this->setTypeValue($value);
    }

    /**
     * @return GallerySortFilterCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param GallerySortFilterCodeType|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $const = 'self::CodeType_' . $value;
        $this->_value = $value !== null && defined($const) ? constant($const) : null;
    }

    /**
     * @return bool
     */
    public function isShowAnyItems()
    {
        return $this->_value === self::CodeType_ShowAnyItems;
    }

    /**
     * @return bool
     */
    public function isShowItemsWithGalleryImagesFirst()
    {
        return $this->_value === self::CodeType_ShowItemsWithGalleryImagesFirst;
    }

    /**
     * @return bool
     */
    public function isShowOnlyItemsWithGalleryImages()
    {
        return $this->_value === self::CodeType_ShowOnlyItemsWithGalleryImages;
    }

    /**
     * @return bool
     */
    public function isCustomCode()
    {
        return $this->_value === self::CodeType_CustomCode;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([], parent::NAME);
        self::assignAttributes([]);
    }

}

GallerySortFilterCodeType::_register();

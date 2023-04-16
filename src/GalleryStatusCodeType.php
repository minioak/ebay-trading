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
 * Enumeration type that returns the status of the gallery image generation. That status returns either a value of
 * 'Success' or a value that indicates why the gallery image has not been generated.
 **/
class GalleryStatusCodeType extends EbatNs_EnumType
{
    const TAG = 'GalleryStatusCodeType';
    const NAME = 'GalleryStatusCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * The Gallery image was successfully generated.
     **/
    const CodeType_Success = 'Success';

    /**
     * The Gallery image has not yet been generated.
     **/
    const CodeType_Pending = 'Pending';

    /**
     * The URL for the image file is not valid.
     **/
    const CodeType_InvalidUrl = 'InvalidUrl';

    /**
     * The URL does not start with <code>http:// </code> or <code>https:// </code>.
     **/
    const CodeType_InvalidProtocol = 'InvalidProtocol';

    /**
     * There is a problem with the image file.
     **/
    const CodeType_InvalidFile = 'InvalidFile';

    /**
     * The server containing the image file was unavailable.
     **/
    const CodeType_ServerDown = 'ServerDown';

    /**
     * The image file could not be found.
     **/
    const CodeType_ImageNonExistent = 'ImageNonExistent';

    /**
     * The image file failed to transfer.
     **/
    const CodeType_ImageReadTimeOut = 'ImageReadTimeOut';

    /**
     * The image file is not in JPG, BMP, GIF, TIF, or PNG format.
     **/
    const CodeType_InvalidFileFormat = 'InvalidFileFormat';

    /**
     * We were not able to process the image file.
     **/
    const CodeType_ImageProcessingError = 'ImageProcessingError';

    /**
     * Reserved for internal
     * only
     * .
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
     * @return GalleryStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param GalleryStatusCodeType|null $value
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
    public function isSuccess()
    {
        return $this->_value === self::CodeType_Success;
    }

    /**
     * @return bool
     */
    public function isPending()
    {
        return $this->_value === self::CodeType_Pending;
    }

    /**
     * @return bool
     */
    public function isInvalidUrl()
    {
        return $this->_value === self::CodeType_InvalidUrl;
    }

    /**
     * @return bool
     */
    public function isInvalidProtocol()
    {
        return $this->_value === self::CodeType_InvalidProtocol;
    }

    /**
     * @return bool
     */
    public function isInvalidFile()
    {
        return $this->_value === self::CodeType_InvalidFile;
    }

    /**
     * @return bool
     */
    public function isServerDown()
    {
        return $this->_value === self::CodeType_ServerDown;
    }

    /**
     * @return bool
     */
    public function isImageNonExistent()
    {
        return $this->_value === self::CodeType_ImageNonExistent;
    }

    /**
     * @return bool
     */
    public function isImageReadTimeOut()
    {
        return $this->_value === self::CodeType_ImageReadTimeOut;
    }

    /**
     * @return bool
     */
    public function isInvalidFileFormat()
    {
        return $this->_value === self::CodeType_InvalidFileFormat;
    }

    /**
     * @return bool
     */
    public function isImageProcessingError()
    {
        return $this->_value === self::CodeType_ImageProcessingError;
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

GalleryStatusCodeType::_register();

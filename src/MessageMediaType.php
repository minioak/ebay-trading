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
 * Container for the image file that is to be sent in a message, which lets sellers share photos in messages using
 * the API.
 * The photo must be uploaded by the seller or buyer to
 * <a href="https://developer.ebay.com/devzone/xml/docs/reference/ebay/uploadsitehostedpictures.html">EPS (eBay
 * Picture Services)</a>
 * using a separate API call or the web flow. After the image is on the eBay server, you can
 * use
 * AddMemberMessage
 * calls to pass the URL of the image in a message. The
 * uploaded images will be available as part of the email as a thumbnail image.
 * Clicking on the thumbnail, opens a larger version of the image in a filmstrip.
 * The image name will be displayed on the title of the filmstrip component.
 * These uploaded images will also be returned as
 * MessageMediaType
 * arrays in the
 * 
 * GetMemberMessages
 * and
 * GetMyMessages
 * API response. It doesn't matter if an image was uploaded using the web flow or using the API, it can be accessed
 * using either the web flow or the API and web.
 **/
class MessageMediaType extends EbatNs_ComplexType
{
    const TAG = 'MessageMediaType';
    const NAME = 'MessageMediaType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $MediaURL = null;

    /**
     * @var string|null
     */
    protected $MediaName = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMediaURL()
    {
        return $this->_dc($this->MediaURL, 'MediaURL');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setMediaURL($value)
    {
        $this->MediaURL = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMediaName()
    {
        return $this->_dc($this->MediaName, 'MediaName');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setMediaName($value)
    {
        $this->MediaName = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'MediaURL' => [],
            'MediaName' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

MessageMediaType::_register();
